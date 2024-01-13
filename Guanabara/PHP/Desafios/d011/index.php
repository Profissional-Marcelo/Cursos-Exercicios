<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 11 php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $preco = $_GET['preco'] ?? 0;
        $porc = $_GET['porc'] ?? 0;
        $novo = $preco + ($preco * $porc / 100);
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="preco">Preço</label>
            <input type="number" name="preco" id="preco">
            <label for="porc">Qual será o percentual de reajuste (<strong><span id="p">?</span>%</strong>)</label>
            <input type="range" name="porc" id="porc" min="0" max="100" step="1" value="50" oninput="mudaValor()">
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section>
        <h2>Resultados</h2>
        <p>O produto que custava R$<?=number_format($preco, 2, ",", ".")?>, com <strong><?=$porc?>% de aumento</strong> fica por R$<?=number_format($novo, 2, ",", ".")?> </p>
    </section>
    <script>
        // Declarações automáticas
        mudaValor()

        function mudaValor(){
            document.getElementById('p').innerHTML = document.getElementById('porc').value;
        }
    </script>
</body>
</html>