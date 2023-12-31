<?php

namespace App\Repository;

use App\Entity\Reclam;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Reclam|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reclam|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reclam[]    findAll()
 * @method Reclam[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReclamRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reclam::class);
    }

    // /**
    //  * @return Reclam[] Returns an array of Reclam objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Reclam
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
