<?php 
    include('interface.php');

    class Teste implements Interface1{
       public function printOnScreen($par){
        echo $par;
       }
    }

    $teste = new Teste;

    $teste->printOnScreen("Olá Mundo!");
?>