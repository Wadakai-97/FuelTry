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
      'dsn' => 'mysql:host=:{ポート番号};dbname={データベース名}',
      'username' => '{ユーザー名}',
      'password' => '{パスワード}',
      'persistent' => false,
      'compress' => false,
    ),
    'table_prefix' => '',
    'charset' => 'utf8',
	),
);