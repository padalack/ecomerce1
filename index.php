<?php

require_once ("vendor/autoload.php");
//require_once ("vendor/padalack/php-classes/src/Page.php");
use \Slim\Slim;
use \Padalack\Page;
$app= new Slim();
$app->config('debug',true);
$app->get('/', function (){
    $page = new Page();
    $page->setTpl("index");
    /*$sql = new \Padalack\DB\Sql();
    $results = $sql->select("SELECT * FROM tb_users");
    echo json_encode($results);*/
});
$app->run();

