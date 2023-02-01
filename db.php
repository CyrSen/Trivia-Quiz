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
echo "test";
    print_r($row);

    /*
        Gibt Zeilendaten als assoziativer Array zu genau einer Frge zurück.
        Beispiel: $row = array('id' => 9999, 'topic' => geopgraphy, ...)
    */
    return $row;
}

?