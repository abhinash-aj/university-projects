<?php

	$dbServername = "localhost";
	$dbUsername   = "root";
	$dbPassword   = "";
	$dbName       = "car_information_system";

    $con = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
    
    if(!$con) {
        die("Connection Failed: ".mysqli_connect_error());
    }