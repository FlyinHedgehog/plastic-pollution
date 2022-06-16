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
        <link href="../stuff/css_files/home.css" rel="stylesheet">
        <link href="../stuff/css_files/navbar.css" rel="stylesheet">
        <title>Quiz</title>
    </head>
    <body>

        <?php
            if(!isset($_COOKIE["mySpecialCookie"]))
            {
                $Message = "Sign in to take the quiz.";
                header("location: https://web.itu.edu.tr/sahingo19/plastic-pollution/login/index.php?Message=" . urlencode($Message));
                exit();
            }
        ?>

        <nav class="navbar navbar-expand-lg navbar-dark myNavbar">
            <div class="container justify-content-center">
                <a class="navbar-brand myNavBrand">
                    <img
                        src="../stuff/images/logo/logo-bg1.png"
                        alt=""
                        width="60"
                        height="60"
                    />
                    PlasticEarth
                </a>
                <button
                    class="navbar-toggler myToggler"
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
                            <a class="nav-link" href="homepage.php">Home</a>
                        </li>
                        <li class="nav-item dropdown mx-4">
                            <a
                            class="nav-link dropdown-toggle myItem"
                            href="#"
                            id="navbarDropdown"
                            role="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                            >
                            Issue
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="issue/wildlife.php">Wildlife</a></li>
                                <li><a class="dropdown-item" href="issue/environment.php">Environment</a></li>
                                <li><a class="dropdown-item" href="issue/humans.php">Humans</a></li>
                            </ul>
                        </li>
                        <li class="nav-item mx-4">
                            <a class="nav-link active myItem" aria-current="page" href="#">Quiz</a>
                        </li> 
                        <li class="nav-item mx-4">
                            <a class="nav-link myItem" href="about.php">About</a>
                        </li>
                        <?php
                            if(isset($_COOKIE["mySpecialCookie"]))
                            {
                                echo '<li class="nav-item mx-4 my-2">';
                                    echo '<a class="btn btn-danger" href="../login/logout.php">';
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

        <div class="container my-5 p-4 border border-dark">
            <h1 class="text-center">QUIZ</h1>
            <h5 class="text-center">Answer all the questions below <u>correctly</u> to win a prize!</h5>
            <hr>
            <form action="check-quiz.php" method="post">
                <p class="text-justify">
                    <b>Q-1)</b> Between 1950 and 2015, humanity produced about 8.3 billion tons of plastic. 6.3 billion tonnes (76%) of these turned into plastic waste; <b>_____</b> of this plastic waste is recycled and only <b>_____</b> is recycled more than once.
                </p>
                <div class="form-check">
                    <div class="row">
                        <div class="col-sm-3">
                            <label class="form-label">20% - 13%</label>
                            <input type="radio" class="form-check-input" name="q1" value="A" required onclick="change_color(0, 0)">
                        </div>
                        <div class="col-sm-3">
                            <label class="form-label">9% - 1%</label>
                            <input type="radio" class="form-check-input" name="q1" value="B" onclick="change_color(0, 1)">
                        </div>
                        <div class="col-sm-3">
                            <label class="form-label">74% - 45%</label>
                            <input type="radio" class="form-check-input" name="q1" value="C" onclick="change_color(0, 2)">
                        </div>
                        <div class="col-sm-3">
                            <label class="form-label">52% - 20%</label>
                            <input type="radio" class="form-check-input" name="q1" value="D" onclick="change_color(0, 3)">
                        </div>
                    </div>
                </div>
                <hr>

                <p class="text-justify">
                    <b>Q-2)</b> In August 2015, while Robinson and Figgener were conducting boat surveys in search of sea turtles, they stumbled upon a turtle that had a 10 cm (about the length of the long edge of a credit card) long <b>_________</b> deeply embedded into its left nostril.
                </p>
                <div class="form-check">
                    <div class="row">
                        <div class="col-sm-3">
                            <label class="form-label">Fly</label>
                            <input type="radio" class="form-check-input" name="q2" value="A" required onclick="change_color(1, 0)">
                        </div>
                        <div class="col-sm-3">
                            <label class="form-label">Sugar cane</label>
                            <input type="radio" class="form-check-input" name="q2" value="B" onclick="change_color(1, 1)">
                        </div>
                        <div class="col-sm-3">
                            <label class="form-label">Plastic straw</label>
                            <input type="radio" class="form-check-input" name="q2" value="C" onclick="change_color(1, 2)">
                        </div>
                        <div class="col-sm-3">
                            <label class="form-label">Pencil</label>
                            <input type="radio" class="form-check-input" name="q2" value="D" onclick="change_color(1, 3)">
                        </div>
                    </div>
                </div>
                <hr>

                <p class="text-justify">
                    <b>Q-3)</b> Plastics can be divided into four categories according to their size: megaplastics, macroplastics, mesoplastics, and microplastics. <b>__________</b> are the ones that cause the most problems because they are so small in size.
                </p>
                <div class="form-check">
                    <div class="row">
                        <div class="col-sm-3">
                            <label class="form-label">Microplastics</label>
                            <input type="radio" class="form-check-input" name="q3" value="A" required onclick="change_color(2, 0)">
                        </div>
                        <div class="col-sm-3">
                            <label class="form-label">Megaplastics</label>
                            <input type="radio" class="form-check-input" name="q3" value="B" onclick="change_color(2, 1)">
                        </div>
                        <div class="col-sm-3">
                            <label class="form-label">Macroplastics</label>
                            <input type="radio" class="form-check-input" name="q3" value="C" onclick="change_color(2, 2)">
                        </div>
                        <div class="col-sm-3">
                            <label class="form-label">Mesoplastics</label>
                            <input type="radio" class="form-check-input" name="q3" value="D" onclick="change_color(2, 3)">
                        </div>
                    </div>
                </div>
                <hr>

                <p class="text-justify">
                    <b>Q-4)</b> A(n) <b>_________</b> was found at 10898 meters in the Mariana Trench, known as the deepest oceanic trench. Taking this into consideration, one can conclude that water pollution caused by plastics is far beyond what we can imagine. 
                </p>
                <div class="form-check">
                    <div class="row">
                        <div class="col-sm-3">
                            <label class="form-label">Cat</label>
                            <input type="radio" class="form-check-input" name="q4" value="A" required onclick="change_color(3, 0)">
                        </div>
                        <div class="col-sm-3">
                            <label class="form-label">Plastic straw</label>
                            <input type="radio" class="form-check-input" name="q4" value="B" onclick="change_color(3, 1)">
                        </div>
                        <div class="col-sm-3">
                            <label class="form-label">Plastic bag</label>
                            <input type="radio" class="form-check-input" name="q4" value="C" onclick="change_color(3, 2)">
                        </div>
                        <div class="col-sm-3">
                            <label class="form-label">Fish net</label>
                            <input type="radio" class="form-check-input" name="q4" value="D" onclick="change_color(3, 3)">
                        </div>
                    </div>
                </div>
                <hr>

                <p class="text-justify">
                    <b>Q-5)</b> As of 2015, <b>____</b> of plastic waste generated by humans was incinerated.
                </p>
                <div class="form-check">
                    <div class="row">
                        <div class="col-sm-3">
                            <label class="form-label">4%</label>
                            <input type="radio" class="form-check-input" name="q5" value="A" required onclick="change_color(4, 0)">
                        </div>
                        <div class="col-sm-3">
                            <label class="form-label">43%</label>
                            <input type="radio" class="form-check-input" name="q5" value="B" onclick="change_color(4, 1)">
                        </div>
                        <div class="col-sm-3">
                            <label class="form-label">78%</label>
                            <input type="radio" class="form-check-input" name="q5" value="C" onclick="change_color(4, 2)">
                        </div>
                        <div class="col-sm-3">
                            <label class="form-label">12%</label>
                            <input type="radio" class="form-check-input" name="q5" value="D" onclick="change_color(4, 3)">
                        </div>
                    </div>
                </div>
                <hr>

                <div class="row text-center">
                    <div class="col-12">
                        <button type="submit" class="btn btn-success" name="submitted" value="send">Submit</button>
                    </div>
                </div>
            </form>
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

        <script>
            function change_color(q, o){
                q = parseInt(q);
                o = parseInt(o);

                document.getElementsByClassName("form-label")[((q)*4 + 0)].style.color = "black";
                document.getElementsByClassName("form-label")[((q)*4 + 1)].style.color = "black";
                document.getElementsByClassName("form-label")[((q)*4 + 2)].style.color = "black";
                document.getElementsByClassName("form-label")[((q)*4 + 3)].style.color = "black";

                var selected = document.getElementsByClassName("form-label")[((q)*4 + o)];
                selected.style.color = "#d68438";
                }
        </script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"
        >
        </script>

    </body>


</html>