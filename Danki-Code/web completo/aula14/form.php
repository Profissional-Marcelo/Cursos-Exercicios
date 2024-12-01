<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <?php 
    // if(isset($_GET['acao'])){
    
    // $nome = $_GET['nome'];
    // $email = $_GET['email'];

    // echo $nome;
    // echo '<br>';
    // echo $email;
    // }

    /*
     if(isset($_POST['acao'])){
    
     $nome = $_POST['nome'];
     $email = $_POST['email'];

     echo $nome;
     echo '<br>';
     echo $email;
     }

     */

     if(isset($_POST['acao'])){
        foreach ($_POST['valor'] as $key => $value) {
            echo $value;
        }
     }
    ?>
    <form action="" method="post">
        <input type="text" name="nome" id="">
        <input type="email" name="email" id="">

        <input type="checkbox" name="valor[]" value="10">
        <input type="checkbox" name="valor[]" value="20">
        <input type="checkbox" name="valor[]" value="30">
        <input type="checkbox" name="valor[]" value="40">

        <input type="submit" name='acao' value="Enviar">
    </form>

</body>
</html>