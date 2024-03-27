<?php
    // Start the session
    session_start();
?>

<!doctype HTML>
<html lang="nl">

<head>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Front Page</title>
    <script src="js/fittext.js"></script>
</head>

<body id="home-body">
    <!--left block-->
    <main id="left">
        <header>
            <?php
                if (isset($_SESSION["user"])){
                    echo '<div class="headtext">Welkom '.ucfirst($_SESSION["user"]).'</div><a href="logout.php">Loguit</a>';
                }else{
                    echo '<a onclick="popupWindow(\'regpopup\');">Registreer</a><a onclick="popupWindow(\'loginpopup\');">Login</a>';
                }
            ?>
        </header>
        <div id="remainder">
            <article>
                <!--Hier ergens moet een knop die doorgaat naar het magazine zelf-->
                <a href="cover.php">Ga naar magazine</a>
            </article>
            <figure>
            </figure>
        </div>
    </main>

    <!--right block-->
    <div id="right">
        <div class="container">
            <div id="position">
                <div class="aspect-keeper">
                    <div class="stretch-wrapper">
                        <div id="block1"></div>
                        <div id="block2"></div>
                        <h2 id="number">01</h2>
                        <div id="gallery">
                            <figure></figure>
                            <figure></figure>
                            <figure></figure>
                            <figure></figure>
                            <figure></figure>
                            <figure></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <aside>
            "Art isn't about how it looks, it's about how it makes us feel"
        </aside>
    </div>










    <!--popup windows. emma's work. 
    @Fleur: DON'T TOUCH-->
    <!--Registration Popup-->
    <div id="regpopup" class="popup-hidden">

        <!--Registration Field-->
        <div class="container">
            <div class="closebutton" onclick="popupHide('regpopup');">&times;</div>
            <fieldset>
                <form name="registerform" action="register.php" method="post">
                    <!--Register Warning-->
                    <h2>Registreer</h2>
                    <p>Gebruik van ' en " niet toegestaan.</p>

                    <!--Username-->
                    <h3>Gebruikersnaam:</h3>
                    <div class="inputfield">
                        <input type="text" name="name" placeholder="'gebruikersnaam'" required
                            pattern="[^'\x22]+">
                    </div>

                    <!--Password-->
                    <h3>Wachtwoord:</h3>
                    <div id="password" class="inputfield">
                        <input type="password" name="password" placeholder="********" required pattern="[^'\x22]+"
                            oninput="passwordSafety();enableConfirm();" onblur="confirmPW();">
                    </div>
                    <article>
                        <h4>Uw wachtwoord moet op zijn minst 1 hoofdletter, 1 kleine letter, 1 cijfer en 1 speciaal teken
                        bevatten.</h4>
                        <div id="indicator">
                            <div id="red"></div>
                            <div id="orange"></div>
                            <div id="green"></div>
                        </div>
                    </article>

                    <h3>Herhaal wachtwoord:</h3>
                    <div class="inputfield">
                        <input id="pwc" type="password" name="passwordcheck" placeholder="********" required
                            pattern="[^'\x22]+" onblur="confirmPW();">
                    </div>

                    <!--Email-->
                    <h3>Email:</h3>
                    <div class="inputfield">
                        <input type="text" name="email" placeholder="g.naam@example.com" required pattern="[^'\x22]+">
                    </div>

                    <!--Submit Button-->
                    <input id="submitbutton" disabled type="submit" value="Registreer" name="submitted">
                </form>

            </fieldset>
        </div>
    </div>




    <div id="loginpopup" class="popup-hidden">
        <!--Login Field-->
        <div class="container">
            <div class="closebutton" onclick="popupHide('loginpopup');">&times;</div>
            <fieldset>
                <form name="loginform" action="login.php" method="post">
                    <!--Login Warning-->
                    <h2>Login</h2>

                    <!--Username-->
                    <h3>Gebruikersnaam:</h3>
                    <div class="inputfield">
                        <input type="text" name="name" placeholder="'gebruikersnaam'" required
                            pattern="[^'\x22]+">
                    </div>

                    <!--Password-->
                    <h3>Wachtwoord:</h3>
                    <div class="inputfield">
                        <input type="password" name="password" placeholder="********" required pattern="[^'\x22]+">
                    </div>

                    <a>Wachtwoord vergeten?<br>Da's pech want dat<br>kan ik nog niet fixen.</a>
                    <!--Submit Button-->
                    <input id="loginbutton" type="submit" value="Login" name="submitted">
                </form>

            </fieldset>
        </div>
    </div>










    <script src="js/main.js"></script>
</body>

</html>