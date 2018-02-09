<?php

(new Dotenv\Dotenv(__DIR__))->load();

return [
	'paths' => 
		[
			'migrations' => 'application/migrations',
			'seeds' => 'application/seeds'
		],
	'environments' =>
        [
        	'default_migration_table' => 'phinxlog',
        	'default_database' => 'development',
        	'development' => [
        		'adapter' => 'mysql',
        		'host' => getenv('DB_HOST'),
        		'name' => getenv('DB_NAME'),
            	'user' => getenv('DB_USER'),
            	'pass' => getenv('DB_PASS'),
            	'port' => '3306',
            	'charset' => 'utf8'
           	]
        ],
    'version_order' => 'creation'
];