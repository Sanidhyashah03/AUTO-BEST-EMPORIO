<?php 
session_start();
if(! isset($_SESSION["Buyer"])){
  header("Location: login.html");
}?>

<?php 
$con = mysqli_connect('localhost','root','');
$select_db = mysqli_select_db($con,'auto best emporio');

$B_id = $_POST['buyer_id'];
$P_id = $_POST['product_id'];
$quan = $_POST['order_quantity'];

$query = "UPDATE shopping_cart SET Quantity=$quan where B_id = $B_id and P_id = '$P_id';";
$res = mysqli_query($con,$query);

if($res){
    header('Location: shopping_cart.php');
}
else{
    echo "FAILED!!";
}
?>