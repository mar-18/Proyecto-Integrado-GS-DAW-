<?php

namespace App\Repository;

use App\Entity\Evento;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Evento|null find($id, $lockMode = null, $lockVersion = null)
 * @method Evento|null findOneBy(array $criteria, array $orderBy = null)
 * @method Evento[]    findAll()
 * @method Evento[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EventoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Evento::class);
    }
    /**
     * Muestra los eventos con campos elegidos
     *
     * @return void
     */
    public function mostrarEventos()
    {
        /**
         * Muestra todos la fecha de eventos,hora y el nombre de los salones
         */
        $em = $this->getEntityManager();
        $consulta = $em->createQuery(
            //obligatorio siempre ponerle un alias, hemos puesto como alias el mismo nombre q la clase
            'SELECT 
                evento.tipo, evento.fecha, evento.hora, salon.nombresalon, salon.capacidad
            FROM App:Evento evento
            INNER JOIN evento.salonIdsalon salon
           '
            /*salonIdsalon es el campo de union por lo tanto solo inner join */
        )->getResult();
        return $consulta;
    }
    /**
     * Funcion de buscar eventos por fecha
     *
     * @param [type] $fecha
     * @return void
     */
    public function buscarFecha($fecha, $salon)
    {
        /**
         * Muestra todos la fecha de eventos y nombre del salon
         */
        $em = $this->getEntityManager();

        $consulta = $em->createQuery(
            //obligatorio siempre ponerle un alias, hemos puesto como alias el mismo nombre q la clase
            'SELECT 
                evento.tipo, evento.fecha, evento.hora, salon.nombresalon, salon.capacidad
            FROM App:Evento evento
            LEFT JOIN evento.salonIdsalon salon
            WHERE evento.fecha LIKE :fecha AND 
                  salon.nombresalon LIKE :salon 
           '
            /*salonIdsalon es el campo de union por lo tanto solo inner join */
        )
            ->setParameter('fecha', '%' . $fecha . '%')/*campo que paso  */
            ->setParameter('salon', '%' . $salon . '%')
            ->getResult();
        return $consulta;
    }
    public function buscarCapacidadSalon($capacidad)
    {
        /**
         * Muestra todos la fecha de eventos y nombre del salon
         */
        $em = $this->getEntityManager();
        $consulta2 = $em->createQueryBuilder();
        /*         $consulta2->select('evento')->from('Evento','evento')
        ->innerJoin('salonIdsalon','idsalon')
        ->where() */

        $consulta = $em->createQuery(
            //obligatorio siempre ponerle un alias, hemos puesto como alias el mismo nombre q la clase
            'SELECT 
                evento.tipo, evento.fecha, evento.hora, salon.nombresalon, salon.capacidad
            FROM App:Evento evento
            LEFT JOIN evento.salonIdsalon salon
            WHERE salon.capacidad > :capacidad 
           '
            /*salonIdsalon es el campo de union por lo tanto solo inner join */
        )
            ->setParameter('capacidad', '%' . $capacidad . '%')/*campo que paso  */
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
