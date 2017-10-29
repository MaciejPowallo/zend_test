<?php
return [
    'controllers' => [
        'invokables' => [
            'Product\Controller\Product' => 'Product\Controller\ProductController'
        ],
    ],
    'router' => [
        'routes' => [
            'product' => [
                'type' => 'segment',
                'options' => [
                    'route' => '/product[/][:action][/:id]',
                    'constraints' => [
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id' => '[0-9]+'
                    ],
                    'defaults' => [
                        'controller' => 'Product\Controller\Product',
                        'action' => 'index'
                    ],
                ],
            ],
        ],
    ],

    'view_manager' => [
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_path_stack' => [
            'product' => __DIR__ . '/../view',
        ],
    ],
];
