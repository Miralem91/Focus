<?php
include 'dbh.inc.php';
if(isset($_SESSION['id']) == 1){
        echo "<form method='POST' action='".setComments($conn)."'>
        <input type='hidden' name='userid' value='".$_SESSION['id']."'>
        <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
        <input type ='hidden' name'article_id' value = '".$_GET['id']."'>
        <textarea rows='10' cols='50' class='comtext' name='comment'></textarea> <br><br>

        <button class='combutton' name ='commentSubmit' type= 'submit'>Comment</button>
        </form>";

      }else{
        echo "<br> <br> Please <a href = 'login.php'>login</a> to leave a comment! ";
      }
