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
        <title>About</title>
    </head>
    <body>
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
                            <a class="nav-link myItem" href="test-yourself.php">Quiz</a>
                        </li> 
                        <li class="nav-item mx-4">
                            <a class="nav-link active myItem" aria-current="page" href="about.php">About</a>
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

        <div class="container-lg mt-5">
            <div class="row text-center">
                <h1>ABOUT</h1>
            </div>
            <hr>
            <div class="row p-5">
                <p class="text-justify">
                    My name is Gokce, and I’m studying Mathematical Engineering at Istanbul Technical University. I designed this website for my Web Programming class.
                </p>
                <p class="text-justify">
                    My website is about plastic pollution. The damage caused by plastic pollution is very high and yet people are not doing anything to prevent it. That's why I decided to make a website to inform people about plastic pollution and the damages it gives.
                </p>
                <p class="text-justify">
                    At home we seperate our plastic trash for recycling and I used to think that was enough. After all, I thought our plastic waste was recycled and reused. Later, I learned that this was wrong in a video I came across on youtube. Of course, there are also plastic wastes that can be recycled, but most of them cannot be recycled at all or can only be recycled 1 - 2 times. For example, the plastic water bottles we use frequently in our daily lives can only be recycled a few times. After learning these, I realized that the only way to reduce plastic pollution is to minimize the use of plastic. Separating plastic waste for recycling is also important, but does not eliminate the big problem.
                </p>
                <p class="text-justify">
                    I divided the harms of plastic pollution into 3 categories as wildlife, environmental and humans and informed the user about each category. I also put a quiz to add something a little fun. I think my site is informative and can raise awareness. It would be nice if I could prevent even one person from drinking water from the disposable plastic cups in the cafeteria.
                </p>
            </div>
            <div class="row px-5 pb-5 justify-content-center">
                <h5>
                    I recommend you to watch this video:
                </h5>
                <iframe
                    width="560"
                    height="315"
                    src="https://www.youtube.com/embed/PJnJ8mK3Q3g"
                    title="YouTube video player"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>
            </div>
            <div class="row">
                <div class="col-md-6 align-self-center justify-content-center text-center">
                    <img src="../stuff/images/logo/logo-bg2.png" alt="PlasticEarthLogo" width="300">
                </div>
                <div class="col-md-6 p-5 align-self-center justify-content-center">
                    <h3>CONTACT ME!</h3>
                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#d68438" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                            </svg>
                            &nbsp; sahingo19@itu.edu.tr
                        </p>
                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#d68438" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                            </svg>
                            &nbsp; Istanbul Technical University MED, Istanbul, Turkey.
                        </p>
                </div>
            </div>

            <form action="send-message.php" method="post">
                <div class="row">
                    <div class="col-12 mt-4 mx-5">
                        <h3>Message me:</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 px-5 mb-3">
                        <input id="textInput" type="text" name="message" maxLength="200">
                    </div>
                </div>
                <div class="row ">
                <div class="col-12 mx-5 mb-5">
                        <button type="submit" class="btn btn-success" name="submitted" value="send">Submit</button>
                    </div>
                </div>
            </form>
            

        </div>

        <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"
        >
        </script>

    </body>


</html>

