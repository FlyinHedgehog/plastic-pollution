
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>Result</title>
        <link 
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous"
        >
        <link href="../stuff/css_files/navbar.css" rel="stylesheet">
        <link href="../stuff/css_files/home.css" rel="stylesheet">
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
                            <a class="nav-link active myItem" aria-current="page">Quiz</a>
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

        <?php
            include '../stuff/connect.php'; //connection: $c

            function create_card($card_no)
            {
                echo '<div class="container">';
                    echo '<div class="row">';
                        echo '<div class="col-12">';
                            echo '<div class="card bg-warning m-3 mt-5" width="30%">';
                                echo '<div class="card-body">';
                                    echo '<h5 class="card-title">Q-'.$card_no.'</h5>';
                                    if($card_no == 1){
                                        echo '<p class="card-text">You can find this information on the Homepage.</p>';
                                        echo '<a href="homepage.php" class="btn btn-dark float-end">Learn</a>';
                                    }
                                    elseif($card_no == 2){
                                        echo '<p class="card-text">You can find this information in my article on wildlife.</p>';
                                        echo '<a href="issue/wildlife.php" class="btn btn-dark float-end">Learn</a>';
                                    }
                                    elseif($card_no == 3){
                                        echo '<p class="card-text">You can find this information in my article on environment.</p>';
                                        echo '<a href="issue/environment.php" class="btn btn-dark float-end">Learn</a>';
                                    }
                                    elseif($card_no == 4){
                                        echo '<p class="card-text">You can find this information in my article on environment.</p>';
                                        echo '<a href="issue/environment.php" class="btn btn-dark float-end">Learn</a>';
                                    }
                                    elseif($card_no == 5){
                                        echo '<p class="card-text">You can find this information in my article on environment.</p>';
                                        echo '<a href="issue/environment.php" class="btn btn-dark float-end">Learn</a>';
                                    }
                                echo '</div>';    
                            echo '</div>';
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
            }

            function show_results($c)
            {
                list($total) = mysqli_fetch_row(mysqli_query($c, "SELECT id FROM Quiz ORDER BY id DESC LIMIT 1;"));

                list($q1_r) = mysqli_fetch_row(mysqli_query($c, "SELECT SUM(q1) FROM Quiz;"));
                list($q2_r) = mysqli_fetch_row(mysqli_query($c, "SELECT SUM(q2) FROM Quiz;"));
                list($q3_r) = mysqli_fetch_row(mysqli_query($c, "SELECT SUM(q3) FROM Quiz;"));
                list($q4_r) = mysqli_fetch_row(mysqli_query($c, "SELECT SUM(q4) FROM Quiz;"));
                list($q5_r) = mysqli_fetch_row(mysqli_query($c, "SELECT SUM(q5) FROM Quiz;"));

                echo '<div class="container p-5 text-center">';
                    echo '<h2 class="text-center">Quiz Results</h2>';
                    echo '<hr>';
                    echo '<table class="table table-hover table-dark">';
                        echo '<thead>';
                            echo '<tr>';
                                echo '<th scope="col">#</th>';
                                echo '<th scope="col">Right Answers</th>';
                                echo '<th scope="col">Wrong Answers</th>';
                                echo '<th scope="col">Right Answer %</th>';
                            echo '</tr>';
                        echo '</thead>';
                        echo '<tbody>';
                            echo '<tr>';
                                echo '<th scope="row">Q-1</th>';
                                echo '<td>'.$q1_r.'</td>';
                                echo '<td>'.($total-$q1_r).'</td>';
                                echo '<td>'.intval($q1_r/$total * 100).'&#37</td>';
                            echo '</tr>';
                            echo '<tr>';
                                echo '<th scope="row">Q-2</th>';
                                echo '<td>'.$q2_r.'</td>';
                                echo '<td>'.($total-$q1_r).'</td>';
                                echo '<td>'.intval($q2_r/$total * 100).'&#37</td>';
                            echo '</tr>';
                            echo '<tr>';
                                echo '<th scope="row">Q-3</th>';
                                echo '<td>'.$q3_r.'</td>';
                                echo '<td>'.($total-$q3_r).'</td>';
                                echo '<td>'.intval($q3_r/$total * 100).'&#37</td>';
                            echo '</tr>';
                            echo '<tr>';
                                echo '<th scope="row">Q-4</th>';
                                echo '<td>'.$q4_r.'</td>';
                                echo '<td>'.($total-$q4_r).'</td>';
                                echo '<td>'.intval($q4_r/$total * 100).'&#37</td>';
                            echo '</tr>';
                            echo '<tr>';
                                echo '<th scope="row">Q-5</th>';
                                echo '<td>'.$q5_r.'</td>';
                                echo '<td>'.($total-$q5_r).'</td>';
                                echo '<td>'.intval($q5_r/$total * 100).'&#37</td>';
                            echo '</tr>';
                        echo '</tbody>';
                    echo '</table>';
                echo '</div>';
            }

            function last_5($c)
            {
                $last_5_result = mysqli_query($c, "SELECT * FROM Quiz ORDER BY id DESC LIMIT 5;");
                
                echo '<div class="container p-5 text-center">';
                    echo '<h2 class="text-center">Last 5 Results</h2>';
                    echo '<hr>';
                    echo '<table class="table table-hover table-dark">';
                        echo '<thead>';
                            echo '<tr>';
                                echo '<th scope="col">Username</th>';
                                echo '<th scope="col">Q-1</th>';
                                echo '<th scope="col">Q-2</th>';
                                echo '<th scope="col">Q-3</th>';
                                echo '<th scope="col">Q-4</th>';
                                echo '<th scope="col">Q-5</th>';
                            echo '</tr>';
                        echo '</thead>';
                        echo '<tbody>';
                            while($row = mysqli_fetch_row($last_5_result))
                            {
                                echo '<tr>';
                                    echo '<th scope="row">'.$row[1].'</th>';
                                    echo '<td>'.true_false($row[2]).'</td>';
                                    echo '<td>'.true_false($row[3]).'</td>';
                                    echo '<td>'.true_false($row[4]).'</td>';
                                    echo '<td>'.true_false($row[5]).'</td>';
                                    echo '<td>'.true_false($row[6]).'</td>';
                                echo '</tr>';
                            }
                        echo '</tbody>';
                    echo '</table>';
                echo '</div>';
            }

            function true_false($flag)
            {
                if($flag)
                {
                    $result = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="green" class="bi bi-emoji-smile" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
                    </svg>';
                }
                else
                {
                    $result = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-emoji-frown" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="M4.285 12.433a.5.5 0 0 0 .683-.183A3.498 3.498 0 0 1 8 10.5c1.295 0 2.426.703 3.032 1.75a.5.5 0 0 0 .866-.5A4.498 4.498 0 0 0 8 9.5a4.5 4.5 0 0 0-3.898 2.25.5.5 0 0 0 .183.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
                    </svg>';
                }

                return $result;
            }

            $true_count = 0;
            $answers = "BCACD";
            $result = '11111';

            extract($_POST);

            if($_POST['submitted'] != 'send')
            {
                header("location: https://web.itu.edu.tr/sahingo19/plastic-pollution/home/homepage.php");
                exit();
            }

            # It will add the value "send" from the submit button but it is not important.
            # Because it is the last element and we'll only check the first 5 chars.
            foreach($_POST as $k=>$v){
                $usr_ans = $usr_ans.$v;
            }
            
            for($i = 0; $i < strlen($answers); $i++)
            {
                if($usr_ans[$i] == $answers[$i])
                {
                    $true_count = $true_count + 1;
                    continue;
                }
                
                echo '<div class="container">';
                    echo '<div class="row">';
                        if($i == 0){
                            $result[0] = 0;
                            create_card(1);
                        }
                        if($i == 1){
                            $result[1] = 0;
                            create_card(2);
                        }
                        if($i == 2){
                            $result[2] = 0;
                            create_card(3);
                        }
                        if($i == 3){
                            $result[3] = 0;
                            create_card(4);
                        }
                        if($i == 4){
                            $result[4] = 0;
                            create_card(5);
                        }
                    echo '</div>';
                echo '</div>';
            }

            echo '<div class="container text-center mt-5 mb-5">';
                echo '<div class="col-12">';
                    if ($true_count == 5){
                        echo '<h1>Congratulations!</h1>';
                        echo '<h3><i>Your test score is <u>5/5</u>.</i></h3>';
                        echo '<a class="btn btn-success" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">';
                        echo 'Get your reward!';
                        echo '</a>';
                    }
                    else{
                        echo '<h3><i>Your test score is <u>'.$true_count.'/5</u>.</i></h3>';
                        echo '<a class="btn btn-danger" href="test-yourself.php">';
                        echo 'Try Again';
                        echo '</a>';
                    }
                echo '</div>';
            echo '</div>';
            
            include '../stuff/connect.php';
            
            list($user_no) = mysqli_fetch_row(mysqli_query($c, "SELECT id FROM Quiz ORDER BY id DESC LIMIT 1;"));
            $user_no = $user_no + 1;

            $usr = $_COOKIE['mySpecialCookie'];
            mysqli_query($c, "INSERT INTO Quiz (id, username, q1, q2, q3, q4, q5) VALUES ($user_no, '$usr', $result[0], $result[1], $result[2], $result[3], $result[4]);");

            show_results($c);
            last_5($c);

            mysqli_close($c);
            
        ?>

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