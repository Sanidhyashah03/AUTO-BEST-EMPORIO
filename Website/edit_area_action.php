<?php 
session_start();
if(! isset($_SESSION["Admin"])){
  header("Location: admin_login.html");
}?>
<?php 
$Area_name = $_POST['area_name'];
$pincode = $_POST['pincode'];
$realArea = $_GET['areaName'];

$con = mysqli_connect('localhost','root','');
$select_db = mysqli_select_db($con,'auto best emporio');
$query = "update area set area_name = '$Area_name',area_pincode=$pincode  where area_name = '$Area_name';";
$data = mysqli_query($con,$query);
if($data){
    header("Location: Area.php");
}?>