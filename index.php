<!--
|
| View Design -> Index -> Login
|
-->
<!DOCTYPE html>
<html lang="es">
    <head>
        <!-- Meta -->
        <meta charset="utf-8"/>
        <meta http-equiv="content-type" content="text/html; charset=iso-8859-1"/>
        <meta name="authors" content="dp-DevelopmentSoftware"/>
        <meta name="keywords" content="Daesy Hinojosa" />
        <meta name="description" content="Diputada Daesy Hinojosa" />
        <meta name="robots" content="all" />      
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>

        <title>Diputada Daesy Hinojosa</title>
        <link href="" rel="icon"/>
        
        <!-- CSS -->
        <link rel="stylesheet" href="public/css/bootstrap.css"/>
        <link rel="stylesheet" href="public/css/main.css"/>

        <!-- JS -->
        <script src="public/js/jquery-2.1.4.js"></script>
        <script src="public/js/bootstrap.js"></script>
    </head>
    <body>
        <section id="home" data-type="parallax_section" data-speed="10">
            <div class="mainMenu">
                <div class="container">
                    <div class="header clearfix next-page">
                        <nav>
                            <ul class="nav nav-pills pull-right">
                                <li role="presentation"><a href="#section3">Inicio</a></li>
                                <li role="presentation"><a href="#">Conóceme</a></li>
                                <li role="presentation"><a href="#">Trabajo legislativo</a></li>
                                <li role="presentation"><a href="#">Programas de vinculación</a></li>
                                <li role="presentation"><a href="#">#3de3</a></li>
                                <li role="presentation"><a href="#">Prensa</a></li>
                                <li role="presentation"><a href="#">Video</a></li>
                                <li role="presentation"><a href="#">Contacto</a></li>
                            </ul>
                        </nav>
                        <h3 class="text-muted"><!--<img src="public/img/logosBanners/logodaesy.png">--></h3>
                    </div>
                </div>
            </div>

            <article>
                <?php include_once dirname(__FILE__) . '/app/views/home/sliderCarousel.php'; ?>
            </article>
        </section>
        <section id="section2" data-type="parallax_section" data-speed="10">
            <article>
                <h2>Pagina #2</h2>
            </article>
        </section>
        <section id="section3" data-type="parallax_section" data-speed="10">
            <article>
                <h2>Pagina #3</h2>
            </article>
        </section>
    </body>
</html>