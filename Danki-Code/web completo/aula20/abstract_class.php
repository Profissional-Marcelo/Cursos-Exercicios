<?php 
    abstract class teste{
        public function func1(){

        }

        abstract function func2();

    }

    class Principal extends teste{
        public function func2(){
            
        }

/*************  ✨ Codeium Command 🌟  *************/
        public static function metodoestatico(){
                echo 'metodo estatico';
        }
/******  c44da38e-1ef6-4f68-a892-fc0b4b6a474d  *******/

        public function funcao(){
            Principal::metodoestatico();
            self::metodoestatico();
        }
    }

    $principal1 = new Principal();

    $principal1->func1();

    $principal->func2();

    principal::metodoestatico();

?>