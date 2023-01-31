<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!--BOOTSTRAP CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--CSS Stylesheet-->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <!-- START: PHP INCLUDE -->
    <?php 
    require "./includes/db.php"; 

    // SQL-Statement formulieren: Alle Daten (ganze Tabellenzeile)
    // zur Frage mit der angegebenen $id auslesen
    $id = '301';
    $question = fetchQuestionById($id, $dbConnection);
    
    // currentQuestionIndex value
    $currentQuestionIndex = 0;
    $quiz = ["questionNum" => 10,];
    ?>

    <h7>Frage<?php echo ($currentQuestionIndex + 1); ?> von <?php echo $quiz["questionNum"]; ?></h7>
    <h3><?php echo $question["question_text"]; ?></h3>

    <form id="quiz-form" action="question.php" method="post">
    <?php
    // Generiere Antwort-Radio-Buttons mit Beschriftung

    // Single-Choice: Hole den Namen der richtigen Antwortspalte in $correct, aus $question["$correct"]
    $correct = $question["correct"];

    for ($a= 1; $a <= 5; $a++) {
    // Setze für $answerColumnName den Namen der Tabellenspalte "answer-N" zusammen
    $answerColumnName = "answer-" . $a;

    // Falls überhaupt Antworttext in $question[$answerColumnName] gibt
    // und der Antworttext nicht gleich '', dann...
    if (isset($question[$answerColumnName]) && $question[$answerColumnName] !== '') {
        // hole den Antworttext aus $question
        $answerText = $question[$answerColumnName];

        // Entscheide für $value, wieviele Punkte die Antwort ergibt:
        // richtig -> 1 Punkt, falsch = 0 Punkte
        if ($correct === $answerColumnName) $value = 1;
        else $value = 0;

        echo "<div class='form-check'>
        <input class='form-check-input' type='radio' name='single-choice' id='$answerColumnName' value='$value'>
        <label class='form-check-label' for='$answerColumnName'>$answerText</label>
        </div>";
        }
    }
    
    ?>


    <input type="submit" value="Submit">
    </form>
    <!-- END: Page Content -->

    <!--BOOTSTRAP and LOCAL Javascript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/Javascript/main.js"></script>
</body>
</html>