<?php 
    $pdo = new PDO('mysql:host=localhost;dbname=db_teste', 'root', '');

    //faz o pdo mostrar os erros que por padrão ele não mostra
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = $pdo->prepare('SELECT * FROM `clientes` GROUP BY /*PEGA UM DE CADA*/cargo ORDER BY nome ASC /*OU DESC para decrescente */ LIMIT 3 ');
    $sql->execute();
    $clientes = $sql->fetchAll();
    foreach($clientes as $key => $value){
        echo $value['nome'];
        echo '<br>';
        echo $value['cargo'];
        echo '<hr>';
    }
?>