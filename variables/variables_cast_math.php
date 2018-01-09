<html>
<head>
    <title>Title of the document</title>
</head>

<body>
<?php

    $num1 = rand();
    //El metodo rand() nos permite generar un número aleatorio que tendra como maximo valor el permitido por el sistema
    echo $num1 . "<br/>";

    $num2 = rand(5,10);
    //Si agregamos parametros a rand() podemos obtener un número aleatorio donde el minimo sera 5 y el maximo 10
    echo $num2 . "<br/>";

    $numFloat = 5.48;
    echo "El resultado sin redondear es : $numFloat<br/> 
          El resultado redondeado es : " . round($numFloat) . "<br/>";
    //round() nos permite redondear un número, ademas si agregamos otro parametro, podemos añadir una precisión en los decimales
    $numFloatPrecision = 5.41912;
    echo "El resultado redondeado con precision es : " . round($numFloatPrecision,2) . "<br/>";


    $potencia = pow(5,2);
    echo "<br/>$potencia";
    //pow(base,exponente) nos permite generar una potencia dada una base y un exponente



    //En PHP se realizan cast implicitos, es decir, automaticamente el lenguaje realiza cast dependiendo del valor que introduzcamos

    $pruebaCast = 5; //PHP que la variable es de tipo Integer
    $pruebaCast+=5.70; //PHP asume que la variable es de tipo Float

    //Aun así, podemos realizar cast explicitos, es decir, podemos indicar que tipo de valor queremos que se interprete;

    $cast = "5";
    $otroCast = (int) $cast; //De esta manera podemos realizar cast explicitos
?>
</body>
</html>
