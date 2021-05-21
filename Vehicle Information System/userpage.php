<?php

    require ('Include/connection.php');
    $sql = "SELECT * FROM car_information ";

    if (isset($_POST['submit'])) {
        $search_text = $_POST['filter'];
        
        $sql .= "WHERE name='$search_text'";
        $sql .= "OR id = '$search_text'";
    }

    $result = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset    ="UTF-8">
    <meta name       ="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv ="X-UA-Compatible" content="ie=edge">

    <!--Local CSS-->
    <link rel ="stylesheet" type="text/css" href="css/adminpage-style.css" />
    <!--Local CSS-->

    <!--Bootstrap 4-->
    <link rel   ="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src ="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src ="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src ="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!--Bootstrap 4-->

    <title>User View</title>
</head>
<body>

    <!--Navigation Bar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
        <div class="container">
            <a class="navbar-brand" href="homepage.php">Car Information System</a>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <form action="include/user-logout.php" method="POST">
                        <button type="submit" class="btn btn-sm btn-outline-primary">Log Out</button>
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
                <form class="form-inline" action="userpage.php" method="POST">
                    <div class="form-group mb-2">
                        <div class="form-group mx-sm-3 mb-2">
                            <input type="text" class="form-control form-control-sm" id="search-field" name="filter" placeholder="Search">
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-sm btn-primary mb-2" id="submit-button">Search</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Filter Section -->
    
    <!--Table-->
    <div class="mytable" id="table-modal">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope ="col">Id</th>
                    <th scope ="col">Name</th>
                    <th scope ="col">Reg No</th>
                    <th scope ="col">Eng No</th>
                    <th scope ="col">Chasis No</th>
                    <th scope ="col">Interior</th>
                    <th scope ="col">Exterior</th>
                    <th scope ="col">Condition</th>
                    <th scope ="col">Style</th>
                </tr>
            </thead>

            <!-- Load All Data -->
            <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row['id'];?></td>
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['regno'];?></td>
                        <td><?php echo $row['engno'];?></td>
                        <td><?php echo $row['chasisno'];?></td>
                        <td><?php echo $row['intcol'];?></td>
                        <td><?php echo $row['extcol'];?></td>
                        <td><?php echo $row['c_condition'];?></td>
                        <td><?php echo $row['style'];?></td>
                    </tr>
                    <?php
                }
            ?>
            <!-- Load All Data -->
        </table>
    </div>
    <!--Table-->

</body>
</html>