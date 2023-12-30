<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            $nome = $_GET["nome"] ?? "Sem nome";
            $sobrenome = $_GET["sobrenome"] ?? "Desconhecido";

            echo("<p>É um prazer te conhecer, <strong>$nome $sobrenome</strong>! Este é o meu site!</p> ")

            // var_dump($_GET) 
            // super global $_GET , $_POST relacionado ao método do envio. $_REQUEST se usar get funciona e se usar post também. É uma junção de $_GET , $_POST E $_COOKIES

        ?>

        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>