<?php
    //Adding Database Variables
    $q = $_REQUEST["q"];

    /*Attempt MySQL Connection*/
    $connect=Mysqli_connect();
    
    //Check connection
    if($connect === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    //Attempt insert query execution
    $checker = "SELECT verf, verified FROM accounts";
    $result = $connect->query($checker);
    $sql = "UPDATE accounts SET verified = 1 WHERE verf = '".$q."'";

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            if ($q == $row["verf"]){
                if ($row["verified"] == 0){
                    if ($connect->query($sql) === TRUE){
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
                            Uw account is nu actief.
                        </div>
                    </body>
                    </html>';
                    }else{
                        echo 'ERROR.';
                    }
                } else {
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
                            Uw account is al actief.
                        </div>
                    </body>
                    </html>';
                }
            }
        }
    }else {
        echo "ERROR: Not able to execute $sql " . mysqli_error($connect);
    }

    //Close connection
    mysqli_close($connect);
?>