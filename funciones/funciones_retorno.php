<html>
<head>
    <title>Title of the document</title>
</head>

<body>
<?php


    echo suma(5,5) ? "Verdadero" : "Falso";

    //En PHP no necesitamos indicar que hay un retorno en una función, simplemente realizamos un return

    function suma($num1,$num2){
        if (($num1+$num2) == 10){
            return true;
        }else {
            return false;
        }
    }
?>
</body>
</html>
