
<?php 
$Email = $_POST['email'];
$Password = $_POST['pswd'];

$con = mysqli_connect('localhost','root','');
$select_db = mysqli_select_db($con,'auto best emporio');
$query = "select * from `admin`;";
$data = mysqli_query($con,$query);
if($data){
    while($res = mysqli_fetch_array($data)){
      if($res[0] == $admin_email){
        if($res[1] == $admin_password){
          session_start();
          $_SESSION["Admin"] = $Email;
          header('Location: admin.php');
          echo "here2";
        }
        else{
          header("Location: admin_login.html");
        }
      }
      else{
        header("Location: admin_login.html");
      }
    }
}
else{
  $_SESSION["msg"] = "Invalid Email/Password!";
  header("Location: admin_login.html");
}
?>