<?php
// haalt de taal uit de url en maakt er variable van
$lang = $_GET['lang'] ?? 'nl-NL';

// laad het goede bestand met text met hulp van variable
require_once "languages/language-" . $lang . '.php';
?>

<!DOCTYPE html>
<html lang="<?= $lang; ?>">

<head>
    <meta charset="UTF-8">
    <title>Museum website</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/ynx2yjc.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="fotos/web-icon.svg" />
</head>


<!-- NAV BAR -->


<body>
    <section class="header-wrapper">
        <header id="header">
            <section class="container">

                <section id="navBar" class="nav-bar">
                    <img class="logo" src="fotos/logo.svg" alt="logo van het nationaal video game museum">
                    <nav class="nav-menu">

                        <a href="#home">
                            <?= $translate['menu_1']; ?>
                        </a>

                        <a href="#tickets">
                            <?= $translate['menu_2']; ?>
                        </a>

                        <a href="#over">
                            <?= $translate['menu_3']; ?>
                        </a>

                        <a href="#fotos">
                            <?= $translate['menu_4']; ?>
                        </a>

                        <a href="#openingstijden">
                            <?= $translate['menu_5']; ?>
                        </a>

                        <a href="#contact">
                            <?= $translate['menu_6']; ?>
                        </a>

                        <form action="" method="GET">
                            <label class="lang-selector" for="lang">Choose Language<br>

                                <select name="lang" onchange="this.form.submit()">

                                    <option value="nl-NL" <?=($lang === "nl-NL") ? "selected" : ""; ?>> Nederlands
                                    </option>
                                    <option value="en" <?=($lang === "en") ? "selected" : ""; ?>> English</option>

                                </select>
                            </label>
                        </form>

                    </nav>
                </section>

            </section>

        </header>
    </section>


    <!-- HOME PAGE -->


    <main id="home">
        <article class="container homeContent">

            <section class="game-col">

                <section class="game-col-text">
                    <p>
                        <?= $translate['title']; ?>
                    </p>
                </section>

                <canvas id="game"> </canvas>

            </section>

            <!-- TICKET KNOP BLAUW -->

            <section class="ticket-col">

                <section class="tickets-btn">

                    <section class="tickets-btn-left">
                        <a href="" class="tickets-link">
                            <?= $translate['blue_btn_1']; ?>
                        </a>
                        <p class="tickets-caption">
                            <?= $translate['blue_btn_2']; ?>
                        </p>

                        <section class="location-row">
                            <p class="location">
                                <i class="fas fa-map-marker-alt"></i>
                                <?= $translate['blue_btn_3']; ?>
                            </p>
                        </section>

                    </section>

                    <img class="barcode" src="fotos/qr-code-rr.png" alt="voorbeeld van een barcode van een ticket">
                </section>

            </section>


        </article>

        <!-- PIJL NAAR REST VD PAGINA -->

        <section class="arrow">
            <a href="#over"><img class="arrow-down" src="fotos/arrowDown.png" alt="pijltje naar benden"></a>
        </section>

    </main>

    <!-- ABOUT PAGE -->

    <section id="over">
        <section class="container">
            <article class="about">
                
                <section class="about-left">
                    <h2>
                        <?= $translate['over_title']; ?>
                    </h2>

                    <p>
                        <?= $translate['over_text_1']; ?>
                    </p>
                    <p>
                        <?= $translate['over_text_2']; ?>
                    </p>
                    <p>
                        <?= $translate['over_text_3']; ?>
                    </p>

                </section>


                </section>

            </article>
        </section>
    </section>

    <!-- CURVE -->

    <svg class="curve" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#f5f5f5" fill-opacity="1"
            d="M0,128L48,133.3C96,139,192,149,288,165.3C384,181,480,203,576,197.3C672,192,768,160,864,144C960,128,1056,128,1152,133.3C1248,139,1344,149,1392,154.7L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
        </path>
    </svg>

    <!-- Geschiedenis -->

    <section id="history">
        <section class="container">
            <article class="history">

                <section class="history-title">
                    <h2></h2>
                    <h2>De geschiedenis van het museum</h2>
                </section>

                <section class="histroy-content">
                    <section class="hirstory-left">
                        <img class="history-img" src="fotos/history-img.jpg" alt="">
                    </section>


                    <h2>
                        <?= $translate['geschiedenis_title']; ?>
                    </h2>
                    <p>
                        <?= $translate['geschiedenis_text_1']; ?>
                    </p>
                    <p>
                        <?= $translate['geschiedenis_text_2']; ?>
                    </p>
                    <p>
                        <?= $translate['geschiedenis_text_3']; ?>
                    </p>
                    <p>
                        <?= $translate['geschiedenis_text_4']; ?>
                    </p>
                    <p>
                        <?= $translate['geschiedenis_text_5']; ?>
                    </p>

                </section>

            </article>

        </section>
    </section>

    <!-- CURVE -->

    <svg class="curve" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#f5f5f5" fill-opacity="1"
            d="M0,96L48,112C96,128,192,160,288,176C384,192,480,192,576,181.3C672,171,768,149,864,160C960,171,1056,213,1152,224C1248,235,1344,213,1392,202.7L1440,192L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
        </path>
    </svg>

    <!-- FOTO SLIDER -->

    <section id="watTeDoen">
        <section class="container">
            <article class="watTeDoen">

                <h2>
                    <?= $translate['galerij_title']; ?>
                </h2>


                <section class="watTeDoen-content">

                    <section class="watTeDoen-left">

                        <section class="slideshow">

                            <section class="mySlides fade">
                                <section class="numbertext">1 / 5</section>
                                <img src="fotos/slider-1.JPG" style="width:100%">
                                <section class="text">
                                    <?= $translate['slider_1_text']; ?>
                                </section>
                            </section>

                            <section class="mySlides fade">
                                <section class="numbertext">2 / 5</section>
                                <img src="fotos/slider-2.jpg" style="width:100%">
                                <section class="text">
                                    <?= $translate['slider_2_text']; ?>
                                </section>
                            </section>

                            <section class="mySlides fade">
                                <section class="numbertext">3 / 5</section>
                                <img src="fotos/slider-3.JPG" style="width:100%">
                                <section class="text">
                                    <?= $translate['slider_3_text']; ?>
                                </section>
                            </section>

                            <section class="mySlides fade">
                                <section class="numbertext">4 / 5</section>
                                <img src="fotos/slider-4.JPG" style="width:100%">
                                <section class="text">
                                    <?= $translate['slider_4_text']; ?>
                                </section>
                            </section>

                            <section class="mySlides fade">
                                <section class="numbertext">5 / 5</section>
                                <img src="fotos/slider-5.JPG" style="width:100%">
                                <section class="text">
                                    <?= $translate['slider_5_text']; ?>
                                </section>
                            </section>

                            <a class="prev" onclick="plusSlides(-1)">❮</a>
                            <a class="next" onclick="plusSlides(1)">❯</a>

                        </section>
                        <br>

                        <section style="text-align:center">
                            <span class="dot" onclick="currentSlide(1)"></span>
                            <span class="dot" onclick="currentSlide(2)"></span>
                            <span class="dot" onclick="currentSlide(3)"></span>
                            <span class="dot" onclick="currentSlide(4)"></span>
                            <span class="dot" onclick="currentSlide(5)"></span>
                        </section>

                    </section>

                    <section class="watTeDoen-right">

                        <p>
                        <?= $translate['galerij_text']; ?>
                        </p>
                    </section>

                </section>

            </article>

        </section>
    </section>

    <!-- CURVE -->

    <svg class="curve" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#f5f5f5" fill-opacity="1"
            d="M0,256L48,256C96,256,192,256,288,245.3C384,235,480,213,576,208C672,203,768,213,864,213.3C960,213,1056,203,1152,186.7C1248,171,1344,149,1392,138.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
        </path>
    </svg>

    <!-- REVIEWS  -->

    <section id="reviews">
        <section class="container">

            <article class="reviews">

                <h2>
                    <?= $translate['reviews_title']; ?>
                </h2>

                <section class="reviews-content">

                    <section class="review">
                        <section class="user">
                            <img src="fotos/user-pic.png" alt="">
                            <h3>Iona van Neerven</h3>
                        </section>
                        <p>
                            <?= $translate['review_1_text']; ?>
                        </p>
                        <p class="rev-stars"><span>✩✩✩</span>✩✩</p>
                    </section>


                    <section class="review">
                        <section class="user">
                            <img src="fotos/user-pic.png" alt="">
                            <h3>Tiddo Stempher</h3>
                        </section>
                        <p>
                            <?= $translate['review_2_text']; ?>
                        </p>
                        <p class="rev-stars"><span>✩✩✩✩✩</span></p>
                    </section>


                    <section class="review">
                        <section class="user">
                            <img src="fotos/user-pic.png" alt="">
                            <h3>Franciska de Boom</h3>
                        </section>
                        <p>
                            <?= $translate['review_3_text']; ?>
                        </p>
                        <p class="rev-stars"><span>✩✩✩✩</span>✩</p>
                    </section>

                </section>

            </article>

        </section>
    </section>

    <!-- CURVE -->

    <svg class="footer-curve" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#0C120C" fill-opacity="1"
            d="M0,160L48,170.7C96,181,192,203,288,202.7C384,203,480,181,576,186.7C672,192,768,224,864,218.7C960,213,1056,171,1152,165.3C1248,160,1344,192,1392,208L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
        </path>
    </svg>

    <!-- FOOTER -->

    <footer id="footer">
        <section class="container">
            <article class="footer">

                <section class="footer-1">
                    <img class="logo-footer" src="fotos/logo.svg"
                        alt="foto van het logo van het nationaal videogame museum in Zoetermeer">

                    <form id="emailForm">
                        <p class="formText1">
                            <?= $translate['footer_1_text_1']; ?>
                        </p>
                        <input type="text" id="email" name="Email" placeholder="Email">
                        <button class="Inschrijf-btn">
                            <?= $translate['footer_1_btn']; ?>
                        </button>
                        <p class="formText2">
                            <?= $translate['footer_1_text_2']; ?>
                        </p>

                    </form>

                </section>

                <section class="footer-2">

                    <h3>
                        <?= $translate['footer_2_title']; ?>
                    </h3>

                    <section class=" footer-2_Links">
                        <ul class="websiteLinks">
                            <li><a href="">
                                    <?= $translate['menu_1']; ?>
                                </a></li>
                            <li><a href="">
                                    <?= $translate['menu_2']; ?>
                                </a></li>
                            <li><a href="">
                                    <?= $translate['menu_3']; ?>
                                </a></li>
                            <li><a href="">
                                    <?= $translate['menu_4']; ?>
                                </a></li>
                            <li><a href="">
                                    <?= $translate['menu_5']; ?>
                                </a></li>
                            <li><a href="">
                                    <?= $translate['menu_6']; ?>
                                </a></li>
                        </ul>
                    </section>

                </section>


                <section class="footer-3">
                    <section class="contactGevens">
                        <h3>
                            <?= $translate['footer_3_title_1']; ?>
                        </h3>
                        <section class="contactGegevens-content">

                            <section class="contactGegevens-icons">
                                <i class="fas fa-phone"></i>
                                <i class="fas fa-envelope"></i>
                                <i class="fas fa-map-marker-alt"></i>
                            </section>

                            <section class="contactGegevens-links">
                                <a href="tel:06-20662296">079 – 360 27 18</a>
                                <a href="mailto:bente.kavsek@gmail.com">info@nationaalvideogamemuseum.nl</a>
                                <a href="https://goo.gl/maps/u4hqWnHc5FYFSg4s8">Theaterplein 11, 2711 EK Zoetermeer</a>
                            </section>

                        </section>

                        <section class="socials">
                            <h4>
                                <?= $translate['footer_3_title_2']; ?>
                            </h4>

                            <section class="social-media">

                                <a href="https://www.instagram.com/NVGMuseum/" target="_blank">
                                    <i class="fa-brands fa-square-instagram"></i>
                                </a>

                                <a href="https://www.facebook.com/NationaalGameMuseum/" target="_blank">
                                    <i class="fa-brands fa-square-facebook"></i>
                                </a>

                                <a href="https://twitter.com/NaVGMuseum" target="_blank">
                                    <i class="fa-brands fa-square-twitter"></i>
                                </a>

                                <a href="https://www.youtube.com/channel/UCnNuMO-7-TVI5ZEZwzU14Ew/featured?view_as=subscriber"
                                    target="_blank"><i class="fa-brands fa-square-youtube"></i>
                                </a>

                            </section>

                        </section>


                    </section>
                </section>


                <section class="footer-4">
                    <h3>
                        <?= $translate['footer_4_title']; ?>
                    </h3>

                    <section class="openingstijden">
                        <section class="dagen">
                            <p>
                                <?= $translate['footer_4_dag_1']; ?>
                            </p>
                            <p>
                                <?= $translate['footer_4_dag_2']; ?>
                            </p>
                            <p>
                                <?= $translate['footer_4_dag_3']; ?>
                            </p>
                            <p>
                                <?= $translate['footer_4_dag_4']; ?>
                            </p>
                            <p>
                                <?= $translate['footer_4_dag_5']; ?>
                            </p>
                            <p>
                                <?= $translate['footer_4_dag_6']; ?>
                            </p>
                            <p>
                                <?= $translate['footer_4_dag_7']; ?>
                            </p>
                        </section>

                        <section class="tijden">
                            <p>
                                <?= $translate['footer_4_dicht']; ?>
                            </p>
                            <p>
                                <?= $translate['footer_4_dicht']; ?>
                            </p>
                            <p>10:00 - 18:00</p>
                            <p>10:00 - 18:00</p>
                            <p>10:00 - 21:00</p>
                            <p>10:00 - 18:00</p>
                            <p>12:00 - 18:00</p>
                        </section>
                    </section>

                    <a href="" class="tijdsblok-btn">
                        <?= $translate['footer_4_tijdBtn']; ?>
                    </a>

                </section>

            </article>

            <article class="footerPolicys">

                <section class="footerPolicys-content">

                    <p>
                        <?= $translate['footer_copyright']; ?>
                    </p>

                    <section class="policy-links">
                        <a href="">
                            <?= $translate['footer_algemeneVoorwaarden']; ?>
                        </a>
                        <a href="">Coo
                            <?= $translate['footer_cookieInstellingen']; ?>kie instellingen
                        </a>
                        <a href="">
                            <?= $translate['footer_privacyVerklaring']; ?>
                        </a>
                    </section>

                </section>

            </article>

            <!-- FOOTER POLICYS -->

            </article>
        </section>
    </footer>

    <script src="https://kit.fontawesome.com/dc84d7a956.js" crossorigin="anonymous"></script>
    <script src="main.js"></script>
</body>

</html>