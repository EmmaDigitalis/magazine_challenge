<?php
    // Start the session
    session_start();
?>

<!doctype HTML>
<html lang="nl">

<head>
    <link rel="stylesheet" href="css/emma.css">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<script src="js/main.js"></script>-->
    <title>Colofon</title>

    <!--Everything necessary for nav-->
    <link rel="stylesheet" href="css/style.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <script src="js/nav.js"></script>

    <!--fonts-->
    <link href="https://fonts.googleapis.com/css2?family=UnifrakturCook:wght@700&display=swap" rel="stylesheet">

</head>

<body id="colofon">
<?php
    if (!isset($_SESSION["user"])){
        echo '<div class="trial">TRIAL VERSION</div>';
    }
?>

    <nav id="navbar">
        <button value="index.php" id="backhome" onclick="changePage(this.value);">Home</button>
        <button id="openclose" onclick="navToggle();">Close</button>
        <button value="grunge.php" id="previous" onclick="changePage(this.value);">&lt;</button>
        <select onchange="changePage(this.options[this.selectedIndex].value);">
            <option disabled selected value=""> -- Select -- </option>
            <option value="cover.php">Cover</option>
            <option value="about.php">About</option>
            <option value="ad-adobe.php">Adobe CC</option>
            <option value="museum.php">Nazidesign</option>
            <option value="minimalism.php">Minimalisme</option>
            <option value="sos.php">Style over Substance</option>
            <option value="50s.php">Design in de 50s</option>
            <option value="ad-studeren.php">Studeren?</option>
            <option value="interview.php">Interview</option>
            <option value="pepsi.php">Evolutie van Pepsi</option>
            <option value="flat.php">Skeuomorphism vs Flat</option>
            <option value="grunge.php">Grunge Design</option>
            <option value="colofon.php">Colofon</option>
        </select>
        <button value="" id="next" onclick="changePage(this.value);" disabled>&gt;</button>
    </nav>

    <main>
        <div class="container">
            <section>
                <h2>Colofon</h2>
                <div class="line"></div>
            </section>
            <figure><img src="img/logo.png" alt="Logo"> </figure>
            <section>
                <article>
                    <h2>Auteurs</h2>
                    <ul>
                        <li>Fleur Schmidt</li>
                        <li>emma de Jong</li>
                    </ul>
                </article>
                <div class="line"></div>
                <article>
                    <h2>Bronnen</h2>
                    <ol>
                        <li>Bommel, T. v. (2018). <i>Hoe reclame werkt zonder dat we het doorhebben.</i> Opgehaald
                            van Studio STT:
                            https://www.studiostt.nl/blog/hoe-reclame-werkt-zonder-dat-we-het-doorhebben
                        </li>
                        <li>Kasyoka, M. (2017). <i>Skeuomorphic Design, A History.</i> Opgehaald van OTB Africa:
                            https://www.otbafrica.com/index.php/ otb/item/198-skeuomorphic-design-a-history
                        </li>
                        <li>Kramer, L. (2019). <i>Flat design and semi-flat design: what it is and how to use it.</i>
                            Opgehaald
                            van 99designs:
                            https://en.99designs.nl/blog/design-history-movements/flat-design-and-semi-flat-design/
                        </li>
                        <li>Prooijen, E. v. (2019). <i>Volkswagen blijft de Joodse wortels van de Kever ontkennen.</i>
                            Opgehaald van EenVandaag:
                            https://eenvandaag.avrotros.nl/item/volkswagen-blijft-de-joodse-wortels-van-de-kever-ontkennen/
                        </li>
                        <li>
                            Arcgis.com. (Datum onbekend). <i>History of Pepsi.</i> Opgehaald van arcgis.com:
                            https://www.arcgis.com/apps/MapJournal/index.html?appid=393c4d6883e54e76a0cd5e8ab5df46fe#map
                        </li>
                        <li>
                            Swenson, M. (2013). <i>Is Grunge Design Dead.</i> Opgehaald van Idaho State University:
                            https://blog.cetrain.isu.edu/blog/bid/287381/Is-Grunge-Design-Dead
                        </li>
                        <li>
                            theminimalist. (datum onbekend). <i>What is Minimalism.</i> Opgehaald van theminimalist.com:
                            https://www.theminimalists.com/minimalism/
                        </li>
                    </ol>
                </article>
            </section>
        </div>
    </main>
</body>

</html>