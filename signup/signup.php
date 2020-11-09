
<html lang="en">
    <!DOCTYPE html>
    <script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=I2QF2gESJYXQFWCCt6zwOuNVFdMBP5H0zRjfCdcrzQp-1wp_Xau0mfh2tBG0pzFpj-sV0cLE5svmxgn0T9uTtKcSsxo4dMLnn-77-lQDEepcxQMtBp-dMXo34udsaQ7M" charset="UTF-8"></script><html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta keywords ="ford focus">
        <title>Ford Focus</title>
    </head>
    <body>
        
    </body>
    </html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../style/style1.css">
    
    <title>Ford Focus</title>
</head>
<body>

        <header class="mainHeader">
            <div class="customPadding"></div>
            <nav class="mainNav">
                <div class="logo"><a href="index.html">ford focus</a></div>
                 <ul class="mainNavUl">
                     <li class="mainnavList"><a href="index.html">Home</a></li>
                     <li class="mainnavList"><a href="blog.html">Blog</a></li>
                     <li class="mainnavList"><a href="pages/buyit.html">Buy Focus</a></li>
                     <li class="mainnavList"><a href="pages/about.html">About Ford</a></li>
                     <li class="mainnavList"><a href="signup/signup.php">Sign Up</a></li>

                 </ul>
                 
            </nav> <!--end of mainNav-->
        </header><!--end of main Header-->


        <div class="middleSection">

        <main>
      <div class="wrapper-main">
        <section class="section-default">
          <h1>Signup/Login</h1>
          <?php
          // Here we create an error message if the user made an error trying to sign up.
          if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyfields") {
              echo '<p class="signuperror">Fill in all fields!</p>';
            }
            else if ($_GET["error"] == "invaliduidmail") {
              echo '<p class="signuperror">Invalid username and e-mail!</p>';
            }
            else if ($_GET["error"] == "invaliduid") {
              echo '<p class="signuperror">Invalid username!</p>';
            }
            else if ($_GET["error"] == "invalidmail") {
              echo '<p class="signuperror">Invalid e-mail!</p>';
            }
            else if ($_GET["error"] == "passwordcheck") {
              echo '<p class="signuperror">Your passwords do not match!</p>';
            }
            else if ($_GET["error"] == "usertaken") {
              echo '<p class="signuperror">Username is already taken!</p>';
            }
          }
          // Here we create a success message if the new user was created.
          else if (isset($_GET["signup"])) {
            if ($_GET["signup"] == "success") {
              echo '<p class="signupsuccess">Signup successful!</p>';
            }
          }
          ?>
          <form class="form-signup" action="includes/signup.inc.php" method="post">
            <?php
            // Here we check if the user already tried submitting data.

            // We check username.
            if (!empty($_GET["uid"])) {
              echo '<input type="text" name="uid" placeholder="Username" value="'.$_GET["uid"].'">';
            }
            else {
              echo '<input type="text" name="uid" placeholder="Username">';
            }

            // We check e-mail.
            if (!empty($_GET["mail"])) {
              echo '<input type="text" name="mail" placeholder="E-mail" value="'.$_GET["mail"].'">';
            }
            else {
              echo '<input type="text" name="mail" placeholder="E-mail">';
            }
            ?>
            <input type="password" name="pwd" placeholder="Password">
            <input type="password" name="pwd-repeat" placeholder="Repeat password">
            <button type="submit" name="signup-submit">Signup</button>
          </form>
          <!--
          NOTES FOR ME BEFORE DOING PHP!
          <form class="form-signup" action="includes/signup.inc.php" method="post">
            <input type="text" name="uid" placeholder="Username">
            <input type="text" name="mail" placeholder="E-mail">
            <input type="password" name="pwd" placeholder="Password">
            <input type="password" name="pwd-repeat" placeholder="Repeat password">
            <button type="submit" name="signup-submit">Signup</button>
          </form>
          -->
        </section>
      </div>

        </div>


        


</body>
</html>