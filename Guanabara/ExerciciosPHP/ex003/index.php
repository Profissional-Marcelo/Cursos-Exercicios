<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>

<body>
    
    <h1>Testes de tipos primitivos</h1>
    <?php
    //  0x = hexadecimal 0b = binário 0 = octal 
    //     $num = 0x1A;
    //     echo "O valor da variável é $num"
    // $v = "Gustavo";
    // var_dump($v);
    // // ou integer)
    // $num = (int) 3e2; // 3 x 10 (2) COERÇÃO
    // echo "O valor é $num ";
    // var_dump($num)

    $vet = [6, 2, 9, 3, 5];
    var_dump($vet);

    class Pessoa {
        private string $nome;
    }

    $p = new Pessoa;
    var_dump($p);

    ?>
</body>

</html>