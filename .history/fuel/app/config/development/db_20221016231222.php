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