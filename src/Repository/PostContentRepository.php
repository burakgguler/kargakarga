<?php

namespace App\Repository;

use App\Entity\PostContent;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PostContent|null find($id, $lockMode = null, $lockVersion = null)
 * @method PostContent|null findOneBy(array $criteria, array $orderBy = null)
 * @method PostContent[]    findAll()
 * @method PostContent[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PostContentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PostContent::class);
    }

    // /**
    //  * @return PostContent[] Returns an array of PostContent objects
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
    public function findOneBySomeField($value): ?PostContent
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    public function findContentPreview($postId)
    {
        return $this->createQueryBuilder('pc')
            ->select('pc.nameTr')
            ->where('pc.postId = :postId')
            ->setParameter('postId', $postId)
            ->andWhere('pc.contentTypeId = 1')
            ->orderBy('pc.order')
            ->setMaxResults(1)
            ->getQuery()
            ->getSingleResult();
    }
}
