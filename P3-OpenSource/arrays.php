<!DOCTYPE html>
<html>
    <head>
        <title>Open Source</title>
    </head>
    <body>
        <form action = "openSource.php" method = "post">
            <input type = "password" name = "pass0">
            <br>
            <input type = "password" name = "pass1">
            <br>
            <input type = "password" name = "pass2">
            <br>
            <input type = "password" name = "pass3">
            <br>
            <input type = "submit">
            <br>
        </form>

        <?php 
            $passwords = array($_POST["pass0"], $_POST["pass1"], $_POST["pass2"], $_POST["pass3"]);
            echo $passwords[0];
            echo $passwords[1];
            echo $passwords[2];
            echo $passwords[3];
         ?>
    </body>
</html>