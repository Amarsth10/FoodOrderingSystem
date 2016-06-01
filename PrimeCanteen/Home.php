<?php $activepage = "Home";
include 'Header.php';
@session_start();
if($_SESSION['log']!="true"){
    header("index.php");
}
?>
<?php

if(isset($_SESSION["alert"])): ?>
    <script type="application/javascript">
        alert('<?php echo $_SESSION["alert"] ?>');
    </script>
    <?php
    unset($_SESSION["alert"]);
endif; ?>

<!-- end of menu -->
<div id="banner">
    <div id="banner_section">
        <h3 style="color: bisque">welcome <?php @session_start(); echo $_SESSION['username']; ?> !</h3>

        <h2>Welcome to Prime Gourmet </h2>

        <p>Your own college canteen.We provide you quality dishes at reasonable cost with great service</p>
    </div>
    <!-- banner section -->
</div>
<!-- end of banner -->
<div id="content_wrapper">
    <div id="content">
        <div id="main_column">
            <div class="cleaner_h50"></div>
            <div class="section_w590">
                <h2>Today's Menu</h2>

                <div class="section_w590_content">
                    <p></p>

                    <div class="cleaner_h20"></div>

                    <?php
                    $con = mysql_connect("localhost", "root", "root");
                    if (!$con) {
                        die("couldn't connect" . mysql_error());
                    }
                    mysql_select_db("canteen", $con);
                    $sql = "select * from foods";
                    $result1 = mysql_query($sql);
                    while ($row1 = mysql_fetch_array($result1)) {
                        $id = $row1[id];
                        $name = $row1[name];
                        $price = $row1[price];
                        $image = $row1[image];
                        ?>
                        <form name="add" method="post" action="add.php">
                            <div class="popular_meal_box"><center><img height="120" src="<?php echo $image; ?>" alt=""/></center>

                                <h3><input type="text" name="name" readonly="readonly" value="<?php echo $name; ?>"></h3>

                                <div class="price">
                                    <input type="hidden" name="fid" value="<?php echo $id;?>">
                                   Rs <input type="text" name="price" readonly="readonly" value=" <?php echo $price; ?>">
                                    <br> Quantity<input type="text" name="qty"></div>
                                <div class="button_01 fr"><input type="submit" value="Add"></div>
                            </div>
                        </form>
                    <?php
                    }
                    mysql_close($con);
                    ?>

                </div>
            </div>
        </div>
        <!-- end of main column -->
        <div id="side_column">
            <div class="side_column_section">
                <h4>Your Order</h4>
                <?php
                $con=mysql_connect("localhost","root","root");
                if(!$con)
                {
                    die("couldn't connect".mysql_error());
                }
                mysql_select_db("canteen",$con);
                @session_start();
                $uid=$_SESSION["id"];
                $result=mysql_query("select * from cartdetails");
echo"<table border=0>
<tr>
<td>Item</td>
<td>Rate</td>
<td>Qty</td>
<td>Amount</td>";
while($row=mysql_fetch_array($result))
{
    $id=$row['id'];
    echo"<tr>";
    echo"<td>".$row['item_name']."</td>";
    echo"<td>".$row['rate']."</td>";
    echo"<td>".$row['qty']."</td>";
    echo"<td>".$row['amt']."</td>";
}
echo"</table>";
mysql_close($con);
?>

                <div class="button_01 fr"><a href="order.php">ORDER</a></div>
                <div class="side_column_bottom"></div>
            </div>
            <!-- end of side column -->
            <div class="cleaner"></div>
        </div>
        <!-- end of content -->
        <div class="cleaner"></div>
        <div class="content_bottom"></div>
    </div>
    <!-- end of content wrapper -->
    <div id="footer">
        <ul class="footer_menu">
            <li><a href="index.php">Home</a></li>
            <li class="last_menu"><a href="Feedback.php">Feedback</a></li>
        </ul>
        Copyright amar
    </div>
</div>
<!-- end of container -->
</div>
</div>
</body>
</html>
