<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <title>Danki Code - Tema</title>
</head>

<body>
    <section class="topo">
        <div class="center">
            <header>
                <div class="logo">
                    <img src="img/logo.png" alt="">
                </div>
            </header>
            <ul class="menu-desktop">
                <li><a href="">Home</a></li>
                <li><a href="">Sobre</a></li>
                <li><a href="">Contato</a></li>
            </ul>
            <div class="menu-mobile">
                <span class="material-symbols-outlined"> format_align_right </span>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Contato</a></li>
                </ul>
            </div>
            <div class="clear"></div>
            <br><br>
            <div class="w50 time-descricao">
                <h2>Melhore a comunicação com seu cliente e time</h2>
                <p>Consultoria especializada em startups, empresas, principalmente, pessoas.</p>
                <a href="https://dankicode.com" target="_blank">Ver demonstração</a>
            </div>
            <div class="w50 time-imagem">
                <img src="img/equipe.png" alt="">
            </div>
            <div class="clear"></div>
        </div>
    </section>
    <div class="circle">
        <span class="material-symbols-outlined">
            stat_minus_1
        </span>
    </div>
    <section class="clientes-slider">
        <div class="center">
            <div style="max-width: 700px; margin: 0 auto; overflow: hidden; " class="slider-container">
                <img class="img" src="img/amazon.png" alt="logo amazon">
                <img class="img" src="img/costco.png" alt="logo costco">
                <img class="img" src="img/dominos.png" alt="logo dominos">
                <img class="img" src="img/walmart.png" alt="logo walmart">
                <img class="img" src="img/uber.png" alt="logo uber">
            </div>
        </div>
    </section>
    <section class="diferenciais">
        <div class="center">
            <h2>Contribuímos de ponta a ponta</h2>

            <div class="icons-diferenciais">

                <div class="box-single-diferenciais">
                    <img src="img/icon1.png" alt="icone 1">
                    <h3>Ambientes Mobile</h3>
                    <p>Garanta qeu toda sua comunicação esteja alinhada com seu propósito, cada palavra conta.</p>
                </div>

                <div class="box-single-diferenciais">
                    <img src="img/icon2.png" alt="icone 2">
                    <h3>Ambientes Mobile</h3>
                    <p>Garanta qeu toda sua comunicação esteja alinhada com seu propósito, cada palavra conta.</p>
                </div>

                <div class="box-single-diferenciais">
                    <img src="img/icon3.png" alt="icone 3">
                    <h3>Ambientes Mobile</h3>
                    <p>Garanta qeu toda sua comunicação esteja alinhada com seu propósito, cada palavra conta.</p>
                </div>

            </div>


        </div>
    </section>
    <section class="sobre-time">
        <div class="center">
            <div class="w50 time-descricao-2">
                <h2>Um time experiente,<br> comunicador e coeso.</h2>
                <p>A product Run acredita que marcas fortes são construidas a partir de trnasformações importantes e positivas na vida dos consumidores. Exatamente como uma conversa que ganha forma, a ideia vira flâmula.
               </p>
               <p>Comunicar bem, de forma coerente e clara não é algo fácil e estmos aqui para ajudar você e seu time. Você escolhe, remoto ou presencial, para seu cliente ou seu público interno, você determina como vamos te ajudar. </p>
               
            </div>
            <div class="w50 img-time">
                <img src="img/time.png" alt="time">
            </div>
            <div class="clear"></div>
        </div>
    </section>
    <script src="js/jquery.js"></script>
    <script src="js/slick.min.js"></script>
    <script type="text/javascript">
        $('section.clientes-slider .slider-container').slick({
            dots: true,
            arrows: false,
            infinite: false,
            speed: 1000,
            slidesToShow: 4,
            autoplay: true,
            centerMode: false,
            autoplaySpeed: 3000,
            pauseOnHover: false,
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 2
                }
            }]

        });
    </script>
    <script>
        $('.menu-mobile span').click(function(){
            $('.menu-mobile').find('ul').slideToggle()
        })
    </script>
</body>

</html>