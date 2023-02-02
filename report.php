<?php
    require "./includes/data-collector.php"; 
    
    //prettyPrint($_SESSION, '$_SESSION = ');

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





<!-- ELEMENT 5: "SOLUTION" SECTION A) START-->
<!-- Section: With "class p-5"; without background; with id (so navigation can take us down here).-->
<!-- Container-->
<!-- Grid-Row: Align items centered vertically; Justify-content between the two items.-->
<!-- Grid-Column 1 for image: we add a class of image fluid so it stays inside the container.-->
<!-- Grid-Column 2 for content: to this we add padding. The lead makes the paragraph a bit bigger -->
<!-- Link formatted as button: Leading nowhere (#) light; marging top of 3 to push the button (the link) down a little bit; Inside the a tag we put a "read more"; and we also put a chevron icon --> 

    <section id="solution" class="p-5 bg-warning">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md">
                    <img src="assets/cute-vampire-girl.png" class="img-fluid" alt="">
                </div>
                <div class="col-md p-5">
                    <h1>Hurray, you're done!</h1> <br> 
                    <?php 

            $totalPoints = 0;

            foreach ($_SESSION as $name => $value) {
                if (str_contains($name, 'question-')) {
                    // if (isset($value["single-choice"])) {
                        $points = intval($value["single-choice"]);
                        $totalPoints = $totalPoints + $points; // Kurzform: $totalPoints += $points;
                        //}
                }
            }

            // Maximal mögliche Punkte
            $maxPoints = $_SESSION["quiz"]["questionNum"]
?>     
    
        <!-- FORMULAR "Fragestellung" -->
        <div class="row">
            <div class="col-sm-8">
                <!-- Fragestellung -->
                <h7> Congratulations!</h7>
                
                <?php
                echo
                "<h3> You achieved $totalPoints out of possible $maxPoints points.</h3>"; 
                ?>
              <br><br><br>
            </div> 
          
            <button class="btn btn-danger" onclick="document.location='/index.php';">Let's try again!</button>
        </div>
                </div>
            </div>
        </div>
   </section>
<!-- ELEMENT 5: SOLUTION SECTION END-->




<?php 
include "./includes/footer.php"
?>

</body>
</html>

        