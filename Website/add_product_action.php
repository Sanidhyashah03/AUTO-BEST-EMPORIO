<?php 
session_start();
if(! isset($_SESSION["Admin"])){
  header("Location: admin_login.html");
}?>
<?php 
$Product_name = $_POST['product_name'];
$Product_price = $_POST['product_price'];
$Product_quantity = $_POST['product_quantity'];
$Product_description = $_POST['product_description'];


$image = $_FILES['image']['tmp_name'];
$imgContent = addslashes(file_get_contents($image));

    


$con = mysqli_connect('localhost','root','');
$select_db = mysqli_select_db($con,'auto best emporio');

$query1 = "select * from id;";
$data1 = mysqli_query($con,$query1);
if($data1){
    while($getID = mysqli_fetch_array($data1)){
        $id = (int)$getID[0]+1;
        $finalid = "P".$id;
        $query2 = "DELETE from id;";
        $temp = (int)$getID[0] + 1;
        $query3 = "INSERT into id values($temp);";
        mysqli_query($con,$query2);
        mysqli_query($con,$query3);
    }
}

$query = "insert into `product master` values('$finalid','$Product_name',$Product_price,$Product_quantity,'$Product_description','$imgContent');";
$data = mysqli_query($con,$query);



if($data){
    header("Location: Products.php");
}
else{
    echo($query);
}
?>
