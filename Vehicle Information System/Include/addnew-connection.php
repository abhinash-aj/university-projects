<?php

    if(isset($_POST['submit'])) {
        require 'connection.php';
        
        $id        = $_POST['id'];
        $name      = $_POST['name'];
        $regno     = $_POST['regno'];
        $engno     = $_POST['engno'];
        $chasis    = $_POST['chasisno'];
        $intcol    = $_POST['intcol'];
        $extcol    = $_POST['extcol'];
        $condition = $_POST['condition-select'];
        $style     = $_POST['style'];
        
        $sql = "INSERT INTO car_information (id,name,regno,engno,chasisno,intcol,extcol,c_condition,style) VALUES ('$id','$name','$regno','$engno','$chasis','$intcol','$extcol','$condition','$style')";
        
        mysqli_query($con, $sql);
        
        header("Location: ../addnew-page.php?datainsert=success");
    }
    else {
        header("Location : ../addnew-page.php");
    }