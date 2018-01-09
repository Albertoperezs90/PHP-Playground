<?php


    function suma($num1,$num2){
        echo "La suma de $num1 y $num2 es "  . ($num1+$num2);
    }

    function resta($num1,$num2){
        $resta =  $num1 - $num2;
        echo "La resta de $num1 y $num2 es " . $resta;
    }

    function multi($num1,$num2){
        $multi = $num1*$num2;
        echo "La multiplicación es de $num1 y $num2 es " . $multi;
    }


    function divi($num1,$num2){
        $divi = $num1/$num2;
        echo "La división de $num1 y $num2 es " . $divi;
    }

    function mod($num1,$num2){
        $mod = $num1%$num2;
        echo "El resto de $num1 y $num2 es : " . $mod;
    }

    function inc($num1){
        echo "El resultado de incrementar $num1 es : ";
        $num1++;
        echo $num1;
    }

    function dec($num1){
        echo "El resultado de decrementar $num1 es : ";
        $num1--;
        echo $num1;
    }
