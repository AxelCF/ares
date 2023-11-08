<?php

namespace App\Repository;

use App\Entity\Liaison;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Liaison>
 *
 * @method Liaison|null find($id, $lockMode = null, $lockVersion = null)
 * @method Liaison|null findOneBy(array $criteria, array $orderBy = null)
 * @method Liaison[]    findAll()
 * @method Liaison[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LiaisonRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Liaison::class);
    }

    //    /**
    //     * @return Liaison[] Returns an array of Liaison objects
    //     */
    public function findAllLiaisonsSortedByName()
    {
        return $this->createQueryBuilder('l')
            ->leftJoin('l.professor', 'p') // Assurez-vous que "professor" est le nom de la relation dans votre entité Liaison
            ->orderBy('p.name', 'ASC')
            ->getQuery()
            ->getResult();
    }


    //    public function findOneBySomeField($value): ?Liaison
    //    {
    //        return $this->createQueryBuilder('l')
    //            ->andWhere('l.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
