<?php 
session_start();
if(! isset($_SESSION["Admin"])){
  header("Location: admin_login.html");
}?>
<?php 
$Area_name = $_GET['area_name'];


$con = mysqli_connect('localhost','root','');
$select_db = mysqli_select_db($con,'auto best emporio');
$query = "delete from area where area_name = '$Area_name';";
$data = mysqli_query($con,$query);
if($data){
    header("Location: Area.php");
}?>