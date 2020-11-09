<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ford Focus</title>
    <link href="style/styles.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style/style1.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
   
<?php                             
    include 'includes/dbh.inc.php';
    include 'includes/functions.php';

    if($_SESSION['role']=="admin"){

    echo "<body>
           <div id='adminPage'>
            <ul id='adminTools'>
                <li><a href ='createPost.php'>Write a post</a> </li>
                <li><a href='adminPostEdit.php'>Menage Posts</a></li>
                <li><a href='editcommentAdmin.php'>Menage comments</a></li>
                <li><a href='addCategory.php'>Add Category</a></li>
                <li><a href='addUser.php'>Add user</a></li>
                <li><a href='editUserAdmin.php'>Menage users</a></li>
                <li><a href='index.php'>View site</a></li>
                <li><a href='login.php'>Logout</a></li>
            </ul>
           </div>
</body>
</html>
";
     }else {
         header("Location: index.php?YouAreNotAdmin!!");
     } 
 require "footer.php";
?>
