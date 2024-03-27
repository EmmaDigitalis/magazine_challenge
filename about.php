<?php
    // Start the session
    session_start();
?>

<!doctype HTML>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/about.css">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voorwoord</title>

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
<?php
    if (!isset($_SESSION["user"])){
        echo '<div class="trial">TRIAL VERSION</div>';
    }
?>

<nav id="navbar">
        <button value="index.php" id="backhome" onclick="changePage(this.value);">Home</button>
        <button id="openclose" onclick="navToggle();">Close</button>
        <button value="cover.php" id="previous" onclick="changePage(this.value);">&lt;</button>
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
        <button value="ad-adobe.php" id="next" onclick="changePage(this.value);">&gt;</button>
    </nav>

    <div class="header">
        <h1>Together Design</h1>
    </div>
    <div class="voorwoord">
        <p>
            Voor u ligt de 1e editie van het digitale magazine; Together Design, superleuk dat jullie ons Design
            magazine hebben gekozen. We hebben er alles aangedaan om het een interessant en informatief magazine van te
            maken.
            <br>
            <br>
            Dit magazine is tot stand gekomen omdat wij meer wilde leren over design, en wij van mening waren dat andere
            mensen dit ook interessant zouden vinden en er op deze manier meer te weten kunnen komen over design op een
            leuke manier.
            <br>
            <br>
            We hebben er een mooi interessant magazine van gemaakt boordevol informatie over de ontwikkelingen en
            verschillende vormen in designs door de jaren heen. Een interview met Eric Sips, een ervaren vormgever die
            verteld over zijn ervaringen in de wereld van vormgeving en zijn switch naar het lesgeven op het grafisch
            lyceum in Utrecht.
            <br>
            <br>
            We hopen jullie in deze editie een goed inzicht te geven in de veranderingen die er gedurende de jaren
            hebben plaatsgevonden in dit vakgebied.
        </p>
    </div>
    <div id="vw">
        <img src="img/vw.png" alt="voorwoord">
    </div>
</body>

</html>