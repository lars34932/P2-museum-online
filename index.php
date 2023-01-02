<?php
// haalt de taal uit de url
$lang = $_GET['lang'] ?? 'nl-NL';

// laad het goede bestand met hulp van variable
require_once "languages/language-" . $lang . '.php';
// 
// echo $translate['menu_3'];
?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <script type="module" defer src="main.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/dc84d7a956.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.typekit.net/ynx2yjc.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="fotos/money.ico" />
    <title>Museum website</title>
</head>

<!-- NAV BAR -->

<body>
    <header>
        <section class="container nav-balk">
            <img class="logo" src="fotos/logo.png" alt="logo van het nationaal video game museum">
            <nav class="nav-menu">
                <a href="#home">
                    <?= $translate['menu_1']; ?>
                </a>
                <a href="#tickets"> <?= $translate['menu_2']; ?> </a>
                <a href="#over">
                    <?= $translate['menu_3']; ?>
                </a>
                <a href="#fotos"> <?= $translate['menu_4']; ?> </a>
                <a href="#">
                    <?= $translate['menu_5']; ?>
                </a>
                <a href="#"> <?= $translate['menu_6']; ?> </a>

                <form action="" method="GET">
                    <select name="lang" onchange="this.form.submit()">
                        <option value="" hidden>Select Language</option>
                        <option value="nl-NL">Nederlands</option>
                        <option value="en">English</option>
                    </select>
                </form>
            </nav>
        </section>
    </header>

    <!-- HOME PAGE -->

    <main id="home">
        <article class="container split">
            <section class="col-1">
                <section class="game-museum-text">
                    <p>
                        <?= $translate['title']; ?>
                    </p>
                </section>
                <canvas id="game">

                    welkom!
                    </p>
                </canvas>
            </section>

            <section class="col-2">
                <section class="tickets-btn">
                    <section class="tickets-btn-left">
                        <p class="tickets-wit"> <?= $translate['blue_btn_1']; ?> </p>
                        <p class="tickets-zwart">
                            <?= $translate['blue_btn_2']; ?>
                        </p>
                        <section class="row">
                            <p class="locatie"><i class="fas fa-map-marker-alt"></i>
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

    <section id="" class="container">
        <article class="img-text-over">

            <section class="img-text-left">
                <h2>Over het Nationaal videogame museum</h2>
            </section>


            <section class="img-text-right">
                <section id="over">

                </section>
            </section>

        </article>
    </section>

    <!-- FOOTER -->

    <footer id="footer">
        <article class="container footer">

            <section class="footer-1">
                <img class="logo-footer" src="fotos/logo.png"
                    alt="foto van het logo van het nationaal videogame museum in Zoetermeer">
                <form id="emailForm">
                    <p class="formText1">Schrijf je in voor onze nieuwsbrief en blijf op de hoogte van alles in en rond
                        het mueseum!</p>
                    <input type="text" id="email" name="Email" placeholder="Email">
                    <button class="Inschrijf-btn">Schrijf mij in</button>
                    <p class="formText2">Door u aan te melden gaat u akkoord met de algemene voorwaarden van het NVGM.
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

            </section


            <section class="footer-3">

                <section class="contactGevens">
                    <h3>Contact</h3>
                    <p class="contact-links"><a href="tel:06-20662296">Bellen </a>: 079 – 360 27 18 </p>
                    <p class="contact-links"><a href="mailto:bente.kavsek@gmail.com">Mailen </a>: info@nationaalvideogamemuseum.nl</p>
                    <p> Adress: Theaterplein 11 <br> 2711 EK Zoetermeer​</p>


                    <section class="socials">
                        <a href="https://www.instagram.com/NVGMuseum/" target="_blank"><i
                                class="fa-brands fa-square-instagram"></i></a>
                        <a href="https://www.facebook.com/NationaalGameMuseum/" target="_blank"><i
                                class="fa-brands fa-square-facebook"></i></a>
                        <a href="https://twitter.com/NaVGMuseum" target="_blank"><i
                                class="fa-brands fa-square-twitter"></i></a>
                        <a href="https://www.youtube.com/channel/UCnNuMO-7-TVI5ZEZwzU14Ew/featured?view_as=subscriber"
                            target="_blank"><i class="fa-brands fa-square-youtube"></i></a>
                    </section>


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

                <p class="tijdsblok-btn">Bekijk Tijdsblokken</p>

            </section>
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

    </footer>


</body>

</html>