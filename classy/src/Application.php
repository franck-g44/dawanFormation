<?php
require_once SRC_DIR.'/Response.php';
require_once SRC_DIR.'/UrlReader.php';

class Application{
    public function run(): Response
    {
        $reader = new UrlReader();


        try{
            $id = $reader->parse();
            $response = new Response('coucou, ça marche');
        
        }
        
        catch(Exception $e){
            $response = new Response('cette page n\'existe pas', 404);
         
            
        }

        return $response;




    }
}