<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$active_group = 'default';
$query_builder = TRUE; 

$db['default'] = array( 
	'dsn'	=> '',
	 'hostname' => 'localhost',
	// 'username' => 'mymunchk_dbuser',
	// 'password' => 'kKPa%~ZE@GYj',
	// 'database' => 'mymunchk_db',
	'username' => 'root', 
	'password' => '', 
	'database' => 'mymunchk_db',
	'dbdriver' => 'mysqli',
	'dbprefix' => 'tbl_',
	'pconnect' => FALSE, 
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8mb4',
	'dbcollat' => 'utf8mb4_unicode_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);
