<?php

namespace SONRest\Controller;

use Zend\Mvc\Controller\AbstractRestfulController;
use Zend\View\Model\JsonModel;

class DataDeNascimentoController extends AbstractRestfulController
{

    /*
    {        
        "data_valor":"1993-02-17"           
    }
    */

     // post
    public function create($data)    
    {
    //Instanciamos o Serviço de categoria
    $serviceCategoria = $this->getServiceLocator()->get('Application\Service\Categoria');
    //Pegamos o valor passado pela rota
    $nome = $data['data_valor'];
    //Fazemos a inserção do objeto
    $categoria = $serviceCategoria->insert($nome);

        //Se a inserção for verdadeira
        if($categoria) {
        //Pegamos o resultado do calculo e convertemos em um array de jason           
           return new JsonModel (
                        array('idade'   =>   $categoria->y,
                        'anos'          =>   $categoria->y,
                        'meses'         =>   $categoria->y*12,
                        'dias'          =>   $categoria->y*365));
        } 
        else 
        {
            return array('success'=>false);
        }
    }

    // get
    public function getList()
    {
        
    }

    // get
    public function get($id)
    {

    }

   

    // put
    public function update($id, $data)
    {
        
    }

    // delete
    public function delete($id)
    {
        
    }

} 