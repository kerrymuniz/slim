<?php

use \Psr\Http\Message\ServerRequestInterface as Request; //interface que define o tipo da $request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

$app = new \Slim\App(
    ['settings' => [
        'displayErrorDetails' => true
    ]]
);

/* Tipos de respostas
cabeçalho, texto, Json, XML
*/

$app->get('/header', function(Request $request, Response $response) {

    $response->write('Esse é um retorno header');
    return $response->withHeader('allow', 'PUT') //definir informações para o cabeçalho;
             ->withAddedHeader('Content-Length', 10);

});

$app->get('/json', function(Request $request, Response $response) {

    return $response->withJson([
        "nome" => "Kerry Muniz",
        "endereco" => "Endereco qualquer"
    ]);

});

$app->get('/xml', function(Request $request, Response $response) {

    $xml = file_get_contents('arquivo.xml'); //lendo o arquivo e armazenando no xml;
    $response->write($xml);

            //convertendo para um conteúdo xml e exibindo no browser;
    return $response->withHeader('Content-Type', 'application/xml');

});

/* middleware */ //adicionam camadas de execução de códigos dentro da aplicação;

$app->add( function() {
    
});

$app->get('/usuarios', function(Request $request, Response $response) {

    $response->write('Ação principal usuarios');

});

$app->get('/postagens', function(Request $request, Response $response) {

    $response->write('Ação principal postagens');

});


$app->run();



/* Container dependency injection
class Servico {
    
}*/

/* Container Pimple
$container = $app->getContainer(); //método que recupera o container do slim;
$container['servico'] = function() {
    return new Servico;
}; //injetamos uma dependência dentro do container do slim;

$app->get('/servico', function(Request $request, Response $response) {
    //em seguida, conseguimos recuperar esse serviço, essa dependência, através do método get();
    $servico = $this->get('servico');
    var_dump($servico);

});*/

/* Controllers como serviço 
$container = $app->getContainer(); //método que recupera o container do slim;
$container['Home'] = function() {
    return new MyApp\controllers\Home(new MyApp\View);
};
$app->get('/usuario', 'Home:index' ); //essa estrutura recebe (Classe:metodo);


$app->run();*/

?>