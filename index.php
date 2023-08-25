<?php

use \Psr\Http\Message\ServerRequestInterface as Request; //interface que define o tipo da $request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

$app = new \Slim\App([
    'settings' => [
        'displayErrorDetails' => true //definir detalhes do erro;
    ]
]);

/* Container dependency injection */
class Servico {
    
}

/* Container Pimple */
$container = $app->getContainer(); //método que recupera o container do slim;
$container['servico'] = function() {
    return new Servico;
}; //injetamos uma dependência dentro do container do slim;

$app->get('/servico', function(Request $request, Response $response) {
    //em seguida, conseguimos recuperar esse serviço, essa dependência, através do método get();
    $servico = $this->get('servico');
    var_dump($servico);

});

/* Controllers como serviço */
$app->get('/usuario', '\MyApp\controllers\Home:index'); //essa estrutura recebe (Classe:metodo);


$app->run();

?>