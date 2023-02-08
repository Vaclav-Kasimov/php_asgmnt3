<!DOCTYPE html>
<html>
    <head>
        <title>Kasimov Viacheslav ccd19880</title>
    </head>
    <body>
        <h1>Welcome to my guessing game!</h1>
        <p>
            <?php
            $correct = 53;
            if ( !(isset($_GET['guess'])) ){
                echo "Missing guess parameter";
            } elseif ( strlen($_GET['guess']) == 0){
                echo "Your guess is too short";
            } elseif ( !(is_numeric($_GET['guess']))){
                echo "Your guess is not a number";
            } elseif ( $_GET['guess'] < $correct ){
                echo "Your guess is too low";
            } elseif ( $_GET['guess'] > $correct ){
                echo "Your guess is too high";
            } else {
                echo "Congratulations - You are right";
            }
            ?>
        </p>
    </body>
</html>