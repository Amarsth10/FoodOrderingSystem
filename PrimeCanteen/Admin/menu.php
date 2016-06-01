<?php
$numOfItems = 0;
if(isset($_POST["name"])){
    $numOfItems = sizeof($_POST["name"]);
}
if($numOfItems > 0) {
    $con=mysql_connect("localhost","root","root");
    if(!$con)
    {
        die("couldn't connect".mysql_error());
    }

    mysql_select_db("canteen",$con);
    for($i=0; $i < $numOfItems; $i++)
    {
        $name =  $_POST["name"][$i];
        $price =  $_POST["price"][$i];
        $qty =  $_POST["qty"][$i];

        $target_dir= "images/foods/";
        $fullpath = 'D:/software/phpclass/UniServerZ/www/PrimeCanteen/';
        $target_file= $target_dir . basename($_FILES["image"]["name"][$i]);
        $tmpname = $_FILES["image"]["tmp_name"][$i];
        if(move_uploaded_file($tmpname, $fullpath . $target_file)){
            echo"The File".basename($_FILES["image"]["name"][$i])."has been uploaded.";
        }
        else{
            die("Sorry, there was an error uploading your file.");
        }

        $image= $target_file;//$target_dir . basename($FILES["image"]["name"][$i],$imageFileType);
        echo $image;
        $sql = "insert into foods(name,price,qty,image)values('$name','$price','$qty','$image')";

        mysql_query($sql,$con);
    }

    mysql_close($con);
    header('location: admin.php');
}
?>