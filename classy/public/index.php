<?php

require_once '../src/reponse.php';
require_once '../src/UrlReader.php';

//regarder dans l'url

$reader = new UrlReader();


try{
    $id = $reader->parse();

}

catch(Exception $e){
    $response = new Response();

    $response->send('cette page n\'existe pas', 404);
    die;
}

$response = new Response();

$response->send('coucou, ça marche');


