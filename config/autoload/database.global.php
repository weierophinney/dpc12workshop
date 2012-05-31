<?php
return array(
    'db_config' => array(
        'driver'    => 'pdo',
        'dsn'       => 'sqlite:' . getcwd() . '/data/application.db',
        'database'  => '',
        'username'  => '',
        'password'  => '',
        'hostname'  => '',
    ),

    'service_manager' => array(
        'factories' => array(
            'Zend\Db\Adapter\Adapter' => function ($services) {
                $config = $services->get('config');
                $config = $config['db_config'];
                return new Zend\Db\Adapter\Adapter(array(
                    'driver'    => $config['driver'],
                    'dsn'       => $config['dsn'],
                    'database'  => $config['database'],
                    'username'  => $config['username'],
                    'password'  => $config['password'],
                    'hostname'  => $config['hostname'],
                ));
            },
        ),
    ),
);
