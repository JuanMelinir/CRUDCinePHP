<?php
       $GLOBALS['id_crono']=0; 
       if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                          
        function get_data() {

        if(file_exists('cronogramas.json')) { 
        $crono_anterior=file_get_contents('cronogramas.json');
        $crono_anterior=json_decode($crono_anterior, true);

        $lon=count($crono_anterior)+1;                    
        $un_cronograma=array(
        'id' => $lon,
        'evento' => $_POST['evento'],
        'fecha' => $_POST['fecha'],
        'hora_inicio' => $_POST['hora_inicio'],
        'hora_fin' => $_POST['hora_fin'],
        );
        $crono_anterior[]=$un_cronograma;
        echo "file exist<br/>";
        return json_encode($crono_anterior);
        }else {
        $datae=array();
        $datae[]=array(
        'id' => 1,
        'evento' => $_POST['evento'],
        'fecha' => $_POST['fecha'],
        'hora_inicio' => $_POST['hora_inicio'],
        'hora_fin' => $_POST['hora_fin'],
        );
                   echo "no existe!!!!<br/>";
                   return json_encode($datae);   
               }
           }
      
    if(file_put_contents("cronogramas.json", get_data())) {
        echo 'echo';
    }                
    else {
        echo 'There is some error';                
    }
        }       
?>