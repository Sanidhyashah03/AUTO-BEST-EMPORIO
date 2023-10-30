<?php 
            session_start();
            if(! isset($_SESSION["Buyer"])){
            header("Location: login.html");
            }?>
            <?php 
            $con = mysqli_connect('localhost','root','');
            $select_db = mysqli_select_db($con,'auto best emporio');
            $Email = $_SESSION['Buyer'];
            $query = "select * from `user` where user_email = '$Email';";
            $res = mysqli_query($con,$query);
            if($res){
                while($rs = mysqli_fetch_array($res)){
                    $Buyer_id = $rs[0];
                }
            }
            ?>

<?php 
    $delQuery = "DELETE from shopping_cart where B_id=$Buyer_id;";
    $delRes = mysqli_query($con,$delQuery);
    if($delQuery){
        header('Location: user_products.php');
    }
?>