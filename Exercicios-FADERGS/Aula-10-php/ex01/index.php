<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <form  method="post" action="calculadora.php">
        Número 1: <input type="text" name="num1"><br>
        Número 2: <input type="text" name="num2"><br>
        Operação:
    <select name="operation">
        <option value="add">Adição</option>
        <option value="subtract">Subtração</option>
        <option value="multiply">Multiplicação</option>
        <option value="divide">Divisão</option>
    </select><br>
    <input type="submit" value="Calcular">
    </form>
</body>

</html>