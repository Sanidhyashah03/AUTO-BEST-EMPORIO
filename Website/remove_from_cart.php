<?php 
session_start();
if(! isset($_SESSION["Buyer"])){
  header("Location: login.html");
}?>

<?php 
$Pid = $_GET['P_id'];
$Bid = $_GET['B_id'];

$con = mysqli_connect('localhost','root','');
$select_db = mysqli_select_db($con,'auto best emporio');

$query = "DELETE from shopping_cart where B_id = $Bid and P_id = '$Pid';";
$res = mysqli_query($con,$query);

if($res){
    header('Location: shopping_cart.php');
}
else{
    echo "FAILED!!";
}
?>