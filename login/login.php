
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

        list($true_pw) = mysqli_fetch_row(mysqli_query($c, "SELECT password FROM Users WHERE username='$username';"));
        mysqli_close($c);

        $verified = 0;
        if ($true_pw == $password){
            $verified = 1;
        }

        if($verified == 1){
            setcookie("mySpecialCookie", $username, time() + (86400 * 30), "/");
            header('location: https://web.itu.edu.tr/sahingo19/plastic-pollution/home/homepage.php');
            exit();
        }
        else{
            header('location: https://web.itu.edu.tr/sahingo19/plastic-pollution/login/index.php');
            exit();
        }
        
       ?>
    </body>
</html>