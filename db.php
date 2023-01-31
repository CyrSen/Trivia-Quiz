<?php
// Verbinde mit mySQL, mit Hilfe eines PHP PDO Objekts
$dbHost = getenv('DB_HOST');
$dbName = getenv('DB_NAME');
$dbUser = getenv('DB_USER');
$dbPassword = getenv('DB_PASSWORD');

$dbConnection = newPDO("mysql:host=$dbHost;dbname=$dbName;charset=utf8", $dbUser, $dbPassword);

// Setze den Fehlermodus für Web Devs
$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// QUERY FUNCTIONS --------------------------------------------------

function fetchQuestionById($id, $dbConnection) 