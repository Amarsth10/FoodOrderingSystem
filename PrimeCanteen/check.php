<?php
@session_start();

$con=mysql_connect("localhost","root","root");
mysql_select_db("canteen",$con);
$valid=1;
$recall=1;
$un=$_POST['username'];
$pass=$_POST['password'];
$result1=mysql_query("select username, password, id from users where username='$un' AND password = '$pass'");
if(mysql_num_rows(($result1)) > 0) {
    while ($row1 = mysql_fetch_array($result1)) {
        $valid = 0;
        $_SESSION['username'] = $un;
        $_SESSION['id'] = $row1['id'];
        $_SESSION['log']="true";
        header('location:Home.php');
        die;
    }
}
if($valid==1)
{
    $recall=0;
    echo "<script>
                alert('not valid user');
              </script>";
    require('index.php');
}
?>
