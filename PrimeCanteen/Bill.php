<?php $activepage="Feedback";
include 'Header.php'?>

<!-- end of menu -->
<div id="banner">
    <div id="banner_section">
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
                <h2>Your Bill    User:<?php @session_start();
                    $uid=$_SESSION["id"];
                    echo$_SESSION["username"];?></h2>
                <div class="section_w590_content">
                    <p><?php
                        $con=mysql_connect("localhost","root","root");
                        if(!$con)
                        {
                            die("couldn't connect".mysql_error());
                        }
                        mysql_select_db("canteen",$con);

                        $result=mysql_query("select * from orderdetails where user_id='$uid'");
                        echo"<table border=1>
<tr>
<th>Item Name</th>
<th>Rate</th>
<th>Quantity</th>
<th>Amount</th>
<th>Total</th>";
                        while($row=mysql_fetch_array($result))
                        {
                            $id=$row['id'];
                            echo"<tr>";
                            echo"<td>".$row['item_name']."</td>";
                            echo"<td>".$row['rate']."</td>";
                            echo"<td>".$row['qty']."</td>";
                            echo"<td>".$row['amt']."</td>";
                            $a=$row['amt'];
                            $t=$t+$a;
                        echo"<td>".$t."</td>";
                        }

                        echo"</table>";
                        mysql_close($con);
                        ?>
                    </p>

                </div>
                <!-- end of main column -->

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
            Copyright amar </div>
    </div>
    <!-- end of container -->
</div>
</div>
</body>
</html>
