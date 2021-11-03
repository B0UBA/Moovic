<?php

namespace App\Repository;

use App\Entity\UserLikeMedia;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method UserLikeMedia|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserLikeMedia|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserLikeMedia[]    findAll()
 * @method UserLikeMedia[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserLikeMediaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserLikeMedia::class);
    }

    // /**
    //  * @return UserLikeMedia[] Returns an array of UserLikeMedia objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UserLikeMedia
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
