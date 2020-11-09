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
                $id=$_POST['id'];
                $title=$_POST['title'];
                $author_id= $_SESSION['id'];
                $content= $_POST['content'];
                $cName=$_POST['cName'];
                $snippet=$_POST['snippet'];

            if(isset($_SESSION['id'])){
                echo  "<h1>Edit Post</h1>
                        <form method='POST' action='".editArticle($conn)."'>
                        <input type='hidden' name='id' value='".$id."'>
                        <input type='hidden' name='author_id' value='".$author_id."'>
                        <textarea rows='1' cols='50' class='contentBox' name='title' value=''>". $title."</textarea><br><br>
                        <textarea rows='30' cols='100' class='contentBox' name='content' value=''>". $content."</textarea><br><br>
                        <textarea rows='10' cols='100' class='contentBox' name='snippet' value=''>". $snippet."</textarea><br><br>
                        <label>Choose category: </label>
                        <input type='radio' name = 'cName' value ='News'> News 
                        <input type='radio' name = 'cName' value ='Reviews'> Reviews 
                        <input type='radio' name = 'cName' value ='Tutorials'> Tutorials<br>
                        <button name ='updatePost' value ='updatePost'>Update</button>
                        
                        </form>
                        <form method='POST' action ='".deleteArticle($conn)."'>
                    <input type= 'hidden' name='id' value='".$id."'>
                    <button name = 'deleteArticle'>Delete</button>
                         </article><!--end of article section-->  
                        </main><!--end of content section--> 
                        ";
            }else{
                echo "<br><br><h3>Please <a href = 'login.php'>login</a> or  <a href = 'signup.php'>create a new account</a> to get access to this page!!</h3><br><br>";
            }
            ?>
</body>
</html>
            