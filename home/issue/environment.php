
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
        <title>Environment</title>
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
                            <a class="nav-link" aria-current="page" href="../homepage.php">Home</a>
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
                                <li><a class="dropdown-item"  href="wildlife.php">Wildlife</a></li>
                                <li><a class="dropdown-item active" aria-current="page">Environment</a></li>
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
            <h1 class="text-center">Environment</h1>
            <hr>

            <div class="row align-items-center">
                <div class="col-12 p-3">
                    <p class="text-justify">
                        Especially with the spread of environmentalist understanding, people started to think more about the effects of plastics. Knowing the negative impacts of plastics is important for our future. The first and foremost is the impact on the environment since all other damages come as a result of environmental pollution.
                    </p>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-12 p-3">
                    <p class="text-justify">
                        The pollution of water, which is essential to life, is one of the outcomes of the damage caused by plastics to the environment. A large part of Earth’s surface is covered with water. Hence, it is inevitable that water pollution will adversely affect all living creatures. The plastic wastes produced in industrial or residential activities can accumulate in the waters. These plastics break down into smaller pieces over time and cannot be seen with naked eye. Accumulated plastics can be divided into four categories according to their size: megaplastics, macroplastics, mesoplastics, and microplastics (Senevirathna & Thushari, 2020). Microplastics are the ones that cause the most problems because they are so small in size. It is not possible to know the exact number of accumulated plastics in the marine environment. There is a substantial amount of plastic waste in the oceans.
                    </p>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6 p-3 text-center">
                    <img src="../../stuff/images/issue/mariana-trench-plastic-bag.jpeg" alt="" width="400" height="265">
                </div>
                <div class="col-lg-6 p-3 text-center">
                    <img src="../../stuff/images/issue/water-pollution.jpeg" alt="" width="400" height="265">
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-12 p-3">
                    <p class="text-justify">
                        A plastic bag was found at 10898 meters in the Mariana Trench, known as the deepest oceanic trench (Chiba et al., 2018). Taking this into consideration, one can conclude that water pollution caused by plastics is far beyond what we can imagine.
                    </p>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-12 p-3">
                    <p class="text-justify">
                        Another adverse outcome of the damage given by plastics to the environment is soil pollution. Soil is as essential to life as water because all vegetables and fruits grow in the soil. However, compared to water pollution, soil pollution is relatively disregarded. Improper dumping of plastic wastes causes serious damages to the soil.
                    </p>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-12 p-3">
                    <p class="text-justify">
                        As of 2015, approximately 6300 Mt of plastic waste had been generated by humans, most of which was buried in the ground (Geyer, Jambeck & Law, 2017).
                    </p>
                </div>
            </div>            
            <div class="row align-items-center">
                <div class="col-lg-5 p-3">
                    <p class="text-justify">
                        When plastic mixes with soil, it breaks down into small pieces over time and becomes part of a complex mixture, and removing it from the soil is not easy (Bläsing & Amelung, 2018). Plastic mulching is a common technique used in agriculture. As Steinmetz et al. stated, it provides many positive advantages like higher-quality produce, increased yields, and water-use efficiency. Plastic mulches have the potential to lower the quality of soil, increase soil water repellency, and support the release of greenhouse gases. Farmers continue to use this technique for its short-term benefits, not thinking about its long-term consequences (2016). There is not a lot of research yet on the effects of the plastics on the soil and it is difficult to measure how much microplastic is mixed into the soil, but with the increase in awareness recently, scientists have started to study more on this topic.
                    </p>
                </div>
                <div class="col-lg-7 p-3 text-center">
                    <img src="../../stuff/images/issue/plastic-mulches.jpg" alt="" width="400" height="265">
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-12 p-3">
                    <p class="text-justify">
                        Air pollution is another consequence of the damage done by plastics. According to an article by Sridharan, Kumar, Singh, Bolan, and Saha, studies on microplastics and their effects have been limited to terrestrial and aquatic ecosystems, but recently scientists have also focused on airborne microplastics. It has emerged that their impacts on urban areas, where the fine airborne dust rate is high, need to be taken seriously (Sridharan, Kumar, Singh, Bolan & Saha, 2021). As of 2015, 12% of plastic waste generated by humans was incinerated (Geyer, Jambeck & Law, 2017). However, incinerated plastic waste is not the only cause of air pollution. With the increasing popularity of latex paints that combine plastics and water, there has been a significant increase in the number of microplastics emitted from paints (Sridharan, Kumar, Singh, Bolan & Saha, 2021). It is terrifying to think that the paint we use contaminates the air we breathe, not just for the moment, but continuously.
                    </p>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-12 p-3">
                    <p class="text-justify">
                        Obviously, a clean environment is very important for all living creatures. Because many of the health problems are the result of environmental pollution. As indicated above, plastics are released into the environment from various sources. Latex paints and improper disposal of plastic waste are some causes of microplastics in nature. Since it is impossible to think of living creatures separately from their habitats, every plastic that enters nature enters our bodies.
                    </p>
                </div>
            </div>
            
            <hr>
            <h2>References</h2>
            <ul>
                <li>
                    <p>Bläsing, M. & Amelung, W. (2018). Plastics in soil: Analytical methods and possible sources. Science of The Total Environment, 612. 422-435. doi: 10.1016/j.scitotenv.2017.08.086.</p>
                </li>
                <li>
                    <p>Chiba, S., Saito, H., Fletcher, R., Yogi, T., Kayo, M., Miyagi, S., Ogido, M. & Fujikura, K. (2018). Human footprint in the abyss: 30 year records of deep-sea plastic debris. Marine Policy, 96. 204-212. doi: 10.1016/j.marpol.2018.03.022.</p>
                </li>
                <li>
                    <p>Geyer, R., Jambeck, J. R., Law, K. L. (2017). Production, use, and fate of all plastics ever made. Science Advances, 3(7). doi: 10.1126/sciadv.1700782. </p>
                </li>
                <li>
                    <p>Senevirathna, J. D. M. & Thushari, G. G. N. (2020). Plastic pollution in the marine environment. Heliyon, 6(8). doi: 10.1016/j.heliyon.2020.e04709. </p>
                </li>
                <li>
                    <p>Sridharan, S., Kumar, M., Singh, L., Bolan, N. S. & Saha, M. (2021). Microplastics as an emerging source of particulate air pollution: A critical review. Journal of Hazardous Materials, 418. doi: 10.1016/j.jhazmat.2021.126245</p>
                </li>
                <li>
                    <p>Steinmetz, Z., Wollmann, C., Schaefer, M., Buchmann, C., David, J., Tröger, T., Muñoz, K., Frör, O. & Schaumann, G. E. (2016). Plastic mulching in agriculture. Trading short-term agronomic benefits for long-term soil degradation? Science of The Total Environment, 550. 690-705. doi: 10.1016/j.scitotenv.2016.01.153. </p>
                </li>
            </ul>                                      
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

