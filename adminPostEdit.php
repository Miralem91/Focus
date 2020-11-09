
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

        $sql= "SELECT  *  FROM posts";
        $result = $conn->query($sql);
        while($row=$result->fetch_assoc()) {
            $cName = $row['cName'];
            $id = $row['id'];
            $sql2= "SELECT * FROM posts WHERE id = '$id'";
            $result2 = $conn->query($sql2);
            if($row2=$result2->fetch_assoc()){
                echo "<div class = 'article'>";
                echo "<h3><a href='read.php?id=".$row['id']."'>  ".$row['title']."</a></h3><br>";
              
                    echo "<form method='POST' action='editPost.php'>
                    <input type='hidden' name='id' value='".$row['id']."'>
                    <input type='hidden' name='title' value='".$row['title']."'>
                    <input type='hidden' name='content' value='".$row['content']."'>
                    <input type='hidden' name='author_id' value='".$row['author_id']."'>
                    <input type='hidden' name='cName' value='".$row['cName']."'>
                    <input type='hidden' name='snippet' value='".$row['snippet']."'>
                    <button name='editPost'>Update/Delete </button>
                    </form>";
                    
            echo " <button><a href='admin.php'>Go Back</a></button></div>";
            }
        };
     }else {
         header("Location: index.php?YouAreNotAdmin!!");
     } 
 require "footer.php";
?>
