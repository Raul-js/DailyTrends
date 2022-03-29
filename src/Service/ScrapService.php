<?php
    namespace App\Service;
    use App\Service;
    include "simple_html_dom.php";
    class ScrapService 
    {
        
        function getTitle()
        {
          
            $html = file_get_html('https://elpais.com/');
            foreach($html->find('h2') as $title) {
                
                return $title->plaintext;
              
            }
      
        }

        function getBody()
        {
          
            $html = file_get_html('https://elpais.com/');
            foreach($html->find('p') as $body) {
                
                return $body->plaintext;
              
            }
      
        }
    
    }




?>