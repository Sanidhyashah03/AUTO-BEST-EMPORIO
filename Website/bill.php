<html>
    <head>
        <title>BILL</title>
    </head>
    <body>
        <center>
            <h1>Invoice</h1>
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
                    echo "<h3>Name: ".$rs[1].$rs[2]."</h3>";
                    echo "<h3>Contact No: ".$rs[4]."</h3>";
                    echo "<h3>Date :".date('d-m-y')."</h3>";
                }
            }
            ?>
            <table border="3px">
                <tr>
                    <th>&nbsp;&nbsp;&nbsp;&nbsp;Product&nbsp;&nbsp;&nbsp;&nbsp;</th>
                    <th>&nbsp;&nbsp;&nbsp;&nbsp;Quantity&nbsp;&nbsp;&nbsp;&nbsp;</th>
                    <th>&nbsp;&nbsp;&nbsp;&nbsp;Price&nbsp;&nbsp;&nbsp;&nbsp;</th>
                </tr>
                <tr>
                    <?php 
                    $query1 = "select * from `user` where user_email = '$Email';";
                    $res_em = mysqli_query($con,$query1);
                    if($res_em){
                        while($B_data = mysqli_fetch_array($res_em)){
                            $Buyer_id = $B_data[0];
                        }
                    }

                    $orderQuery = "SELECT * from shopping_cart where B_id=$Buyer_id;";
                    $resOrder = mysqli_query($con,$orderQuery);
                    if($resOrder){
                        $totalAmt = 0;
                        while($rsOrder = mysqli_fetch_array($resOrder)){
                            echo "<td>".$rsOrder[2]."</td>";
                            echo "<td>".$rsOrder[3]."</td>";
                            $pro_price = $rsOrder[3]*$rsOrder[4];
                            $totalAmt = $totalAmt + $pro_price;
                            echo "<td>".$pro_price."</td>";
                        }?>
                </tr>
                <tr>
                    <th>Total Amount</th>
                    <td colspan="2"><?php echo $totalAmt; ?></td>
                </tr>
                <?php } ?>
            </table>
        </center>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
------------------------------------------------------------------------------------------------------------------------------------------------------------------       
<button onclick="window.print();" class="btn btn-primary">Print</button>
<a href="cleanup.php"><button>DONE</button></a>
            
    </body>
</html>