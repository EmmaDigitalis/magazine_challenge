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
    <link rel="stylesheet" href="css/animations.css">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Style over Substance</title>

    <!--Everything necessary for nav-->
    <link rel="stylesheet" href="css/style.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">

</head>

<body id="sos-body" onload="pagePrep('sos-body', 4);" onscroll="positionChange(['sos-1', 'sos-2', 'sos-3', 'sos-4']);">
    <nav id="navbar">
        <button value="index.php" id="backhome" onclick="changePage(this.value);">Home</button>
        <button id="openclose" onclick="navToggle();">Close</button>
        <button value="minimalism.php" id="previous" onclick="changePage(this.value);">&lt;</button>
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
        <button value="50s.php" id="next" onclick="changePage(this.value);">&gt;</button>
    </nav>
    
    <!--just some ui shit-->
    <div id="border-top"></div>
    <div id="border-left"></div>
    <div id="border-bottom"></div>
    <div id="border-right"></div>
    <div id="page-num"></div>

    <!--actual fucking content-->
    <main>

        <figure id="sos-1">
            <img src="img/emma/style/sos-title.png" alt="Style over Substance">
            <figcaption>Scroll to continue</figcaption>
        </figure>
        <section id="sos-2">
            <article>
                <h2 class="hidden">Style over Substance Slide 2</h2>
                <figure><img src="img/emma/style/sos-title.png" alt="Style over Substance"></figure>
                <div class="container">
                    <p>Persoonlijk ben ik een grote fan van websites die niet zomaar “standaard” blokjes met tekst zijn.
                        In
                        plaats daarvan zie ik graag websites die daadwerkelijk gebruik maken van boeiende visuele
                        effecten
                        om iets duidelijk te maken, of er gewoon gaaf uit willen zien. Ik denk eigenlijk wel dat de
                        meeste
                        mensen het daar wel mee eens zullen zijn. Dit geld overigens voor userinterfaces in het
                        algeheel.
                    </p>
                    <p>Echter, sommige bedrijven lijken niet te snappen dat je interface nog wel duidelijk en makkelijk
                        te
                        gebruiken moet zijn voor de doelgroep. Laten we het daar eens over hebben. We hebben het hier
                        dus
                        niet per se over visueel slecht ontwerp, maar functioneel onhandig ontwerp. Voor het gemak gaan
                        we
                        praten over websites, maar weet dat alle kritiek die hier genoemd wordt ook geld voor andere
                        applicaties.</p>
                </div>
            </article>
            <figure>
                <img src="img/emma/style/gal01.jpg" alt="Snel in de videos">
                <img src="img/emma/style/gal02.jpg" alt="Laadt altijd heel snel">
                <img src="img/emma/style/gal03.jpg" alt="Alle producten op een rij">
                <img src="img/emma/style/gal04.jpg" alt="Zo snel mogelijk in het leerproces">
                <img src="img/emma/style/gal05.jpg" alt="Alles te vinden met 1 zoekbalk">
                <img src="img/emma/style/gal06.jpg" alt="Vindt alles heel makkelijk">
                <img src="img/emma/style/gal07.jpg" alt="Gebruikersvriendelijk voor alle soorten mensen">
                <img src="img/emma/style/gal08.jpg" alt="Overzicht">
                <img src="img/emma/style/gal09.jpg" alt="De nummer 1 trendsetter">
                <img src="img/emma/style/gal10.jpg" alt="Hoe adverteer je jezelf">
                <div class="tooltip">Goede UI Design</div>
            </figure>
        </section>
        <section id="sos-3">
            <article>
                <div class="container">
                    <h2 class="hidden">Style over Substance Slide 2</h2>
                    <figure><img src="img/emma/style/sos-title.png" alt="Style over Substance"></figure>
                    <p>Wanneer je een website bouwt moet je je eerst bedenken wat je doelgroep is, en hoe en wanneer zij
                        deze website zouden gebruiken. Een portfolio is voor bedrijven die je werk moeten bekijken
                        wanneer je solliciteert, YouTube is voor mensen die in korte tijd entertainment willen vinden,
                        et cetera. </p>
                    <p>Laten we een voorbeeld van een situatie nemen die minder goed in elkaar is gezet. Stel, je maakt
                        een website waarop men hun waterstand door kunnen geven. In welke situaties zou men deze
                        gebruiken?</p>
                    <ol>
                        <li>Om de waterstand door te geven.</li>
                        <li>In noodsituaties waarbij men snel moet kunnen opzoeken wat er fout gaat.</li>
                    </ol>
                    <p>Dit zijn dingen waarvan je niet wilt dat ze al te lang duren. Wanneer je ze nodig hebt, wil je de
                        website heel snel kunnen opzoeken, doen wat je moet doen, en weer weg kunnen klikken. Het is op
                        zo’n website dus niet handig om enorm veel animaties toe te voegen. Maak je website klein en
                        snel, een gebruiker met traag internet moet ook meteen op je website kunnen komen, vooral
                        wanneer ze in een noodsituatie zitten, zoals bij een hard lekkende boiler.</p>
                    <p>Een andere situatie zou een website van een school zijn waar het
                        lokale nummer verstopt zou zijn achter tientallen linkjes. Wanneer je een school wilt bellen,
                        wil je het nummer zo snel mogelijk kunnen vinden. Handig is om deze in de footer van je pagina
                        of op een contact pagina te plaatsen, daar weet iedereen ze te vinden. Of liever gewoon op
                        beide!
                    </p>
                </div>
                <figure>
                    <img src="img/emma/style/gal01.jpg" alt="Snel in de videos">
                    <img src="img/emma/style/gal02.jpg" alt="Laadt altijd heel snel">
                    <img src="img/emma/style/gal03.jpg" alt="Alle producten op een rij">
                    <img src="img/emma/style/gal04.jpg" alt="Zo snel mogelijk in het leerproces">
                    <img src="img/emma/style/gal05.jpg" alt="Alles te vinden met 1 zoekbalk">
                    <img src="img/emma/style/gal06.jpg" alt="Vindt alles heel makkelijk">
                    <img src="img/emma/style/gal07.jpg" alt="Gebruikersvriendelijk voor alle soorten mensen">
                    <img src="img/emma/style/gal08.jpg" alt="Overzicht">
                    <img src="img/emma/style/gal09.jpg" alt="De nummer 1 trendsetter">
                    <img src="img/emma/style/gal10.jpg" alt="Hoe adverteer je jezelf">
                    <div class="tooltip">Goede UI Design</div>
                </figure>
            </article>
        </section>
        <section id="sos-4">
            <div class="blue"></div>
            <article>
                <h2 class="hidden">Style over Substance Slide 2</h2>
                <figure><img src="img/emma/style/sos-title.png" alt="Style over Substance"></figure>
                <p>Kortom, je website kan nog zo gaaf eruitzien, als de functionaliteit vervelend is, of niet goed werkt
                    voor je doelgroep, dan doe je vooralsnog iets verkeerd. Bedenk je eerst wie je website zou gebruiken
                    en in welke situaties, voordat je je website vol gaat gooien met animaties en foto’s die hem enorm
                    zouden vertragen.</p>
            </article>
            <div class="blue"></div>
        </section>
    </main>

    
    <script src="js/nav.js"></script>
    <script src="js/emma.js"></script>
</body>

</html>