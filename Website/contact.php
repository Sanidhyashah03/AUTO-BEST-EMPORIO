<?php
$dbhost = 'localhost';
$dbusername = 'root';
$dbpassword= '';
$dbname = 'auto best emporio';

$con = mysqli_connect('localhost','root','');
$select_db = mysqli_select_db($con,'auto best emporio');

	$FirstName=$_POST['FirstName'];
	$LastName=$_POST['LastName'];
	$Contact=$_POST['Contactnumber'];
	$Subject=$_POST['Subject'];
	$sql = "INSERT INTO `contact` (`Fistname`, `Lastname`, `Contactnumber`,`Subject`) VALUES ('$FirstName','$LastName','$Contactnumber',`$Subject`);";
	echo $sql;
	$res = mysqli_query($con,$sql);
	if($res) 
	{
		session_start();
        $_SESSION["Buyer"] = $Email;
		header("location:Home.php");
	}
	else
	{
	// echo $FirstName;
	// echo $LastName; 
	// echo $Contactnumber;
	// echo $Subject;
	}

?>