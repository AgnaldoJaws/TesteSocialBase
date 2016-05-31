<?php

namespace SONRest\Controller;

use Zend\Mvc\Controller\AbstractRestfulController;
use Zend\View\Model\JsonModel;

class DataDeNascimentoController extends AbstractRestfulController
{

    /*
    {        
        "nome":"Categoria"           
    }
    */
    // get
    public function getList()
    {
         //Fazemos a chamada  do serviço Doctrine
        $em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
         //Recebemos os dados da entidade
        $data = $em->getRepository('Application\Entity\Categoria')->findAll();

        return $data;
    }

    // get
    public function get($id)
    {

        $em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');

        $data = $em->getRepository('Application\Entity\Categoria')->find($id);

        return $data;
    }

    // post
    public function create($data)
    {


$serviceCategoria = $this->getServiceLocator()->get('Application\Service\Categoria');


    $nome = $data['data_valor'];

        $categoria = $serviceCategoria->insert($nome);

        if($categoria) {           
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

    // put
    public function update($id, $data)
    {
        $serviceCategoria = $this->getServiceLocator()->get('Application\Service\Categoria');
        $param['id'] = $id;
        $param['nome'] = $data['nome'];

        $categoria = $serviceCategoria->update($param);
        if($categoria) {
            return $categoria;
        } else {
            return array('success'=>false);
        }
    }

    // delete
    public function delete($id)
    {
        $serviceCategoria = $this->getServiceLocator()->get('Application\Service\Categoria');
        $result = $serviceCategoria->delete($id);
        if($result) return $result;
    }

} 