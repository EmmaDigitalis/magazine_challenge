<!doctype HTML>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/main.js"></script>
    <title>Trick List</title>
</head>

<body>
    
    <header>
    </header>
    
    
    <!-- value=\".row['Trickname']\"-->
    <main>
        <select id="db-selector" name="tricks" onchange="UpdatePage(this.value)">
            <option disabled selected value> -- Select an option -- </option>
            <?php 
            $dbc = Mysqli_connect();
            $query = Mysqli_query($dbc, "SELECT Trickname FROM tablerequests");
            $results = mysqli_query($dbc, $query);

            while ($row = $query->fetch_assoc()){
                echo "<option>" . $row['Trickname'] . "</option>";
            }

            
            mysqli_close($dbc);
        ?>
        </select>

        <div class="flex-break"></div>

        <article id="db-description">

        </article>
    </main>

</body>

</html>