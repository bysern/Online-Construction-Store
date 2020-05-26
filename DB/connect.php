<?php



$user = 'root';
$pass = '';
$db = 'storedb';

$db = new mysqli('localhost', $user, $pass, $db) or die ("Unable to connect");


$sql ="CREATE TABLE IF NOT EXISTS Products
                   (id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                   product_name VARCHAR(25) NOT NULL,
                   product_price FLOAT,
                   product_image VARCHAR(100)
                    );";

            if(!mysqli_query($db, $sql)){
                echo "Error creating table: ".mysqli_error($this->con);
            } 
  
        
?>