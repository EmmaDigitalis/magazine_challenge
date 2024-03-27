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
    <link rel="shortcut icon" type="image/png" href="img/favicon.png" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<script src="js/main.js"></script>-->
    <title>Open dagen</title>

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
        <button value="50s.php" id="previous" onclick="changePage(this.value);">&lt;</button>
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
        <button value="interview.php" id="next" onclick="changePage(this.value);">&gt;</button>
    </nav>
    <div id="studeren">
        <section>
            <h2>Vormgeving studeren?</h2>
        </section>
        <figure>
            <img src="img/emma/ads/hku.jpg">
            <img src="img/fleur/adglu.jpg">
        </figure>
        <section>
            <h3>
                Ga naar de digitale open dag van de Hogeschool van de Kunsten of het Grafisch Lyceum in Utrecht!
            </h3>
        </section>
    </div>
</body>

</html>