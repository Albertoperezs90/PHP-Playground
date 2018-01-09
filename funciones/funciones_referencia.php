<html>
<head>
    <title>Title of the document</title>
</head>

<body>
<?php


    function inc($valor1){
        return ++$valor1;
    }

    $numero = 5;

    echo inc($numero) . "<br/>";
    echo $numero . "<br/>";

    function increment(&$valor1){
        return ++$valor1;
    }

    //Si nos fijamos, al añadir un & en el paso de parametros de la funcion increment creamos un vinculo, entre la variable pasada y lo que realiza la función
    //Por eso, despues de llamar a la función en este caso, si que hemos incrementado la variable $numero a pesar de estar fuera de la función

    echo increment($numero) . "<br/>";
    echo $numero . "<br/>";
?>
</body>
</html>
