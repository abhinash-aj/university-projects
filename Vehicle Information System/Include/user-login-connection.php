<?php

    if(isset($_POST['submit'])) {
        require 'connection.php';
        
        $uname = $_POST['username'];
        $pass  = $_POST['password'];
        
        if(empty($uname) || empty($pass)) {
            header("Location: ../user-login.php?error=empty");
            exit();
        }
        else {
            $sql         = "SELECT * FROM user_table WHERE username = '$uname'";
            $result      = mysqli_query($con, $sql);
            $resultCheck = mysqli_num_rows($result);
            if($resultCheck < 1) {
                header("Location: ../user-login.php?error=doesntexist");
                exit();
            }
            elseif($resultCheck == 1) {
                $row = mysqli_fetch_assoc($result);
                if($pass == $row['password']) {
                    session_start();
                    $_SESSION['username'] = $row['username'];
                    // Later more can be added what ever required in the website..
                    header("Location: ../userpage.php?login=success");
                    exit();
                }
                elseif($pass != $row['pass']) {
                    header("Location: ../user-login.php?error=wrongpassword");
                    exit();
                }
                else {
                    header("Location: ../user-login.php?error=failed");
                    exit();
                }
            }
        }
    }
    else {
        header("Location: ../user-login.php");
        exit();
    }