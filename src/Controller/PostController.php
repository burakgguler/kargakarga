<?php

namespace App\Controller;



use App\Manager\PostResponseManager;
use App\Service\PostService;
use App\Service\UsersService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends AbstractController
{
    /** @var UsersService */
    private $usersService;

    /** @var PostService */
    private $postService;

    /** @var PostResponseManager */
    private $postResponseManager;

    /**
     * @param UsersService $usersService
     * @param PostService $postService
     * @param PostResponseManager $postResponseManager
     */
    public function __construct(UsersService $usersService, PostService $postService, PostResponseManager $postResponseManager)
    {
        $this->usersService = $usersService;
        $this->postService = $postService;
        $this->postResponseManager = $postResponseManager;
    }

    /**
     * @Route("/KargaKarga/public/api/Post/List", methods={"GET"})
     * @param Request $request
     * @return JsonResponse
     */
    public function postList(Request $request): JsonResponse
    {
        $response = [];
        $userId = $request->get('user_id');
        $page = $request->get('page', 0);

        $user = $this->usersService->getUser($userId);
        if (!$user) {
            return new JsonResponse(['result' => 'User not found!'], 404);
        }

        $postIds = $this->postService->getPostIds($userId, $page);
        if (!$postIds) {
            return new JsonResponse(['result' => 'Post not found!'], 404);
        }

        foreach ($postIds as $id) {
            $params = $this->postService->getPostParameters($id['id'], $userId);
            $response[] = $this->postResponseManager->buildPostResponse($params);
        }

        return new JsonResponse([['result' => ['post' => $response]], ['result_message' => ['message' => 'İçerik listelendi!']]]);
    }
}