<?php
/*
    ss Muss vor dem Gebrauch von $_SEESION ausgeführt werden.
    Dazu muss das data-collector.php ganz am Anfang einer Hauptseite per 
    'include' oder 'require' referenziert werden.
*/
session_start();

// Hilfswerkzeuge laden 
include 'tools.php';
include 'db.php'; 

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

// Abhängig von der aktuellen Hauptseite: Bereite die benötigten Seitendaten vor.
$scriptName = $_SERVER['SCRIPT_NAME']; // https://www.php,net/manual/en/reserved.variables.server.php 
prettyPrint($scriptName, '$scriptName =');
prettyPrint($_POST, '$_POST =');

// index.php (Startseite) ---------------------------------------------------
if (str_contains($scriptName, 'index')) { // https://www.php.net/manual/en/function.str-contains.php
    // Lösche die Daten, inklusive bestehende Quiz-Daten in der $_SESSION.
    session_unset();

    // Setze explizit auch $quiz zurück (Konsistenz gegenüber Session).
    $quiz = null;
}
//. question.php (Frageseite) --------------------------------------------------
else if (str_contains($scriptName, 'question')) {
    if ($lastQuestionIndex === -1) { // -1 bedeutet, dass das Quiz noch nicht gestartet wurde.}
        // Starte ein neues Quiz ...
        $questionNum = intval($_POST["questionNum"]);

        $questionIdSequence = fetchQuestionIdSequence(
            $_POST["topic"],
            $questionNum,
            $dbConnection
        );


        // Berechne die wirklich mögliche Anzahl von Fragen
        $questionNum = min(count($questionIdSequence), $questionNum);

        $quiz = array(
            "topic" => $_POST["topic"],
            "questionNum" => $questionNum,
            "lastQuestionIndex" => $lastQuestionIndex,
            "currentQuestionIndex" => -1,
            "questionIdSequence" => $questionIdSequence
        );
}  
prettyPrint($quiz, '$quiz = ');
    /*...















    */
    $indexStep = 1;
prettyPrint($indexStep, '$indexStep = ');
    if (isset($POST["indexStep"])) {
        // https://www.php.net/manual/en/function.intval.php
        $indexStep = intval($_POST["indexStep"]);
    }

    // Index der aktuellen Frage, sowie für das Quiz setzen.
    $currentQuestionIndex = $lastQuestionIndex + $indexStep;
prettyPrint($currentQuestionIndex, '$currentQuestionIndex = ');
    /*...


    */
}




// report.php (Auswertungsseite) ----------------------------------------------------------------
else if (str_contains($scriptName, 'report')) {
    // Die Reportseite ist ausserhalb der Fragesequenz
    $currentQuestionIndex = -1;
}
else {
    // Unbekannte URL
}






// Speichere Quizparameter und Post-Daten der letzten Frage in der Session.
if (isset($quiz) && $currentQuestionIndex >=0) { 
    $_SESSION["quiz"] = $quiz;
    $_SESSION["quiz"]["lastQuestionIndex"] = $lastQuestionIndex;
    $_SESSION["quiz"]["currentQuestionIndex"] = $currentQuestionIndex;
}

if ($lastQuestionIndex >= 0) { // Achtung: Nur für gültige Frageindexe speichern.
    $questionName = "question-" . $lastQuestionIndex;
    $_SESSION[$questionName] = $_POST;
}

// DEVONLY: Gib die aktuelle $_SESSION in die Seite aus.
prettyPrint($_SESSION, '$_SESSION = ');
?>
