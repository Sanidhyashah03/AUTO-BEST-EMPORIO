<?php 
session_start();
if(! isset($_SESSION["Admin"])){
  header("Location: admin_login.html");
}?>
<?php 
$id = $_GET['id'];

$con = mysqli_connect('localhost','root','');
$select_db = mysqli_select_db($con,'auto best emporio');
$query = "DELETE from `delivery person` where db_id = '$id';";
$data = mysqli_query($con,$query);
if($data){
    header("Location: db.php");
}?>