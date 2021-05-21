<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--Local CSS-->
    <link rel="stylesheet" type="text/css" href="css/addnew-style.css" />
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

    <title>Add New</title>
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
          <h5>Add New Car To Database</h5>
        </div>
        <div class="form-container">
            <form class="addnewform" action="include/addnew-connection.php" method="POST">
                <!--
                <div class="form-group">
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="img">
                </div>
                -->
                <input class="form-control form-control-sm" type="text" placeholder="Id" name="id">
                <input class="form-control form-control-sm" type="text" placeholder="Name" name="name">
                <input class="form-control form-control-sm" type="text" placeholder="Registration Number" name="regno">
                <input class="form-control form-control-sm" type="text" placeholder="Engine Number" name="engno">
                <input class="form-control form-control-sm" type="text" placeholder="Chasis Number" name="chasisno">
                <input class="form-control form-control-sm" type="text" placeholder="Interior Color" name="intcol">
                <input class="form-control form-control-sm" type="text" placeholder="Exterior Color" name="extcol">
                <select class="form-control form-control-sm" id="condition-select" name="condition-select">
                    <option value="No Condition">Condition</option>
                    <option value="Best">Best</option>
                    <option value="Good">Good</option>
                    <option value="Average">Average</option>
                </select>
                <select class="form-control form-control-sm" name="style">
                    <option value="No Style">Style</option>
                    <option value="4 Doors">4 Doors</option>
                    <option value="2 Doors">2 Doors</option>
                </select>
            <hr>
            <input type="reset" class="btn btn-sm btn-outline-secondary" value="Clear Data" id="clear-btn">
            <input type="submit" name="submit" class="btn btn-sm btn-outline-danger" value="Add Data" id="add-btn">
          </form>
        </div>
      </div>
    </div>
    <!--Main Form-->

</body>
</html>