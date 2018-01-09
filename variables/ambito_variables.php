<html>
<head>
    <title>Title of the document</title>
</head>

<body>
<?php

    //global $name;

    include("ambito_variables2.php"); //Con include, lo que hacemos es añadir un archivo a nuestro archivo actual, donde podemos tener organizados metodos, etc...

    $name = "Alberto";

    function giveMeName(){
        $name = "Perez";
    }

    echoName(); //LLamamos al metodo que esta en el archivo "ambito_variables2.php"

    //giveMeName();

    echo $name;
?>
</body>
</html>
