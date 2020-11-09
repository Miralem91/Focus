<?php                             
    include 'includes/dbh.inc.php';
    include 'header.php';
       ?>   
 <main>
     
        
<?php 
        if(isset($_SESSION['id'])){
            echo "<div id='login'>
            <img class='logoutImage' src ='imgs/ford_logo.png' alt = 'ford'/>
            <div id='logoutWrapper'>You are already logged in into website please <a href='index.php'>go back</a> or logout"."<form action='includes/logout.inc.php' method='post'><br><br>
            <button class='logoutButton' type='submit'  name='logout-submit'><strong>Logout</strong></button>
            </form> </div></div></div>'";
                } else {                    
            echo "<div id='login'>
                <h3 class='text-center text-white pt-5'></h3>
                <div class='container'>
                <div id='login-row' class='row justify-content-center align-items-center'>
                <div id='login-column' class='col-md-6'>
                <div id='login-box' class='col-md-12'>
                <form id='login-form' class='form'  action ='".userLogin($conn)."' method='post'>
                <h3 class='text-center text-info'>Login</h3>
                <div class='form-group'>
                <label for='username' class='text-info'>Username:</label><br>
                <input type='text' name='userid' id='username' class='form-control'>
                </div>
                <div class='form-group'>
                <label for='password' class='text-info'>Password:</label><br>
                <input type='password' name='pwd' id='password' class='form-control'>
                </div>
                <div class='form-group'>                                 
                <input type='submit' name='loginButton' class='btn btn-primary btn-md' value='submit'>
                </div> 
                <div id='register-link' class='text-right'>
                        <a href='signup.php' class='text-primary'>Create a free account here</a>
                    </div>";
                         }
?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    

</main>      
<?php
 require "footer.php";
?>
