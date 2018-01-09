<html>
<head>
    <title>Title of the document</title>
</head>

<body>
<?php

    function incVar(){
        static $counter = 0; //Incluso dentro de las funciones podemos declarar variables estaticas
        $counter++;

        echo $counter . "<br/>";
    }


    incVar();
    incVar();
    incVar();

?>
</body>
</html>
