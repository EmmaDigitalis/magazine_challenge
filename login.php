<?php
    //Adding Database Variables
    $name = $_POST["name"];
    $pw = $_POST['password'];
    $pw_sha = hash('sha512', $_POST['password']);

    /*Attempt MySQL Connection*/
    $connect=Mysqli_connect();
    
    //Check connection
    if($connect === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    $sql = "SELECT usr, pw, verified FROM accounts";
    $result = $connect->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            if ($pw_sha == $row["pw"] && $name == $row["usr"]){
                if ($row["verified"] == 0){
                    //Set Refresh header using PHP.
                    header( "refresh:2;url=index.php" );

                    //Print out some content for example purposes.
                    echo '
                    <!doctype HTML>
                    <html lang="nl">
                    
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
                            Uw account is nog niet geverifieerd. Controleer email & spam folder.
                        </div>
                    </body>
                    </html>';
                    goto skipper;
                }else{
                    // Start the session
                    session_start();

                    $_SESSION["user"] = $name;

                    //Set Refresh header using PHP.
                    header( "refresh:5;url=index.php" );

                    
                    //Print out some content for example purposes.
                    echo '
                    <!doctype HTML>
                    <html lang="nl">
                    
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
                            Welkom '.ucfirst($name).', u wordt over 5 seconden naar de home pagina gebracht.
                        </div>
                    </body>
                    </html>';
                    goto skipper;
                }
            }
        }
        //Set Refresh header using PHP.
        header( "refresh:2;url=index.php" );
        
        //Print out some content for example purposes.
        echo '
        <!doctype HTML>
        <html lang="nl">
        
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
                Helaas, verkeerd gebruikersnaam of wachtwoord.
            </div>
        </body>
        </html>';
    }

    //Close connection
    skipper:
    mysqli_close($connect);
?>