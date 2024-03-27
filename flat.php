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
    <script src="js/emma.js"></script>
    <title>Skeuomorphism vs Flat</title>

    <!--fonts-->
    <link href="https://fonts.googleapis.com/css2?family=UnifrakturCook:wght@700&display=swap" rel="stylesheet">

    <!--Everything necessary for nav-->
    <link rel="stylesheet" href="css/style.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <script src="js/nav.js"></script>

    <!--fonts-->
    <link href="https://fonts.googleapis.com/css2?family=UnifrakturCook:wght@700&display=swap" rel="stylesheet">
</head>

<body id="versus-body">
<nav id="navbar">
        <button value="index.php" id="backhome" onclick="changePage(this.value);">Home</button>
        <button id="openclose" onclick="navToggle();">Close</button>
        <button value="pepsi.php" id="previous" onclick="changePage(this.value);">&lt;</button>
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
        <button value="grunge.php" id="next" onclick="changePage(this.value);">&gt;</button>
    </nav>

    <div id="body-skeuo">
        <main>
            <div id="skeuo-header">
                <h1>Skeuomorphism</h1>
                <h1> vs </h1>
                <h1>Flat</h1>
            </div>
            <article>
                <h2>Geschiedenis van skeuomorfisme</h2>
                <p>Je ziet het tegenwoordig overal: flat grafisch ontwerp. Deze stijl van logo’s - en ontwerp
                    in het algeheel – is populair geworden rond het begin van het decennium 2010-2019.
                    Daarvoor maakte men voornamelijk gebruik van skeuomorfisme, een stijl die gebruik
                    maakt van 3D elementen en verscheidene realistische aspecten om het gebruik van
                    apparatuur makkelijker te maken. In dit artikel gaan we langs beide stijlen, de geschiedenis,
                    het doel van skeuomorfisme, en de overstap naar flat design.</p>
                <figure>
                    <img src="img/emma/flat/flat-1.jpg" alt="ios 6 vs ios 7">
                    <figcaption>iOS 6 vs iOS 7 (Skeuomorphism vs Pseudo-flat)</figcaption>
                </figure>
                <p>Skeuomorfisme kwam op in de jaren 80. Steve Jobs was toendertijd een van
                    de eerste voorstanders van deze vorm van ontwerp, die met het idee kwam
                    om het gebruik van de nieuwe technologieën in die tijd makkelijker te maken
                    om aan te wennen voor de generatie van die tijd. Icoontjes hadden een
                    ontwerp die betrouwbaar voelden en zelf functionaliteit was gebaseerd op
                    realiteit. Denk bijvoorbeeld aan het slepen van een ongewenst bestand naar
                    een prullenbak, een klik-geluid wanneer je een foto maakt met een
                    smartphone camera, of het highlighten van tekst wanneer je er overheen
                    sleept, alsof je een markeerstift gebruikt. (Kasyoka, 2017)</p>
                <p>Deze vorm van design kwam later onder vuur te
                    liggen voor het gebruik maken van voorwerpen die
                    jongere generaties niet eens kennen – dingen als
                    kalenders, adresboeken en oude
                    draaischijftelefoons. De overeenkomst tussen het
                    gebruikt van dingen in het echte leven en het
                    digitale leven was niet noodzakelijk meer.
                    En vanuit deze insteek kwam flat design opzetten.</p>
                <div class="container">
                    <div class="skeuo-button" onclick="changeFlat('body-skeuo', 'body-flat')"></div>
                </div>
            </article>
            <div id="skeuo-top"></div>
            <div id="skeuo-mid"></div>
            <div id="skeuo-btm"></div>
        </main>
    </div>

    <div id="body-flat">

        <main>
            <div id="flat-header">
                <h1>Skeuomorphism</h1>
                <h1> vs </h1>
                <h1>Flat</h1>
            </div>
            <h2>De opkomst van Flat</h2>
            <p>In 2007 maakte Forbes magazine bekend dat skeuomorfisme
                zou sterven. Het duurde hierna nog even voordat flat design
                echt mainstream werd. Van Google, Microsoft en Apple was
                Microsoft de eerste die de designstijl helemaal overnam, in 2012
                met Windows 8. Echter valt de overgang naar flat design vooral
                te danken aan Apple met de release van iOS 7 in September
                2013. Windows 8 was een niet erg geliefd platform, waardoor
                hun poging tot deze vorm van design niet bleef steken. Maar wat
                is flat design nou precies en wat is het doel ervan?</p>
            <figure>
                <img src="img/emma/flat/flat-2.jpg" alt="windows 8">
                <figcaption>Windows 8, een van de eerste gevallen van Flat Design</figcaption>
            </figure>
            <p>Flat design is voornamelijk gebaseerd op andere designtrends, waaronder modernisme en Bauhaus en
                Swiss stijl. Voornamelijk de laatste heeft veel invloed gehad op flat design, met zijn hoge contrast,
                minimalistisch ontwerp en efficiënt gebruik van ruimte. (Kramer, 2019) Het doel van deze stijl in
                webdesign is om de gebruiker door de app of site heen te begeleiden, waardoor het allemaal voelt als een
                ervaring. Dit wordt gedaan met behulp van “onzichtbare” elementen, zoals het gebruik van een
                winkelwagentje als knop zonder daadwerkelijk “KLIK HIER” te zeggen, of het opsplitsen van
                verschillende onderdelen van een website via verschillende achtergrond kleuren. De gebruiker voelt aan
                dat ze op een nieuw gedeelte van de pagina zitten, of waar ze moeten klikken, zonder dat dat specifiek v
                ermeld hoeft te worden. </p>
            <p>Het gebruik van skeuomorfisme is simpelweg niet meer nodig, en dus kon een sterk visueel ontwerp
                dat sneller te maken was de wereld overnemen. En dat is waarom je tegenwoordig bijna alleen nog maar
                flat design ziet.</p>
            <div class="container">
                <div class="flat-button" onclick="changeFlat('body-flat', 'body-skeuo')"></div>
            </div>
        </main>

    </div>

</body>

</html>