<?php
    require_once 'config.php';
    $count = 0;
    $dbConnection;
    $playerIDFromRequest;

    /* Used on page load to generate the navigation for all pages
       will be assigned a value when page loads and the correct
       navigation html will be returned. */
    function generateNavigation($pageName)
    {
        echo "<nav class='navbar navbar-fixed-top'>\n";
        echo "\t<div class='container'>\n";
        echo "\t<div class='navbar-header'>\n";
        echo "\t\t<a class='navbar-brand' href='index.php'>Gungahlin Bald Eagles - RUFC</a>\n";
        echo "\t\t</div>\n";
        echo "\t\t\t<ul class='nav navbar-nav navbar-right'>\n";

        switch ($pageName)
        {
            case "INDEX": indexActive(); break;
            case "VIEW": viewActive(); break;
            case "ADMIN": adminActive(); break;
        }
        
        echo "\t\t\t</ul>\n";
        echo "\t\t</div>\n";
        echo "</nav>\n";
    }

    function GetPlayer()
    {
        global $playerIDFromRequest;

        $playerIDFromRequest = $_POST["playerID"];

        if ( empty($playerIDFromRequest))
        {
            echo "Player ID is currently Empty please try again";
        } else {
            GetCurrentPlayerData($playerIDFromRequest);
        }
    }

    /* will be called on load of index.php to return the navigation
       for the index.php page only. Setting the active page to HOME. */
    function indexActive()
    {
        echo "\t\t\t\t<li class='active'><a href='index.php'>Home</a></li>\n";
        echo "\t\t\t\t<li><a href='edit.php'>Administraion</a></li>\n";
    }

    /* will be called on load of view.php to return the navigation 
       for the view.php page only. */
    function viewActive()
    {
        echo "\t\t\t\t<li><a href='index.php'>Home</a></li>\n";
        echo "\t\t\t\t<li><a href='edit.php'>Administraion</a></li>\n";
    }

    /* will be called on load of edit.php to return the navigation 
       for the edit.php page only. */
    function adminActive()
    {
        echo "\t\t\t\t<li><a href='index.php'>Home</a></li>\n";
        echo "\t\t\t\t<li class='active'><a href='edit.php'>Administraion</a></li>\n";
    }

    /* On page load for index.php, index.php will call to list all players
       this is done through the below function. */
    function GetAllPlayerData()
    {
        // Connect to the database
        ConnectToDatabase();

        // Collect the global variables for use with this query
        global $dbConnection;
        global $dbListPlayers;
        
        // retrieve the results from the database for the query
        $result = $dbConnection->query($dbListPlayers);

        // Check we have items in the table. If not report no data
        if($result->num_rows > 0){
            // Loop through all result items until the end.
            while($row = $result->fetch_assoc()){
                // print rows to the UI
                collateData($row);
            }
        } else {
            echo "0 Results";
        }

        // Check the database state and close if open
        if ($dbConnection == true)
        {
            CloseDatabase();
        }
    }

    function GetCurrentPlayerData($playerID)
    {
        // Connect to the database
        ConnectToDatabase();

        // Collect the global variables for use with this query
        global $dbConnection;
        global $dbCurrentPlayer;

        $sql = $dbCurrentPlayer . " playerId = " . $playerID . ";";

        $result = $dbConnection->query($sql);

        // Check we have items in the table. If not report no data
        if($result->num_rows > 0){
            // Loop through all result items until the end.
            while($row = $result->fetch_assoc()){
                // print rows to the UI
                PrintProfile($row);
            }
        } else {
            echo "0 Results";
        }

        // Check the database state and close if open
        if ($dbConnection == true)
        {
            CloseDatabase();
        }
    }

    function PrintProfile($row)
    {
        $pID = $row["playerId"];
        $pName = $row["playerName"];
        $pPosition = $row["playerPosition"];
        $pGames = $row["gamesPlayed"];
        $pImageUrl = $row["playerImageUrl"];
        $pProfile = $row["playerProfile"];

        echo "<div class='container'>\n";
        echo "<div class='row'>\n";
        echo "<div class='col-lg-12'>\n";
        echo "<div class='col-md-12'>\n";
        echo "<h2>" . $pName . "</h2>\n";
        echo "<img src='". $pImageUrl ."'>\n";
        echo "<p>Player Position:\t" . $pPosition . "</p>\n";
        echo "<p>Games Played:\t" . $pGames . "</p>\n";     

        echo "</div>\n</div>\n</div>\n</div>";   
    }

    function ConnectToDatabase()
    {
        global $dbHost;
        global $dbName;
        global $dbUser;
        global $dbPassword;
        global $dbConnection;

        $dbConnection = new mysqli( $dbHost, $dbUser, $dbPassword, $dbName);

        if ( !$dbConnection) die ("Unable to connect to MySQL: " . mysqli_error());
    }

    function CloseDatabase()
    {
        global $dbConnection;

        $dbConnection->close();
    }

    function collateData($row)
    {
        global $count;

        $pID = $row["playerId"];
        $pName = $row["playerName"];
        $pPosition = $row["playerPosition"];
        $pGames = $row["gamesPlayed"];
        $pImageUrl = $row["playerImageUrl"];
        $pProfile = $row["playerProfile"];

        if ( $count == 0) 
        {
            echo "<tr>\n";
        } else {
            echo "\t\t\t\t\t\t<tr>\n";
        }
        

        printSqlDataToTable($pID);  
        printSqlDataToTable($pName); 
        printSqlDataToTable($pPosition);
        printSqlDataToTable($pGames);
        insertLink($pImageUrl);
        insertLink($pProfile);

        echo "\t\t\t\t\t\t</tr>\n";
        $count++;
    }

    function insertLink($data)
    {
        echo "\t\t\t\t\t\t\t<td>" . "<a href='$data'>" . $data . "</a>" . "</td>\n";
    }

    function printSqlDataToTable($data)
    {
        echo "\t\t\t\t\t\t\t<td>" . $data . "</td>\n";
    }
?>