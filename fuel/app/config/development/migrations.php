<?php
return array(
  'version' => 
  array(
    'app' => 
    array(
      'default' => 
      array(
        0 => '001_create_products',
        1 => '002_create_companies',
        2 => '003_create_users',
        3 => '004_create_sales',
      ),
    ),
    'module' => 
    array(
    ),
    'package' => 
    array(
      'auth' => 
      array(
        0 => '001_auth_create_usertables',
        1 => '002_auth_create_grouptables',
        2 => '003_auth_create_roletables',
        3 => '004_auth_create_permissiontables',
        4 => '005_auth_create_authdefaults',
        5 => '006_auth_add_authactions',
        6 => '007_auth_add_permissionsfilter',
      ),
    ),
  ),
  'folder' => 'migrations/',
  'table' => 'migration',
  'flush_cache' => false,
);
