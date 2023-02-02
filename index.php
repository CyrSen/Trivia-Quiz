<?php
    require "./includes/data-collector.php"; // Muss zuerst sein wegen start_session()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"  rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css"/>
    <title>Danger Quiz Start</title>
</head>
<body>
   

 
            
<?php 
include "./includes/header.php"
?>


<!-- SHOWCASE START-->

    <section class="bg-black text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start">
        <div class="container">
            <div class="d-sm-flex align-items-center justify-content-between">
                <div> 
                    <h1><span class="text-warning">Danger Zone </span></h1>
                    <p class="lead my-4">This quiz is not for the faint hearted. </p><h3> Are you man enough? <br><br><br><br></h3>
                </div>
                    <img class="img-fluid w-25  d-lg-block "src="assets/Vampire 2.jpeg" alt="">
            </div>
        </div>
    </section>
    
    <!-- SHOWCASE AREA END-->
    




   <!-- FORMULAR "Themenwahl" -->
   <div style="color: grey; background-color: black; padding: 20px;">
        <form id="quiz-form" action="question.php" method="post" onsubmit="return navigate('next');">
            <!-- Themenwahl -->
            <label for="quiz-topic" class="form-label">Quiz Topic - Please Choose!</label> 
            <select style="width:400px; background-color: #ffc107" class="form-select" aria-label="Default select example" id="topic" name="topic">
                <option value="music">Music</option>
                <option value="ch-norris">Chuck Norris</option>
                <option value="animals">Animals</option>
                <option value="movies">Movies</option>
                <option value="d-n-d">Dungeons-n-Dragons</option>
                <option value="astronautics">Astronautics</option>
                <!-- <option value="technology">Technology</option> -->
                <!-- <option value="ai">Artificial Intelligence</option> -->
                <option value="geopgraphy">Geography</option>
                <!-- <option value="sports">Sports</option> -->
                <option value="science">Science</option>
                <option value="informatics">Informatics</option>
                <option value="gen-knowledge">General Knowledge</option>
            </select>

            <!-- Anzahl Fragen -->
            <label style="margin-top:20px;" for="questionNum" class="form-label">Number of Questions</label>
            <input style="width:100px; background-color: #ffc107" type="number" class="form-control"
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
            <input style="margin-top:20px; background-color: #ffc107;" type="submit" value="Start">
        </form>
    </div>


<?php 
include "./includes/footer.php"
?>

</body>
</html>

