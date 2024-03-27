<?php
    // Start the session
    session_start();

    // remove all session variables
    session_unset();

    // destroy the session
    session_destroy();

    //Set Refresh header using PHP.
    header( "refresh:3;url=index.php" );

    
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
            Succesvol uitgelogd. 
        </div>
    </body>
    </html>';
?>