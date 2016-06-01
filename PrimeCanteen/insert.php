<?php
$con=mysql_connect("localhost","root","root");
if(!$con)
{
    die("couldn't connect".mysql_error());
}
mysql_select_db("canteen",$con);
$sql="insert into users(fname,lname,sem,prog,roll,phn,b_time,username,password)values('$_POST[fname]','$_POST[lname]','$_POST[sem]','$_POST[prog]','$_POST[roll]','$_POST[phn]','$_POST[b_time]','$_POST[username]','$_POST[password]')";

if(!mysql_query($sql,$con))
{
    die("Error".mysql_error());
}
$_SESSION['log']="true";
header('location:Home.php');

mysql_close($con);
?>