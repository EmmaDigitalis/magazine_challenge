<!doctype HTML>
<html lang="nl">

<head>
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

<body>
    <nav id="navbar">
        <button id="backhome" value="index.php" onclick="changePage(this.value);">Home</button>
        <button id="openclose" onclick="navToggle();">Close</button>
        <button value="minimalism.php" onclick="changePage(this.value);" id="previous">&#x23F4;</button>
        <select onchange="changePage(this.options[this.selectedIndex].value);">
            <option disabled selected value=""> -- Select -- </option>
            <option value="cover.php">Cover</option>
            <option value="about.php">About</option>
            <option value="ad-adobe.php">Adobe CC</option>
            <option value="minimalism.php">Minimalisme</option>
            <option value="colofon.php">Colofon</option>
        </select>
        <button value="colofon.php" onclick="changePage(this.value);" id="next">&#x23F5;</button>
    </nav>

    <div class="logpopup">
        U kunt deze pagina niet bekijken. Maak een account en log in om verder te lezen.
    </div>

</body>

</html>