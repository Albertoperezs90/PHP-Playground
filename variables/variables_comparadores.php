<html>
<head>
    <title>Title of the document</title>
</head>

<body>
<?php

    $variable1 = 8;
    $variable2 = "8";
    $variable3 = "Alberto";


    //En PHP da igual que el valor sea de tipo String o tipo entero, si tienen el mismo "contenido" lo considera como igual ==
    if ($variable1 == $variable2){
        echo "Son iguales la variable1 y la variable2";
    }else {
        echo "La variable 1 y la variable 2 son diferentes";
    }

?>

<br/>

<?php

    //En caso de que usemos el comparador "identico a..." === nos dara false

    if ($variable1 === $variable2){
        echo "La variable 1 y la variable 2 son iguales";
    }else {
        echo "La variable 1 y la variable 2 son diferentes";
    }
?>
</body>
</html>
