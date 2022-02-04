<?php

namespace App\Repository;

use App\Entity\Consultant;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Consultant|null find($id, $lockMode = null, $lockVersion = null)
 * @method Consultant|null findOneBy(array $criteria, array $orderBy = null)
 * @method Consultant[]    findAll()
 * @method Consultant[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ConsultantRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Consultant::class);
    }

    // /**
    //  * @return Consultant[] Returns an array of Consultant objects
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
    public function findOneBySomeField($value): ?Consultant
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
