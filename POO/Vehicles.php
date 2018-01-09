<?php

    class Car{
        var $marca;
        var $modelo;

        //Constructor
        function Car($marca, $modelo){
            $this->marca = $marca;
            $this->modelo = $modelo;
        }

        function engineOn(){
            echo "<br/>Estoy arrancando";
        }

        function turn(){
            echo "<br/>Estoy girando";
        }

        function brake(){
            echo "<br/>Estoy frenando";
        }
    }



    /***********************************************************************************/

    class Camion{
        var $marca;
        var $modelo;
        var $motor;

        function Camion($marca,$modelo,$motor){
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->motor = $motor;
        }

        function fillVehicle(){
            echo "<br/>Estoy cargando el camion";
        }
    }

