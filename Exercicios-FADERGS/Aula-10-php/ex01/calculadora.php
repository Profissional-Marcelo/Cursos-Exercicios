<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operation = $_POST["operation"];

    // Valida se os números são numéricos
    if(is_numeric($num1) && is_numeric($num2)) {
        // Realiza a operação selecionada
        switch($operation) {
            case "add":
                $result = $num1 + $num2;
                break;
            case "subtract":
                $result = $num1 - $num2;
                break;      
            case "multiply":
                $result = $num1 * $num2;
                break;
            case "divide":
                // Verifica se o divisor não é zero antes de realizar a divisão
                $result = ($num2 != 0) ? $num1 / $num2 : "Erro: Divisão por zero";
                break;  
            default:
                    $result = "Operação inválida";
                    break;  

        }

        echo "Resultado da operação: $result";

    } else {
        echo "Por favor, insira números válidos.";
    }
 }
 ?>