<?php

namespace App\Repository;

use App\Entity\PostLike;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PostLike|null find($id, $lockMode = null, $lockVersion = null)
 * @method PostLike|null findOneBy(array $criteria, array $orderBy = null)
 * @method PostLike[]    findAll()
 * @method PostLike[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PostLikeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PostLike::class);
    }

    // /**
    //  * @return PostLike[] Returns an array of PostLike objects
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
    public function findOneBySomeField($value): ?PostLike
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    public function findLikeCount($postId)
    {
        return $this->createQueryBuilder('pl')
            ->select('count(pl.id)')
            ->where('pl.postId = :postId')
            ->setParameter('postId', $postId)
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function findLastThreeLikes($postId)
    {
        return $this->createQueryBuilder('pl')
            ->addSelect('u.name, u.title, u.image')
            ->leftJoin('App\Entity\Users', 'u', 'WITH', 'u.userId = pl.userId')
            ->where('pl.postId = :postId')
            ->setParameter('postId', $postId)
            ->orderBy('pl.createdAt', 'DESC')
            ->setMaxResults(3)
            ->getQuery()
            ->getResult();
    }
}
