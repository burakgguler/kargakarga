<?php

namespace App\Repository;

use App\Entity\PostContentType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PostContentType|null find($id, $lockMode = null, $lockVersion = null)
 * @method PostContentType|null findOneBy(array $criteria, array $orderBy = null)
 * @method PostContentType[]    findAll()
 * @method PostContentType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PostContentTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PostContentType::class);
    }

    // /**
    //  * @return PostContentType[] Returns an array of PostContentType objects
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
    public function findOneBySomeField($value): ?PostContentType
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
