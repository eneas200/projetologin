<?php 

require __DIR__.'/vendor/autoload.php';

use \Slim\Slim;
use \Rain\Tpl;


$app = new Slim();



/**
 * Rotas
 * Model User
 * */
$app->get('/' , function() {

    $config = [
        "tpl_dir" => "views/",
        "cache_dir" => "views-cache/"
    ];

    Tpl::configure( $config );

    $tpl = new Tpl;

    $tpl->draw('index');

});

$app->run();


