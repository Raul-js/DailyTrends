<?php
    namespace App\Service;
    use App\Service;
    include "simple_html_dom.php";
    class ScrapService 
    {
        
        function getTitleElPais()
        {
          
            $html = file_get_html('https://elpais.com/');
            foreach($html->find('h2') as $title) {
                
                return $title->plaintext;
              
            }
      
        }

        function getBodyElPais()
        {
          
            $html = file_get_html('https://elpais.com/');
            foreach($html->find('p') as $body) {
                
                
                return $body->plaintext;
              
            }
      
        }
       

        function getBodyElMundo()
        {
          
            $html = file_get_html('https://www.superdeporte.es/');
            foreach($html->find('header') as $bodyElMundo) {
                
                
                return $bodyElMundo->plaintext;
              
            }
      
        }
    
    }




?>