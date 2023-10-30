  <?php 
session_start();
if(! isset($_SESSION["Admin"])){
  header("Location: admin_login.html");
}?>
<?php 
$Area_name = $_POST['area'];
$Pincode = $_POST['pincode'];

$con = mysqli_connect('localhost','root','');
$select_db = mysqli_select_db($con,'auto best emporio');
$query = "insert into area values('$Area_name','$Pincode');";
$data = mysqli_query($con,$query);
if($data){
    header("Location: Area.php");
}?>