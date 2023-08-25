<?php

use \Psr\Http\Message\ServerRequestInterface as Request; //interface que define o tipo da $request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

$app = new \Slim\App;


/* Padrão PSR7 
$app->get('/postagens', function(Request $request, Response $response) {
    
    /* Escreve no corpo da resposta utilizando o padrão PSR7 -> melhor forma de escrita
    $response->getBody()->write("Listagem postagens");

    return $response;
});*/   

//-------------------------------------------------------------------------

    //ROTAS
/*
$app->get('/postagens2', function() {
    echo "Listagem postagens";
});

$app->get('/usuarios[/{id}]', function($request, $response) {
    $id = $request->getAttribute('id');

    //Verificar se ID é valido e existe no BD

    echo "Listagem usuarios ou ID: " . $id;
});

$app->get('/postagens[/{ano}[/{mes}]]', function($request, $response) {
    
    $ano = $request->getAttribute('ano');
    $mes = $request->getAttribute('mes');

    //Verificar se ID é valido e existe no BD

    echo "Listagem postagens " . " Ano: " . $ano . " mes: " . $mes;
});

$app->get('/lista/{itens:.*}', function($request, $response) {
    
    $itens = $request->getAttribute('itens');

    //Verificar se ID é valido e existe no BD
    //echo $itens;

    var_dump(explode("/", $itens)); // retornará um array;
});
*/
//-------------------------------------------------------------------------


    //PRÁTICA CRIAR ROTAS
/*$app->get('/listaMoveis[/{movel}/{id}/{custo}]', function($request, $response) {
    
    $movel = $request->getAttribute('movel');
    $id = $request->getAttribute('id');
    $custo = $request->getAttribute('custo');

    echo 'Lista de Móveis: ' . $movel .'<br>'. 'ID: ' . $id . '<br>' . 'Custo: $' . $custo;
});*/
//-------------------------------------------------------------------------


    //NOMEAR ROTAS
/*
$app->get('/blog/postagens/{id}', function($request, $response) {
    echo 'Listar postagem para um ID ';
})->setName("blog");

$app->get('/meusite', function($request, $response) {
    $retorno = $this->get("router")->pathFor("blog", ["id" => "10"]);
    echo $retorno;
});
//-------------------------------------------------------------------------



    //PRÁTICA NOMEAR
$app->get('/listaMoveis[/{movel}/{id}/{custo}]', function($request, $response) {
    
    $movel = $request->getAttribute('movel');
    $id = $request->getAttribute('id');
    $custo = $request->getAttribute('custo');

    echo 'Lista de Móveis: ' . $movel .'<br>'. 'ID: ' . $id . '<br>' . 'Custo: $' . $custo;
})->setName('moveis');

$app->get('/moveis', function($request, $response) {
    $retorno = $this->get('router')->pathFor('moveis', ['id' => '01', 'movel' => 'cadeira', 'custo' => '300,00']);
    echo $retorno;
});
*/
//-------------------------------------------------------------------------



    //AGRUPAR ROTAS
/*
$app->group('/v1', function() {

    $this->get('/usuarios', function() {
        echo "Listagem de usuarios";
    });
    
    $this->get('/postagens', function() {
        echo "Listagem de postagens";
    });
});
//-------------------------------------------------------------------------


    //PRÁTICA AGRUPAR
$app->group('/twitter', function() {
    $this->get('/tweets', function() {
        echo 'Lista de tweets';
    });

    $this->get('/comentarios', function() {
        echo 'Lista de comentários';
    });
});
*/


//$app->run();



?>