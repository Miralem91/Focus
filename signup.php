<?php                             
    include 'includes/dbh.inc.php';
    include 'header.php';
       ?>   
 <main>
     
        
<?php 
       
       
            if(!isset($_SESSION['id'])){
            echo "<div id='login'>
                <h3 class='text-center text-white pt-5'></h3>
                <div class='container'>
                <div id='login-row' class='row justify-content-center align-items-center'>
                <div id='login-column' class='col-md-6'>
                <div id='login-box' class='col-md-12'>
                <form id='login-form' class='form'  action ='includes/signup.inc.php' method='post'>
                <h3 class='text-center text-info'>Create Free Account</h3>
                <div class='form-group'>
                <label for='username' class='text-info'>Username:</label><br>
                <input type='text' name='userid' id='username' class='form-control'>
                </div>
                <div class='form-group'>
                <label for='password' class='text-info'>Password:</label><br>
                <input type='password' name='pwd' id='password' class='form-control'>
                </div>
                <div class='form-group'>
                <label for='password' class='text-info'>Repeat Password:</label><br>
                <input type='password' name='pwd-repeat' id='password' class='form-control'>
                </div>
                <div class='form-group'>                                 
                <input type='submit' name='signup-submit' class='btn btn-primary btn-md' value='Register'>
                </div> ";
        }else{
            header("Location: index.php?Error:YouAllReadyHaveAnAcoount");
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
