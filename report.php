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

            </div> 
            
            <button class="btn btn-primary" onclick="document.location='/index.php';">Neues Quiz</button>
        </div>


<?php 
include "./includes/footer.php"
?>

</body>
</html>

        