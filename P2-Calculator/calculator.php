<!DOCTYPE html>
<html>
    <head>
        <title>Calculator</title>
    </head>
    <body>
        <form action = "calculator.php" method = "get">
            Number1: <input type = "number" name= "num1">
            <br>
            Number2: <input type = "number" name= "num2">
            <input type = "submit">
        </form>
        Answer: 
        <?php 
            echo $_GET["num1"] + $_GET["num2"];
        ?>
    </body>
</html>