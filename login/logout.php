
<!DOCTYPE html>

<html>
    <head>
        <meta charset='UTF-8'>
        <title>...</title>
    </head>
    <body>
        <?php
            if(!isset($_COOKIE["mySpecialCookie"]))
            {
                header('location: https://web.itu.edu.tr/sahingo19/plastic-pollution/home/homepage.php');
                exit();
            }
            setcookie("mySpecialCookie", $_COOKIE["mySpecialCookie"], time()-1, '/');
            header('location: https://web.itu.edu.tr/sahingo19/plastic-pollution/home/homepage.php');
            exit();
        ?>
    </body>
</html>