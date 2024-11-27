<?php 
// Trabalhando com datas

/*
//Define o fuso horário para não ferrar a hora
date_default_timezone_set('America/Sao_Paulo');


// date pega a data e também inclui as horas
// e a função time, serve para calcular junto com o tempo que desejo alterar da hora atual
$data = date('d/m/Y H:i:s', time()+(60*10));

echo $data;
*/
$titulo_site = 'Meu site';
include('header.php');

?>

    <h1>Meu conteúdo da home!</h1>
<?php 
    include('footer.php');
?>