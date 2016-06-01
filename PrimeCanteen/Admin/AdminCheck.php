<?php
$con=mysql_connect("localhost","root","root");
mysql_select_db("canteen",$con);
$valid=1;
$recall=1;
$a=True;
$username=$_POST['username'];
$password=$_POST['password'];
$result1=mysql_query("select username,password from users where IsAdmin='$a'");
while ($row1 = mysql_fetch_array($result1))
{
    $username1=$row1['username'];
    $password1=$row1['password'];
    if ((strcmp($username,$username1)==0) && (strcmp($password,$password1)== 0))
    {
        $valid=0;
        header('location:admin.php');
    }
}
if($valid==1)
{
    $recall=0;
    echo "<script>
                alert('not valid user');
              </script>";
    require('AdminLogin.php');
}
?>
