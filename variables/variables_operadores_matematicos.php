<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Documento sin título</title>
</head>

<body>

<p>&nbsp;</p>
<form name="form1" method="post">
    <p>
        <label for="num1"></label>
        <input type="text" name="num1" id="num1">
        <label for="num2"></label>
        <input type="text" name="num2" id="num2">
        <label for="operacion"></label>
        <select name="operacion" id="operacion">
            <option>Suma</option>
            <option>Resta</option>
            <option>Multiplicación</option>
            <option>División</option>
            <option>Módulo</option>
            <option>Incremento</option>
            <option>Decremento</option>
        </select>
    </p>
    <p>
        <input type="submit" name="submitForm" id="button" value="Enviar" onClick="prueba">
    </p>
</form>
<p>&nbsp;</p>

<?php

    include ("calculadora.php");

    //Al incluir el archivo calculadora.php, tenemos acceso a todas las funciones que hay en dicho archivo, como es el casco del switch que va llamando a diferentes metodos.

    if (isset($_POST["submitForm"])){
        $operacion = $_POST["operacion"];
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];

        //Metodo para comprobar con switch()
        switch ($operacion){
            case "Suma" : suma($num1,$num2); break;
            case "Resta" : resta($num1,$num2); break;
            case "Multiplicación" : multi($num1,$num2); break;
            case "División" : divi($num1,$num2); break;
            case "Módulo" : mod($num1,$num2); break;
            case "Incremento" : inc($num1); break;
            case "Decremento" : dec($num2); break;
            default : echo "No se ha seleccionado ninguna operación";
        }

        //Metodo para comprobar con if()

        if (!strcasecmp("suma",$operacion)){ //Recordamos que strcasecmp() devuelve 1 (true) ó 0 (false), lo que se comprueba es que no sean iguales, por tanto negamos para comprobar si son iguales
            echo "<br/>Se ha escodigo suma";
        }

    }

?>

</body>
</html>