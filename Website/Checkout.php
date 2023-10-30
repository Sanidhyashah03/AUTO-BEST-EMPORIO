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

$query = "select * from shopping_cart where B_id = $Buyer_id;";
$S_data = mysqli_query($con,$query);
if($S_data){
    while($rs = mysqli_fetch_array($S_data)){
        $queryID = "select * from id;";
        $data1 = mysqli_query($con,$queryID);
        if($data1){
            while($getID = mysqli_fetch_array($data1)){
                $id = (int)$getID[0]+1;
                $finalid = "O".$id;
                $query2 = "DELETE from id;";
                $temp = (int)$getID[0] + 1;
                $query3 = "INSERT into id values($temp);";
                mysqli_query($con,$query2);
                mysqli_query($con,$query3);
            }
        }
        $Pid = $rs[1];
        $Bid = $Buyer_id;
        $P_quan = $rs[3];
        $P_price = $rs[4];
        $Fin_amt = $P_price * $P_quan;
        $oDate = date('d-m-y');
        $pQuyer = "select * from `product master` where product_id = '$Pid';";
        $pRes = mysqli_query($con,$pQuyer);
        if($pRes){
            while($pName = mysqli_fetch_array($pRes)){
                $Product_name = $pName[1];
            }
        }
        $finQuery = "INSERT into order_table values('$finalid','$Pid','$Product_name',$Bid,$P_quan,$P_price,$Fin_amt,'$oDate','Pending');";
        $res = mysqli_query($con,$finQuery);
        }
    }

if($res){
header('Location: bill.php?Bid=$Buyer_id');
}
else{
    echo "INSERT into order_table values('$finalid','$Pid,'$Product_name',$Bid,$P_quan,$P_price,$Fin_amt,'$oDate','no');";
}
?>