<?php 
session_start();
if(! isset($_SESSION["Admin"])){
  header("Location: admin_login.html");
}?>
<?php 
$con = mysqli_connect('localhost','root','');
$select_db = mysqli_select_db($con,'auto best emporio');

$oid = $_GET['oid'];

$query = "UPDATE order_table SET Status='Delivered' where O_id='$oid';";
$res = mysqli_query($con,$query);
if($res){
    header('Location: Orders.php');
}
else{
    echo "UPDATE order_table SET Status='Delivered' where d='$oid';";
}
?>