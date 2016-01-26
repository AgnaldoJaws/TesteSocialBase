<?php

namespace SBRest\Controller;

use Zend\Mvc\Controller\AbstractRestfulController;
use Zend\View\Model\JsonModel;
class PostController extends AbstractRestfulController
{

    // get
    public function getList()
    {
        $em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');

        $data = $em->getRepository('Application\Entity\Post')->findAll();

        return $data;

    }

    
    // post
    public function create($data)
    {
        $servicePost = $this->getServiceLocator()->get('Application\Service\Post');
        $mensagem= $data['mensagem'];

        $mensagem = $servicePost->insert($mensagem);
        if($mensagem) {
            return $mensagem;
        } else {
            return array('success'=>false);
        }

    }

    
} 