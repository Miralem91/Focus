<?php
    
   if (isset($_POST['signup-submit'])) {
        require 'dbh.inc.php'; 
        $username = $_POST ['userid'];
        $password = $_POST ['pwd'];
        $passwordRepeat = $_POST ['pwd-repeat'];

        if (empty($username) ||  empty($password) || empty($passwordRepeat)) {
            header("Location: ../signup.php?error=emptyfields&uid=".$username);
            exit();
          }
          else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
            header("Location: ../signup.php?error=invaliduidmail"); 
            exit();
          }
          else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
            header("Location: ../signup.php?error=invaliduidmail");
        }
        else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
            header("Location: ../signup.php?error=invaliduid&mail=");
            exit();
          }

        else if ($password !== $passwordRepeat) {
            header("Location: ../signup.php?error=passwordcheck&uid="  .$username);
        }
        else{
            $sql="SELECT userid FROM user WHERE userid=?;"; 
            $stmt=mysqli_stmt_init($conn); 
            if(!mysqli_stmt_prepare($stmt, $sql)) {
                header("Location: ../signup.php?error=sqli_error");
                exit(); 
            }

        else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt); 
            $resultCount = mysqli_stmt_num_rows($stmt);
            mysqli_stmt_close($stmt);
            if($resultCount > 0 ) {
                header("Location: ../signup.php?error=user_taken&mail=");
                exit();
            }

            else{
             $sql= "INSERT INTO user (userid, pwd) VALUES ('$username','$password' )"; 
             $stmt=mysqli_stmt_init($conn);
             if(!mysqli_stmt_prepare($stmt, $sql)) {
                header("Location: ../signup.php?error=sqlierror");
                exit(); 
            }
            else {
                $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
                mysqli_stmt_bind_param($stmt, "sss", $username, $hashedPwd );
                mysqli_stmt_execute($stmt);
                header("Location: ../index.php?signup=success");
            exit(); 
            }
        }   

        }
    }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }
            else {
                header("Location: ../signup.php");
                exit();
                session_destroy();

            
        }

