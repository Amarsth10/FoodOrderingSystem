<?php
$con=mysql_connect("localhost","root","root");
if(!$con)
{
    die("couldn't connect".mysql_error());
}
mysql_select_db("canteen",$con);

    $sql = "delete from foods where name='$name'";

if(!mysql_query($sql,$con))
{
    die("Error".mysql_error());
}
header('location:DeleteItem.php');
mysql_close($con);
?>