<?php session_start();
 include "includes/dbh.inc.php"; 
 include "includes/functions.php";?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style/style1.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>Edit User</title>
</head>
<body>
    <header class="mainHeader"><!--start of mainHeader-->
        <?php require 'includes/mainNav.inc.php'; ?>
    </header><!--end of main Header-->
        <main class="content">
            <article class="article"><!--start of article section-->
            <?php 
                 $id=$_POST['id'];
                 $userid=$_POST['userid'];
                 $userType=$_POST['userType'];
                 $pwd =$_POST['pwd'];

                 if ($_SESSION['role']=="admin"){
                    echo  "<h1>Edit Comment</h1>
                            <form method='POST' action='".editUser($conn)."'>
                            <input type='hidden' name='id' value='". $id."'>
                            <input type ='text' class='contentBox' name='userid' value='$userid'><br><br>
                            <input type ='text' class='contentBox' name='pwd' value='$pwd'><br><br>
                            <input type='radio' name = 'userType' value ='admin'> Admin 
                            <input type='radio' name = 'userType' value ='user'> User <br><br>

                            <button name ='updateUser' value ='updateComment'>Update</button>
                            </form>";
                    echo    "<form method='POST' action ='".deleteUser($conn)."'>
                    <input type= 'hidden' name='id' value='".$id."'>
                    <button name = 'deleteUser'>Delete</button>
                         </article><!--end of article section-->  
                        </main><!--end of content section--> 
                        ";
                }else{
                    echo "<br><br><h3>Please <a href = 'login.php'>login</a> or  <a href = 'signup.php'>create a new account</a> to get access to this page!!</h3><br><br>";
                }
                ?>
    </body>
    </html>
                