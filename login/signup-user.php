
<!DOCTYPE html>

<html>
    <head>
        <meta charset='utf-8'>
        <title>...</title>
    </head>
    <body>
       <?php
        include '../stuff/connect.php'; //connection: $c

        extract($_POST);
        foreach($_POST as $k => $v){
            $p = trim($p);
            $p = stripslashes($p);
            $p = htmlspecialchars($p);
        }

        list($n) = mysqli_fetch_row(mysqli_query($c, "SELECT COUNT(*) FROM Users WHERE username='$new_username';"));

        if($n != 0){
            $Message = "Username exists. You can log in or choose a different username.";
            header("location:  https://web.itu.edu.tr/sahingo19/plastic-pollution/login/index.php?Message=" . urlencode($Message));
            exit();
        }

        mysqli_query($c, "INSERT INTO Users (username, password) VALUES ('$new_username', '$new_password')");

        header('location: https://web.itu.edu.tr/sahingo19/plastic-pollution/login/index.php');

        mysqli_close($c);
        exit();
        
       ?>
    </body>
</html>