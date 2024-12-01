<?php 
    class Pessoa{
        // Objeto pessoa

        private $nome = 'Marcelo';
        private $idade = 21;
        private $peso = '70kg';


        public function crescer(){
            $this->comer();
            echo 'estou crescendo';
        }

        private function comer(){
            echo 'estou comendo';
        }

    }

    //Instanciar

    $pessoa = new Pessoa();
    $pessoa2 = new Pessoa;

    $pessoa->crescer();

?>