<?php 
session_start();
if(! isset($_SESSION["Buyer"])){
  header("Location: login.html");
}?>

<?php 
$con = mysqli_connect('localhost','root','');
$select_db = mysqli_select_db($con,'auto best emporio');

$Email = $_SESSION['Buyer'];

$query1 = "select * from `user` where user_email = '$Email';";
$res_em = mysqli_query($con,$query1);

if($res_em){
    while($B_data = mysqli_fetch_array($res_em)){
        $Buyer_id = $B_data[0];
    }
}

$P_id = $_POST['order_data'];
$P_name = $_POST['order_name'];
$Price = $_POST['order_price'];
$quan = 1;

$query_check = "select * from shopping_cart where B_id = $Buyer_id and P_id = '$P_id';";
$check = mysqli_query($con,$query_check);
if($check){
    while($rs = mysqli_fetch_array($check)){
        goto A;
    }
}

$query = "INSERT into `shopping_cart` values($Buyer_id,'$P_id','$P_name',$quan,$Price);";
$fin_res = mysqli_query($con,$query);
if($fin_res){
    A:
    header('location: shopping_cart.php');
}
else{
    echo "Buyer: ".$Buyer_id;
    echo "Product: ".$P_id;
    echo "Product_Price: ".$Price;
    echo "Product_Quantity: ".$quan;
}
?>