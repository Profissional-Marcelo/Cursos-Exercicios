
<?php
$arr = array('chave1' =>'Marcelo', 'Arthur', 'João');

// foreach ($arr as $key => $value){
//     echo $key;
//     echo '=>';
//     echo $value;
//     echo '<br>';
// }


$total = count($arr);

// Vai dar errado, por conta da primeira chave que definimos um valor personalizado, diferente do foreach

for($i = 0; $i < $total; $i++){
    echo $arr[$i];
}

?>