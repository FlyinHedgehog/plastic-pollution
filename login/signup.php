

<!DOCTYPE html>

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
        <link rel='stylesheet' href='../stuff/css_files/signup_form.css'>
        <title>Sign up</title>
    </head>
    <body>
        <?php
            if (isset($_GET['Message']))
            {
                print '<script>alert("' . $_GET['Message'] . '");</script>';
            }
        ?>
        <div class="container m-5">
            <div class="row align-items-center m-5">
                <div class="col-12 m-5">
                    <div class="login_box">
                        <h1>Create a new account</h1>
                        <form action = 'signup-user.php' method = 'post'>
                            <div class='txt_field'>
                                <input type='text' maxLength='31' name='new_username' placeholder="create username" required>
                                <label>Username</label>
                            </div>  
                            <div class="txt_field">
                                <input type="password" maxlength='31' name='new_password' placeholder="create password" required>
                                <label>Password</label>
                            </div>
                            <div>
                                <input type='submit' name='submitted' value='Sign up'>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>



