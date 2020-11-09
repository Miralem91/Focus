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
    <title>Edit Post</title>
</head>
<body>
    <header class="mainHeader"><!--start of mainHeader-->
        <?php require 'includes/mainNav.inc.php'; ?>
    </header><!--end of main Header-->
        <main class="content">
            <article class="article"><!--start of article section-->
            <?php 
                $cid=$_POST['cid'];
            if ($_SESSION['role']=="admin"){
                $comment=$_POST['comment'];
                echo  "<h1>Edit Comment</h1>
                        <form method='POST' action='".editComments($conn)."'>
                        <input type='hidden' name='cid' value='". $cid."'>
                        <textarea rows='10' cols='100' class='contentBox' name='comment' value=''>". $comment."</textarea><br><br>
                        <button name ='updateComment' value ='updateComment'>Update</button>
                        </form>";
                echo    "<form method='POST' action ='".deleteComments($conn)."'>
                    <input type= 'hidden' name='cid' value='".$cid."'>
                    <button name = 'deleteComment'>Delete</button>
                         </article><!--end of article section-->  
                        </main><!--end of content section--> 
                        ";
            }else{
                echo "<br><br><h3>Please <a href = 'login.php'>login</a> or  <a href = 'signup.php'>create a new account</a> to get access to this page!!</h3><br><br>";
            }
            ?>
</body>
</html>
            