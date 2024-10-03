<?php

namespace App\Repository;

use App\Entity\Cliente;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Cliente|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cliente|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cliente[]    findAll()
 * @method Cliente[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClienteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Cliente::class);
    }

    /**
     * Funcion de buscar eventos por fecha
     *
     * 
     * @return void
     */
    public function buscarNombre($nombre)
    {
        /**
         * Muestra todos la fecha de eventos y nombre del salon
         */
        $em = $this->getEntityManager();

        $consulta = $em->createQuery(
            //obligatorio siempre ponerle un alias, hemos puesto como alias el mismo nombre q la clase
            'SELECT 
                cliente.nombre, cliente.apellido, cliente.email
            FROM App:Cliente cliente
            
            WHERE cliente.nombre LIKE :nombre  
           '
            /*salonIdsalon es el campo de union por lo tanto solo inner join */
        )
            ->setParameter('nombre', '%' . $nombre . '%')/*campo que paso  */

            ->getResult();
        return $consulta;
    }

    // /**
    //  * @return Evento[] Returns an array of Evento objects
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
    public function findOneBySomeField($value): ?Evento
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
