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
    <title>Create Post</title>
</head>
<body>
    <header class="mainHeader"><!--start of mainHeader-->
        <?php require 'includes/mainNav.inc.php'; ?>
    </header><!--end of main Header-->
        <main class="content">
            <article class="article"><!--start of article section-->
            <?php 
            if(isset($_SESSION['id'])){
                echo  "<h1>Create a new post</h1>
                        <form method='POST' action='".setArticle($conn)."'>
                        <input type='hidden' name='author_id' value='".$_SESSION['id']."'>
                        <input type ='text' placeholder ='Title' name ='title'><br><br>
                        <textarea rows='30' cols='100' class= 'contentBox' name ='content' placeholder='Start writing..'></textarea><br><br>
                        <textarea rows='7' cols='100' class= 'contentBox' name ='snippet' placeholder='Write a snippet..'></textarea><br><br>
                        <button name ='contentPublish' value ='publish'>Publish</button>
                        <label>Choose category: </label><input type='radio' name = 'cName' value ='News'> News 
                        <input type='radio' name = 'cName' value ='Reviews'> Reviews 
                        <input type='radio' name = 'cName' value ='Tutorials'> Tutorials
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
            