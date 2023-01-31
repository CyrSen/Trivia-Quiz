





































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




