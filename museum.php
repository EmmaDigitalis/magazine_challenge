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
    <script src="js/emma.js"></script>
    <title>Museum</title>

    <!--Everything necessary for nav-->
    <link rel="stylesheet" href="css/style.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <script src="js/nav.js"></script>

    <!--fonts-->
    <link href="https://fonts.googleapis.com/css2?family=UnifrakturCook:wght@700&display=swap" rel="stylesheet">
</head>

<body id="body-museum">
<?php
    if (!isset($_SESSION["user"])){
        echo '<div class="trial">TRIAL VERSION</div>';
    }
?>

    <nav id="navbar">
        <button value="index.php" id="backhome" onclick="changePage(this.value);">Home</button>
        <button id="openclose" onclick="navToggle();">Close</button>
        <button value="ad-adobe.php" id="previous" onclick="changePage(this.value);">&lt;</button>
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
        <button value="minimalism.php" id="next" onclick="changePage(this.value);">&gt;</button>
    </nav>


    <main>
        <article>
            <h1>Nazi Design</h1>
            <h2>Een simpele analyse</h2>
            <p>Van 8 september 2019 tot en met 1 maart 2020 draaide het designmuseum in Den Bosch
                een tentoonstelling over “De Design van het Derde Rijk”. In deze tentoonstelling werd laten
                zien hoe de nazi’s gebruik maakten van design voor propaganda om hun idealen over te
                brengen naar het volk. In dit artikel gaan we eens kijken naar hoe dit precies gedaan werd.</p>
            <div class="ad"><a href="https://designmuseum.nl/"><img src="img/emma/ads/designmuseum.jpg" alt="ad"></a></div>
            <div class="items">
                <div id="itemb1" onclick="changeMus(-1);"></div>
                <div id="itemb2" onclick="changeMus(1);"></div>
                <section id="item-1">
                    <figure>
                        <img src="img/emma/museum/museum-1.jpg" alt="museum-1">
                        <figcaption>
                            Roger Federer wordt gebruikt in Gilette reclames om de kijkers af te leiden.
                            (<a href="https://www.youtube.com/watch?v=j6OT3rKtGn0">bron</a>)
                        </figcaption>
                    </figure>
                    <article>
                        <h2>
                            Manipulatie in de moderne wereld
                        </h2>
                        <p>
                            De nazi’s maakten veel gebruik van manipulatietechnieken. Voorbeelden hiervan kunnen we
                            gewoon terugvinden in de
                            moderne wereld; denk bijvoorbeeld aan reclames. Het gebruik van bijvoorbeeld een afleider
                            kan bijzonder effectief zijn om
                            te zorgen dat een reclame toch in je hoofd blijft steken, en daarmee je keuze om iets te
                            kopen beïnvloed. Denk bijvoorbeeld
                            aan het gebruik van beroemde sporters, of een irritant muziekje onder je reclame. Terwijl
                            jouw brein bezig is met het
                            absorberen van deze afleiders, heeft het bericht van de reclame zelf, gebruikelijk in de
                            vorm van een slogan, tijd om
                            zich in jouw brein te wurmen. (Bommel, 2018)
                        </p>
                    </article>
                </section>
                <section id="item-2">
                    <figure>
                        <img src="img/emma/museum/museum-2.jpg" alt="museum-2">
                        <figcaption>
                            Nazi poster verwerkt hakenkruis in ontwerp.
                        </figcaption>
                    </figure>
                    <article>
                        <h2>
                            Hoe de nazi's dit gebruikten.
                        </h2>
                        <p>
                            Zo maakten de nazi’s ook gebruik van dit soort afleiders. Neem deze poster bijvoorbeeld.
                            Deze grijpt je aandacht
                            met de man op het midden. Maar op de achtergrond is het hakenkruis zichtbaar, het symbool
                            dat Hitler van het
                            Hindoeïsme en Boeddhisme gestolen had, verwerkt achter het hoofd van deze man. Zo konden de
                            nazi’s essentieel
                            de “Nazi identiteit” verwerken in al zijn werken.
                        </p>
                    </article>
                </section>
                <section id="item-3">
                    <figure>
                        <img src="img/emma/museum/museum-3.jpg" alt="museum-3">
                        <figcaption>
                            Gestolen ontwerp Volkswagen kever. (Prooijen, 2019)
                        </figcaption>
                    </figure>
                    <article>
                        <h2>
                            Gestolen ontwerpen
                        </h2>
                        <p>
                            De nazi’s stalen ook heel veel van hun ontwerpen, en maakten het volk wijs dat het allemaal
                            door hen gemaakt was.
                            De swastika is bijvoorbeeld van religieuze achtergrond en het kleurenschema (rood met sterke
                            witte en zwarte
                            accenten) is gestolen de communisten. Maar meer direct is ook bijvoorbeeld het design van de
                            Volkswagen kever;
                            het ontwerp hiervan is een gestolen van de joodse Josef Ganz. (Prooijen, 2019) Het doel
                            hiervan? Aan Duitsland
                            vertellen “Wij zijn groots, wij zijn geweldig, wij zijn het sterkste land”. En ze slaagden
                            overduidelijk heel erg in.
                        </p>
                    </article>
                </section>
                <section id="item-4">
                    <figure>
                        <a href="https://designmuseum.nl/"><img src="img/emma/museum/museum-4.jpg" alt="museum-4"></a>
                        <figcaption>
                            Bezoek het designmuseum!
                        </figcaption>
                    </figure>
                    <article>
                        <h2>
                            Ter conclusie
                        </h2>
                        <p>
                            Alles bij elkaar genomen liet de tentoonstelling heel goed zien hoe nazi-Duitsland design
                            gebruikte voor het bereiken
                            van zijn eigen doelen. Van posters, tot radio’s die alleen nazi-frequenties kon ontvangen,
                            tot simpele huishoudt
                            objecten als stoelen en tafels, het doel van de nazi’s was overduidelijk om het leven van
                            het gehele volk over te
                            nemen. Gelukkig is het in de moderne wereld een stuk lastiger om zoiets voor elkaar te
                            krijgen. Met het bestaan
                            van het internet is het namelijk vrijwel helemaal onmogelijk om de volledige
                            informatiestroom vanuit het
                            buitenland af te kappen.
                        </p>
                    </article>
                </section>
            </div>
        </article>
    </main>

</body>

</html>