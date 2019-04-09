<?php return [
  'db' => 
  [
    'host' => 'localhost',
    'port' => '3306',
    'username' => 'root',
    'password' => '',
    'dbname' => 'bootcamp',
  ],
    'front' => [
        'throwExceptions' => true,
        'showException' => true
    ],

    'phpsettings' => [
        'display_errors' => 1
    ],

    'template' => [
        'forceCompile' => true
    ],

    'csrfProtection' => [
        'frontend' => true,
        'backend' => true
    ],

    'httpcache' => [
        'debug' => true
    ]
];