<?php
/**
 * Fuel is a fast, lightweight, community driven PHP 5.4+ framework.
 *
 * @package    Fuel
 * @version    1.9-dev
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2019 Fuel Development Team
 * @link       https://fuelphp.com
 */

/**
 * -----------------------------------------------------------------------------
 *  Database settings for development environment
 * -----------------------------------------------------------------------------
 *
 *  These settings get merged with the global settings.
 *
 */

return array(
	'default' => array(
		'connection' => array(
			'dsn'      => 'mysql:host=localhost;dbname=FuelPHP',
			'username' => 'root',
			'password' => 'root',
		),
	),
	'development' => array(
    'type' => 'mysqli',
    'connection' => array(
        'hostname' => 'localhost',
        'port' => '8889',
        'database' => 'FuelPHP',
        'username' => 'root',
        'password' => 'y0uR_p@ssW0rd',
        'persistent' => false,
        'compress' => false,
    ),
    'identifier' => '`',
    'table_prefix' => '',
    'charset' => 'utf8',
    'enable_cache' => true,
    'profiling' => false,
    'readonly' => false,
),
);
