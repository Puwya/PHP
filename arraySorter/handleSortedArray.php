<!DOCTYPE html>
<html>
    <head>
        <title>Sorted Array</title>
    </head>
    <body>
        <?php 
            include "sortArray.php";
            include "displayArray.php";
            $array = $_POST["value"];

            echo "Unsorted Array <br> ";
            displayArray($array);
            echo "<hr>";
            echo "Sorted Array <br>";
            sortArray($array);
            displayArray($array);
        ?>
        <hr>
        <a href="arraySorter.php">Back to main menu</a>
    </body>
</html>