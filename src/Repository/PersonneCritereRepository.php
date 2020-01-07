<?php

namespace App\Repository;

use App\Entity\PersonneCritere;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method PersonneCritere|null find($id, $lockMode = null, $lockVersion = null)
 * @method PersonneCritere|null findOneBy(array $criteria, array $orderBy = null)
 * @method PersonneCritere[]    findAll()
 * @method PersonneCritere[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PersonneCritereRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PersonneCritere::class);
    }

    // /**
    //  * @return PersonneCritere[] Returns an array of PersonneCritere objects
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
    public function findOneBySomeField($value): ?PersonneCritere
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
