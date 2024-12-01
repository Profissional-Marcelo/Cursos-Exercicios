<?php 
    session_start();
    if(isset($_SESSION['nome'])){
        echo $_SESSION['nome'];
    }

    //essa vai deletar todas as sessões
session_destroy();

    //vai limpar a sessão
    unset($_SESSION['nome']);
?>