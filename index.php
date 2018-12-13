<?php

require_once __DIR__ . '/vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as DB;
use appelsOffres\Controleurs\ControleurHome;
use appelsOffres\Controleurs\ControleurAppelsOffres;

$db = new DB();
$db->addConnection(parse_ini_file('dbconf.ini'));
$db->setAsGlobal();
$db->bootEloquent();

require('container.php');

$app = new \Slim\App($container);

$app->get('/','ControleurHome:afficherHome')->setName('Home');
$app->get('/ListeAppelsOffres','ControleurAppelsOffres:afficherAppelsOffres')->setName('ListeAppelsOffres');

$app->run() ;

?>
