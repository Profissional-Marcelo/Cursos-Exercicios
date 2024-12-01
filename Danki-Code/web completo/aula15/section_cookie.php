<?php 
    session_start();

    // $_SESSION['nome'] = 'Marcelo';

    //para tirar o cookie, é preciso negativar o setcookie
    setcookie('nome', 'Marcelo', time() + (60*60*24), '/');
      
    echo $_COOKIE['nome'];
?>