<?php
    session_start();
    include('includes/header.php');

    include('includes/component.php');

    require_once('DB/connect.php');

    if (isset($_POST['remove'])){
        if($_GET['action'] == 'remove'){
            foreach($_SESSION['cart'] as $key => $value){
                if($value['product_id'] == $_GET['id']){
                    unset($_SESSION['cart'][$key]);
                    echo "<script> alert('Product has been removed!') </script>";
                    echo "<script> windown.location = 'cart.php' </script>";

                }
            }
        }
    }
?>

<div class="container-fluid">
    <div class="row px-5">
        <div class="col-md-7">
            <div class="shopping-cart">
                <h6 class="py-3">Mycart
                </h6>


                <?php   
                   $total = 0;

                    if(isset($_SESSION['cart'])){

                    $product_id = array_column($_SESSION['cart'],'product_id');

                    $sql = "SELECT * FROM products";
                    $result = mysqli_query($db, $sql);
                    
                    while($row = mysqli_fetch_assoc($result)){
                        foreach($product_id as $id){
                            if($row['id'] == $id){
                                cartElement($row['product_image'], $row['product_name'], $row['product_price'], $row['id']);
                                $total = $total + (int)$row['product_price'];
                            }
                        }
                    }
                }else{
                    echo"<h5>Cart is Empty</h5>";
                }
                    ?>

                <div class="col-md-8 offset-md-1 border rounded bg-white h-25">
                    <div class="pt-4">
                        <h6>PRICE DETAILS
                            <hr>
                            <div class="row price-details">
                                <div class="col-md-6">
                                    <?php 
                                        if(isset($_SESSION['cart'])){
                                            $count = count($_SESSION['cart']);
                                            echo "<h6>Price ($count items)</h6>";
                                        }else{
                                            echo "<h6>Price (0 items)</h6>";
                                        }
                                    ?>
                                    <h6>Deliver charges</h6>
                                    <hr>
                                    <h6>Amount Payable</h6>
                                </div>
                                <div class="col-md-6">
                                    <h6>
                                        <?php echo $total; ?>$
                                        <h6 class="text-success">FREE</h6>
                                        <HR>
                                        </HR>
                                        <h6>
                                            <?php echo $total;   ?>$

                                        </h6>
                                    </h6>
                                </div>
                                <a href="./checkout.php">
                                    <button class="btn-warning border rounded px-3">CHECKOUT</button>
                                </a>
                            </div>
                        </h6>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>


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