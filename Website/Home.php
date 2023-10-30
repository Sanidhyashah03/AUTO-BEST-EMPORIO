<!DOCTYPE html>
<html>
<head>
  <title>Home Page</title>
 

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

.header {
  padding: 80px;
  text-align: center;
  background: white;
  color: white;
}
  
.header h1{
  font-size: 40px;
}
.navbar {
  overflow: hidden;
  background-color: black;
}

.navbar a {
  float: left;
  display: block;
  color: darkgray;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}

.navbar a.right{
  float: right;
}

.navbar a:hover{
  background-color:black;
  color: red ;
  border-radius: 6px;
}
</style>
</head>
<body>
  <div class="navbar"><i class="fa-solid fa-cart-shopping-fast"></i>
		<P><a href="Home.php" class="left"><Font face="" color="black" size="100"><img src="22.png" width="80%"> </Font></P></a>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <a href="user_products.php"><font face="Cooper" color="White" size="5" >Products</font></a>
		  <a href="Contact.html"><font face="Cooper" color="White"size="5" >Contact</font></a>
		  <a href="About.php"><font face="Cooper" color="White" size="5" >About</font></a>
		  
		
		  <?php 
		session_start();
		if(isset($_SESSION["Buyer"])){
			?><a href="buyer_logout.php" class="right"><font face="Cooper" color="White" size="5" >Logout</font></a>
			<a href="shopping_cart.php"><font face="Cooper" color="White" size="5" >MyCart</font></a>
			<a href="MyOrders.php"><font face="Cooper" color="White" size="5" >MyOrders</font></a>
			<?php 
		}
		else{
			?>  <a href="login.html" class="right"><font face="Cooper" size="5">login</font></a>
			<a href="signup.html" class="right"><font face="Cooper" size="5">signup</font></a>
			<?php 
		}?>
		   
		</div>
<div class="header">
  <marquee direction="right" width="100%">

   
    <img src="image/42.jpg" width="30%">
    <img src="image/4.jpg" width="105%">
    <img src="image/1.jpg" width="58.2%">
    <img src="image/46.jpg" width="133%">
   
  </marquee>
</div>

<!--1-->
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
  background-color: lightgrey;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;

}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: skyblue;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color:orangered;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: skyblue;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: goldenrod;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>

<body>


<br>
<Br>
<div class="row">
  <div class="column">
    <div class="card">
    	<center>
      <img src="image/7.png" alt="Basket" style="width:50%">
  </center>
      <div class="container">
      	<center>
          <br>
       <p><font face="Times New Roman">		
       7D Designer Car Auto Seat Back Multi Pocket Storage Bag Organizer with Car Meal Tray</p></font></center>
<br>
       
      </div>
    </div>
  </div>


  <div class="column">
    <div class="card">
    	<center>
      <img src="image/5.png" alt="Armrest" style="width:73%">
  </center>
      <div class="container">
      	<center>
          <br>
        <font face="Times New Roman">Universal Armrest </font></center>
       <br>
      </div>
    </div>
  </div>
  
 
  <div class="column">
    <div class="card">
    	<center>
      <img src="image/11.png" alt="Battery Cables" style="width:93%"></center>
      <div class="container">
      	<center>
          <br>
        <font face="Times New Roman">500 AMP Booster Car Jumper Cable - 6 Ft</font>
    </center>
       <br>
      </div>
    </div>
  </div>
</div>


<div class="column">
    <div class="card">
    	<center>
      <img src="image/44.png" alt="Shark Fin Antena" style="width:80%"></center>
      <div class="container">
        <center>
          <br>
      	<font face="Times New Roman ">Shark Fin with radio signal antenna universal for all cars	</font></center>
       <br>
      
      </div>
    </div>
  </div>
</div>


<div class="column">
    <div class="card">
    	<center>
      <img src="image/15.png" alt="Towing Cable" style="width:82%">
  </center>
      <div class="container">
      	<center>
          <br>
      	<font face="Times New Roman">Mode Plastic cover for car </font></center>
        <br>
      </div>
    </div>
  </div>
</div>

<div class="column">
    <div class="card">
    	<center>
      <img src="image/32.png" alt="Massage Seat" style="width:80%">
      <center>
      <div class="container">
      	<center>
          <br>
        <font face="Times New Roman"> Car Wooden Bead Seat Cushion with Velvet Border </font></center>
      <br>
      </div>
    </div>
  </div>  
</div>
</body>
</html>


