<?php
    require "./includes/data-collector.php"; // Muss zuerst sein wegen start_session()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">s
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
</head>
<body>
    <?php
        require "./includes/db.php";
    ?>

    <!-- FORMULAR "Themenwahl" -->
    <div style="padding: 20px;">
        <form id="quiz-form" action="question.php" method="post" onsubmit="return navigate('next');">
            <!-- Themenwahl -->
            <label for="quiz-topic" class="form-label">Quiz Thema - bitte auswählen!</label> 
            <select style="width:400px" class="form-select" aria-label="Default select example" id=top ....>
                <option value="geography">Geopgraphy</option>
                <option value="animals">Animals</option>
                <option value="movies">Movies</option>
            </select>

            <!-- Anzahl Fragen -->
            <label style="margin-top:20px;" for="questionNum" class="form-label">Number of Questions</label>
            <input style="width:100px" type="number" class="form-control"
                id="questionNum" name="questionNum"
                min="5" max="40" value="10">
                
            <!--
                input type="hidden"
                    lastQuestionIndex: mit PHP gesetzt
                    indexStep: mit JavaScript setIntValue(fieldId, value) verändert
            -->
            <input type="hidden" id="lastQuestionIndex" name="lastQuestionIndex" value="-1">
            <input type="hidden" id="indexStep" name="indexStep" value="1">

            <!-- Validierungswarnung -->
            <p id="validation-warning" class="warning"></p>

            <!-- submit -->
            <input style="margin-top:20px;" type="submit" value="Start">
        </form>
    </div>
            
</body>
</html>





































<!-- FORMULAR "Themenwahl" -->
<div style="padding: 20px">
    <form id="quiz-form" action="question.php" methode="post" onsubmit="return navigate('next');">
        <!-- Themenwahl --> 
        <label for="quiz-topic" class="form-label">Quiz Thema - bitte auswwählen</label>
        <select style="width:400px" class="form-select" aria-labe="Default select example" id="topic" name="topic">
            <option value="geography">Geopgraphy</option>
            <option value="animals">Animals</option>
            <option value="movies">Movies</option>
        </select>


        <!-- Anzahl Fragen -->
        <label style="margin-top: 20px;" for="questionNum" class="form-label">Number of Questions</label>
        <input style="width:100px" type="number" class="form-control" id="questionNum" name="questionNum" min="5" max="40" value="10>

        <!--
            input type="hidden"
                lastQuestionIndex: mit PHP gesetzt
                indexStep: mit JavaScript setIntValue(fieldId, value) verändert
        -->
        <input type="hidden" id="lastQuestionIndex" name="lastQuestionIndex" value="-1">
        <input type="hidden" id="indexStep" name="indexStep" value="1">

        <!-- Validierungserwartung -->




