<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--Local CSS-->
    <link rel="stylesheet" type="text/css" href="css/homepage-style.css" />
    <!--Local CSS-->

    <!--Bootstrap 4-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!--Bootstrap 4-->

    <title>Home</title>
</head>
<body>

    <!--Navigation Bar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
        <div class="container">
            <a class="navbar-brand" href="homepage.php">Car Information System</a>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="homepage.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about-page.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact-page.php">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="mydropdown">
                <div class="dropdown show">
                    <a class="btn btn-sm btn-outline-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Tools
                    </a>
                  
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                      <a class="dropdown-item" href="user-login.php">User Login</a>
                      <a class="dropdown-item" href="user-signup.php">User SignUp</a>
                      <a class="dropdown-item" href="admin-login.php">Admin Login</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!--Navigation Bar-->

    <!--Carousel-->

    <div class="carousel slide" data-ride="carousel" id="main-carousel">
        <ol class="carousel-indicators">
            <li data-target="#main-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#main-carousel" data-slide-to="1"></li>
            <li data-target="#main-carousel" data-slide-to="2"></li>
            <li data-target="#main-carousel" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img id="carousel-img" class="d-block w-100" src="Img/1.jpg" alt="">
            </div>
            <div class="carousel-item">
                <img id="carousel-img" class="d-block w-100" src="Img/2.jpg" alt="">
            </div>
            <div class="carousel-item">
                <img id="carousel-img" class="d-block w-100" src="Img/3.jpg" alt="">
            </div>
            <div class="carousel-item">
                <img id="carousel-img" class="d-block w-100" src="Img/4.jpg" alt="">
            </div>
        </div>
        <a class="carousel-control-prev" href="#main-carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#main-carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!--Carousel-->

    <!--Heading-->
    <div class="heading-class">
        <h1 class="card-title">Store And Retrieve Car Information</h1>
        <hr>
    </div>
    <!--Heading-->

    <!--Working Cards-->
    <div class="d-flex flex-wrap justify-content-center align-items-center" id="working-card-id">
        <div class="my-working-card">
            <div class="icon-div">
                <img src="Icons/7.png" alt="">
            </div>
            <br>
            <h5>USER LOGIN</h5>
            <br>
            <p>User can login to the application and access the information of the car.</p>
        </div>
        <div class="my-working-card">
            <div class="icon-div">
                <img src="Icons/8.png" alt="">
            </div>
            <br>
            <h5>USER SIGNUP</h5>
            <br>
            <p>User can register to get the username and password to access the application.</p>
        </div>
        <div class="my-working-card">
            <div class="icon-div">
                <img src="Icons/9.png" alt="">
            </div>
            <br>
            <h5>USER WORK</h5>
            <br>
            <p>User has the access to only view the information about the car and search them.</p>
        </div>
        <div class="my-working-card">
            <div class="icon-div">
                <img src="Icons/10.png" alt="">
            </div>
            <br>
            <h5>ADMIN LOGIN</h5>
            <br>
            <p>Admin can login by using the credentials provided by the developer.</p>
            </div>
        <div class="my-working-card">
            <div class="icon-div">
                <img src="Icons/11.png" alt="">
            </div>
            <br>
            <h5>ADMIN WORK</h5>
            <br>
            <p>Admin manages all the work like add edit update and delete the data in the application.</p>
        </div>
    </div>
    <!--Working Cards-->

    <!--Footer-->
        <div class="my-footer">
            <p id="footer-para">Project By Arpan Abhinash Jena</p>
        </div>
    <!--Footer-->

</body>
</html>