
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idade por ano</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $atual = date("Y");
        $nascimento = $_REQUEST["nascimento"] ?? 0;
        $ano = $_REQUEST["ano"] ?? $atual;
        $idade = $ano - $nascimento;
    ?>

    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="nascimento">Ano de nascimento</label>
            <input type="number" name="nascimento" id="nascimento" value="<?=$nascimento?>" min="1900" max="<?=$atual?>" required>
            <label for="ano">Quer saber sua idade em que ano? (atualmente estamos em <strong><?=$atual?></strong>)</label>
            <input type="number" name="ano" id="ano" value="<?=$ano?>" required>
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>

    <section>
        <h2>Resultado final</h2>
        <?php 
            echo "<p> você nasceu em $nascimento e vai ter <strong>$idade</strong> anos em <strong>$ano</strong>!.</p>";
        ?>
    </section>
</body>
</html>