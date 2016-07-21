<?php

return [
    'dependencies' => [
        'invokables' => [
            Zend\Expressive\Router\RouterInterface::class => Zend\Expressive\Router\AuraRouter::class,
            App\Application\Action\PingAction::class => App\Application\Action\PingAction::class,
        ],
        'factories' => [
            App\Application\Action\HomePageAction::class => App\Application\Action\HomePageFactory::class,
            App\Application\Action\ContatoPageAction::class => App\Application\Action\ContatoPageFactory::class,
        ],
    ],

    'routes' => [
        [
            'name' => 'home',
            'path' => '/',
            'middleware' => App\Application\Action\HomePageAction::class,
            'allowed_methods' => ['GET'],
        ],
        [
            'name' => 'api.ping',
            'path' => '/api/ping',
            'middleware' => App\Application\Action\PingAction::class,
            'allowed_methods' => ['GET'],
        ],
        [
            'name' => 'contato',
            'path' => '/contato',
            'middleware' => App\Application\Action\ContatoPageAction::class,
            'allowed_methods' => ['GET'],
        ],
    ],
];

