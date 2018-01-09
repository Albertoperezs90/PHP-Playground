<html>
<head>
    <title>Title of the document</title>
</head>

<body>
<?php

    //Para poder definir variables constantes necesitamos por obligacion usar el metodo define
    //Por defecto las variables constantes son globales

    define("NOMBRE", "Alberto");
    define("EDAD", 27);
    //Añadir true como tercer valor al metodo define nos permite indicar que ignore mayusculas y minusculas, por eso en el echo de mas abajo podemos usar PESO en minusculas
    define("PESO", 83, true);

    echo "Mi nombre es " . NOMBRE . " y tengo " . EDAD . " años<br/>";
    echo "Y mi peso es " . peso . "<br/>";


    //PHP incorpora constantes predefenidas, las cuales pueden ser utiles en ciertas situaciones, algunas de ellas son las siguientes
    //Para mas información : http://php.net/manual/es/language.constants.predefined.php
    echo __LINE__;
    echo "<br/>";
    echo __FILE__;
    echo "<br/>";
    echo __DIR__;
?>
</body>
</html>
