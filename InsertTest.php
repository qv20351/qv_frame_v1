<?php 

//require '../vendor/autoload.php';
//require_once __DIR__ . '/composer/autoload_real.php';
require 'Pdox.php';
require 'Cache.php';

$config = [
    'host'      => 'localhost',
    'driver'    => 'mysql',
    'database'  => 'test',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_general_ci',
    'prefix'     => ''
];

$db = new \Buki\Pdox($config);

$data = [
	'name' => 'Burak',
	'surname' => 'Demirtaş',
	'age' => '24',
	'country' => 'Turkey',
	'city' => 'Ankara',
	'status' => 1
];

$query = $db->table('users')->insert($data);

if($query)
{
	echo 'Record added! <br />' . 
		 'InsertID: ' . $db->insertId();
}