<?php 
session_start();
if(! isset($_SESSION["Admin"])){
  header("Location: admin_login.html");
}?>
<html>
    <head>
        <title>
            Edit 
        </title>
        <link rel="stylesheet" href="\static\css\login_signup.css">
    </head>
    <body>
        <div class="wrapper">
            <div class="title-text">
            <center><div class="title login">Edit </div>
            </div></center>
           <center> <div class="form-container">
            <div class="form-inner">
                <form action="add_area_action.php" method="post" class="login">
                <div class="field">
                    <input type="text" name="" placeholder="First Name" required>
                </div>
                <div class="field">
                    <input type="text" name="" placeholder="Last Name" required>
                </div>
                <div class="field">
                    <input type="" name="" placeholder="Email" required >
                </div>
                <div class="field">
                    <input type="Password" name="" placeholder="Password" required>
                </div>
                <div class="field">
                    <input type="" name="" placeholder="Contact_No" required>
                </div>
                <div class="field">
                    <input type="text" name="" placeholder="Area" required>
                </div>
                <div class="field">
                    <input type="text" name="" placeholder="Driving License_No" required>
                </div>
                <div class="field btn">
                    <div class="btn-layer"></div>
                    <input type="submit" value="Add">
                </div></center>

                </form>
            </div>
            </div>
        </div>
        <script src="\static\js\login_signup.js"></script>
    </body>
</html>