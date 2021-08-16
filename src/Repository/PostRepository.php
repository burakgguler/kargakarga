<?php

namespace App\Repository;

use App\Entity\Post;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Post|null find($id, $lockMode = null, $lockVersion = null)
 * @method Post|null findOneBy(array $criteria, array $orderBy = null)
 * @method Post[]    findAll()
 * @method Post[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PostRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Post::class);
    }

    // /**
    //  * @return Post[] Returns an array of Post objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Post
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    public function findPostById($postId)
    {
        return $this->createQueryBuilder('p')
            ->where('postId = :postId')
            ->setParameter('postId', $postId)
            ->getQuery()
            ->getArrayResult();
    }

    public function findPostIdsByLoggedUser($loggedUserId, $page)
    {
        return $this->createQueryBuilder('p')
            ->select('p.id')
            ->leftJoin('App\Entity\Follow', 'f', 'WITH', 'p.userId = f.follow')
            ->where('f.follower = :follower')
            ->setParameter('follower', $loggedUserId)
            ->orderBy('p.createdAt', 'DESC')
            ->setMaxResults($page*10 + 10)
            ->getQuery()
            ->getArrayResult();
    }
}
