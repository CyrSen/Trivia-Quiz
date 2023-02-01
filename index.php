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
   

    <!-- FORMULAR "Themenwahl" -->
    <div style="padding: 20px;">
        <form id="quiz-form" action="question.php" method="post" onsubmit="return navigate('next');">
            <!-- Themenwahl -->
            <label for="quiz-topic" class="form-label">Quiz Thema - bitte auswählen!</label> 
            <select style="width:400px" class="form-select" aria-label="Default select example" id="topic" name="topic">
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
            
<!-- NAVBAR START-->

    <nav class="navbar navbar-expand-lg bg-black navbar-dark py-3 fixed-top">
        <div class="container">
            <a href="1-index.html" class="navbar-brand text-light fs-6 text-white-50">Danger Quiz</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!--MENU-->
            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="1-index.html" class="nav-link">Start</a>
                    </li>
                    <li class="nav-item">
                        <a href="2-questions.html" class="nav-link">Questions</a>
                    </li>
                    <li class="nav-item">
                        <a href="3-result.html" class="nav-link">Result</a>
                    </li>
                </ul>
           </div>
        </div>
    </nav>

<!-- NAVBAR END-->


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
    


<!-- CHOOSE YOUR GAME START -->
<section id="FAQ" class="p-5 bg-black text-light">
    <div class="container">
        <h2 class="text-center mb-4 text-white-50">Choose Your Game</h2>
        <div class="accordion accordion-flush" id="faq">

            <!--Item 1-->
            <div class="accordion-item ">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button 
                        class="accordion-button collapsed bg-dark text-light" 
                        type="button" 
                        data-bs-toggle="collapse" data-bs-target="#question-one" >
                        Select topic
                    </button>
                </h2>
                <div id="question-one" class="accordion-collapse collapse" data-bs-parent="#questions">
                <div class="accordion-body bg-dark text-warning">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos minus aut saepe. Dicta corrupti iste assumenda voluptate eaque laboriosam! Neque error architecto, eaque expedita officia sit totam assumenda aut officiis soluta. Consectetur iusto dolor et eos quasi minus obcaecati eligendi, ipsum tempora animi necessitatibus architecto laborum tempore! Delectus, odio blanditiis.
                </div>
                </div>
            </div>

            <!--Item 2-->
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button 
                        class="accordion-button collapsed bg-dark text-light" 
                        type="button" 
                        data-bs-toggle="collapse" data-bs-target="#question-two" >
                        Select number of questions
                    </button>
                </h2>
                <div id="question-two" class="accordion-collapse collapse"  data-bs-parent="#questions">
                <div class="accordion-body bg-dark text-warning">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos minus aut saepe. Dicta corrupti iste assumenda voluptate eaque laboriosam! Neque error architecto, eaque expedita officia sit totam assumenda aut officiis soluta. Consectetur iusto dolor et eos quasi minus obcaecati eligendi, ipsum tempora animi necessitatibus architecto laborum tempore! Delectus, odio blanditiis.
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CHOOSE YOUR GAME END -->


<!-- SHADOW CONTAINER START-->
<section id="shadow-section" class="p-5 bg-black text-light">
    <div class="container">
    </div>
</section>
<!-- SHADOW CONTAINER END-->


<!-- FOOTER START -->
        <nav class="navbar navbar-expand-lg bg-black py-3 fixed-bottom">
            <div class="container">
                <a href="#" class="navbar-brand text-white-50 fs-6">&copy; 2023 Danger Quiz & Co.</a>
                <button type="button" class="btn btn-outline-warning">Start Quiz</button>
            </div>
        </nav>
<!-- FOOTER END -->

</body>
</html>

