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
        $saque = $_REQUEST['saque'] ?? 5;
        $tot100 = (int)($saque / 100);
        $saque %= 100;
        $tot50 = (int)($saque / 50);
        $saque %= 50;
        $tot20 = (int)($saque / 20);
        $saque %= 20;
        $tot10 = (int)($saque / 10);
        $saque %= 10;
        $tot5 = (int)($saque / 5);
        $saque %= 5;
    ?>
    <main>
        <h1>Caixa eletrônico</h1>
        <form action="<?$_SERVER['PHP_SELF'];?>" method="get">
            <label for="saque">Valor</label>
            <input type="number" name="saque" id="saque" value="<?=$saque?>" step="5" required>
            <input type="submit" value="Enviar">
        </form>
    </main>
    <section>
        <h2>A quantidade de dinheiro R$<?=$saque?> em notas!</h2>
        <ul>
            <li> <img src="imagens/100-reais.jpg" alt=""> <?=$tot100?> nota(s) de R$100</li> <li> <img src="imagens/50-reais.jpg" alt=""> <?=$tot50?> nota(s) de R$50</li> <li> <img src="imagens/20-reais.jpg" alt=""> <?=$tot20?> nota(s) de R$20</li> <li> <img src="imagens/10-reais.jpg" alt=""> <?=$tot10?> nota(s) de R$10</li> <li> <img src="imagens/5-reais.jpg" alt=""> <?=$tot5?> nota(s) de R$5</li>
        </ul>
    </section>
</body>
</html>