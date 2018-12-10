<?php

require_once __DIR__ . '/vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as DB;
use appelsOffres\Controleurs\ControleurHome;

$db = new DB();
$db->addConnection(parse_ini_file('dbconf.ini'));
$db->setAsGlobal();
$db->bootEloquent();

require('container.php');

$app = new \Slim\App($container);

$app->get('/','ControleurHome:afficherHome')->setName('Home');

$app->run() ;

?>
