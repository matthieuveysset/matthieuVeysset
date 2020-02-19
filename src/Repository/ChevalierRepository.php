<?php

namespace App\Repository;

use App\Entity\Chevalier;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Chevalier|null find($id, $lockMode = null, $lockVersion = null)
 * @method Chevalier|null findOneBy(array $criteria, array $orderBy = null)
 * @method Chevalier[]    findAll()
 * @method Chevalier[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ChevalierRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Chevalier::class);
    }

    // /**
    //  * @return Chevalier[] Returns an array of Chevalier objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Chevalier
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
