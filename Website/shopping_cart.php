<!doctype html>
                        <html>
                            <head>
                                <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <title>Shopping Cart</title>
                                <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
                                <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
                                <style>body {
    background-image: url('22.png');
    min-height: 100vh;
    vertical-align: middle;
    display: flex;
    font-family: sans-serif;
    font-size: 0.8rem;
    font-weight: bold
}

.title {
    margin-bottom: 5vh
}

.card {
    margin: auto;
    max-width: 950px;
    width: 90%;
    box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    border-radius: 1rem;
    border: transparent
}

@media(max-width:767px) {
    .card {
        margin: 3vh auto
    }
}

.cart {
    background-color: #fff;
    padding: 4vh 5vh;
    border-bottom-left-radius: 1rem;
    border-top-left-radius: 1rem
}

@media(max-width:767px) {
    .cart {
        padding: 4vh;
        border-bottom-left-radius: unset;
        border-top-right-radius: 1rem
    }
}

.summary {
    background-color: #ddd;
    border-top-right-radius: 1rem;
    border-bottom-right-radius: 1rem;
    padding: 4vh;
    color: rgb(65, 65, 65)
}

@media(max-width:767px) {
    .summary {
        border-top-right-radius: unset;
        border-bottom-left-radius: 1rem
    }
}

.summary .col-2 {
    padding: 0
}

.summary .col-10 {
    padding: 0
}

.row {
    margin: 0
}

.title b {
    font-size: 1.5rem
}

.main {
    margin: 0;
    padding: 2vh 0;
    width: 100%
}

.col-2,
.col {
    padding: 0 1vh
}

a {
    padding: 0 1vh
}

.close {
    margin-left: auto;
    font-size: 0.7rem
}

img {
    width: 3.5rem
}

.back-to-shop {
    margin-top: 4.5rem
}

h5 {
    margin-top: 4vh
}

hr {
    margin-top: 1.25rem
}

form {
    padding: 2vh 0
}

select {
    border: 1px solid rgba(0, 0, 0, 0.137);
    padding: 1.5vh 1vh;
    margin-bottom: 4vh;
    outline: none;
    width: 100%;
    background-color: rgb(247, 247, 247)
}

input {
    border: 1px solid rgba(0, 0, 0, 0.137);
    padding: 1vh;
    margin-bottom: 4vh;
    outline: none;
    width: 100%;
    background-color: rgb(247, 247, 247)
}

input:focus::-webkit-input-placeholder {
    color: transparent
}

.btn {
    background-color: #000;
    border-color: #000;
    color: white;
    width: 100%;
    font-size: 0.7rem;
    margin-top: 4vh;
    padding: 1vh;
    border-radius: 0
}

.btn:focus {
    box-shadow: none;
    outline: none;
    box-shadow: none;
    color: white;
    -webkit-box-shadow: none;
    -webkit-user-select: none;
    transition: none
}

.btn:hover {
    color: white
}

a {
    color: black
}

a:hover {
    color: black;
    text-decoration: none
}

#code {
    background-image: linear-gradient(to left, rgba(255, 255, 255, 0.253), rgba(255, 255, 255, 0.185)), url("https://img.icons8.com/small/16/000000/long-arrow-right.png");
    background-repeat: no-repeat;
    background-position-x: 95%;
    background-position-y: center
}</style>
                                </head>
                                <body oncontextmenu='return false' class='snippet-body'>
                                <?php 
session_start();
if(! isset($_SESSION["Buyer"])){
  header("Location: login.html");
}?>

                                <div class="card">
    <div class="row">
        <div class="col-md-8 cart">
            <div class="title">
                <div class="row">
                    <div class="col">
                        <h4><b>Shopping Cart</b></h4>
                    </div>
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
                        $quan_query = "select * from shopping_cart where B_id = $Buyer_id;";
                        $res_quan = mysqli_query($con,$quan_query);
                        if($res_quan){
                            global $QUAN;
                            $QUAN = 0;
                            while($quan_data = mysqli_fetch_array($res_quan)){
                                $QUAN = $QUAN + 1;
                            }
                        
                    ?>
                    <div class='col align-self-center text-right text-muted'><?php echo $QUAN;?>items</div>
                    <?php } ?>
                </div>
            </div>
            
            <div class="row border-top border-bottom">
            <?php $query="select * from shopping_cart where B_id = $Buyer_id;"; 
                        $query_order = mysqli_query($con,$query);
                        if($query_order){
                            while($data = mysqli_fetch_array($query_order)){
                        ?>
                <div class="row main align-items-center">
                
                    <div class="col-2"></div>
                    <div class="col">
                        
                        <div class="row"><?php echo $data[2]; ?></div>
                        
                    </div>
                    <form action="update_product_order.php" method="post"> 
                    <input type="hidden" value='<?php echo $data[1]; ?>' name="product_id">
                    <input type="hidden" value='<?php echo $Buyer_id; ?>' name="buyer_id">
                    <div class="col"> <input type="number" name="order_quantity" value=<?php echo $data[3]; ?>>    </div>
                    <button type="submit" value="confirm quantity"> Confirm Quantity</button>
                    </form>
                    
                    <div class="col"><?php echo $data[4]; ?><span class="close">
                        <a href="remove_from_cart.php?P_id=<?php echo $data[1]; ?>&B_id=<?php echo $data[0]; ?>">&#10005</a>
                    </span></div>
        
                </div>
                <?php }
            } ?>
            </div>
            
            <div class="back-to-shop"><a href="user_products.php">&leftarrow;<span class="text-muted">Back to shop</span></a></div>
        </div>
        <div class="col-md-4 summary">
            <div>
                <h5><b>Summary</b></h5>
            </div>
            <hr>
            <div class="row">
                <div class="col" style="padding-left:0;"><?php $quan_query = "select * from shopping_cart where B_id = $Buyer_id;";
                        $res_quan = mysqli_query($con,$quan_query);
                        if($res_quan){
                            global $QUAN;
                            $QUAN = 0;
                            while($quan_data = mysqli_fetch_array($res_quan)){
                                $QUAN = $QUAN + 1;
                            }
                            echo "ITEMS: ".$QUAN;
                        }?>
            </div><br>
            <?php   $queryS="select * from shopping_cart where B_id = $Buyer_id;"; 
                    $query_orderS = mysqli_query($con,$queryS);
                    if($query_orderS){
                       $total_price = 250;
                        while($dataS = mysqli_fetch_array($query_orderS)){
        
                    ?>
            <div class="row">
                <p><?php echo $dataS[2].":".$dataS[3]; ?>pcs</p>
                <?php $pro_price = $dataS[3]*$dataS[4]; 
                $total_price = $total_price + $pro_price;
                ?>
                <div class="col text-right">₹ <?php echo $pro_price; ?></div>
            </div>
            <?php }
            } ?>
            <div class="row">
                <p>Delivery Charge</p>
                <div class="col text-right">₹ 250</div>
            </div>
            <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                <div class="col">TOTAL PRICE</div>
                <div class="col text-right">₹ <?php echo $total_price; ?></div>
            </div> 

            <a href="Checkout.php" style="text-decoration: none;"><button onclick="confirm('Are you sure you want to place this order?')" class="btn" >--CHECKOUT--</button></a>
            

        </div>
    </div>
</div>

                                <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
                                <script type='text/javascript' src=''></script>
                                <script type='text/javascript' src=''></script>
                                <script type='text/Javascript'></script>
                                </body>
                            </html>