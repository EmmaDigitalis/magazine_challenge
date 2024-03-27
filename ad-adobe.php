<?php
    // Start the session
    session_start();
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
    <title>Brought to you with Adobe CC</title>

    <!--Everything necessary for nav-->
    <link rel="stylesheet" href="css/style.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <script src="js/nav.js"></script>

    <!--fonts-->
    <link href="https://fonts.googleapis.com/css2?family=UnifrakturCook:wght@700&display=swap" rel="stylesheet">
</head>

<body id="adobe-body">
<?php
    if (!isset($_SESSION["user"])){
        echo '<div class="trial">TRIAL VERSION</div>';
    }
?>

<nav id="navbar">
        <button value="index.php" id="backhome" onclick="changePage(this.value);">Home</button>
        <button id="openclose" onclick="navToggle();">Close</button>
        <button value="about.php" id="previous" onclick="changePage(this.value);">&lt;</button>
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
        <button value="museum.php" id="next" onclick="changePage(this.value);">&gt;</button>
    </nav>

    <!--I hate how this page is setup in css-->
    <main>
        <div id="curtain-left"></div>
        <div id="curtain-right"></div>
        <article>
            <img src="img/emma/ads/adobe/brought.png" alt="Brought to you with Adobe Creative Cloud">
            <section>
                <h3>Use code "Lipsum2020" to get 20%<br>
                    off a 1 year subscription.</h3>
                <h2>
                    <s>$599,88</s> $479,90
                </h2>
            </section>
            <figure>
                <img src="img/emma/ads/adobe/icons/ae.jpg" alt="After Effects">
                <img src="img/emma/ads/adobe/icons/an.jpg" alt="Animate">
                <img src="img/emma/ads/adobe/icons/fs.jpg" alt="Fuse">
                <img src="img/emma/ads/adobe/icons/ic.jpg" alt="InCopy">
                <img src="img/emma/ads/adobe/icons/lr.jpg" alt="Lightroom">
                <img src="img/emma/ads/adobe/icons/pl.jpg" alt="Prelude">
                <img src="img/emma/ads/adobe/icons/au.jpg" alt="Audition">
                <img src="img/emma/ads/adobe/icons/ch.jpg" alt="Character Animator">
                <img src="img/emma/ads/adobe/icons/ai.jpg" alt="Illustrator">
                <img src="img/emma/ads/adobe/icons/id.jpg" alt="InDesign">
                <img src="img/emma/ads/adobe/icons/ps.jpg" alt="Photoshop">
                <img src="img/emma/ads/adobe/icons/pr.jpg" alt="Premiere Pro">
            </figure>
        </article>
    </main>

</body>

</html>