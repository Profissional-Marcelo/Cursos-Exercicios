<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <style>
        .error {
            color: #FF0000;
        }
    </style>
</head>
<body>
    <?php
    $nameErr = $emailErr = $genderErr = $websiteErr = "";
    $name = $email = $gender = $comment = $website = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "O nome é requerido!";
        } else {
            $name = test_input($_POST["name"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                $nameErr = "São aceitas somente letras e espaços em branco!";
            }
        }

        if (empty($_POST["email"])) {
            $emailErr = "Email é requerido";
        } else {
            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Formato de e-mail inválido!";
            }
        }

        if (empty($_POST["website"])) {
            $website = "";
        } else {
            $website = test_input($_POST["website"]);
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
                $websiteErr = "Formato de URL inválido!";
            }
        }

        if (!empty($_POST["comment"])) {
            $comment = "";
        } else {
            $comment = test_input($_POST["comment"]);
        }

        if (empty($_POST["gender"])) {
            $genderErr = "Gênero requerido!";
        } else {
            $gender = test_input($_POST["gender"]);
        }
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <h2>Formulário de Dados</h2>
    <p><span class="error">* Campo obrigatório</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Nome: <input type="text" name="name" value="<?php echo $name;?>">
        <span class="error">* <?php echo $nameErr;?></span>
        <br><br>
        E-mail: <input type="text" name="email" value="<?php echo $email;?>">
        <span class="error">* <?php echo $emailErr;?></span>
        <br><br>
        Website: <input type="text" name="website" value="<?php echo $website;?>">
        <span class="error"><?php echo $websiteErr;?></span>
        <br><br>
        Comentário: <textarea name="comment" cols="40" rows="5"><?php echo $comment;?></textarea>
        <br><br>
        Gênero
        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "Feminino") echo "checked";?> value="Feminino"> Feminino
        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "Masculino") echo "checked";?> value="Masculino"> Masculino
        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "Outro") echo "checked";?> value="Outro"> Outro
        <span class="error">* <?php echo $genderErr;?></span>
        <br><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
    echo "<h2>Seus dados:</h2>";
    echo $name . "<br>";
    echo $email . "<br>";
    echo $website . "<br>";
    echo $comment . "<br>";
    echo $gender;
    ?>
</body>
</html>
