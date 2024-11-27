<?php 

    // Array single.
    $arr = ['Marcelo', 'Arthur', 'João'];
    $array = array('Arthur', 'João', 'Marcelo');

    $arr[0] = 'Guilherme';
    $arr[] = 'João';

    // array Multidimensionais

    $arr2 = array(array('Marcelo', 'Paulo'), array('João', 'Guilherme'));

    echo $arr2[0][0];
?>