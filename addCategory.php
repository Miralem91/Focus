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
    <title>Add Category</title>
</head>
<body>
    <header class="mainHeader"><!--start of mainHeader-->
        <?php require 'includes/mainNav.inc.php'; ?>
    </header><!--end of main Header-->
        <main class="content">
            <article class="article"><!--start of article section-->
            <?php 
             if($_SESSION['role']=="admin"){
                echo  "<h1>Add new category</h1>
                        <form method='POST' action='".setCategory($conn)."'>
                        <input type='hidden' name='author_id' value='".$_SESSION['id']."'>
                        <label>Add a new category: </label><input type ='text' placeholder ='AddCategory' name ='cName'><br><br>
                        <button name ='addCategory' value ='publish'>Publish</button>
                        
                        </form>
                         </article><!--end of article section-->  
                        </main><!--end of content section--> 
                        ";
            }else{
                echo "<br><br><h3>Please <a href = 'login.php'>login</a> or  <a href = 'signup.php'>create a new account</a> to get access to this page!!</h3><br><br>";
            }
            ?>
</body>
</html>
            