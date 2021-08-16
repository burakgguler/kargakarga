<?php

namespace App\Service;

use App\Repository\UsersRepository;

class UsersService
{
    /** @var UsersRepository  */
    private $usersRepository;

    /**
     * @param UsersRepository $usersRepository
     */
    public function __construct(UsersRepository $usersRepository)
    {
        $this->usersRepository = $usersRepository;
    }


    public function getUser($userId)
    {
        $user = $this->usersRepository->findOneBy(['userId' => $userId]);

        if (!$user) {
            return false;
        }

        return $user;
    }
}