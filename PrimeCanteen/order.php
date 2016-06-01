<?php

$con=mysql_connect("localhost","root","root");
if(!$con)
{
    die("couldn't connect".mysql_error());
}
mysql_select_db("canteen",$con);
@session_start();
$uid=$_SESSION["id"];
$result1=mysql_query("select * from cartdetails");
while($row1=mysql_fetch_array($result1))
{
    $fid=$row1['food_id'];
    $name =$row1['item_name'];
    $rate=$row1['rate'];
    $price = $row1['price'];
    $qty = $row1["qty"];
    $amt=$row1['amt'];
    $sql1="insert into orderDetails(food_id,item_name,rate,qty,amt,User_id)values('$fid','$name','$rate','$qty','$amt','$uid')";
    if(!mysql_query($sql1,$con))
    {
        die("Error".mysql_error());
    }

}
$result=mysql_query("select * from orderdetails where User_id='$uid'");
while($row=mysql_fetch_array($result))
{
    $id=$row['id'];
    $a=$row['amt'];
    $total=0;
    $total=$total+$a;
    $sql="insert into orders (total,user_id)values('$total','$uid')";
    if(!mysql_query($sql,$con))
    {
        die("Error".mysql_error());
    }

}

header('location:Bill.php');
$delete=mysql_query("Truncate table cartdetails");
if(!mysql_query($delete,$con))
{
    die("Error".mysql_error());
}
die("hello");


mysql_close($con);
?>