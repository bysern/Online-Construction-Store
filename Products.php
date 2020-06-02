<?php

    //Start session
    session_start();

    include('includes/header.php');
    include('includes/component.php');

    require_once('DB/connect.php');

    if (isset($_POST['add'])){
        /// print_r($_POST['product_id']);
        if(isset($_SESSION['cart'])){
    
            $item_array_id = array_column($_SESSION['cart'], 'product_id');
    
            if(in_array($_POST['product_id'], $item_array_id)){
                echo "<script>alert('Product is already added in the cart..!')</script>";
                echo "<script>window.location = 'index.php'</script>";
            }else{
    
                $count = count($_SESSION['cart']);
                $item_array = array(
                    'product_id' => $_POST['product_id']
                );
    
                $_SESSION['cart'][$count] = $item_array;
            }
    
        }else{
    
            $item_array = array(
                    'product_id' => $_POST['product_id']
            );
    
            // Create new session variable
            $_SESSION['cart'][0] = $item_array;
            //print_r($_SESSION['cart']);
        }
    }

?>

<section id="products">
    <div class="container">
        <form action="" method="post">
            <input type="text" name="search">
            <input type="submit" name="submit" value="Search">

        </form>
        <?php

    if(isset($_POST['submit'])){

        $search_value = $_POST["search"];

    if($db->connect_error){
    echo 'Connection Faild: '.$db->connect_error;
    }else{
        $sql="select * from products where product_name like '%$search_value%'";

        $res=$db->query($sql);

        if (mysqli_num_rows($res) > 0) {
            while($row=$res->fetch_assoc()){
              echo "Product found: </td><td>".$row['product_name']."</td></tr>";
            }
          }else{
              echo "No products Found<br><br>";
             }
            }       

        }
    
?>
        <div class="row text-center py-5">
            <?php 
            $sql = "SELECT * FROM products";
            $result = mysqli_query($db, $sql);
            

            while($row = mysqli_fetch_assoc($result)){
                component($row['product_name'], $row['product_price'],
                $row['product_image'], $row['id'], $row['product_description']);
            }
            
            ?>
        </div>


    </div>

</section>



<script src="scripts/script.js"></script>
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
</script>
</body>

</html>