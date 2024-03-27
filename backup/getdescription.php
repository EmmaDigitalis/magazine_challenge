<?php
// get the q parameter from URL
$q = $_REQUEST["q"];

//SQL
$connect = Mysqli_connect();

//Check connection
if($connect === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "SELECT Added_description, Trickname FROM tablerequests";
$result = $connect->query($sql); //mysqli_query($connect, $sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if ($q == $row["Trickname"]){
            echo $row["Added_description"];
        }
    }
} else {
    echo "0 results";
}

//echo $result;

mysqli_close($connect);
?>