<!DOCTYPE html>
<html>
<head>
	<title>About</title>
</head>
<body>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

.header {
  padding: 80px;
  text-align: center;
  background: black;
  color: black;
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
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}

.navbar a.right{
  float: right;
}

.navbar a:hover{
  background-color:black;
  color: red;
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
		 <Br>
		 <Br>
		 <br> 
		 <br>
		 <br>
		 <br>
		 <br>
		  <a href="Contact.html"><font face="Cooper" size="5" >Contact</font></a>
		 <a href="user_products.php"><font face="Cooper" size="5" >Products</font></a>
		
		  <?php 
		session_start();
		if(isset($_SESSION["Buyer"])){
			?><a href="buyer_logout.php" class="right"><font face="Cooper" size="5" >Logout</font></a>
			<a href="shopping_cart.php"><font face="Cooper" size="5" >MyCart</font></a>
			<a href="MyOrders.php"><font face="Cooper" size="5" >MyOrders</font></a>
			<?php 
		}
		else{
			?>  <a href="login.html" class="right"><font face="Cooper" size="5">login</font></a>
			<a href="signup.html" class="right"><font face="Cooper" size="5">signup</font></a>
			<?php 
		}?>
		   
		</div>
</div>
	
		
	</table>
		<!--end header-->
		
	<!--start header -->
	
	
	<!--start header -->
	
	<!--end header -->
	<table id="header" border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="white">
		<tr>
			<td>
				<table border="0" width="85%" cellpadding="0" cellspacing="0" align="center">
					<tr>
						<td height="100" align="center" valign="middle" colspan="2" >
							<font face="arial" color="black" size="6">
							</font>
							
						</td>
					</tr>
					<tr>
						<td width="50%">
							<img src="image/50.jpg" width="450" height="250">
							<br>
							<br>
							<br>
							<br>
							<br>
							<img src="image/8.jpg" width="450" height="300">
							<br>
							<br>
							<br>
							<br>
							<br>
							<br>
							<img src="image/10.jpg" width="450" height="400">
							<br>
						</td>
						<td width="50%">
							<font face="arial" color="black" size="4">
							<h2><h2>
							<br>					
							<font face="arial" color="black" size="4">
	<h3>Welcome  to Auto Best Emperio</h3>							
We sell car products to style up your car
Autobest emperio is now a household name in India.
 The Company was established in 2020 with a mission to transform the auto accessories market in India.
 With an aim of offering premium auto accessories to auto lovers right from the comfort of their home,
 the Company started it's manufacturing unit for making high quality products ranging from interiors to exteriors of almost every car brand. 
 <br>
 <br>
Since 2020, the Company has been striving to deliver top performance products with a variety to accommodate and fulfill every customer's requirement.
 Since the foundation, Autobest emperio has not only gained extensive presence but also intense experience in manufacturing high quality products.
 <br>
 <br>
The motto of the Company is to offer defect-free products with zero complaints from customers.
 Also, it strives to meet the customer's requirement and expectations by ensuring though quality checks in place. 
The Company firmly believes in customer satisfaction, thus, doesn't compromise when it comes to quality of products. 
With equally excellent infrastructure ensuring high end production of auto accessories and products, Autobest emperio has been maintaining global standards
 and getting acceptance and love from quality conscious clients across the country.
<br>
<br>
Our Car Products Makes you happy¦Deeply!
<br>
<br>
With a technology driven plant, the Company manufactures premium and high quality auto accessories including car seat covers,
 body covers, interior accessories, exterior accessories. With equally excellent infrastructure ensuring high end production of auto accessories and products,
 Autobest emperio has been maintaining global standards and getting acceptance and love from quality conscious clients across the country.


						</font>
						</h3>	
					</tr>
				</table>
				<br>
				<Br>
				
</body>
</html>