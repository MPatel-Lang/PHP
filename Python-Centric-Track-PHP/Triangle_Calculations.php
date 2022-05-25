/*
Name: Mehul Patel
Date: 9/12/2021
I wrote a PHP program that takes in the length of each side of the triangle and outputs the Hypotenuse.     
*/


<!DOCTYPE HTML>  
<html>
        <head>
        </head>
        <body>  

        <?php
                // define variables and set to empty values
                
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                  $diameter = test_input($_POST["diameter"]);
                  $a = test_input($_POST["a"]);
                  $b = test_input($_POST["b"]);

                  $h = sqrt(pow($a,2)+pow($b,2));
                }               

                function test_input($data) {
                  $data = trim($data);
                  $data = stripslashes($data);
                  $data = htmlspecialchars($data);
                  return $data;
                }
        ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <p>Enter Sides For Triangle</p>
                Side a: <input type="text" name="a">
                <br><br> 
                Side b: <input type="text" name="b">
                <br><br>
                <input type="submit" name="submit" value="Submit"><br>
        </form>

        <?php
                echo "<h4>Your table details:</h4>";
                echo "<h4>The length of your triangle hypotenuse:</h4>";
                echo "Side a:         " . $a . "<br>";
                echo "Side b:         " . $b . "<br>";
                echo "Hypotenuse:     " . $h . "<br>";
        ?>

        </body>
</html>