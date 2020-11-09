
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

    if(isset($_SESSION['id'])){
        $sql= "SELECT  *  FROM comments";
        $result = $conn->query($sql);
        while($row=$result->fetch_assoc()) {
            $cid = $row['cid'];
            $sql2= "SELECT * FROM comments WHERE cid = '$cid'";
            $result2 = $conn->query($sql2);
            if($row2=$result2->fetch_assoc()){
                echo "<div class = 'article'>";
                echo "<h3>".$row['comment']."</a></h3><br>";

                    echo "<form method='POST' action='editComment.php'>
                    <input type='hidden' name='cid' value='".$row['cid']."'>
                    <input type='hidden' name='userid' value='".$row['userid']."'>
                    <input type='hidden' name='comment' value='".$row['comment']."'>
                    <input type='hidden' name='article_id' value='".$row['article_id']."'>
                    <button name='editComment'>Edit/Delete comment</button>
                    </form>";
                    
                    
            echo " <button><a href='admin.php'>Go Back</a></button></div>";
            }
        };
     }else {
         header("Location: index.php?YouAreNotAdmin!!");
     } 
 require "footer.php";
?>
