<!DOCTYPE html>
<html lang="en">

<head>
    <!-- HTML + CSS layout  -->
    <title> my page !! </title>
    <!-- the style of CSS  -->
    <style>
        body {
            background:
                rgb(58,
                    58,
                    58);
            color:
                white;
            margin: 0;
            padding: 0;
            /* to make them responsive */
        }


        header {
            background: yellow;
            /*
        to make the distance */
            /* margin: 20px 40px; */
            /*and you can add four values  */
            padding: 20%;
        }

        section {
            background: red;

            color: blue;
            margin: 20px 40px;
        }

        footer {
            background:
                red;
            color: blue;
            padding: 20px;
        }
    </style>

    <meta charset="UTF-8">
    <!-- for internet explore or the new verion of it is edge -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- for mobile  -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">




    <title>the project of the uni </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="custum.css">

</head>

<body>

    <!-- HTML + CSS layout -->
    <header> header </header>
    <selection> section </selection>
    <selection>footer </selection>


    <!-- Footer -->
    <footer class="page-footer font-small special-color-dark pt-4">

        <!-- Footer Elements -->
        <div class="container">

            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-md-6 mb-4">

                    <!-- Form -->
                    <form class="form-inline">
                        <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search" aria-label="Search">
                        <i class="fas fa-search" aria-hidden="true"></i>
                    </form>
                    <!-- Form -->

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6 mb-4">

                    <form class="input-group">
                        <input type="text" class="form-control form-control-sm" placeholder="Your email" aria-label="Your email" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-sm btn-outline-white my-0" type="button">Sign up</button>
                        </div>
                    </form>

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </div>
        <!-- Footer Elements -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->


    <!-- for (form) in (HTML and PHP ) with the page of data base  -->







    <form action="control.php" method="post">

        Name:<input type="text" name="name" required> <br>
        e-mail: <input type="text" name="email" required> <br>
        your gender ; <input type="radio" name=gender value="man"> man <br>
        your gender ; <input type="radio" name=gender value="man"> woman <br>
        the hobbies
        <input type="checkbox" name="hobbies " value="drowing"> drowing
        <input type="checkbox" name="hobbies " value="music"> music
        <input type="checkbox" name="hobbies " value="reading"> reading <br>
        the city
        <select>
            <option> ankara </option>
            <option> istanbul </option>
            <option> azmir </option>
            <option> karabuk </option>
        </select> <br>
        <textarea name="expleaing" col=30 rows="5"> </textarea>
        <input type="submit">
    </form>


    ******************** "for registration *******************"
    <form action="wirte=registration" method="registration">
        <!-- wirte=registration -->

        Name:<input type="text" name="name" required> <br>
        e-mail: <input type="text" name="email" required> <br>


        <input type="submit">
    </form>


    <?php

    if ($_REQUEST["transaction"] == "wirte" and $_SERVER["REQUEST_method"] == "post") {

        $name = $post["name"]; // when it be empty it gives you in above of the page an error   
        $ePost = $post["email"]; // when it be empty it gives you in above of the page an error 
        // but when you add the if conductional with the request it makes it Hedden until you fill the forms
        echo "<br> the name : " . $name;
        echo "<br> the email address : " . $ePost;
    }

    ?>




    ******************** "for sign in of the Admin *******************"
    <form action="control.php" method="psot">

        Name:<input type="text" name="name" required> <br>
        e-mail: <input type="text" name="email"> <br>
        password: <input type="password" name="password" required> <br>


        <input type="submit">
    </form>

    <?php
    // ***********deleting********************



    // ***********listing********************  


    ?>
    <div class="container">
        <div class="row">
            <!-- 50% or 6/12 -->
            <div class="col  red-box">
                column 1
            </div>
            <!-- 50% or 6/12 -->
            <div class="col  green-box">
                column 2
            </div>
            <div class="col  purple-box">
                column 3
            </div>
            <h1>Hello world</h1>








            <!-- dropdown menu -->
            <div class="btn-group">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                </ul>
            </div>

            <div class="btn-group">
                <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Right-aligned menu
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                </ul>
            </div>

            <div class="btn-group">
                <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                    Left-aligned, right-aligned lg
                </button>
                <ul class="dropdown-menu dropdown-menu-lg-end">
                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                </ul>
            </div>

            <div class="btn-group">
                <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                    Right-aligned, left-aligned lg
                </button>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                </ul>
            </div>

            <div class="btn-group dropstart">
                <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropstart
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                </ul>
            </div>

            <div class="btn-group dropend">
                <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropend
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                </ul>
            </div>

            <div class="btn-group dropup">
                <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropup
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                </ul>
            </div>

            <!-- it has colors -->

            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                <button type="button" class="btn btn-danger">Left</button>
                <button type="button" class="btn btn-warning">Middle</button>
                <button type="button" class="btn btn-success">Right</button>
            </div>

            <!-- another one -->

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Pricing</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropdown link
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- slideshow -->
            <!-- but i didnt see it yet  -->
            <!-- i didnt understand some thins in it becuase its bootstrap -->

            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/0 Single Page Apps.PNG" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/3 gettype().PNG" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/what can you use.PNG" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>


            <!-- HTML + CSS layout section -->

            background


            <!-- for muliplle pages  -->


            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-end">
                    <li class="page-item disabled">
                        <a class="page-link">Previous</a>
                    </li>
                    <!-- <li class="index"><a class="index.html" href="#">1</a></li>
            <li class="location"><a class="location.html" href="#">2</a></li>
            <li class="contact"><a class="contact.html" href="#">3</a></li>
            <li class="page-item"> -->

                    <a href="index.html">index</a>
                    <a href="location.html">location></a>
                    <a href="contact.html">Contact</a>
                    </li>
                </ul>
            </nav>



            <!-- for header and footer using bootstrap for many things such aboutUS , contactUs and profile -->

            <!-- Footer -->
            <footer class="page-footer font-small mdb-color lighten-3 pt-4">

                <!-- Footer Links -->
                <div class="container text-center text-md-left">

                    <!-- Grid row -->
                    <div class="row">

                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">

                            <!-- Content -->
                            <h5 class="font-weight-bold text-uppercase mb-4">Footer Content</h5>
                            <p>Here you can use rows and columns to organize your footer content.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit amet numquam iure provident voluptate
                                esse
                                quasi, veritatis totam voluptas nostrum.</p>

                        </div>
                        <!-- Grid column -->

                        <hr class="clearfix w-100 d-md-none">

                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">

                            <!-- Links -->
                            <h5 class="font-weight-bold text-uppercase mb-4">About</h5>

                            <ul class="list-unstyled">
                                <li>
                                    <p>
                                        <a href="#!">PROJECTS</a>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <a href="#!">ABOUT US</a>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <a href="#!">BLOG</a>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <a href="#!">AWARDS</a>
                                    </p>
                                </li>
                            </ul>

                        </div>
                        <!-- Grid column -->

                        <hr class="clearfix w-100 d-md-none">

                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">

                            <!-- Contact details -->
                            <h5 class="font-weight-bold text-uppercase mb-4">Address</h5>

                            <ul class="list-unstyled">
                                <li>
                                    <p>
                                        <i class="fas fa-home mr-3"></i> New York, NY 10012, US
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <i class="fas fa-envelope mr-3"></i> info@example.com
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <i class="fas fa-phone mr-3"></i> + 01 234 567 88
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <i class="fas fa-print mr-3"></i> + 01 234 567 89
                                    </p>
                                </li>
                            </ul>

                        </div>
                        <!-- Grid column -->

                        <hr class="clearfix w-100 d-md-none">

                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 text-center mx-auto my-4">

                            <!-- Social buttons -->
                            <h5 class="font-weight-bold text-uppercase mb-4">Follow Us</h5>

                            <!-- for contact of facebook and instrgram    ... -->

                            <!-- Footer -->
                            <footer class="page-footer font-small cyan darken-3">

                                <!-- Footer Elements -->
                                <div class="container">

                                    <!-- Grid row-->
                                    <div class="row">

                                        <!-- Grid column -->
                                        <div class="col-md-12 py-5">
                                            <div class="mb-5 flex-center">

                                                <!-- Facebook -->
                                                <a class="fb-ic">
                                                    <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                                                </a>
                                                <!-- Twitter -->
                                                <a class="tw-ic">
                                                    <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                                                </a>
                                                <!-- Google +-->
                                                <a class="gplus-ic">
                                                    <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                                                </a>
                                                <!--Linkedin -->
                                                <a class="li-ic">
                                                    <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                                                </a>
                                                <!--Instagram-->
                                                <a class="ins-ic">
                                                    <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                                                </a>
                                                <!--Pinterest-->
                                                <a class="pin-ic">
                                                    <i class="fab fa-pinterest fa-lg white-text fa-2x"> </i>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Grid column -->

                                    </div>
                                    <!-- Grid row-->

                                </div>
                                <!-- Footer Elements -->

                                <!-- Copyright -->
                                <div class="footer-copyright text-center py-3">© 2020 Copyright:
                                    <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
                                </div>
                                <!-- Copyright -->

                            </footer>
                            <!-- Footer -->

                        </div>
                        <!-- Grid column -->

                    </div>
                    <!-- Grid row -->

                </div>
                <!-- Footer Links -->

                <!-- Copyright -->
                <div class="footer-copyright text-center py-3">© 2020 Copyright:
                    <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
                </div>
                <!-- Copyright -->

            </footer>
            <!-- Footer -->





            <!-- for the video of footer  -->

            <!-- Footer -->
            <footer class="page-footer font-small mdb-color darken-3 pt-4">

                <!-- Footer Elements -->
                <div class="container">

                    <!--Grid row-->
                    <div class="row d-flex justify-content-center">

                        <!--Grid column-->
                        <div class="col-md-6">

                            <!-- Video -->
                            <div class="embed-responsive embed-responsive-16by9 mb-4">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/vlDzYIIOYmM" allowfullscreen></iframe>
                            </div>

                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                </div>
                <!-- Footer Elements -->

                <!-- Copyright -->
                <div class="footer-copyright text-center py-3">© 2020 Copyright:
                    <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
                </div>
                <!-- Copyright -->

            </footer>
            <!-- Footer -->

            <!-- <img src="https://www.w3schools.com/html/img_girl.jpg" style="width:100%;"> -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>




</body>

</html>