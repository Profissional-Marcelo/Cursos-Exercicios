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
    </div>
</section>


<section class="contato">
    <div claa="center">
        <div class="w50 contato-info">
            <h2> A mais importante,<br>primeira conversa.</h2>
            <br>
            <p><strong>Telefone:</strong> (99) 99999-9999</p>
            <p><strong>Telefone:</strong> (99) 99999-9999</p>
            <p><strong>Telefone:</strong> (99) 99999-9999</p>
            <div class="mapa-container">
                <div id="mapa">
                </div>
            </div>
        </div>
            <div class="w50 contato-form">
                <form>
                    <input
                     placeholder="Nome" type="text">
                    <input placeholder="E-mail" type="text">
                    <input placeholder="Telefone" type="text">
                    <select>
                        <option>Geral</option>
                        <option>Suporte</option>
                    </select>
                    <textarea placeholder="Mensagem"></textarea>
                    <input type="submit" value="Enviar!">
                </form>
            </div>

        
        <div class="clear">
        </div>
    </div>
</section>

<footer style="padding: 60px 0;">
    <div class="center">
        <div class="col-footer">
            <h2>Suporte</h2>
            <a href="#">Contato</a>
            <a href="#">FAQ</a>
        </div>
        <div class="col-footer">
            <h2>Suporte</h2>
            <a href="#">Contato</a>
            <a href="#">FAQ</a>
        </div>
        <div class="col-footer">
            <h2>Suporte</h2>
            <a href="#">Contato</a>
            <a href="#">FAQ</a>
        </div>

        <div style="width: 40%;text-align: right;" class="col-footer">
            <img src="img/logo-footer.png" alt="">
        </div>
    </div>
</footer>

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
    $('section.depoimentos .depoimentos-box').slick({
        dots: true,
        arrows: false,
        infinite: true,
        speed: 1000,
        slidesToShow: 1,
        centerMode: false
    });
</script>
<script>
    $('.menu-mobile span').click(function() {
        $('.menu-mobile').find('ul').slideToggle()
    })
</script>
</body>

</html>