<?php

    isset($_POST["enviando"]) ? startDrawing() : "";

    function startDrawing(){
        $age = $_POST["edad_usuario"];

        if ($age <= 18){
            echo "Eres menor de edad";
        }else if ($age <=45){
            echo "Eres maduro";
        }else {
            echo "Eres viejo";
        }


        //Tanto el conjunto de if de mas arriba como el if ternario de abajo, realiza el mismo trabajo

        echo $age<=18 ? "Eres menor de edad" : $age<=45? "Eres maduro" : "Eres viejo" ;
    }

