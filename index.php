<?php
    require "./includes/data-collector.php"; // Muss zuerst da sein wegen start_session()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" herf="Bootstrap link CSS>
    <script src="Bootstrap link JS></script>
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
            <select style="width:400px" class="form-select" aria-label="Default select example ....
    
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




