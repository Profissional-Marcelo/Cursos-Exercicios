<?php 
    include('exemplo.class.php');
    $exemplo = new Exemplo();

    $exemplo -> var2 = 'Danki Code';
    
    $exemplo2 = new Exemplo;
    $exemplo2->var2 = 'Danki Code 2';

    echo $exemplo2->var2;
?>