
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
        <link href="../../stuff/css_files/home.css" rel="stylesheet">
        <link href="../../stuff/css_files/navbar.css" rel="stylesheet">
        <title>The Issue</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark myNavbar">
            <div class="container justify-content-center">
                <a class="navbar-brand myNavBrand">
                    <img
                        src="../../stuff/images/logo/logo-bg1.png"
                        alt=""
                        width="60"
                        height="60"
                    />
                    PlasticEarth
                </a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item mx-4 myItem">
                            <a class="nav-link" href="../homepage.php">Home</a>
                        </li>
                        <li class="nav-item dropdown mx-4">
                            <a
                            class="nav-link dropdown-toggle active myItem"
                            href="#"
                            id="navbarDropdown"
                            role="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                            >
                            Issue
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="wildlife.php">Wildlife</a></li>
                                <li><a class="dropdown-item" href="environment.php">Environment</a></li>
                                <li><a class="dropdown-item" href="humans.php" aria-current="page">Humans</a></li>
                            </ul>
                        </li>
                        <li class="nav-item mx-4">
                            <a class="nav-link myItem" href="../test-yourself.php">Quiz</a>
                        </li> 
                        <li class="nav-item mx-4">
                            <a class="nav-link myItem" href="../about.php">About</a>
                        </li>
                        <?php
                            if(isset($_COOKIE["mySpecialCookie"]))
                            {
                                echo '<li class="nav-item mx-4 my-2">';
                                    echo '<a class="btn btn-danger" href="../../login/logout.php">';
                                        echo 'Logout';
                                    echo '</a>';
                                echo '</li>';
                                echo '<li class="mx-4 mt-2">';
                                    echo '<p class="myItem">Hello, <u>'.$_COOKIE["mySpecialCookie"].'</u>!</p>';
                                echo '</li>';
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="mt-5 border border-1 border-dark w-75 mx-auto p-5">
            <p class="text-justify">
                Humanity is trying to process materials and turn them into useful tools since ancient times. In fact, this effort is such that we have separated historical eras according to the materials used to make tools. It was important for these materials to be strong, economic, malleable, and in some cases lightweight. By the 1950s, an alternative material was needed due to the continuous increase in the human population and the scarce resources. Thus, plastic, which has the desired properties and is generally produced from petroleum, became popular. With the developing technology, it is getting easier to produce plastic every day and it is possible to come across this useful synthetic material in every part of our lives. With the increase in plastic production, some people began to question its impacts on the environment and living creatures.
            </p>
        </div>


        <div class="container">
            <div class="row text-center">
                <div class="col-md-4">
                    <div class="card m-3 mt-5 p-3 border-2 border-dark myCard">
                        <img src="../../stuff/images/issue-cards/wildlife.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="wildlife.php" class="btn btn-primary text-center cardBtn">Wildlife</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card m-3 mt-5 p-3 border-2 border-dark myCard">
                        <img src="../../stuff/images/issue-cards/environment.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="environment.php" class="btn btn-primary cardBtn">Environment</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card m-3 mt-5 p-3 border-2 border-dark myCard">
                        <img src="../../stuff/images/issue-cards/embryo.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="humans.php" class="btn btn-primary cardBtn">Humans</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="text-white page-footer mt-5">
            <div class="container p-4">
                <div class="row">
                    <div class="col-lg-8">
                            <h4>ABOUT SITE</h4>
                            <p>This website was made by Gökçe Şahin for the Istanbul Technical University 2022 Spring Web Programming course.</p>
                    </div>
                    <div class="col-lg-4">
                            <h4>CONTACT ME!</h4>
                            <p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#d68438" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                    <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                                </svg>
                                &nbsp; sahingo19@itu.edu.tr
                            </p>
                    </div>
                </div>
            </div>
        </footer>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"
        >
        </script>

    </body>

</html>

