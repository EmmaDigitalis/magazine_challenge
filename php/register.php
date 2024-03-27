<?php
    //Adding Database Variables
    $name = $_POST["name"];
    $pw = hash('sha512', $_POST['password']);
    $verf = hash('sha512', $name);
    $verf = substr($verf, 0, 30);
    $email = $_POST["email"];

    //Setting up a verfication email.
    $msg = "
    Beste ".$name.",
    <br>
    <br>Welkom bij Together Design.
    <br>U kunt vanaf nu het volledige magazine lezen.
    <br>Gelieve onderstaande link te gebruiken om uw account te verifiëren.
    <br>
    <a href='http://u535834.gluweb.nl/challenge2/verify.php?q=".$verf."'>Verifiëer nu!</a>
    <br>
    <br>Met vriendelijke groet,
    <br>Het Together Design team.";

    $headers = "From: EMAIL\r\n";
    $headers .= "Reply-To: ". strip_tags($email) . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    /*Attempt MySQL Connection*/
    $connect=Mysqli_connect();
    
    //Check connection
    if($connect === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    //Attempt insert query execution
    $checker = "SELECT email, usr FROM accounts";
    $result = $connect->query($checker);
    $sql = "INSERT INTO accounts (usr, pw, email, verf, verified) VALUES ('$name', '$pw', '$email', '$verf', 0)";


    //fuck this stupid fucking shit
    if(mysqli_query($connect, $sql)){
        //Set Refresh header using PHP.
        header( "refresh:5;url=index.php" );
        
        //Print out some content for example purposes.
        echo '
        <!doctype HTML>
        <html lang="en">
        
        <head>
            <link rel="stylesheet" href="css/style.css">
            <link rel="shortcut icon" type="image/png" href="img/favicon.png" />
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Login</title>
            <script src="js/fittext.js"></script>
        </head>
        
        <body>
            
            <div class="logpopup">
                Account succesvol aangemaakt. Controleer uw email en spamfolder om te verifiëren.
            </div>
        </body>
        </html>';
        mail($email, "Activeer uw account", $msg, $headers);
    } else {
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                if ($email == $row["email"]){
                    //Set Refresh header using PHP.
                    header( "refresh:2;url=index.php" );
                    
                    //Print out some content for example purposes.
                    echo '
                    <!doctype HTML>
                    <html lang="en">
                    
                    <head>
                        <link rel="stylesheet" href="css/style.css">
                        <link rel="shortcut icon" type="image/png" href="img/favicon.png" />
                        <meta charset="UTF-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <title>Login</title>
                        <script src="js/fittext.js"></script>
                    </head>
                    
                    <body>
                        <div class="logpopup" style="background-color: #7f0000; color: white;">
                            U heeft al een account.
                        </div>
                    </body>
                    </html>';
                    break;
                } else if ($name == $row["usr"]){
                    //Set Refresh header using PHP.
                    header( "refresh:2;url=index.php" );
                    
                    //Print out some content for example purposes.
                    echo '
                    <!doctype HTML>
                    <html lang="en">
                    
                    <head>
                        <link rel="stylesheet" href="css/style.css">
                        <link rel="shortcut icon" type="image/png" href="img/favicon.png" />
                        <meta charset="UTF-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <title>Login</title>
                        <script src="js/fittext.js"></script>
                    </head>
                    
                    <body>
                        <div class="logpopup" style="background-color: #7f0000; color: white;">
                            Gebruikersnaam is al gekozen.
                        </div>
                    </body>
                    </html>';
                    break;
                }
            }
        }
    }

    //Close connection
    mysqli_close($connect);
?>