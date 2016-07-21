<?php

return [
    'doctrine' => [
        'connection' => [
            'orm_default' => [
                'driverClass' => 'Doctrine\DBAL\Driver\PDOMySql\Driver',
                'params' => [
                    'host' 		=> 'localhost',
                    'port'      => '3306',
                    'user' 		=> 'root',
                    'password' 	=> 'root',
                    'dbname' 	=> 'auladoctrine',
                    'driverOptions'   => [
                        \PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"
                    ]
                ]
            ]
        ],

        'driver' => [
            'App_driver' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\YamlDriver',
                'cache' => 'array',
                'paths' => [__DIR__ . '../../src/App/Infrastructure/Persistence/Doctrine/ORM']
            ),

            'orm_default' => [
                'drivers' => [
                    'App\Domain\Entity' => 'App_driver'
                ]
            ]
        ]
    ]
];



