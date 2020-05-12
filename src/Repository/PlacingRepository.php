<?php

namespace App\Repository;

use App\Entity\Placing;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Placing|null find($id, $lockMode = null, $lockVersion = null)
 * @method Placing|null findOneBy(array $criteria, array $orderBy = null)
 * @method Placing[]    findAll()
 * @method Placing[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PlacingRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Placing::class);
    }

    // /**
    //  * @return Placing[] Returns an array of Placing objects
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
    public function findOneBySomeField($value): ?Placing
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
