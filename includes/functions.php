<?php
include 'dbh.inc.php';
function setComments($conn){
    if(isset($_POST['commentSubmit'])){
       $userid =$_POST['userid'];
       $date=$_POST['date'];
       $comment=$_POST['comment'];
       $article_id =  $_GET['id'];
       $sql = "INSERT INTO comments(cid, userid , date, comment, article_id) VALUES ('','$userid','$date', '$comment',$article_id )";
       $result = $conn->query($sql);
    }
}
function editComments($conn){
    if(isset($_POST['updateComment'])){
       $cid= $_POST['cid'];
       $comment=$_POST['comment'];
       $sql= "UPDATE comments SET comment= '$comment' WHERE cid ='$cid'";
       $result = $conn->query($sql);
       header("Location: editcommentAdmin.php?commentEdited");
     exit();
}
}
function getComments($conn){
    if(isset($_GET['id'])){
    $article_id = mysqli_escape_string($conn, $_GET['id']);
    $sql= "SELECT * FROM comments WHERE article_id = $article_id";
    $result = $conn->query($sql);
    while($row=$result->fetch_assoc()) {
        $id = $row['userid'];
        $sql2= "SELECT * FROM user WHERE id ='$id'";
        $result2 = $conn->query($sql2);
        if(($row2=$result2->fetch_assoc())){
            echo "<div class='comment-box'> <p>";
            echo "Author: ".$row2['userid']."<br>";
            echo "Date: ".$row['date']."<br>";
            echo "<div>"."Comment: ".$row['comment']."</div>";
            echo "</p>";
            if(isset($_SESSION['id'])){
            if($_SESSION['role']=="admin"){
                echo" <form method ='POST' action='editcommentAdmin.php'>
                        <input type= 'hidden' name='cid' value='".$row['cid']."'>
                        <input type='hidden' name='userid' value='".$row['userid']."'>
                        <input type='hidden' name='date' value='".$row['date']."'>
                        <input type='hidden' name='comment' value='".$row['comment']."'>
                            <button name='editComment'> <a href='editcommentAdmin.php'>Edit</a></button>
                    </form>";
                            }
                    
            
            }
            echo"</div>";
        }
    }
}
}

function deleteComments($conn){
    if(isset($_POST['deleteComment'])){
        $cid=$_POST['cid'];
        $userid= $_POST['userid'];
        $comment= $_POST['comment'];
        $article_id= $_POST['article_id'];
       $sql= "DELETE FROM comments WHERE cid = '$cid'";
       $result = $conn->query($sql);
       header("Location: editcommentAdmin.php?commentDeleted");
       exit();
    }
}
function setArticle($conn){
    if(isset($_POST['contentPublish'])){
        $title =  $_POST['title'];
        $author_id = $_SESSION['id'];
        $content = $_POST['content'];
        $cName =$_POST['cName'];
        $snippet = $_POST['snippet'];

        if(empty($title) || empty($content) || empty($cName)) {
            header("Location: createPost.php?error=emptyfield");
            exit();
        }else{

       $sql = "INSERT INTO posts(id, title , author_id, content, cName, snippet) VALUES('','$title',$author_id, '$content', '$cName', '$snippet')";
       $result = $conn->query($sql);
    
        }
    }
  
}
function editArticle($conn){
    if(isset($_POST['updatePost'])){
       $id = $_POST['id'];
       $title =  $_POST['title'];
       $author_id= $_SESSION['id'];
       $content=$_POST['content'];
       $cName =$_POST['cName'];
       $snippet=$_POST['snippet'];

       $sql="UPDATE posts SET 
       title='$title',
       content='$content',
       snippet='$snippet',
       cName='$cName'
        WHERE id ='$id'";
       $result=$conn->query($sql);
       header("Location: blog.php");
     exit();
}
}

function deleteArticle($conn){
    if(isset($_POST['deleteArticle'])){
        $id = $_POST['id'];
       $sql= "DELETE FROM posts WHERE id = '$id'";
       $result = $conn->query($sql);
       header("Location: adminPostEdit.php");
       exit();
    }
}

