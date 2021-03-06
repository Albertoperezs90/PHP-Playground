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

//Podemos realizar un extends y obtener los atributos y metodos que tiene el padre, al igual que pasa con Java
    class Camion extends Car {
        var $motor;
        //Agregamos un parametro con modificador private
        private $ruedas;
        //Al agregar parametros privados, necesitamos añadir metodos getters y setters

        function Camion($marca,$modelo,$motor,$ruedas){
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->motor = $motor;
            $this->ruedas = $ruedas;
        }

        //Getters y Setters generados automaticamente

        public function getRuedas()
        {
            return $this->ruedas;
        }


        public function setRuedas($ruedas): void
        {
            $this->ruedas = $ruedas;
        }


        function fillVehicle(){
            echo "<br/>Estoy cargando el camion";
        }

        function engineOn(){
//Podemos sobreescribir metodos con la siguiente instrucción parent:: llamada al objeto padre del que extendemos
            parent::engineOn();

            echo "<br/>Camión arrancado";
        }
    }
