<?php

return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            //'dsn' => 'mysql:host=localhost;dbname=hasverdb',
			'dsn' => 'mysql:host=hasvar.com;dbname=hasvar',
            // 'dsn' => 'mysql:host=localhost;dbname=DB_NAME;unix_socket=/Applications/MAMP/tmp/mysql/mysql.sock', // OSX MAMP
            // 'dsn' => 'mysql:host=localhost;dbname=DB_NAME;/Applications/XAMPP/xamppfiles/var/mysql/mysql.sock', // OSX XAMPP
            //'username' => 'root',
            //'password' => '',
			'username' => 'hasvar',
            'password' => 'knock.knock',
            'charset' => 'utf8',

            // in productive enviroments you can enable the schema caching
            // 'enableSchemaCache' => true,
            // 'schemaCacheDuration' => 43200,
        ]
    ]
];