<html>

<head>
    <link rel="stylesheet" href="style_variables.css" type="text/css">
</head>
    <body>

<?php

    //El metodo isset nos permite comprobar si una variable es null o no, en este caso si el boton del formulario ha sido pulsado y por tanto contiene el formulario
    //Ademas la variable SUPER GLOBAL $_POST nos permite adquirir todas las variables que se han pasado en un formulario mediante el metodo post
    if (isset($_POST["enviando"])){
        $usuario = $_POST["username"];
        $edad = $_POST["user_age"];

        if ($usuario=="Alberto" && $edad>=18){
            echo "<p class='validado'>Puedes entrar</p>";
        }else {
            echo "<p class='no_validado'>No puedes entrar</p>";
        }
    }
?>
</body>


</html>


