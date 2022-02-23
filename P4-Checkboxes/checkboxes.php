<!DOCTYPE html>
<html>
    <head>
        <title>Checkboxes</title>
    </head>
    <body>
        <form action = "checkboxes.php" method = "post">
            Password 1: <input type = "checkbox" name = "passwords[]" value = "ksowb"><br>
            Password 2: <input type = "checkbox" name = "passwords[]" value = "ridb"><br>
            Password 3: <input type = "checkbox" name = "passwords[]" value = "iwbs"><br>
            Password 4: <input type = "checkbox" name = "passwords[]" value = "vbx,">
            <br><input type = "submit">
        </form>
        <?php 
            $passwords = $_POST["passwords"];
            echo $passwords[2];
         ?>
    </body>
</html>