<?php
$con=mysql_connect("localhost","root","root");
if(!$con)
{
    die("couldn't connect".mysql_error());
}
mysql_select_db("canteen",$con);
    $sql = "Truncate table foods";

if(!mysql_query($sql,$con))
{
    die("Error".mysql_error());
}
header('location:DeleteItem.php');
mysql_close($con);
?>