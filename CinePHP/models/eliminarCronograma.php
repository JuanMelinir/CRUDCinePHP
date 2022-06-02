<?php
       
       if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                          
           function eliminar(){

               if(file_exists('cronogramas.json')) { 
                   $crono_anterior=file_get_contents('cronogramas.json');
                   $crono_anterior=json_decode($crono_anterior, true);
                   $index_num = 0;
        foreach($cronograma as $un_elemento) {
        $index_num++;
        if($index_num++ == $_POST['borrar']) {
        unset($cronograma[$index_num]);
        }
        return json_encode($crono_anterior);
        }                     
        
               }
               
           }
      
        }
      
              
?>