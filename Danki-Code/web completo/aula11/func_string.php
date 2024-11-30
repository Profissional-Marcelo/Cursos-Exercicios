<?php 

$conteudo = 'lorem lorem lorem lorem lorem loremlorem lorem loremlorem lorem loremlorem lorem loremlorem lorem loremlorem lorem loremlorem lorem loremlorem lorem loremlorem lorem loremlorem lorem loremlorem lorem loremlorem lorem loremlorem lorem loremlorem lorem loremlorem lorem loremlorem lorem loremlorem lorem loremlorem lorem loremlorem lorem loremlorem lorem loremlorem lorem loremlorem lorem loremlorem lorem loremlorem lorem loremlorem lorem loremlorem lorem loremlorem lorem loremlorem lorem loremlorem lorem loremlorem lorem loremlorem lorem loremlorem lorem loremlorem lorem lorem';

// Serve para recortar uma string.
echo substr($conteudo,0,20);

$nome = 'Marcelo Henrique Cornelis Rei';

// Primeiro é o lugar que eu quero cortar, segundo é a variável
$nomes = explode(' ',$nome);
// print_r é para imprimir o array
print_r($nomes);


// Para juntar tudo de novo, eu faço um
// serve para juntar um array com um delimitador
$nomes = implode(' ', $nomes);



echo $nomes;


$conteudo = '<h1>Marcelo</h1>Outra coisa';

echo $conteudo;

// serve para tirar as tags html
echo strip_tags($conteudo);

$tag = '<div>';

// mostra o código html 

echo htmlentities($tag)
?>