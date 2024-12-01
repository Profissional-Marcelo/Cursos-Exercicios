<?php 

    //  $array1 = array("chave1" => "valor1", "chave2" => "valor2", "valor_igual" => 1);
    //  $array2 = array("chave3" => "valor3", "chave4" => "valor4", "valor_igual" => 1);
    // $array3 = array("chave4" => "valor4", "chave5" => "valor5");

    // //Junta todos os arrays em um só
    // $result = array_merge($array1, $array2, $array3);
    // print_r($result);

    //serve para retornar valores iguais de um array
    // print_r(array_intersect_key($array1, $array2));

    $arr = ['<p>Marcelo</p>', '<h1>Paulo</h1>', 'Guilherme'];

    print_r($arr);
//Serve para aplicar uma função em todos os elementos do array
    print_r(array_map('strip_tags', $arr));
?>