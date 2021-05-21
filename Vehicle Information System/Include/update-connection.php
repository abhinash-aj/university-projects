<?php

    if(isset($_POST['update'])) {
        require 'connection.php';
        
        $id        = $_POST['id'];
        $name      = $_POST['name'];
        $regno     = $_POST['regno'];
        $engno     = $_POST['engno'];
        $chasis    = $_POST['chasisno'];
        $intcol    = $_POST['intcol'];
        $extcol    = $_POST['extcol'];
        $condition = $_POST['condition'];
        $style     = $_POST['style'];
        
        $sql = "UPDATE car_information SET name='$name',regno='$regno',engno='$engno',chasisno='$chasis',intcol='$intcol',extcol='$extcol',c_condition='$condition',style='$style' WHERE id='$id'";
        
        mysqli_query($con, $sql);
        
        header("Location: ../updatepage.php?update=success");
    }
    else {
        header("Location : ../edit-update-page.php");
    }