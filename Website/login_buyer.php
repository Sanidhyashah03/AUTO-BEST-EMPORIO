<?php 
$Email = $_POST['Email'];
$Password = $_POST['psw'];

$con = mysqli_connect('localhost','root','');
$select_db = mysqli_select_db($con,'auto best emporio');
$query = "select * from `user` where user_email='$Email' and user_password='$Password';";
$data = mysqli_query($con,$query);
if($data){
  $check_loop = true;
    while($res = mysqli_fetch_array($data)){
      if($res[5] == $Email){
        echo "here1";
        if($res[3] == $Password){
          $check_loop = false;
          session_start();
          $_SESSION["Buyer"] = $Email;
          header('Location: Home.php');
        }
      }
    }
    if($check_loop){
      header("Location: login.html");
    }
}
else{
   echo "else3";
  $_SESSION["msg"] = "Invalid Email/Password!";
  header("Location: login.html");
}
?>