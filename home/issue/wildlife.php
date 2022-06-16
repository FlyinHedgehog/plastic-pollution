
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
        <title>Wildlife</title>
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
                                <li><a class="dropdown-item active" aria-current="page">Wildlife</a></li>
                                <li><a class="dropdown-item" href="environment.php">Environment</a></li>
                                <li><a class="dropdown-item" href="humans.php">Humans</a></li>
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

        <div class="container my-5">
            <h1 class="text-center">Wildlife</h1>
            <hr>
            <div class="row align-items-center">
                <div class="col-12 p-3">
                    <p class="text-justify">
                        Not only the environment but also living creatures are affected by the damages caused by plastics. All wild animals suffer from the pollution in their ecosystems caused by plastics. They are not responsible for plastic pollution, yet they take the most damage. Small plastics are sometimes mistaken by seabirds for food. Blight and Burger detected plastic particles in the stomachs of 8 of 11 seabird species caught in the eastern North Pacific. The majority of ingested items recovered from these seabirds were broken plastic pieces used in daily life and the rest was industrial pellets (1997).
                    </p>
                </div>
                
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6 p-3 text-center">
                    <img src="../../stuff/images/issue/seabird.jpeg" alt="" width="400" height="265">
                </div>
                <div class="col-lg-6 p-3 text-center">
                    <img src="../../stuff/images/issue/plastic-bag-turtle.jpeg" alt="" width="400" height="265">
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-12 p-3">
                    <p class="text-justify">
                        Since the food chain creates a loop, these plastic particles can pass from animal to animal. In other words, an animal that is affected by plastic can affect many others.
                    </p>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6 p-3">
                    <p class="text-justify">
                        Disposable plastics, such as plastic straws, cause great harm to nature and therefore to animals. In August 2015, while Robinson and Figgener were conducting boat surveys in search of sea turtles, they stumbled upon a turtle that had a 10 cm (about the length of the long edge of a credit card) long plastic straw deeply embedded into its left nostril. They removed the plastic straw and then released the sea turtle back into its natural habitat (2015). 
                    </p>
                    <p class="text-justify">
                        According to Sigler, many studies have shown that ingested plastic is one of the main causes of non-natural death for sea turtles. In some autopsies; fish lines, nets, and plastic bags were found from the digestive tracts of turtles (2014). Of the 371 autopsies performed on leatherback turtles over last the 40 years, approximately 37% had plastic in their gastrointestinal tracts (Mrosovsky, Ryan & James, 2009). 
                    </p>
                </div>
                <div class="col-lg-6 p-3 text-center">
                    <img src="../../stuff/images/issue/plastic-straw-turtle.jpeg" alt="" width="400" height="265">
                </div>
            </div>
  
            <div class="row align-items-center">
                <div class="col-12 p-3">
                    <p class="text-justify">
                        Derelict fishing nets or other ring-shaped materials can cause animals to become entangled in them. For example, in 2014, a whale was found with a fishing line entangled in its mouth (Sigler, 2014).
                    </p>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-12 p-3">
                    <p class="text-justify">
                        As Lauren Magaziner points out, floating bags in the ocean can be mistaken as food by some animals, such as dolphins. Plastic bags can block their digestive tract, resulting in death. And sometimes animals can suffocate when plastic bags are wrapped around their bodies. Thousands of animals die from plastic bags each year (2014).
                    </p>
                </div>
            </div>
        
            <hr>
            <p>
                <h2>References</h2>
                <br>
                <ol>
                    <li>
                        <p>Blight, L. K. & Burger, A. E. (1997). Occurrence of plastic particles in seabirds from the eastern North Pacific. Marine Pollution Bulletin, 34(5). 323-325. doi: 10.1016/S0025-326X(96)00095-1  </p>
                    </li>
                    <li>
                        <p>Magaziner, L. (2014). Plastic Bags: Convenient and Cruel. Scholastic Scope, 62(8). 20-21.</p>
                    </li>
                    <li>
                        <p>Mrosovsky, M., Ryan, G. D. & James, M. C. (2009). Leatherback turtles: The menace of plastic. Marine Pollution Bulletin, 58(2). 287-289. doi: 10.1016/j.marpolbul.2008.10.018 </p>
                    </li>
                    <li>
                        <p>Robinson, N. J. & Figgener, C. (2015). Plastic Straw Found Inside the Nostril of an Olive Ridley Sea Turtle. Marine Turtle Newsletter, 147. </p>
                    </li>
                    <li>
                        <p>Sigler, M. (2014). The Effects of Plastic Pollution on Aquatic Wildlife: Current Situations and Future Solutions. Water Air Soil Pollution, 225(11). 1-9. doi: 10.1007/S11270-014-2184-6</p>
                    </li>
                </ol>                          
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

