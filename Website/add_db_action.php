<?php 
session_start();
if(! isset($_SESSION["Admin"])){
  header("Location: admin_login.html");
}?>
<?php 
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$pNumber = $_POST['phnNumber'];
$location = $_POST['area'];
$license = $_POST['license'];



$con = mysqli_connect('localhost','root','');
$select_db = mysqli_select_db($con,'auto best emporio');



$query = "select * from id;";
$data = mysqli_query($con,$query);
if($data){
    while($id = mysqli_fetch_array($data))
    {

    $id_t = $id[0];

    }
}
$query1 = "delete from id;";
$res = mysqli_query($con,$query1);
$temp_id = $id_t + 1;
$query2 = "insert into id values($temp_id);";
$res1 = mysqli_query($con,$query2);
$query3 = "insert into `delivery person` values($temp_id,'$fname','$lname','$pass',$pNumber,'$email','$area',$license);";
$res4 = mysqli_query($con,$query3);
if($res4){
    header("Location: db.php");
}
else{

    header("Location: add_deliverperson.php?msg=Delivery Person already exist!".$res4);
}
?>