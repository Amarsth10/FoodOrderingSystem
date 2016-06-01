<?php

$con=mysql_connect("localhost","root","root");
if(!$con)
{
    die("couldn't connect".mysql_error());
}
mysql_select_db("canteen",$con);
$id= $_POST["fid"];
$name =  $_POST["name"];
$price = $_POST["price"];
$qty = $_POST["qty"];
$amt=$price * $qty;
$sql="insert into cartDetails(food_id,item_name,rate,qty,amt)values('$id','$name','$price','$qty','$amt')";
if(!mysql_query($sql,$con))
{
    die("Error".mysql_error());
}
header('location:Home.php');

mysql_close($con);
?>