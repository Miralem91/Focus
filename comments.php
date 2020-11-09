<?php 
 include "includes/dbh.inc.php"; 

            if(isset($_SESSION['id'])){

                echo  "<h1>Create a new post</h1>

            <form method='POST' action='".setComment($conn)."'>
            <input type='hidden' name='author_id' value='".$_SESSION['id']."'>
            <input type ='text' placeholder ='Title' name ='title'><br>
            <textarea rows='30' cols='100' class= 'contentBox' name ='content' placeholder='Start writing..'></textarea><br>
            <button name ='contentPublish' value ='publish'>Publish</button>
            <select name = 'category_id'>
            <option>Choose category</option>
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