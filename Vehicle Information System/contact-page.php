<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--Local CSS-->
    <link rel="stylesheet" type="text/css" href="css/contact-style.css" />
    <!--Local CSS-->

    <!--Bootstrap 4-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!--Bootstrap 4-->

    <title>Contact Us</title>
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

    <!--Contact Form-->
        <div class="d-flex flex-wrap justify-content-center align-items-center" id="card-id">
            <div class="my-card">
                <div class="icon-div">
                    <img src="Icons/4.png" alt="">
                </div>
                <br>
                <p> <u>Address</u><br>
                    #79, Kithaganur Main Rd, <br> KR Puram,Bangalore-560049 <br><br>
                    <u>Phone</u><br>
                    9008046518 <br>
                    9538125662 <br><br>
                    <u>Email</u><br>
                    rentacar19@gmail.com
                </p>
                <br>
                <button type="button" class="btn btn-outline-primary">Facebook</button>
                <button type="button" class="btn btn-outline-info">Twitter</button>
                <button type="button" class="btn btn-outline-danger">Youtube</button>
            </div>
        </div>
    <!--Contact Form-->

</body>
</html>