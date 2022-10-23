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
 *  Global database settings
 * -----------------------------------------------------------------------------
 *
 *  Set database configurations here to override environment specific
 *  configurations
 *
 */

return array(
  'development' => array(
    'type'           => 'mysqli',
		'connection' => array(
      'dsn' => "mysql:host=localhost:8889;dbname=FuelPHP",
      'username' => "root",
      'password' => "root",
      'persistent' => false,
      'compress' => false,
    ),
    'identifier'   => '`',
    'table_prefix'   => '',
    'charset'        => 'utf8',
    'enable_cache'   => true,
    'profiling'      => false,
  ),
  'default' => array(
		'connection' => array(
      'dsn' => "mysql:host=localhost:8889;dbname=FuelPHP",
      'username' => "root",
      'password' => "root",
      'persistent' => false,
      'compress' => false,
    ),
    'table_prefix' => '',
    'charset' => 'utf8',
	),
);
