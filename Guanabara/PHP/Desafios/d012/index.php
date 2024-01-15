<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $segundos = $_GET['segundos'] ?? 0;
        $sobra = $segundos;
        $semana = (int)($sobra / 604800);
        $sobra = $sobra % 604800;
        $dia = (int)($sobra / 86400);
        $sobra = $sobra % 86400;
        $hora = (int)($sobra / 3600);
        $sobra = $sobra % 3600;
        $minuto = (int)($sobra / 60);
        $sobra = $sobra % 60;
        $segundo = $sobra;
        
    ?>

    <main>
        <h1>Calculadora de tempo</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="segundos">Qual o total de segundos?</label>
            <input type="number" name="segundos" id="segundos" value="<?=$segundos?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Totalizando tudo</h2>
        <p>Analisando o valor que você digitou, <strong><?=number_format($segundos, 0, ',', '.')?> </strong></p>
        <ul>
            <li><strong>Semanas:</strong> <?= $semana ?></li>
            <li><strong>Dias:</strong> <?= $dia ?></li>
            <li><strong>Horas:</strong> <?= $hora ?></li>
            <li><strong>Minutos:</strong> <?= $minuto ?></li>
            <li><strong>Segundos:</strong> <?= $segundo ?></li>
        </ul>
    </section>
</body>
</html>