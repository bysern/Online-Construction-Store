<?php
    $db = mysqli_connect("localhost", "root", "","storedb") or die("Error connecting to database: ".mysqli_error());

     

?>

<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Search results</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
    <?php

$search_value = $_POST["search"];
$con = new mysqli('localhost', $user, $pass, $db) or die ("Unable to connect");
if($con->connect_error){
    echo 'Connection Faild: '.$con->connect_error;
    }else{
        $sql="select * from products where product_name like '%$search_value%'";

        $res=$con->query($sql);

        while($row=$res->fetch_assoc()){
            echo 'Product name:  '.$row["product_name"];


            }       

        }
?>
</body>

</html>