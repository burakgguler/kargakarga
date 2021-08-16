<?php

namespace App\Service;

use App\Entity\Bookmark;
use App\Entity\Post;
use App\Entity\PostContent;
use App\Entity\PostLike;
use App\Entity\PostSource;
use App\Entity\Users;
use App\Repository\PostContentRepository;
use App\Repository\PostLikeRepository;
use App\Repository\PostRepository;
use App\Repository\UsersRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;

class PostService
{
    /** @var EntityManager */
    private $em;

    /**
     * @param EntityManagerInterface $em
     */
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function getPostIds($userId, $page)
    {
        return $this->em->getRepository(Post::class)->findPostIdsByLoggedUser($userId, $page);
    }

    public function getPostParameters($postId, $userId)
    {
        $responseParams = [];
        $postParams = [];
        $userParams = [];
        $lastThreeLikes = null;

        $postParams[] = $this->em->getRepository(Post::class)->findBy(['id' => $postId], ['createdAt' => 'DESC']);
        $userParams[] = $this->em->getRepository(Users::class)->findUserByPostId($postId);
        $contentPreview = $this->em->getRepository(PostContent::class)->findContentPreview($postId);
        $contentPreview = substr($contentPreview['nameTr'], 0, 250);
        $likeCheck = $this->em->getRepository(PostLike::class)->findBy(['postId' => $postId, 'userId' => $userId]);
        $isLike = !empty($likeCheck);
        $bookmarkCheck = $this->em->getRepository(Bookmark::class)->findBy(['postId' => $postId, 'userId' => $userId]);
        $isBookmark = !empty($bookmarkCheck);
        $likeCount = $this->em->getRepository(PostLike::class)->findLikeCount($postId);
        $source = $this->em->getRepository(PostSource::class)->findBy(['postId' => $postId]);
        $source = empty($source) ? null : $source[0]->getName();

        $contents = $this->em->getRepository(PostContent::class)->findBy(['postId' => $postId], ['order' => 'ASC']);

        if ($likeCount > 0) {
            $lastThreeLikes = $this->em->getRepository(PostLike::class)->findLastThreeLikes($postId);
        }


        $responseParams['post'] = $postParams;
        $responseParams['user'] = $userParams;
        $responseParams['text'] = $contentPreview;
        $responseParams['isLike'] = $isLike;
        $responseParams['isBookmark'] = $isBookmark;
        $responseParams['likeCount'] = $likeCount;
        $responseParams['source'] = $source;
        $responseParams['contents'] = $contents;
        $responseParams['threeLikes'] = $lastThreeLikes;

        return $responseParams;
    }
}