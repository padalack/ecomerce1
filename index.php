<?php

require_once ("vendor/autoload.php");
//require_once ("vendor/padalack/php-classes/src/Page.php");
use \Slim\Slim;
use \Padalack\Page;
use \Padalack\PageAdmin;
$app= new Slim();
$app->config('debug',true);

$app->get('/', function (){
    $page = new Page();
    $page->setTpl("index");
});

$app->get('/admin', function (){
    $page = new PageAdmin();
    $page->setTpl("index");
});

$app->run();

