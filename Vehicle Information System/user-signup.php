<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--Local CSS-->
    <link rel="stylesheet" type="text/css" href="css/usersignup-style.css" />
    <!--Local CSS-->
    
    <!--Local JS-->
    <script src="javascript/signupscript.js"></script>
    <!--Local JS-->

    <!--Bootstrap 4-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!--Bootstrap 4-->

    <title>User SignUp</title>
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

        <!--Main Container-->
        <div class="main-container">
            <div class="container h-100">
                <div class="row h-100 justify-content-center align-items-center">
                    <form class="signup-form" action="include/usersignup-connection.php" method="POST">
                    <div class="container">
                        <h5 align="center">User SignUp</h5>
                        <hr>
                        <input type="text" id="u-field" name="name" class="form-control form-control-sm" placeholder="Name">
                        <input type="email" id="u-field" name="email" class="form-control form-control-sm" placeholder="Email">
                        <input type="text" id="u-field" name="phone" class="form-control form-control-sm" placeholder="Phone">
                        <input type="text" id="u-field" name="username" class="form-control form-control-sm" placeholder="Username">
                        <input type="password" id="p-field" name="password" class="form-control form-control-sm" placeholder="Password">
                        <hr>
                        <button type="submit" name="submit" id='loginbutton' class="btn btn-outline-primary btn-sm">Signup</button>
                        <div id="alertbox" class="alert alert-danger" role="alert">
                            Alert
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!--Main Container-->

        
        <?php
    
        if(isset($_GET['error'])) {
            if($_GET['error'] == "empty") {
                echo '<script type="text/javascript">emp_alertFunction();</script>';
            }
            elseif($_GET['error'] == "usertaken") {
                echo '<script type="text/javascript">taken_alertFunction();</script>';
            }
        }
        elseif(isset ($_GET['signup'])) {
            if($_GET['signup'] == "success") {
                echo '<script type="text/javascript">success_alertFunction();</script>';
            }
        }
    
        ?>
</body>
</html>