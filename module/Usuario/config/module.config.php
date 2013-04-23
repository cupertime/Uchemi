<?php

/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */
return array(
    'controllers' => array(
        'invokables' => array(
            'Usuario\Controller\Usuario' => 'Usuario\Controller\UsuarioController',
        ),
    ),
    'router' => array(
        'routes' => array(
            'usuario' => array(
                'type' => 'Segment', /* Zend\Mvc\Router\Http\Literal */
                'options' => array(
                    'route' => '/usuario[/[:action]]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                    ),
                    'defaults' => array(
                        'controller' => 'Usuario\Controller\Usuario',
                        'action' => 'index',
                    ),
                ),
            ),
        ),
    ),
    'view_manager' => array(
        /*'display_not_found_reason' => true,
        'display_exceptions' => true,
        'doctype' => 'HTML5',
        'not_found_template' => 'error/404',
        'exception_template' => 'error/index',
        'template_map' => array(
            'usuario/index/index' => __DIR__ . '/../view/usuario/index/index.phtml',
            'layout/layout' => __DIR__ . '/../view/layout/layout.phtml',
            'error/index' => __DIR__ . '/../view/error/index.phtml',
            'error/404' => __DIR__ . '/../view/error/404.phtml',
        ),*/
        'template_path_stack' => array(
            'usuario' => __DIR__ . '/../view',
        ),
    ),
);
