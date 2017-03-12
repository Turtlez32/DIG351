<?php
    $dbHost = 'localhost';
    $dbName = 'eagles';
    $dbUser = 'root';
    $dbPassword = '';
    $dbListPlayers = "SELECT playerId, playerName, playerPosition, gamesPlayed, playerImageUrl, playerProfile FROM players";
    $dbCurrentPlayer = "SELECT playerId, playerName, playerPosition, gamesPlayed, playerImageUrl, playerProfile FROM players WHERE";
?>