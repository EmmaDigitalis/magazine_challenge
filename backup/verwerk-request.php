<?php
    //Testing variable
    $submitted = $_POST["checker"];
    
    //Kick Out
    if ($submitted != "yup"){
        header("Location:request.html");
    }

    //Adding Database Variables
    $full_name = $_POST["name"];
    $trick_title = $_POST["title"];
    $trick_description = $_POST["description"];
    $trick_category = $_POST["category"];
    $trick_url = $_POST["example"];


    /*Attempt MySQL Connection*/
    $dbc=Mysqli_connect();
    
    //Check connection
    if($dbc === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    //Attempt insert query execution
    $query = "INSERT INTO tablerequests (Full_name, Trickname, Added_description, Category, Example) VALUES ('$full_name', '$trick_title', '$trick_description', '$trick_category', '$trick_url')";
    if(mysqli_query($dbc, $query)){
        echo "Records inserted succesfully.";
    } else {
        echo "ERROR: Not able to execute $query " . mysqli_error($dbc);
    }

    //Close connection
    mysqli_close($dbc);
?>

<!doctype HTML>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<script src="js/main.js"></script>-->
    <title>Request Tricks</title>
</head>

<body>
    <br><br>Thanks, if you didn't get any error, your request has now been entered into a database that you can check at "URL HERE".
    <br>If you did get an error, it might already have been inserted. You can check a list of potential errors at "URL HERE".
</body>

</html>