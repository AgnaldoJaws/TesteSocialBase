<?php

return array(
    
    //Definimos uma rota do tipo segment, onde o roteamento é feito
    //de forma dinamica
    'router' => array(
        'routes' => array(
            //Tota da API principal
            'rest' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/api/:controller[/:id[/]]',
                    'constraints' => array(
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'         => '[a-zA-Z0-9_-]*'
                    )
                )
            ),
            //Rota para calculo Data
            'nascimento' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/nascimento/:controller[/:id[/]]',
                    'constraints' => array(
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'         => '[a-zA-Z0-9_-]*'
                    )
                )
            )
        )
    ),

    //Definimos os controllers que serão invocados pelas rotas
    'controllers' => array(
        'invokables' => array(
            //Post Controller
            'post' => 'SONRest\Controller\PostController',
            //Categoria Controller
            'categoria' => 'SONRest\Controller\CategoriaController',
            // datadenascimento Controller
            'datadenascimento' => 'SONRest\Controller\CategoriaController'   
                
        )
    ),

    'view_manager' => array(
        'strategies' => array(
            'ViewJsonStrategy'
        )
    ),

    'doctrine' => array(
        'driver' => array(
            __NAMESPACE__.'_driver' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'cache' => 'array',
                'paths' => array(__DIR__.'/../src/'.__NAMESPACE__.'/Entity')
            ),
            'orm_default' => array(
                'drivers' => array(
                    __NAMESPACE__.'\Entity' => __NAMESPACE__.'_driver'
                )
            )
        ),
    ),
);