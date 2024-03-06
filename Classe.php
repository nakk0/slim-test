<?php

    class Classe{
        private $alunni = [];

        function __construct($alunni=[]){
            $alunni = array(new Alunno("Vincenzo", "Langone", "18"), 
            new Alunno("Matteo", "Faginali", "18"), 
            new Alunno("Lorenzo", "Rizzotti", "18"),
            new Alunno("Lorenzo", "Chelini", "18"),
            new Alunno("Piernoel", "Asuncion", "18") 
);
            $this->alunni = $alunni;
        }

        function get_alunni(){
            return $this->alunni;
        }

        function set_alunni($alunni){
            $this->alunni = $alunni;
        }

        function toString(){
            $str;
            foreach($this->alunni as $a){
                $str .= $a->toString() . "<br>";
            }
            return $str;
        }

        function get_alunni_nome($name){
            $students = [];
            foreach($this->get_alunni() as $a){
                if($a->get_name() == $name){
                    array_push($students, $a);
                }
            }
            return $students;
        }
    }
?>