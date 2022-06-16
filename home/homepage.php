
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
        <title>Homepage</title>
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
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
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

        <div class="container mt-4">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div id="carouselSlide" class="carousel slide" data-bs-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-bs-target="#carouselSlide" data-bs-slide-to="0" class="active"></li>
                            <li data-bs-target="#carouselSlide" data-bs-slide-to="1"></li>
                            <li data-bs-target="#carouselSlide" data-bs-slide-to="2"></li>
                            <li data-bs-target="#carouselSlide" data-bs-slide-to="3"></li>
                            <li data-bs-target="#carouselSlide" data-bs-slide-to="4"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="../stuff/images/homepage-carousel/turtle-eating-plastic-bag.jpg" alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Many studies have shown that ingested plastic is one of the main causes of non-natural death for sea turtles.</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="../stuff/images/homepage-carousel/bird-plastic-bag.jpg" alt="Second slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Animals can suffocate when plastic bags are wrapped around their bodies.</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="../stuff/images/homepage-carousel/plastic-fork-turtle.jpg" alt="Third slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Disposable plastics, such as plastic straws, cause great harm to nature and therefore to animals.</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="../stuff/images/homepage-carousel/bird-plastic.jpg" alt="Forth slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Plastics are sometimes mistaken by seabirds for food.</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="../stuff/images/homepage-carousel/plastic-ring-turtle.jpg" alt="Fifth slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Plastics can wrap around animals' bodies, stay there for years and deform their bodies.</h5>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselSlide" role="button" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only"></span>
                            </a>
                            <a class="carousel-control-next" href="#carouselSlide" role="button" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container mt-5">
            <div class="row">
                <div class="col-12">
                    <div class="card bg-dark text-white">
                        <div class="card-body">
                            <a href="https://www.science.org/doi/10.1126/sciadv.1700782" class="btn btn-light float-end">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="black" class="bi bi-info-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                    <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                </svg>
                            </a>
                            <figure class="text-center">
                                <blockquote class="blockquote">
                                    <p>Between 1950 and 2015, humanity produced about 8.3 billion tons of plastic. 6.3 billion tonnes (76%) of these turned into plastic waste; 9% of this plastic waste is recycled and only 1% is recycled more than once.</p>
                                </blockquote>
                                <figcaption class="blockquote-footer">
                                    <cite title="Source Title">American Association for the Advancement of Science (AAAS)</cite>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card m-3 mt-5 p-3 border-3 border-dark myCard">
                        <img src="../stuff/images/home-cards/card4.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Plastic Pollution</h5>
                            <p class="card-text">What is plastic pollution and why is it a problem?</p>
                            <a href="https://www.britannica.com/science/plastic-pollution" class="btn btn-primary float-end cardBtn">Read More</a>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card m-3 mt-5 p-3 border-3 border-dark myCard">
                        <img src="../stuff/images/home-cards/card2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Issue</h5>
                            <p class="card-text">What's the issue and why we should all be concerned?</p>
                            <a href="issue/issue.php" class="btn btn-primary float-end cardBtn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card m-3 mt-5 p-3 border-3 border-dark myCard">
                        <img src="../stuff/images/home-cards/card3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Quiz</h5>
                            <p class="card-text">Do you trust yourself? Take the quiz and win the prize!</p>
                            <a href="test-yourself.php" class="btn btn-primary float-end cardBtn">Take the quiz</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card m-3 mt-5 p-3 border-3 border-dark myCard">
                        <img src="../stuff/images/home-cards/card4.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">About</h5>
                            <p class="card-text">Who am I and why did I create this website?</p>
                            <a href="about.php" class="btn btn-primary float-end cardBtn">Read More</a>
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

