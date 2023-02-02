<?php
        require "./includes/data-collector.php"; // Muss ganz am Anfang der Hauptseite sein, enthält start_session()
        echo "top of question page";
        print_r($quiz);
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="css/style.css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/main.js"></script>
    </head>
    <body>
<?php 
include "./includes/header.php"
?>






<!-- ELEMENT 6: SERVICES SECTION START-->
<!-- All same as Element 5, except: bg-dark; text-light, image right and content left-->



<section id="consulting" class="p-5 bg-black text-light">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            
            <div class="col-md p-5">

             <!--    <h2><span class="text-warning">Question: </span> </h2>  -->
            



                <?php 
            // Bestimme die Anzahl der verfügbaren Fragen
            if (isset($quiz["questionIdSequence"])) {
              //  echo "do we get here";

                $id = $quiz["questionIdSequence"][$currentQuestionIndex];
              //  echo "$id";
        } // Hole alle Datenfelder zur Frage mit $id von der Datenbank
            $question = fetchQuestionById($id, $dbConnection);
        ?>
        <!-- FORMULAR "Fragestellung" --> 
        <div class="row">
            <div class="col-sm-8">
                <!-- Fragestellung -->
                <h2><span class="text-warning">Question <?php echo ($currentQuestionIndex + 1); ?> of <?php echo $quiz["questionNum"]; ?>:</h2><br><br>
            <h3><?php echo $question["question_text"]; ?></h3>

            <form id="quiz-form" action="<?php echo $actionUrl;?>" method="post" onsubmit="return navigate('next')";>
                <?php
                    // Generiere Antwort-Radio-Buttons mit Beschriftung

                    // Single-Choice: Hole den Namen der richtigen Antwortspalte in $correct, aus $question["$correct"]
                    $correct = $question["correct"];

                    for ($a= 1; $a <= 5; $a++) {
                        // 307Setze für $answerColumnName den Namen der Tabellenspalte "answer-N" zusammen
                        $answerColumnName = "answer-" . $a;

                        // Falls überhaupt Antworttext in $question[$answerColumnName] gibt
                        // und der Antworttext nicht gleich '', dann...
                        if (isset($question[$answerColumnName]) && $question[$answerColumnName] !== '') {
                            // ... hole den Antworttext aus $question
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

                <!--
                    input type="hidden"
                        questionNum, lastQuestionIndex: mit PHP gesetzt
                        indexStep: mit JavaScript setIntValue(fieldId, value) verändert
                 -->
                <input type="hidden" id="questionNum" value="<?php echo $quiz["questionNum"]; ?>">
                <input type="hidden" id="lastQuestionIndex" name="lastQuestionIndex" value="<?php echo $currentQuestionIndex; ?> ">
                <input type="hidden" id="indexStep" name="indexStep" value="1">



                <!-- Validuerungswarnung -->
                <p id="validation-warning" class="warning"></p>

                <!-- submit -->
                <!-- <button type="submit" class="btn btn-primary" onclick="navigatePrevious();">Previous</button> -->
                <button type="submit" class="btn btn-warning">Next</button>
                <p class="spacer"></p>
            </form>
        </div>
    </div>



















                <p class="lead">
                Are you sure?

                </p>

                
               
              </div>

            <div class="col-md ">
                <img src="assets/scary-tree.jpg" class="img-fluid d-none d-md-block float-end" alt="scary pear tree">
            </div>

        </div>


      </div>
    </section>
    <!-- ELEMENT 6: SERVICES SECTION END-->
















 



<?php 
include "./includes/footer.php"
?>


</body>
</html>