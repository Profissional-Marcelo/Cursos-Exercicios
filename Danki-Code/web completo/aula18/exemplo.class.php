<?php 

    class Exemplo{
        private $var1;
        public $var2;

        public function metodo(){

        }

        public static function metodoEstatico(){
            echo 'metodo estatico';
        }
        public static $var3 = 'statico';     
        private function metodo2(){
            
        }

        public function setVar1($var1){
            $this->var1 = $var1;
        }

        public function pegaVar1(){
            return $this->var1;
        }
    }
?>