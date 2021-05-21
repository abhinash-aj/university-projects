<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--Local CSS-->
    <link rel="stylesheet" type="text/css" href="css/deleteuser-style.css" />
    <!--Local CSS-->
    
    <!--Local JS-->
    <script src="javascript/gobackscript.js"></script>
    <!--Local JS-->

    <!--Bootstrap 4-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!--Bootstrap 4-->

    <title>Delete</title>
</head>
<body>

    <!--Navigation Bar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
        <div class="container">
            <a class="navbar-brand" href="homepage.php">Car Information System</a>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <button id="back-btn" type="button" class="btn btn-sm btn-outline-danger" onclick="openFunction()">Back</button>
                    <form action="include/admin-logout.php" method="POST">
                        <button type="submit" class="btn btn-sm btn-outline-danger">Log Out</button>
                    </form>
                </ul>
            </div>
        </div>
    </nav>
    <!--Navigation Bar-->

    <!--Main Form-->
    <div class="first-container">
      <div class="main-form">
        <div class="header">
          <h5>Delete User Permanently</h5>
        </div>
        <div class="form-container">
            <form class="deleteform" action="include/deleteuser-connection.php" method="POST">
                <input class="form-control form-control-sm" type="text" placeholder="Username" name="username">
            <hr>
            <input type="submit" name="submit" class="btn btn-sm btn-outline-danger" value="Delete Data" id="add-btn">
            <h6>Warning : User Will Be Permanently Deleted</h6>
          </form>
        </div>
      </div>
    </div>
    <!--Main Form-->

</body>
</html>