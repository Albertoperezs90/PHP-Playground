<html>
<head>
    <title>Title of the document</title>
</head>

<body>
<?php

    //Incluimos el archivo que nos permite crear coches
    include("Vehicles_private.php");

    $car = new Car("Seat","Leon");
    //En PHP en lugar de usar la nomenclatura . para hacer referencia a los atributos de la clase, lo hacemos con la nomenclatura ->
    echo "$car->marca <br/>";
    echo "$car->modelo";

    echo "<br/>";

    $car2 = new Car("Opel","Astra");
    echo "$car2->marca <br/>";
    echo "$car2->modelo";

    //Para poder llamar a los metodos de la clase tambien hacemos uso de la nomenclatura ->
    $car->engineOn();
    $car2->brake();
    $car->turn();



    $camion = new Camion("toro","PEgaso",1600,8);
    $camion->fillVehicle();
    $camion->engineOn();
    echo "<br/>" . $camion->getRuedas();
?>
</body>
</html>
