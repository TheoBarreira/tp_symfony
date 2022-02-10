<?php

namespace App\Repository;

use App\Entity\NomDeLEntite;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method NomDeLEntite|null find($id, $lockMode = null, $lockVersion = null)
 * @method NomDeLEntite|null findOneBy(array $criteria, array $orderBy = null)
 * @method NomDeLEntite[]    findAll()
 * @method NomDeLEntite[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NomDeLEntiteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NomDeLEntite::class);
    }

    // /**
    //  * @return NomDeLEntite[] Returns an array of NomDeLEntite objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?NomDeLEntite
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
