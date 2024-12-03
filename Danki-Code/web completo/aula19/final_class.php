<?php
 class Filha{

        protected function funcaoTeste(){
            
        }
        public function mostrarOla(){
            echo 'Ola Mundo';
        }
    }

    class Pai extends Filha{
        public function mostrarTchau(){
            echo 'Tchau Mundo!';
        }
    }

    $pai = new Pai;

    $pai->mostrarTchau();

    $filha = new Filha();

    $filha->mostrarOla();

?>