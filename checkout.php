<?php
    include('includes/header.php');

    require_once('DB/connect.php');
    session_start();
?>



<form action="checkout.php" method="post" class="m-5">
    <p>
        <label for="firstName">First Name:</label>
        <input type="text" name="first_name" id="first_name">
    </p>
    <p>
        <label for="lastName">Last Name:</label>
        <input type="text" name="last_name" id="lastName">
    </p>
    <p>
        <label for="address">Address:</label>
        <input type="text" name="address" id="address">
    </p>
    <p>
        <label for="emailAddress">Email Address:</label>
        <input type="text" name="email" id="email">
    </p>
    <input type="submit" value="Submit and pay">
</form>

<?php
if(isset($_SESSION['cart'])){

    $product_id = array_column($_SESSION['cart'],'product_id');
if(isset($_REQUEST['first_name'])){
$first_name = mysqli_real_escape_string($db, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($db, $_REQUEST['last_name']);
$address = mysqli_real_escape_string($db, $_REQUEST['address']);
$email = mysqli_real_escape_string($db, $_REQUEST['email']);
$product_id = array_column($_SESSION['cart'], 'product_id');

 $serialized_ids = serialize($product_id);

 print_r($product_id);
// Attempt insert query execution
$sql = "INSERT INTO orders (client_fname, client_lname, client_address, client_email, product_id) VALUES ('$first_name', '$last_name','$address' ,'$email', '$serialized_ids')";
if(mysqli_query($db, $sql)){
    echo "<script>alert('Order made.')</script>";
    session_destroy();
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}
}
}else {echo "ERROR: no items in cart. ";}

?>

</body>


</html>