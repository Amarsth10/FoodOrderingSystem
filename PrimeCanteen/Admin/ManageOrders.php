<?php
include 'Header.php';?>            <!-- end of menu -->
<script>

    function removeRow(button){
        var tr = button.parentElement.parentElement;
        var tbody = tr.parentElement;
        tbody.removeChild(tr);
    }
</script>
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
                <h2>FeedBack</h2>
                <div class="section_w590_content">
                    <div class="menu-item">
<?php
$con=mysql_connect("localhost","root","root");
if(!$con)
{
    die("couldn't connect".mysql_error());
}
mysql_select_db("canteen",$con);
$result=mysql_query("select * from orderdetails");
echo"<table border=1>
<tr>
<th>Item Name</th>
<th>Rate</th>
<th>Quantity</th>
<th>Order Complete</th>
";
while($row=mysql_fetch_array($result)) {
    $id = $row['id'];
    $uid = $row['User_id'];
    echo "<tr>";
    echo "<td>" . $row['item_name'] . "</td>";
    echo "<td>" . $row['rate'] . "</td>";
    echo "<td>" . $row['qty'] . "</td>";
    echo "<td><input type=\"checkbox\" value=\"Done\" onclick=''></td>";

}

echo"</table>";


mysql_close($con);
?>
                    </div>

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