function getArticle($conn){
    $sql= "SELECT * FROM posts";
    $result = $conn->query($sql);
    while($row=$result->fetch_assoc()) {
        $cName = $row['cName'];
        $id = $row['id'];
        $sql2= "SELECT * FROM posts WHERE id = '$id'";
        $result2 = $conn->query($sql2);
        if($row2=$result2->fetch_assoc()){
            echo "<div class = 'article'>";
            echo "<h3> ".$row['title']."</h3><br>";
            echo "<p>".$row['content']."</p>";
            echo "<h4> Article written by: ".$row['author_id']. "</h4>";
            echo "<p><label>Category: </label><a href=''>".$row['cName']."</a></p>";
        echo "</div>";
        }
    }
}
function getArticleSnippet($conn){
    $sql= "SELECT  *  FROM posts";
    $result=$conn->query($sql);
    while($row=$result->fetch_assoc()) {
        $cName=$row['cName'];
        $id=$row['id'];
        $sql2="SELECT * FROM posts WHERE id = '$id'";
        $result2=$conn->query($sql2);
        if($row2=$result2->fetch_assoc()){
            echo "<div class = 'article'>";
            echo "<h3><a href='read.php?id=".$row['id']."'>  ".$row['title']."</a></h3><br>";
            echo "<p>".$row['snippet']."</p>";
            echo "<h4> Article written by: ".$row['author_id']. "</h4>";
            echo "<p><label>Category: </label>".$row['cName']."</p>";
            echo "<button><a href='read.php?id=".$row['id']."'>Read  More..</a></button>";
            echo "</div>";
        }
    }
}



function getArticleUrl($conn){
    if(isset($_GET['id'])){
        $id = mysqli_escape_string($conn, $_GET['id']);
        $sql= "SELECT * FROM posts where id = $id";
        $result = $conn->query($sql);
         while($row=$result->fetch_assoc()) {
        $sql2='SELECT `content` FROM `posts` WHERE `id` = ' . (int) $_GET['id'];
        $result2 = $conn->query($sql2);
        if($row2=$result2->fetch_assoc()){
            echo "<div class = 'article'>";
            echo "<h3><a href='read.php?id=".$row['id']."'>  ".$row['title']."</a></h3><br>";
            echo "<p>".$row['content']."</p>";
            echo "<h4> Article written by: ".$row['author_id']. "</h4>";
            echo "<p><label>Category: </label>".$row['cName']."</p>";
            include 'includes/comments.inc.php';
            getComments($conn);
                }
            }
        }else{
        header('Location: blog.php?error');
    }
    
}


function getArticleNews($conn){
    $sql= "SELECT * FROM posts";
    $result = $conn->query($sql);
    while($row=$result->fetch_assoc()) {
        $cName = $row['cName'];
        $id = $row['id'];
        $sql2= "SELECT * FROM posts WHERE '$cName' LIKE 'News'";
        $result2 = $conn->query($sql2);
        if($row2=$result2->fetch_assoc()){
            echo "<div class = 'article'>";
            echo "<h3><a href='read.php?id=".$row['id']."'>".$row['title']."</a></h3><br>";
            echo "<p>".$row['snippet']."</p>";
            echo "<h4> Article written by: ".$row['author_id']. "</h4>";
            echo "<p><label>Category: </label>".$row['cName']."</p>";
            echo "<button><a href='read.php?id=".$row['id']."'>Read  More..</a></button>";
        echo "</div>";
        }
    }
}



function getArticleReviews($conn){
    $sql= "SELECT * FROM posts";
    $result = $conn->query($sql);
    while($row=$result->fetch_assoc()) {
        $cName = $row['cName'];
        $id = $row['id'];
        $sql2= "SELECT * FROM posts WHERE '$cName' LIKE 'Reviews'";
        $result2 = $conn->query($sql2);
        if($row2=$result2->fetch_assoc()){
            echo "<div class = 'article'>";
            echo "<h3><a href='read.php?id=".$row['id']."'>".$row['title']."</a></h3><br>";
            echo "<p>".$row['snippet']."</p>";
            echo "<h4> Article written by: ".$row['author_id']. "</h4>";
            echo "<p><label>Category: </label>".$row['cName']."</p>";
            echo "<button><a href='read.php?id=".$row['id']."'>Read  More..</a></button>";
            echo "</div>";
        }
    }
}


