<?php

namespace App\Repository;

use App\Entity\Salon;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Salon|null find($id, $lockMode = null, $lockVersion = null)
 * @method Salon|null findOneBy(array $criteria, array $orderBy = null)
 * @method Salon[]    findAll()
 * @method Salon[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SalonRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Salon::class);
    }
    /**
     * Muestra los salones con campos elegidos
     *
     * @return void
     */
    public function mostrarSalones()
    {
        /**
         * Muestra todos la fecha de salones,hora y el nombre de los salones
         */
        $em = $this->getEntityManager();
        $consulta = $em->createQuery(
            //obligatorio siempre ponerle un alias, hemos puesto como alias el mismo nombre q la clase
            'SELECT 
                salon.nombresalon, salon.capacidad, salon.foto
            FROM App:Salon salon
            
           '
            /*salonIdsalon es el campo de union por lo tanto solo inner join */
        )->getResult();
        return $consulta;
    }

    // /**
    //  * @return Salon[] Returns an array of Salon objects
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
    public function findOneBySomeField($value): ?Salon
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
