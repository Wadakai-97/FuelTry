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
'development' => array(
	'type'           => 'mysqli',
	'connection'     => array(
		'hostname'       => 'localhost',
		'port'           => '3306',
		'database'       => 'fuel_db',
		'username'       => 'your_username',
		'password'       => 'y0uR_p@ssW0rd',
		'persistent'     => false,
		'compress'       => false,
	),
	'identifier'   => '`',
	'table_prefix'   => '',
	'charset'        => 'utf8',
	'enable_cache'   => true,
	'profiling'      => false,
),

return array(
);
