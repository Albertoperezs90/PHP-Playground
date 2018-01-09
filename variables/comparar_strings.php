<html>
<head>
    <title>Title of the document</title>
</head>

<body>
<?php

    $variable1 = "Casa";
    $variable2 = "CASA";

    //strcmp() nos permite comparar strings, teniendo en cuenta si son mayusculas o minusculas

    $resultado = strcmp($variable1,$variable2);

    //strcmp() devuelve 1 si es verdadero y 0 si es falso

    //strcasecmp() nos permite comparear strings, sin tener en cuenta mayusculas y minusculas
    $resultado2 = strcasecmp($variable1,$variable2);

    echo "El resultado de resultado es $resultado<br/>";

    echo "El resultado de resultado2 es $resultado2<br/>";

    if ($resultado){ //Es verdadero debido a que PHP un 1 es lo mismo que true
        echo "Las palabras son diferentes";
    }else {
        echo "Las palabras son iguales";
    }

    //Si nos fijamos, si es true significa que son diferentes en el caso de strcmp(), lo cual es algo lioso, en el caso de strcmp() se suele usar una negación

    if (!$resultado){ //Al negar resulta mas comprensible el entender condicionales con los metodos de comparación
        echo "Las palabras son iguales";
    }else {
        echo "Las palabras son diferentes";
    }
?>
</body>
</html>
