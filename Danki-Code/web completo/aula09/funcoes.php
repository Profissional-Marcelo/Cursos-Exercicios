<?php 
    function mostrarNome($nome, $idade){
        echo "<h2>Nome é: ".$nome;
        echo "<h2>Idade é: ".$idade;
    }

    mostrarNome('Marcelo', 21);

    //adicionando um valor padrão, caos não seja atribuido nenhum
    function calculadora($numero1 = 10, $numero2 = 5){
        echo ($numero1+$numero2);
    }

    calculadora(20);

    function verdade(){
        return true;
    }

    $variavel = verdade();

    //comando que mostra o valor da variavel
    var_dump($variavel);

    $variavel = 'Guilherme';

    var_dump($variavel);
?>