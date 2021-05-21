<?php

    require 'Include/connection.php';

    $id = "";
    $name = "";
    $regno = "";
    $engno = "";
    $chasisno = "";
    $intcol = "";
    $extcol = "";
    $condition = "";
    $style = "";

    if(isset($_POST['search'])) {

        $search_criteria = $_POST['filter'];
        $sql = "SELECT * FROM car_information WHERE id='$search_criteria' OR name='$search_criteria'";
        $result = mysqli_query($con, $sql);
        if($result) {
            if(mysqli_num_rows($result)) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $name = $row['name'];
                    $regno = $row['regno'];
                    $engno = $row['engno'];
                    $chasisno = $row['chasisno'];
                    $intcol = $row['intcol'];
                    $extcol = $row['extcol'];
                    $condition = $row['c_condition'];
                    $style = $row['style'];
                }
            }
        }

    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--Local CSS-->
    <link rel="stylesheet" type="text/css" href="css/editupdate-style.css" />
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

    <title>Edit/Update</title>
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

    <!-- Filter Section -->
    <div class="search-control">
        <div class="container h-100">
            <div class="row h-100 justify-content-center align-items-center">
                <form class="form-inline" action="edit-update-page.php" method="POST">
                    <input type="text" class="form-control form-control-sm" id="search-field" name="filter" placeholder="Search By Id Or Name">
                    <button type="submit" name="search" class="btn btn-sm btn-danger mb-2" id="submit-button">Search</button>
                </form>
            </div>
            <hr>
        </div>
    </div>
    <!-- Filter Section -->

    <!--Main Form-->
    <div class="first-container">
      <div class="main-form">
        <div class="header">
          <h5>Edit And Update Car Information</h5>
        </div>
        <div class="form-container">
            <form class="addnewform" action="include/update-connection.php" method="POST">
                <input class="form-control form-control-sm" type="text" placeholder="Id" name="id" value="<?php echo $id; ?>">
                <input class="form-control form-control-sm" type="text" placeholder="Name" name="name" value="<?php echo $name; ?>">
                <input class="form-control form-control-sm" type="text" placeholder="Registration Number" name="regno" value="<?php echo $regno; ?>">
                <input class="form-control form-control-sm" type="text" placeholder="Engine Number" name="engno" value="<?php echo $engno; ?>">
                <input class="form-control form-control-sm" type="text" placeholder="Chasis Number" name="chasisno" value="<?php echo $chasisno; ?>">
                <input class="form-control form-control-sm" type="text" placeholder="Interior Color" name="intcol" value="<?php echo $intcol; ?>">
                <input class="form-control form-control-sm" type="text" placeholder="Exterior Color" name="extcol" value="<?php echo $extcol; ?>">
                <input class="form-control form-control-sm" type="text" placeholder="Condition" name="condition" value="<?php echo $condition; ?>">
                <p style="color: red; font-size: 12px;" align="left">Condition value can only be : Best,Good,Average.</p>
                <input class="form-control form-control-sm" type="text" placeholder="Style" name="style" value="<?php echo $style; ?>">
                <p style="color: red; font-size: 12px;" align="left">Style value can only be : 4 Doors,2 Doors</p>
            <hr>
            <input type="submit" name="update" class="btn btn-sm btn-outline-danger" value="Update Data" id="add-btn">
          </form>
        </div>
      </div>
    </div>
    <!--Main Form-->

</body>
</html>