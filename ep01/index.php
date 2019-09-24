<?php

require __DIR__. "/vendor/autoload.php";

use CoffeeCode\Router\Router;

$router = new Router(URL_BASE);
/*
*Controller namespace
*/
$router->namespace("Source\App");

/**
*sessão WebController
*metodo: home
*/
$router->group(null); //home
$router->get("/", "WebController:home");
$router->get("/{filter}", "WebController:home");


/*
*Blog
*/
$router->group("blog");
$router->get("/", "WebController:blog");
$router->get("/{post_uri}", "WebController:post");
$router->get("/categoria/{cat_uri}", "WebController:category");

/*
*Contato
*/
$router->group("contato");
$router->get("/", "WebController:contact");
$router->get("/{sector}", "WebController:contact");//sempre coloque regras dinamicas como essa antes das fixas
$router->get("/suporte", "WebController:support");//regra fixa

/*
*ADMIN
*/
$router->group("admin");
$router->get("/", "AdminController:home");


$router->dispatch();

/**
*ERRORS
*/
$router->group("ooops");
$router->get("/{errcode}", "WebController:error");

if ($router->error()) {
    $router->redirect("/ooops/{$router->error()}");
}
