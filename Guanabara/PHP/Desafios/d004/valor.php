<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Conversor de moedas</title>
</head>

<body>
    <header>
        <h1>Conversor de Moedas v1.0</h1>
    </header>
    <main>
        <?php
        $valor = $_REQUEST['valor'] ?? 0;

        $inicio = date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y");

        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        $dados = json_decode(file_get_contents($url), true);
        $dolar = $dados["value"][0]["cotacaoCompra"];

        // echo("<p>Seus R\$" . number_format($valor, 2, ",", ".") . "equivalem a <strong>U\$" .  number_format($dolar, 2, ",",".") . "</strong><br>*Cotação fixa de R$4,85 </p> ");

        // Jeito mais profissional
        // Formatação de moedas com internacionalização!

        // Biblioteca intl (Internallization PHP)

        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        // Só trocar a lingua para ver em outro formato de moedas


        echo ("<p>Seus " . numfmt_format_currency($padrao, $valor, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD") . "</strong><br>*Cotação fixa de 4,85 </p> ");

        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>

</html>