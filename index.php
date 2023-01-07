<?php
// haalt de taal uit de url en maakt er variable van
$lang = $_GET['lang'] ?? 'nl-NL';

// laad het goede bestand met text met hulp van variable
require_once "languages/language-" . $lang . '.php';
// 

?>

<!DOCTYPE html>
<html lang="<?= $lang; ?>">

<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/ynx2yjc.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="fotos/money.ico" />
    <title>Museum website</title>
</head>


<!-- NAV BAR -->


<body>
    <section class="header-wrapper">
        <header id="header">
            <section class="container">
                <section class="nav-bar">
                    <img class="logo" src="fotos/LOGOTEST.svg" alt="logo van het nationaal video game museum">
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

                                    <option value="nl-NL" <?=($lang === "nl-NL") ? "selected" : ""; ?>>
                                        <img src="fotos/nl-NL-flag.png" alt=""> Nederlands
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

            <section class="ticket-col">
                <section class="tickets-btn">
                    <section class="tickets-btn-left">
                        <a href="" class="tickets-link"><?= $translate['blue_btn_1']; ?> </a>
                        <p class="tickets-caption">
                            <?= $translate['blue_btn_2']; ?>
                        </p>
                        <section class="location-row">
                            <p class="location"><i class="fas fa-map-marker-alt"></i>
                                <?= $translate['blue_btn_3']; ?>
                            </p>
                        </section>
                    </section>
                    <img class="barcode" src="fotos/qr-code-rr.png" alt="voorbeeld van een barcode van een ticket">
                </section>
            </section>
        </article>

        <section class="arrow">
            <a href="#over"><img class="arrow-down" src="fotos/arrowDown.png" alt="pijltje naar benden"></a>
        </section>

    </main>


    <!-- ABOUT PAGE -->


    <section class="container">
        <article class="about">

            <section class="about-left">
                <h2>Over het Nationaal videogame museum</h2>
                <p>Het Nationaal Videogame Museum is 'the place to be' voor iedereen die meer wil weten en beleven
                    over
                    videogames.
                    Het museum laat bezoekers de games van nu én van vroeger ervaren. <br>
                    Gamers van jong tot oud zijn welkom om te spelen, ontdekken, leren en ervaringen online te
                    delen.
                </p>
            </section>


            <section class="about-right">
                <section id="over-img">

                </section>
            </section>

        </article>
    </section>


    <!-- FOTO SLIDER -->


    <section class="container">

        <article class="swiper foto-slider">

            <section class="swiper-wrapper">


                <section class="swiper-slide">
                    <section class="foto-slider-content">
                        <img class="slider1-foto" src="fotos/museumfoto1.jpg" alt="...........................">
                    </section>
                </section>

                <section class="swiper-slide">
                    <section class="foto-slider-content">
                        <img class="slider1-foto" src="fotos/museumfoto2.jpg" alt="...........................">
                    </section>
                </section>

                <section class="swiper-slide">
                    <section class="foto-slider-content">
                        <img class="slider1-foto" src="fotos/museumfoto3.jpg" alt="...........................">
                    </section>
                </section>

                <section class="swiper-slide">
                    <section class="foto-slider-content">
                        <img class="slider1-foto" src="fotos/museumfoto4.jpg" alt="...........................">
                    </section>
                </section>

            </section>

            <section class="swiper-pagination"></section>

            <section class="swiper-button-prev"></section>
            <section class="swiper-button-next"></section>

        </article>

        <section class="container">

            <article class="swiper foto-slider">

                <section class="swiper-wrapper">


                    <section class="swiper-slide">
                        <section class="foto-slider-content">
                            slider stuff hier
                        </section>
                    </section>

                    <section class="swiper-slide">
                        <section class="foto-slider-content">
                            slider stuff hier
                        </section>
                    </section>

                    <section class="swiper-slide">
                        <section class="foto-slider-content">
                            slider stuff hier
                        </section>
                    </section>

                </section>

                <section class="swiper-pagination"></section>

                <section class="swiper-button-prev"></section>
                <section class="swiper-button-next"></section>

            </article>

        </section>
    </section>

    <!-- Geschiedenis -->

    <section class="container">


    </section>

    <!-- FOOTER -->

    <footer id="footer">
        <section class="container">
            <article class="footer">

                <section class="footer-1">
                    <img class="logo-footer" src="fotos/logo.png"
                        alt="foto van het logo van het nationaal videogame museum in Zoetermeer">
                    <form id="emailForm">
                        <p class="formText1">Schrijf je in voor onze nieuwsbrief en blijf op de hoogte van alles in
                            en
                            rond
                            het mueseum!</p>
                        <input type="text" id="email" name="Email" placeholder="Email">
                        <button class="Inschrijf-btn">Schrijf mij in</button>
                        <p class="formText2">Door u aan te melden gaat u akkoord met de algemene voorwaarden van het
                            NVGM.
                        </p>

                    </form>

                </section>

                <section class="footer-2">

                    <h3>Links</h3>

                    <section class="footer-2_Links">
                        <ul class="websiteLinks">
                            <a href="">Home</a>
                            <a href="">Tickets</a>
                            <a href="">Geschiedenis</a>
                            <a href="">Foto's</a>
                            <a href="">Openingstijden</a>
                            <a href="">Contact</a>
                        </ul>

                        <ul class="websiteLinks">
                            <a href="">item 7</a>
                            <a href="">item 8</a>
                            <a href="">item 9</a>
                        </ul>
                    </section>

                </section class="footer-3">

                <section class="contactGevens">
                    <h3>Contact</h3>
                    <p class="contact-links"><a href="tel:06-20662296">Bellen </a>: 079 – 360 27 18 </p>
                    <p class="contact-links"><a href="mailto:bente.kavsek@gmail.com">Mailen </a>:
                        info@nationaalvideogamemuseum.nl</p>
                    <p> Adress: Theaterplein 11 <br> 2711 EK Zoetermeer​</p>


                    <section class="socials">
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

                <section class="footer-4">
                    <h3>Openingstijden</h3>

                    <section class="openingstijden">
                        <section class="dagen">
                            <p>maandag</p>
                            <p>dinsdag</p>
                            <p>woensdag</p>
                            <p>donderdag</p>
                            <p>vrijdag</p>
                            <p>zaterdag</p>
                            <p>zondag</p>
                        </section>

                        <section class="tijden">
                            <p>gesloten</p>
                            <p>gesloten</p>
                            <p>10:00 - 18:00</p>
                            <p>10:00 - 18:00</p>
                            <p>10:00 - 21:00</p>
                            <p>10:00 - 18:00</p>
                            <p>12:00 - 18:00</p>
                        </section>
                    </section>

                    <a href="" class="tijdsblok-btn">Bekijk Tijdsblokken </a>

                </section>

            </article>

            <article class="footerPolicys">

            </article>

            <!-- FOOTER POLICYS -->

            <section class="footerPolicys-content container">

                <p>Copyright © Nationaal Videogame Museum </p>

                <section class="policy-links">
                    <a href="">Algemene voorwaarden</a>
                    <a href="">Cookie instellingen</a>
                    <a href="">Privacy verklaring</a>
                </section>

            </section>

            </article>
        </section>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/dc84d7a956.js" crossorigin="anonymous"></script>
    <script src="main.js"></script>
</body>

</html>