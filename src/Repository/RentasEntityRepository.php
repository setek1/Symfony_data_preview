<?php

namespace App\Repository;

use App\Entity\RentasEntity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<RentasEntity>
 *
 * @method RentasEntity|null find($id, $lockMode = null, $lockVersion = null)
 * @method RentasEntity|null findOneBy(array $criteria, array $orderBy = null)
 * @method RentasEntity[]    findAll()
 * @method RentasEntity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RentasEntityRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RentasEntity::class);
    }

//    /**
//     * @return RentasEntity[] Returns an array of RentasEntity objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('r.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?RentasEntity
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
