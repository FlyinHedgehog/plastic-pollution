
<!DOCTYPE html>

<html>
    <head>
        <meta charset='UTF-8'>
        <title>...</title>
    </head>
    <body>
        <?php
            extract($_POST);
            foreach($_POST as $k => $v){
                $p = trim($p);
                $p = stripslashes($p);
                $p = htmlspecialchars($p);
            }

            $msg = $_POST["message"];

            $file = "../stuff/files/messages.txt";

            file_put_contents($file, $msg.PHP_EOL.PHP_EOL, FILE_APPEND);

            fclose($file);

            header("location: https://web.itu.edu.tr/sahingo19/plastic-pollution/home/about.php");
            exit();
        ?>
    </body>
</html>