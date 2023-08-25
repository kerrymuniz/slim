<?php

use \Psr\Http\Message\ServerRequestInterface as Request; //interface que define o tipo da $request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

$app = new \Slim\App;


/* 
Tipos de requisição ou Verbos HTTP

get -> Recuperar recursos do servidor (Select)
post -> Criar dado no servidor (Insert)
put -> Atualizar dados no servidor (Update)
delete -> Deletar dados do servidor (Delete)
*/
//-------------------------------------------------------------------------


    //POST
    //$app->post('/usuarios/adiciona', function(Request $request, Response $response) {

        //Impressão dos dados no brawser
        /*foreach($_POST as $key => $value) {
            $retorno = var_dump(explode('/', $value));
    
            print_r($retorno);
        }*/
    
    
        //Recuperar post ($_POST)
        /*$post = $request->getParsedBody();
        $email = $post['email'];
        $senha = $post['senha'];*/
    
        /*
        Salvar no banco de dados com INSERT INTO..
        ...
        */
            
            //escrevendo na tela, através do response;
        /*return $response->getBody()->write('E-mail: '.$email.'<br>'.'Senha: '.$senha);
    
    });*/
    //-------------------------------------------------------------------------
    
    
        //PUT
    //$app->put('/usuarios/atualiza', function(Request $request, Response $response) {
    
        //Impressão dos dados no brawser
        /*foreach($_POST as $key => $value) {
            $retorno = var_dump(explode('/', $value));
    
            print_r($retorno);
        }*/
    
    
        //Recuperar post ($_POST)
        /*$post = $request->getParsedBody();
        $id = $post['id'];
        $email = $post['email'];
        $senha = $post['senha'];*/
    
        /*
        Atualizar no banco de dados com UPDATE..
        ...
        */
            
            //escrevendo na tela, através do response;
        /*return $response->getBody()->write('Sucesso ao atualizar');
    
    });*/
    
    
    
    //-------------------------------------------------------------------------
    
    
        //DELETE
        //$app->delete('/usuarios/delete/{id}', function(Request $request, Response $response) {
    
            //Impressão dos dados no brawser
            /*foreach($_POST as $key => $value) {
                $retorno = var_dump(explode('/', $value));
        
                print_r($retorno);
            }*/
        
            //$id = $request->getAttribute('id');
    
            /*
            Deletar no banco de dados com DELETE..
            ...
            */
                
                //escrevendo na tela, através do response;
            /*return $response->getBody()->write('Sucesso ao deletar'. $id);
        
        });*/
    
    //$app->run();

?>