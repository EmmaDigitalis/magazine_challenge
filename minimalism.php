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
    <title>Minimalism Design</title>
    <meta charset="UTF-8">
    <meta name="keywords" content="HTML,CSS,JavaScript,">
    <meta name="author" content="Fleur Schmidt">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/minimalism.css">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png" />

    <!--Everything necessary for nav-->
    <link rel="stylesheet" href="css/style.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <script src="js/nav.js"></script>

    <!--fonts-->
    <link href="https://fonts.googleapis.com/css2?family=UnifrakturCook:wght@700&display=swap" rel="stylesheet">
</head>

<body>
<nav id="navbar">
        <button value="index.php" id="backhome" onclick="changePage(this.value);">Home</button>
        <button id="openclose" onclick="navToggle();">Close</button>
        <button value="museum.php" id="previous" onclick="changePage(this.value);">&lt;</button>
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
        <button value="sos.php" id="next" onclick="changePage(this.value);">&gt;</button>
    </nav>

    <div id="adaptive">
        <!--intro-->
        <div class="background">
            <img src="img/fleur/minimalism/bg.jpg" alt="background">
        </div>
        <div class="text">
            <h1>Minimalistisch design</h1>
            <p>Minimalisme is tegenwoordig een van de meest invloedrijke stijlen - van ontwerp tot architectuur, muziek,
                tot
                literatuur, of zelfs een levensstijl. Het bestaat allemaal. Er is zelfs een kans dat jij een fan bent
                van
                minimalisme, zonder het zelf te weten.
            </p>
        </div>
    </div>
    <!--wat en waar-->
    <div class="tleft">
        <h1>Waar komt minimalisme vandaan?</h1>
        <p>Er is enige discussie binnen de ontwerpgemeenschap over wanneer, precies, het minimalisme begon. Sommigen
            beschouwen de wortels ervan in het hart van de modernistische beweging van het begin van de 20e eeuw. Of in
            het al veel eerdere ontstaande Japanse design die door sommige wordt beschouwd als de voorloper van
            minimalistisch design. Anderen beweren dat het pas veel later begon, als een uittreksel van de
            minimalistische kunstbeweging van de jaren zestig en zeventig, toen schilders als Donald Judd en Ellsworth
            Kelly zich afkeerden van het abstract expressionisme.
        </p>
    </div>
    <div class="tright">
        <h1>Wat is Minimalistisch design?</h1>
        <p>Minimalistisch design is beschreven als design op zijn meest basale, ontdaan van overbodige elementen,
            kleuren, vormen en texturen. Het doel is om de inhoud te laten opvallen en centraal te stellen. Vanuit
            visueel oogpunt is minimalistisch ontwerp bedoeld om te kalmeren en de geest terug te brengen naar de basis.
            Ik denk dat een van mijn favoriete quotes minimalisme heel goed kan omschrijven;
            “Perfection is achieved, not when there is nothing more to add, but when there is nothing left to take
            away.” - Antoine de Saint-Exupéry
        </p>
        <img src="img/fleur/minimalism/pinterestad.jpg" alt="advertentie">
    </div>

    <!--zes elementen-->
    <div class="tcenter">
        <h1><mark> Elementen van minimalistisch ontwerp
            </mark></h1>
        <p>Om een minimalistisch ontwerp te bereiken en of te maken, zijn er vijf belangrijke elementen/technieken die u
            in overweging kunt nemen.
            Het beheersen van de technieken ziet er op het eerste gezicht misschien gemakkelijk uit, maar het is
            eigenlijk best moeilijk om te ontwerpen met veel open ruimte en weinig objecten.
        </p>
    </div>

    <!--zes elementen nmr 1-->
    <div id="imagery">
        <img src="img/fleur/minimalism/imagery.jpg" alt="afbeeldingen">
    </div>

    <div class="telement1">
        <h1><mark> Afbeeldingen
            </mark></h1>
        <p>Bij het correcte gebruik van afbeeldingen kunnen afbeeldingen als focus punt dienen, of het kan worden
            gebruikt om een balans te creëren in je design
            Een afbeelding kiezen voor een minimalistisch ontwerp kan lastig zijn, je moet namelijk erg kieskeurig zijn.
            De keuze van een “verkeerde” afbeelding kan jouw ontwerpintegriteit gemakkelijk verpesten.
        </p>
    </div>

    <!--zes elementen nmr 2-->
    <div id="cc">
        <img src="img/fleur/minimalism/contrast.png" alt="contrast">
    </div>

    <div class="telement2">
        <h1><mark> Kleur & Contrast
            </mark></h1>
        <p>Heel veel mensen denken aan zwart en wit als ze aan minimalistisch design denken, maar minimalistisch design
            kan zeker kleur hebben/gebruiken. Vaak is het zelf een erg belangrijk element.
            Bij een minimalistisch ontwerp mag u alleen de kleuren gebruiken die nodig zijn om uw ontwerp te
            benadrukken. Blijf bij een beperkter palet met slechts een of twee kleuropties.
            Speel met contrastrijke kleuren, het toevoegen van een contrasterende kleur in een monochroom kleurenschema
            kan bijvoorbeeld nuttig zijn als u bepaalde elementen van uw ontwerp wilt benadrukken.
            Gebruik kleuren om de juiste sfeer over te brengen
            Vanuit psychologisch perspectief brengen kleuren bepaalde associaties en emoties over op gebruikers. Denk
            bij het selecteren van kleurencombinaties na over welke stemming u in uw product wilt uitstralen en kies
            kleuren die die stemming en uw boodschap weerspiegelen.
        </p>
    </div>

    <!--zes elementen nmr 3-->
    <div id="type">
        <img src="img/fleur/minimalism/type.jpg" alt="typografie">
    </div>

    <div class="telement3">
        <h1><mark>
                typografie
            </mark>
        </h1>
        <p>Naast kleur is typografie een visueel kernelement, In minimalistisch design kan typografie zo belangrijk
            worden dat het een grafisch element op zich wordt. Gewaagde typografie brengt de woorden en inhoud direct in
            beeld terwijl het helpt om een veel grotere intrigerende visual te creëren.
        </p>
    </div>

    <!--zes elementen nmr 4-->
    <div id="whitespace">
        <img src="img/fleur/minimalism/whitespace.jpg" alt="witruimte">
    </div>

    <div class="telement4">
        <h1><mark>
                Wit ruimte
            </mark>
        </h1>
        <p>Witruimte is een van de belangrijkste elementen van minimaal ontwerp.
            Als het op ruimte aankomt, moet het grootste deel van het ontwerp open zijn. De ruimte rond elementen moet
            ook doel en consistentie hebben. (Als je gewoon willekeurig ruimte toevoegt, voelt het ontwerp chaotisch en
            rommelig aan. Gebruik een rastersysteem om ruimtelijke relaties te organiseren en te plannen.)
            Gebruik witruimte om de aandacht van een gebruiker te trekken. Met witruimte is het gemakkelijk om een
            bepaald element meer op te merken - u hoeft alleen maar de negatieve ruimte eromheen te vergroten. Lege
            ruimte zal het oog natuurlijk naar het object richten.
            Gebruik niet meerdere focuspunten per scherm. Geef gebruikers één ding om zich op te concentreren.
        </p>
    </div>

    <!--zes elementen nmr 5-->
    <div id="balance">
        <img src="img/fleur/minimalism/grid.jpg" alt="grid">
    </div>

    <div class="telement4">
        <h1><mark>
                Balans
            </mark>
        </h1>
        <p>Elk detail moet een doel hebben. In een minimalistische ontwerp vallen objecten en elementen niet op de
            achtergrond of verbergen ze zich niet in het ontwerp. Elk detail is belangrijk, dus wees voorzichtig.
            Balans/visuele hiërarchie is de relatie tussen visuele elementen. Een goede balans/visuele hiërarchie
            beweegt het oog van de bezoeker over de pagina en trekt de aandacht naar bepaalde elementen.
            Een manier om visuele hiërarchie te bereiken en je details op de perfecte plek te krijgen, is door een
            rastersysteem te gebruiken. Ontwerpers plaatsen elementen in deze rasters om ze op één lijn te brengen met
            de rest van de inhoud. Een rastersysteem is een effectief hulpmiddel voor het maken van zeer georganiseerde
            lay-outs omdat het helpt om alle elementen te structureren en ze in de juiste maten en verhoudingen te
            plaatsen.
        </p>
    </div>
</body>

</html>