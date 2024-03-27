<?php
    // Start the session
    session_start();

    if (!isset($_SESSION["user"])){
        //Set Refresh header using PHP.
        header( "refresh:0;url=notloggedin.php" );
    }
?>


<!doctype HTML>
<html lang="nl">

<head>
    <link rel="stylesheet" href="css/emma.css">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/emma.js"></script>
    <title>Designer Interview</title>

    <!--Everything necessary for nav-->
    <link rel="stylesheet" href="css/style.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <script src="js/nav.js"></script>

    <!--fonts-->
    <link href="https://fonts.googleapis.com/css2?family=UnifrakturCook:wght@700&display=swap" rel="stylesheet">
</head>

<body id="interview">
<nav id="navbar">
        <button value="index.php" id="backhome" onclick="changePage(this.value);">Home</button>
        <button id="openclose" onclick="navToggle();">Close</button>
        <button value="ad-studeren.php" id="previous" onclick="changePage(this.value);">&lt;</button>
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
        <button value="pepsi.php" id="next" onclick="changePage(this.value);">&gt;</button>
    </nav>

    <main>
        <!--Page 1-->
        <section id="sec-1">
            <header>
                <h2>Het leven van een designer</h2>
                <h1>Eric Sips</h1>
            </header>
            <div class="container">
                <article>
                    <h2>Introductie</h2>
                    <p>Recentelijk hebben we de kans gehad om Eric Sips, een vormgever gespecialiseerd in typografie,
                        te interviewen. Eric Sips was vanaf jongs af aan al bezig met vormgeven, hoewel hij zijn passie
                        hiervoor pas echt ontdekte op het Sint Lucas in Boxtel – een vakschool met zowel mbo als vmbo
                        dat zich richt op het creatieve – en daarna de kunstacademie. Na daarna lange tijd bij diverse
                        bureaus gewerkt te hebben, is Eric gaan lesgeven op het Grafisch Lyceum in Utrecht, en dat doet
                        hij nu nog steeds.</p>
                </article>
                <figure>
                    <img src="img/emma/interview/st-lucas.jpg" alt="Sint Lucas">
                    <figcaption>Sint Lucas in Boxtel</figcaption>
                </figure>
            </div>
        </section>

        <!--Page 2-->
        <section id="sec-2" class="hidden">
            <header>
                <h2>Het leven van een designer</h2>
                <h1>Eric Sips</h1>
            </header>
            <div class="container">
                <article>
                    <h2>Achtergrond</h2>
                    <p>
                        Wanneer we Eric vroegen om zijn verleden in de industrie, vertelde hij dat hij om te beginnen
                        bij
                        diverse reclamebureaus heeft gewerkt. Hier begon hij als dtp’er, waar hij voornamelijk logo’s en
                        folders maakte, en is daar uit uiteindelijk door ontwikkelt naar het maken van brochures en
                        tijdschriften. Uit eindelijk werd hij artdirector van een studio, en was hij verantwoordelijk
                        voor al het werk dat daar werd geleverd.
                    </p>
                    <p>
                        Later heeft Eric ook nog bij een multimediabedrijf gewerkt, gespecialiseerd in het maken van
                        filmpjes. Deze werden in die tijd op grote schermen in steden als Rotterdam en Amsterdam
                        afgespeeld, die zij toen overigens ook aanstuurden. Verder heeft heeft hij in zijn tijd als
                        vormgever ook
                        volledige campagnes gemaakt, van logo, tot huisstijl, tot display.
                    </p>
                </article>
                <figure>
                    <img src="img/emma/interview/magazine.jpg" alt="90' Magazine">
                    <figcaption>Magazine uit de jaren 90</figcaption>
                </figure>
            </div>
        </section>

        <!--Page 3-->
        <section id="sec-3" class="hidden">
            <header>
                <h2>Het leven van een designer</h2>
                <h1>Eric Sips</h1>
            </header>
            <div class="container">
                <article>
                    <h2>Workflow</h2>
                    <p>
                        Wanneer Eric begint met werken begint hij altijd met veel denken en schetsen. Dit is een stap
                        die hij erg belangrijk vindt, waarvan hij merkt dat er veel studenten zijn die het overslaan.
                        Door te schetsen spaar je namelijk veel ideeën, waar uiteindelijk een of meerdere echt goeie
                        concepten uit komen rollen. Deze bespreekt hij dan met de klant, en als daar een overeenkomst
                        wordt gevonden, wordt het idee verder uitgewerkt.
                    </p>
                    <p>
                        Maar hoe kom je überhaupt in de mindset dat je deze ideeën kan bedenken? Volgens Eric verschilt
                        dit per persoon; zo moeten sommigen een mega wandeling maken van 10 kilometer, anderen moeten
                        mediteren. Voor Eric is het een simpele kwestie van doorwerken. In ons gesprek vergeleek hij de
                        uitspraak “Nou ik heb niet zo’n inspiratie” – iets wat je veel studenten toch hoort zeggen
                        wanneer ze niet aan het werk komen – met het leven van een artiest. Deze kan ook niet tegen een
                        uitverkocht stadion zeggen “Nou, het lukt vanavond effe niet zo goed”. En dit doorzetten leer je
                        voornamelijk uit ervaring. Wanneer je doorzet, en ontspannen probeert te blijven, dan komen de
                        mooie ideeën vanzelf wel weer.
                    </p>
                </article>
                <figure>
                    <img src="img/emma/interview/wandelen.jpg" alt="wandelen">
                    <figcaption>Wandelen is één methode om tot rust te komen</figcaption>
                </figure>
            </div>
        </section>

        <!--Page 4-->
        <section id="sec-4" class="hidden">
            <header>
                <h2>Het leven van een designer</h2>
                <h1>Eric Sips</h1>
            </header>
            <div class="container">
                <article>
                    <h2>Meningen</h2>
                    <p>
                        We vroegen Eric om zijn mening over bepaalde zaken. Hieronder hebben we ze allemaal makkelijk
                        geordend.
                    </p>
                    <h2>Inspirerende logo’s</h2>
                    <p>
                        Er zijn veel logo’s die kunnen inspireren. Voor Eric specifiek ligt het bij de eenvoudige logo’s
                        zoals dat van Adidas en Nike. Dit zijn logo’s die sterk zijn in hun eenvoud en door de jaren
                        heen weinig veranderd zijn, en daardoor heel bekend zijn geworden.
                    </p>
                    <h2>Moderne designtrends</h2>
                    <p>
                        Eric doet zijn best om mee te blijven in de trends, maar vindt het soms lastig en ziet soms
                        bepaalde dingen waar hij geen fan van is, vooral in het minimalistische. Als voorbeeld noemt hij
                        dat veel websites tegenwoordig hetzelfde lijken te doen, met een foto bovenaan en tekst
                        daaronder.
                        Eric noemt verder ook vaak in tijdschriften te kijken om de trends bij te houden en zich te
                        laten inspireren.
                    </p>
                </article>
                <article>
                    <h2>Oude designtrends</h2>
                    <p>
                        Mist niet echt dingen uit het verleden, ze zijn nu niet relevant meer voor een reden. Echter is
                        het wel belangrijk om te kunnen leren van het verleden, en om het verleden te kunnen analyseren,
                        voor het geval je de opdracht “We gaan terug naar de jaren 80” krijgt.
                    </p>
                    <h2>Waar designers meer op moeten letten</h2>
                    <p>
                        Gaf heel snel antwoord met “Typografie”. Is van mening dat het af en toe heel beroerd is. Veel
                        mensen gaan ervan uit dat je alleen een tekstje intypt en dat dat alles is, maar dingen als
                        bijvoorbeeld interlinie en letterspatiëring zijn ontzettend belangrijk voor typografie.
                    </p>
                </article>
            </div>
        </section>

        <!--Page 5-->
        <section id="sec-5" class="hidden">
            <header>
                <h2>Het leven van een designer</h2>
                <h1>Eric Sips</h1>
            </header>
            <div class="container">
                <article>
                    <h2>Toekomst</h2>
                    <p>
                        Eric verwacht dat we voor logo-ontwerp in de toekomst veel eenvoudiger zullen gaan werken,
                        misschien wel door meer gebruik te maken van templates. Je ziet tegenwoordig dat veel meer
                        bedrijven zelf al wat proberen te knutselen voor hun logo’s. Wel zal er altijd onderscheid
                        blijven tussen bedrijven die een echt ludiek logo willen en bedrijven die alleen een template
                        gebruiken.
                    </p>
                    <h2>Afsluiting</h2>
                    <p>
                        Afsluitend geeft Eric toekomstige vormgevers het advies om hun leertijd te gebruiken om zoveel
                        mogelijk te experimenteren en leren, veel te onderzoeken en vooral veel te vragen om feedback.
                        Probeer niet te snel tevreden te zijn, probeer open te staan om je creatieve kindjes aan te
                        passen, om er echt iets moois van te maken.
                    </p>
                </article>
                <figure>
                    <img src="img/emma/interview/template.jpg" alt="Template">
                    <figcaption>Template Logo</figcaption>
                </figure>
            </div>
        </section>

        <!--Navbar-->
        <div id="local-nav">
            <div id="timeline"></div>
            <div id="buttons">
                <button id="btn-1" class="current" onclick="changeInterview('1');">Introductie</button>
                <button id="btn-2" onclick="changeInterview('2');">Achtergrond</button>
                <button id="btn-3" onclick="changeInterview('3');">Workflow</button>
                <button id="btn-4" onclick="changeInterview('4');">Meningen</button>
                <button id="btn-5" onclick="changeInterview('5');">Afsluiting</button>
            </div>
        </div>
    </main>
</body>

</html>