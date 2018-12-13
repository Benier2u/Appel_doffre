<?php

require_once __DIR__ . '/vendor/autoload.php';

use appelsOffres\Controleurs\ControleurHome;
use appelsOffres\Controleurs\ControleurAppelsOffres;

$configuration = [
    'settings' => [
        'displayErrorDetails' => true,
    ],
];

$container = new \Slim\Container($configuration);

$container['view'] = function ($container) {
    $view = new \Slim\Views\Twig('src/Vues');
    // Instantiate and add Slim specific extension
    $basePath = rtrim(str_ireplace('index.php', '', $container->get('request')->getUri()->getBasePath()), '/');
    $view->addExtension(new Slim\Views\TwigExtension($container->get('router'), $basePath));
    return $view;
};

$container['ControleurHome'] = function ($c){
    $view = $c->get('view');
    return new ControleurHome($view);
};

$container['ControleurAppelsOffres'] = function ($c){
    $view = $c->get('view');
    return new ControleurAppelsOffres($view);
};




?>