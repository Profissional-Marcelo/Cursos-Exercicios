<?php 
    //Número em segundos que quero que meu servidor durma antes de executar o código
    // sleep(3);

    // echo('Ola');

    // sleep(3);

    // echo 'dois';
    
    //função die para parar o código

    $nome = 'joao';

    if($nome == 'joao'){
        //continuamos o codigo
        echo 'Tudo certo';
    }else{
        die("O script parou de ser executado");
    }

?>