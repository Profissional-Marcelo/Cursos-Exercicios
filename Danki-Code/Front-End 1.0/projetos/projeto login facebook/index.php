<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Saira+Extra+Condensed:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Login Facebook</title>
</head>

<body>
    <header>
        <div class="center">
            <div class="logo">
                <h2>facebook</h2>
            </div>
            <form method="post" class="form-login">
                <div class="form-element">
                    <p>E-mail ou telefone:</p>
                    <input type="email">
                </div>
                <div class="form-element">
                    <p>Senha:</p>
                    <input type="password" name="" id="">
                </div>
                <div class="form-element">
                    <input type="submit" name="acao" value="Enviar">
                </div>
            </form><!--Form-login-->
            <div class="clear"></div>
        </div> <!--Center-->
    </header>

    <section class="main">
        <div class="center">
            <div class="img-pessoas">
                <img src="https://img.freepik.com/vetores-premium/rede-de-pessoas-e-icone-social_1948-15383.jpg" alt="" >
            </div>
            <div class="abrir-conta">
                <h2>Abra sua conta</h2>
                <h3>É gratuito e sempre será.</h3>

                <form action="" class="criar-conta">
                    <div class="w50">
                        <input type="text" placeholder="Nome">
                    </div>
                    <div class="w50">
                        <input placeholder="Sobre" type="text">
                    </div>
                    <div class="w100">
                        <input placeholder="E-mail" type="email">
                    </div>
                    <div class="w100">
                        <input placeholder="Senha" type="password">
                    </div>
                    <div class="w100">
                        <h2>Data de Nascimento:</h2>
                        <select name="nascimento-dia" id="" class="nascimento">
                            <?php
                                for($i = 1; $i <= 31; $i++){

                               
                            ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php } ?>
                        </select>
                        <select name="nascimento-mes" id="" class="nascimento">
                            <option value="0">Junho</option>
                        </select>
                        <select name="nascimento-ano" id="" class="nascimento">
                            <?php 
                                for($i = 1990; $i <= 2024; $i++){
                            ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php } ?>
                        </select>
                        <div class="clear"></div>
                    </div>
                    <div class="w100">
                        <div class="input-radio">
                            <input type="radio" value="masculino" name="sexo" id="">
                            <h2>Masculino</h2>
                        </div>
                        
                        <div class="input-radio">
                            <input type="radio" value="feminino" name="sexo" id="">
                            <h2>Feminino</h2>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="w100">
                        <input type="submit" value="Cadastre-se">
                    </div>
                    <div class="clear"></div>
                </form>
            </div>
            <div class="clear"></div>
        </div>
    </section>

    <section class="linguas">
        <div class="center">
            <a class="selected-lingua" href="#">Português (BR)</a>
            <a href="#">Português (BR)</a>
            <a href="#">Português (BR)</a>
            <a href="#">Português (BR)</a>
            <a href="#">Português (BR)</a>
            <a href="#">Português (BR)</a>
            <a href="#">Português (BR)</a>
        </div>
        <div style="border:0;padding-top:10px;" class="center">
            <a href="#">Lorem Ipsun</a>
            <a href="#">Lorem Ipsun</a><a href="#">Lorem Ipsun</a><a href="#">Lorem Ipsun</a><a href="#">Lorem Ipsun</a><a href="#">Lorem Ipsun</a><a href="#">Lorem Ipsun</a><a href="#">Lorem Ipsun</a>                    
            <a href="#">Lorem Ipsun</a><a href="#">Lorem Ipsun</a><a href="#">Lorem Ipsun</a><a href="#">Lorem Ipsun</a><a href="#">Lorem Ipsun</a><a href="#">Lorem Ipsun</a><a href="#">Lorem Ipsun</a><a href="#">Lorem Ipsun</a><a href="#">Lorem Ipsun</a><a href="#">Lorem Ipsun</a><a href="#">Lorem Ipsun</a><a href="#">Lorem Ipsun</a><a href="#">Lorem Ipsun</a><a href="#">Lorem Ipsun</a>   
        </div>
    </section>
</body>

</html>