<?php

namespace App\Manager;

use App\Entity\Post;
use App\Repository\UsersRepository;
use App\Response\ContentResponse;
use App\Response\PostResponse;
use App\Response\ThreeLikesResponse;

class PostResponseManager
{
    /** @var UsersRepository */
    private $usersRepository;

    /**
     * @param UsersRepository $usersRepository
     */
    public function __construct(UsersRepository $usersRepository)
    {
        $this->usersRepository = $usersRepository;
    }

    public function buildPostResponse(array $params): PostResponse
    {
        $threeLikes = $params['likeCount'] > 0 ? $this->buildThreeLikesResponse($params['threeLikes']) : null;

        return (new PostResponse())
            ->setId($params['post'][0][0]->getId())
            ->setCover($params['post'][0][0]->getCover())
            ->setThumbnail($params['post'][0][0]->getThumbnail())
            ->setCreatedAt($params['post'][0][0]->getCreatedAt()->format('Y-m-d H:i:s'))
            ->setUserId($params['user'][0][0]->getUserId())
            ->setName($params['user'][0][0]->getName())
            ->setTitle($params['user'][0][0]->getTitle())
            ->setImage($params['user'][0][0]->getImage())
            ->setText($params['text'])
            ->setIsLike($params['isLike'])
            ->setIsBookmark($params['isBookmark'])
            ->setLikeCount($params['likeCount'])
            ->setSource($params['source'])
            ->setContent($this->buildContentResponse($params['contents']))
            ->setThreeLikes($threeLikes);
    }

    public function buildContentResponse(array $contents): array
    {
        $response = [];

        foreach ($contents as $content) {
            $response[] = (new ContentResponse())
                ->setId($content->getId())
                ->setName($content->getNameTr())
                ->setContentType($content->getContentTypeId())
                ->setOrder($content->getOrder())
                ->setUrl($content->getUrl())
                ->setWidth($content->getWidth())
                ->setHeight($content->getHeight());
        }

        return $response;
    }

    public function buildThreeLikesResponse(array $likes): array
    {
        $response = [];

        foreach ($likes as $like) {
            $response[] = (new ThreeLikesResponse())
                ->setId($like[0]->getId())
                ->setUserId($like[0]->getUserId())
                ->setName($like['name'])
                ->setTitle($like['title'])
                ->setImage($like['image'])
                ->setCreatedAt($like[0]->getCreatedAt()->format('Y-m-d H:i:s'));
        }

        return $response;
    }
}