<?php
/*
    session_start() Muss vor dem Gebrauch von $_SEESION ausgeführt werden.
    Dazu muss das data-collector.php ganz am Anfang einer Hauptseite per 
    'include' oder 'require' referenziert werden.
*/
session_start();

/Hilfswerkzeuge laden 
include 'tools.php';

// Falls verfügbar, hole die Quiz-Daten aus der Session.
if (isset($_SESSION["quiz"])) $quiz = $_SESSION["quiz"];
else $quiz = null;

prettyPrint($quiz, '$quiz =');

/*
    Hole die Indexnummer der letzen Frage aus $_POST "lastQuestionIndex". 
    $lastQuestionIndex wird für question.php und report.php vewendet, jedoch 
    nicht für index.php. 
*/
if (isset($_POST["lastQuestionIndex"])) {
    // https://www.php.net/manual/en/function.intval.php
    $lastQuestionIndex = intval($_POST["lastQuestionIndex"]);
}
else {
    // -1 soll bedeuten, dass das Quiz noch nicht gestartet wurde.
    $lastQuestionIndex = -1;
}

prettyPrint($lastQuestionIndex, '$lastQuestionIndex =');