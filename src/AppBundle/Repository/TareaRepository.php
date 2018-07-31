<?php
// src/AppBundle/Repository/TareaRepository.php
namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class ProductRepository extends EntityRepository
{
    public function findAllOrderedBydescripcion()
    { 
    	$entityManager=$this ->getEntityManager();

       $query = $entityManager->createQuery('SELECT t FROM AppBundle:Tarea t ORDER BY t.descripcion ASC');
            return $query->getResult();
    }
}