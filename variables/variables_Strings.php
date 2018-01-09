<html>
<head>
    <title>Title of the document</title>
    <style>
        .resaltar {
            color: #F00;
            font-weight: bold;
        }
    </style>
</head>

<body>
<?php

    echo "<p class='resaltar'>This is an example of String</p>";

    echo '<p class="resaltar">This is an example of String</p>';

    //Podemos declarar los string o bien comenzando con comilla doble " o con comilla simple ' pero si metemos otras comillas dentro del string deben ser diferentes a las de apertura

    echo "<p class=\'resaltar\'>This is an example of String</p>";

    $name = "Alberto";

    echo "Hola $name<br/>";

    echo "Prueba";

    echo 'Hola $name<br/>';

    //En la instrucción echo, si usamos comillas simples no "muestra" las variables sino que las toma como un literal


?>
</body>
</html>
