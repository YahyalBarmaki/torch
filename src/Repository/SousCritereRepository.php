<?php

namespace App\Repository;

use App\Entity\SousCritere;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method SousCritere|null find($id, $lockMode = null, $lockVersion = null)
 * @method SousCritere|null findOneBy(array $criteria, array $orderBy = null)
 * @method SousCritere[]    findAll()
 * @method SousCritere[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SousCritereRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SousCritere::class);
    }

    // /**
    //  * @return SousCritere[] Returns an array of SousCritere objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SousCritere
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