function getArticleTutorials($conn){
    $sql= "SELECT * FROM posts";
    $result = $conn->query($sql);
    while($row=$result->fetch_assoc()) {
        $cName = $row['cName'];
        $id = $row['id'];
        $sql2= "SELECT * FROM posts WHERE '$cName' LIKE 'Tutorials'";
        $result2 = $conn->query($sql2);
        if($row2=$result2->fetch_assoc()){
            echo "<div class = 'article'>";
            echo "<h3><a href='read.php?id=".$row['id']."'>".$row['title']."</a></h3><br>";
            echo "<p>".$row['snippet']."</p>";
            echo "<h4> Article written by: ".$row['author_id']. "</h4>";
            echo "<p><label>Category: </label>".$row['cName']."</p>";
            echo "<button><a href='read.php?id=".$row['id']."'>Read  More..</a></button>";
            echo "</div>";
        }
    }
}


function getLocation(){
   echo "<iframe class='map' src='https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11321.116465346802!2d20.401253!3d44.8158781!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7de4029172d87693!2sGrand%20Motors!5e0!3m2!1sen!2sba!4v1580508751894!5m2!1sen!2sba' width='600' height='450' frameborder='0' style='border:0;' allowfullscreen=''></iframe>";
 }

 function setCategory($conn){
    if(isset($_POST['addCategory'])){
        $cName = $_POST['cName'];
        if(empty($cName)){
            header("Location: createPost.php?error=emptyfield");
            exit();
        }else{
       $sql = "INSERT INTO categories( cName) VALUES( '$cName')";
       $result = $conn->query($sql);
       header("Location: addCategory.php?CategoryAdded");
    
        }
    }
  
}

 function getCategories(){
   echo " <ul>
   <li><a href = 'news.php'>News</a></li>
   <li><a href = 'reviews.php'>Reviews</a></li>
   <li><a href = 'tutorials.php'>Tutorials</a></li>
</ul>";
    }
    
      
    

    function userLogin($conn){
        if(isset($_POST['loginButton'])){
    
        $userId = $_POST['userid'];
        $pwd = $_POST['pwd'];
        $admin = "admin";
        $user = "user";
    
    
        $sql= "SELECT * FROM user WHERE userid = '$userId' AND pwd = '$pwd'";
        $result = $conn->query($sql);
        if(mysqli_num_rows($result) == 1 ){
            if($row = $result->fetch_assoc()){
                session_regenerate_id();
                $_SESSION['id'] = $row ['id'];
                $_SESSION['role']= $row['userType'];
                session_write_close();

                if($result->num_rows==1 && $_SESSION['role']=="user"){
                    header("Location: index.php?welcomeUser");
                }
                else if($result->num_rows && $_SESSION['role']== "admin"){
                    header("Location: admin.php?welcomeAdmin");
                }else{
                    header("Location: index.php?somethingWentWrong!!");
                }
            }
        }
    }
}
    function userLogout($conn){
       
        if(isset($_POST['logoutButton'])){
            session_start();
            session_destroy();
            header("Location: index.php?logoutsuccess");
            session_destroy();
                exit();
        }
    }    
        

    function deleteUser($conn){
        if(isset($_POST['deleteUser'])){
            $id=$_POST['id'];
            $userid= $_POST['userid'];
            $userType=$_POST['userType'];
            $pwd =$_POST['pwd'];
            $sql= "DELETE FROM user WHERE id = '$id'";
            $result = $conn->query($sql);
           header("Location: editUserAdmin.php?UserDeleted");
           exit();
        }
        }
    function editUser($conn){
        if(isset($_POST['updateUser'])){
            $id = $_POST['id'];
            $userid =  $_POST['userid'];
            $userType=$_POST['userType'];
            $pwd =$_POST['pwd'];
    
            $sql="UPDATE user SET 
            userid='$userid',
            userType='$userType',
            pwd='$pwd'
             WHERE id ='$id'";
            $result=$conn->query($sql);
            header("Location: editUserAdmin.php");
          exit();
     }
    }


