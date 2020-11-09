<?php session_start();?>
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
           // require "header.php";
            include "includes/dbh.inc.php"; 
            include "includes/functions.php";

            if(isset($_SESSION['id'])){

                echo  "<h1>Create a new post</h1>

            <form method='POST' action='".setArticle($conn)."'>
            <input type='hidden' name='author_id' value='".$_SESSION['id']."'>
            <input type ='text' placeholder ='Title' name ='title'><br>
            <textarea rows='30' cols='100' class= 'contentBox' name ='content' placeholder='Start writing..'></textarea><br>
            <button name ='contentPublish' value ='publish'>Publish</button>
            <select name = 'category_id'>
            <option action
            
            
            
            
            +>Choose category</option>
            <option>News</option>
            <option>Reviews</option>
            <option>Tutorials</option>
            </select>
           </form>
            </article><!--end of article section-->";
            } else {

                echo " <br> <br> Please <a href = 'login.php'>login</a> to start writing! ";
            }
            ?>
        </main><!--end of content section-->
        
        <aside class="mainSidebar">
            <header class="sidebarHeader">
                <h3>Popular Articles</h3>
               <?php getCategories($conn); ?>
            </header> <!--end of sidebarHeader section-->
        </aside><!--end of mainSidebar section-->

        <aside class="secondSidebar">
            <header class="sidebarHeader">
                <h3>Find Your Closest Ford Dealer</h3>
                </header> <!--end of sidebarHeader section-->
                <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11321.116465346802!2d20.401253!3d44.8158781!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7de4029172d87693!2sGrand%20Motors!5e0!3m2!1sen!2sba!4v1580508751894!5m2!1sen!2sba" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </aside><!--end of secondSidebar section-->
</body>
</html>