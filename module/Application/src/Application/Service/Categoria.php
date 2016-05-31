<?php

namespace Application\Service;

use Doctrine\ORM\EntityManager;
use Application\Entity\Categoria as CategoriaEntity;

class Categoria
{

    private $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function insert($nome)
    {
        //Instanciamos a entidade
        $categoriaEntity = new CategoriaEntity;
        //setamos os valores a serem persistidos
        $categoriaEntity->setDataValor($nome);
        //Execultamos a persistencia dos dados
        $this->em->persist($categoriaEntity);

        /*Tendei transformar esse trecho em uma função
        mas tive alguns probleminhas e como estou meio sem 
        tempo vou deixar assim mesmo*/

         //Pegamos a data de aniversário
        $atual = $categoriaEntity->getDataValor($nome);
        $data1 = new \DateTime($atual);
        
        //Pegamos a data atual
        $now = new \DateTime('NOW');
               
        //Com o metodo diff retornamos a diferença entre duas datas distintas
        $intervalo = $data1->diff( $now );

        //Retornamos o resultado do calculo
        return $intervalo;
    }    

} 