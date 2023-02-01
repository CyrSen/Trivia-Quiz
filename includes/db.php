<?php
// Verbinde mit mySQL, mit Hilfe eines PHP PDO Objekct
$dbHost = getenv('DB_HOST');
$dbName = getenv('DB_NAME');
$dbUser = getenv('DB_USER');
$dbPassword = getenv('DB_PASSWORD');

$dbConnection = new PDO("mysql:host=$dbHost;dbname=$dbName;charset=utf8", $dbUser, $dbPassword);

// Setze den Fehlermodus für Web Devs
$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// QUERY FUNCTIONS --------------------------------------------------

function fetchQuestionById($id, $dbConnection) {
    $sqlStatement = $dbConnection->query("SELECT * FROM `questions` WHERE `id` = $id");
    $row = $sqlStatement->fetch(PDO::FETCH_ASSOC);

    print_r($row);

    /*
        Gibt Zeilendaten als assoziativer Array zu genau einer Frage zurück.
        Beispiel: $row = array('id' => 301, 'topic' => movies, ...)
    */
    return $row;
}

function fetchQuestionByIdSequence($topic, $questionNum, $dbConnection) {
    // SELECT `id` FROM `questions` WHERE `topic` = 'movies' ORDER BY RAND() LIMIT 5;
    $query = "SELECT `id` FROM `questions` WHERE `topic` = '$topic' ORDER BY RAND() LIMIT $questionNum";
    $sqlStatement = $dbConnection->query($query);
    $rows = $sqlStatement->fetchAll(PDO::FETCH_COLUMN, 0); // `id` ist Spalte (column) 0.

    // print_r($rows);

    return $rows;
}

?>