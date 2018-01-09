<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Documento sin título</title>
    <link rel="stylesheet" href="style_variables.css" type="text/css">
</head>

<body>
<h1>USANDO OPERADORES COMPARACIÓN</h1>

<!--Cuando se pulse el boton de submit, se cargara la pagina validacion.php donde se mandaran las variables del formulario-->
<form action="validacion.php" method="post" name="datos_usuario" id="datos_usuario">
    <table width="15%" align="center">
        <tr>
            <td>Nombre:</td>
            <td><label for="nombre_usuario"></label>
                <input type="text" name="username" id="nombre_usuario"></td>
        </tr>
        <tr>
            <td>Edad:</td>
            <td><label for="edad_usuario"></label>
                <input type="text" name="user_age" id="edad_usuario"></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" name="enviando" id="enviando" value="Enviar"></td>
        </tr>
    </table>
</form>


<?php
/*
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
*/
?>

</body>
</html>