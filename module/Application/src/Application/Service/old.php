<?php

namespace Application\Service;

use Doctrine\ORM\EntityManager;
use Application\Entity\Categoria as DataValorEntity;

class DataValor
{

    private $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function insert($nome)
    {
         

        $categoriaEntity = new DataValorEntity;
        $categoriaEntity->setDataValor($nome);


        $this->em->persist($categoriaEntity);

         //Pegamos a data de aniversário
        $atual = $categoriaEntity->getDataValor($nome);
        $data1 = new \DateTime($atual);
        
        //Pegamos a data atual
        $now = new \DateTime('NOW');
               
        //Com o metodo diff retornamos a diferença entre duas datas distintas
        $intervalo = $data1->diff( $now );

        return $intervalo;

    }

    

} 