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
            $n = $_REQUEST["n"] ?? "Sem número";
            $antecessor = $n - 1;
            $sucessor = $n + 1;

            echo("<p>Seu número é <strong>$n</strong>,<br>Seu sucessor é <strong>$sucessor</strong><br>Seu antecessor é <strong>$antecessor</strong></p> ")

        ?>
        <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>

        <!-- Ou utilizando o histórico do navegador abaixo -->

        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>