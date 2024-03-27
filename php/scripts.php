<?php
    // Start the session
    session_start();

    if (!isset($_SESSION["user"])){
        //Set Refresh header using PHP.
        header( "refresh:2;url=notloggedin.html" );
    }
?>


<?php
    if (!isset($_SESSION["user"])){
        echo '<div class="trial">TRIAL VERSION</div>';
    }
?>