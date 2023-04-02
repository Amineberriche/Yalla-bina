<?php

namespace App\Repository;

use App\Entity\Traget;
use App\Entity\PropertySearch;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Traget|null find($id, $lockMode = null, $lockVersion = null)
 * @method Traget|null findOneBy(array $criteria, array $orderBy = null)
 * @method Traget[]    findAll()
 * @method Traget[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TragetRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Traget::class);
    }

     /**
      * @return Query
      */
    
    public function findAllVisibleQuery(PropertySearch $search)
    {
        $query =  $this->findVisibleQuery();
        if($search->getDepart()){
            $query = $query
            ->where('depart = :depart')
            ->setParameter('depart', $search->getDepart());
        }

        if($search->getArrivee()){
            $query = $query
            ->where('arrivee = :arrivee')
            ->setParameter('arrivee', $search->getArrivee());
        }
            
       return $query->getQuery();
    }
    

    /**
      * @return Property[]
      */
    public function findLatest(): array
    {
        return $this->findVisibleQuery()
            ->setMaxResult(4)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    public function countCodeMarche()
{
    return $this->createQueryBuilder('d')
        ->select('count(d.depart) as count')
        ->where('d.depart = :depart')
        ->getQuery()
        ->getSingleScalarResult();
}
    
}
