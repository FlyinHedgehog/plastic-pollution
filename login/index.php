
<!--Bu kismi daha onceden yaptigim icin ve bootstrap sonradan ekledigim icin biraz kotu oldu-->
<!--biliyorum...  :(  -->

<!DOCTYPE HTML>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link 
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous"
        >
        <link rel="stylesheet" href="../stuff/css_files/login_form.css">
        <title>Login</title>
    </head>
    <body>

        <?php
            if (isset($_GET['Message']))
            {
                print '<script>alert("' . $_GET['Message'] . '");</script>';
            }
        ?>

        <div class=" container-md">
            <div class="col-md-12">
                <div class="login_box">
                    <h1>Login</h1>
                    <form action = "login.php" method = "post">
                        <div class="txt_field">
                            <input type="text" maxlength="31" name="username" placeholder="  Username" required>
                        </div>  
                        <div class="txt_field">
                            <input type="password" maxlength="31" name="password" placeholder="  Password" required>
                        </div>
                        <div>
                            <input type="submit" name="submitted" value="Login">
                        </div>
                        <div class="link_box">
                            Don't have an account?<br>
                            <a href="https://web.itu.edu.tr/sahingo19/plastic-pollution/login/signup.php">Signup</a>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>


        <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"
        >
        </script>
    </body>