<style>
	h1{
		text-align:center;
	}

	table{
		background-color:#FFC;
		padding:5px;
		border:#666 5px solid;
	}
	
	.no_validado{
		font-size:18px;
		color:#F00;
		font-weight:bold;
	}
	
	.validado{
		font-size:18px;
		color:#0C3;
		font-weight:bold;
	}


</style>

<?php

	if (isset($_POST["enviando"])){
	    $age = $_POST["edad_usuario"];

	    if ($age <= 18){
	        echo "Eres menor de edad";
        }else if ($age <=45){
	        echo "Eres maduro";
        }else {
	        echo "Eres viejo";
        }
    }
?>