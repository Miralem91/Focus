<?php session_start();
include 'includes/functions.php';?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style/style1.css?version=1">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>Blog</title>
</head>
<body>
    <header class="mainHeader"><!--start of mainHeader-->
    <?php require 'includes/mainNav.inc.php'; ?>
    </header><!--end of main Header-->
    
        <main class="content">
            <article class="article"><!--start of article section-->
            <?php //ispis blog postova
                getArticleSnippet($conn);
                ?>
           </article>
        </main><!--end of content section-->

        <aside class="mainSidebar">
            <header class="sidebarHeader">
                <h3>Categories</h3>
                <?php getCategories(); ?>
               <?php //getCategories($conn); ?>
            </header> <!--end of sidebarHeader section-->
        </aside><!--end of mainSidebar section-->

        <aside class="secondSidebar">
            <header class="sidebarHeader">
                <h3>Find Your Closest Ford Dealer</h3>
                </header> <!--end of sidebarHeader section-->
                <?php  getLocation(); ?>
        </aside><!--end of secondSidebar section-->
</body>
</html>
