<!DOCTYPE html>
<html>
<head>
  <title>Products</title>
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
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}

.navbar a.right{
  float: right;
}

.navbar a:hover{
  background-color:black                
   color: black;
  border-radius: 6px;
}


</style>
</head>
<body>
<div class="navbar"><i class="fa-solid fa-cart-shopping-fast"></i>
<P><a href="Home.php"><Font face="" color="White" size="100"><img src="22.png" width="80%"> </Font></P></a>
<br>
<br>
<br>
<br>
<br>
<br> <br>
         <br>
         <br>
          <br>
  <a href="Contact.html"><font face="Cooper" size="5" >Contact</font></a>
  <a href="About.php"><font face="Cooper" size="5" >About</font></a>
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
<style>

/* CSS for All */
{
    margin: 0 0;
    padding: 0 0;
    font-family: Arial, Helvetica, sans-serif;
}
.container{
    width: 80%;
    margin: 0 auto;
    padding: 1%;
}
.img-responsive{
    width: 100%;
}
.img-curve{
    border-radius: 15px;
}

.text-right{
    text-align: right;
}
.text-center{
    text-align: center;
}
.text-left{
    text-align: left;
}
.text-white{
    color: white;
}

.clearfix{
    clear: both;
    float: none;
}

a{
    color: #ff6b81;
    text-decoration: none;
}
a:hover{
    color: #ff4757;
}

.btn{
    padding: 1%;
    border: none;
    font-size: 1rem;
    border-radius: 5px;
}
.btn-primary{
    background-color: grey;
    color: black;
    cursor: pointer;
}
.btn-primary:hover{
    color: white;
    background-color: #ff4757;
}
h2{
    color: #2f3542;
    font-size: 2rem;
    margin-bottom: 2%;
}
h3{
    font-size: 1.5rem;
}
.float-container{
    position: relative;
}
.float-text{
    position: absolute;
    bottom: 50px;
    left: 40%;
}
fieldset{
    border: 1px solid white;
    margin: 5%;
    padding: 3%;
    border-radius: 5px;
}



/* CSS for Categories*/
.categories{
    padding: 4% 0;
}

.box-3{
    width: 28%;
    float: left;
    margin: 2%;
}


/* CSS for Food Menu */
.food-menu{
    background-color: #ececec;
    padding: 4% 0;
}
.food-menu-box{
    width: 43%;
    margin: 1%;
    padding: 2%;
    float: left;
    background-color: black;
    border-radius: 15px;
}

.food-menu-img{
    width: 20%;
    float: left;
}

.food-menu-desc{
    width: 70%;
    float: left;
    margin-left: 8%;
}

.food-price{
    font-size: 1.2rem;
    margin: 2% 0;
}
.food-detail{
    font-size: 1rem;
    color: #747d8c;
}


</style>
<?php 
                $con = mysqli_connect('localhost','root','');
                $select_db = mysqli_select_db($con,'auto best emporio');
                $query = "select * from `product master`;";
                $data = mysqli_query($con,$query);
                if($data){
                    while($product = mysqli_fetch_array($data))
                    {
                ?>
 <div class="food-menu-box">
                <div class="food-menu-img">
                <?php 
              echo '<img src="data:image/*;base64,'.base64_encode($product['Product_img']).'" height="150" width="150"/>'; ?>                </div>
                <div class="food-menu-desc">
                    <h2><?php echo $product[1]; ?></h2>
                    <p class="food-price">Rupees-<?php echo $product[2]; ?>-/</p>
                    <p class="food-detail">
                    <?php echo $product[4]; ?> 
                    </p>
                    <br>
                    <form action="add_shopping_cart.php" method="post">

                    <input type="hidden" value="<?php echo $product[1] ?>" name="order_name">
                    <input type="hidden" value="<?php echo $product[0] ?>" name="order_data">
                    <input type="hidden" value="<?php echo $product[2] ?>" name="order_price">
                    <input type="hidden" value=1 name="order_quantity">
                     
                    <button type="submit" class="btn btn-primary" >Order Now</button>
                    </form>
                    </div>
     </div>
    <?php
                }
                }
    ?>
</body> 
</html>