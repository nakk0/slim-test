<?php
    class Alunno{
        private $name;
        private $surname;
        private $age;

        function __construct($name, $surname, $age){
            $this->name = $name;
            $this->surname = $surname;
            $this->age = $age;
        }

        function get_name(){
             return $this->name;
        }

        function get_surname(){
            return $this->surname;
        }

        function get_age(){
            return $this->age;
        }

        function set_name($name){
            $this->name = $name;
        }

        function set_surname($surname){
            $this->surname = $surname;
        }

        function set_age($age){
                $this->age = $age;
        }

        function info(){
            return "name: $this->name <br>surname: $this->surname <br>age: $this->age";
        }

        function toString(){
            return "$this->name, $this->surname, $this->age";
        }
    }
?>