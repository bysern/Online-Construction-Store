<?php

function component($productname, $productprice, $productimage, $productid, $productdescription){
    $element = "
    <div class='col-md-4 col-sm-7 my-3 my-md-0'>
    <form action='index.php' method='post'>
        <div class='card shadow'>
            <div>
                <img src='$productimage' alt='ProductImage' class='img-fluid card-img-top'>
            </div>
            <div class='card-body'>
                <h5 class='card-title'>$productname</h5>
                <h6>
                    <i class='fas fa-star'></i>
                    <i class='fas fa-star'></i>
                    <i class='fas fa-star'></i>
                    <i class='far fa-star'></i>
                    <i class='far fa-star'></i>
                </h6>
                <p class='card-text'>
                    $productdescription
                </p>
                <h5>
                    <small><s class='text-secondary'>239$</s></small>
                    <span class='price'>$productprice$</span>
                </h5>
                <button type='submit' name='add' formaction='#' class='btn btn-warning my-3'>Add to cart <i
                        class='fas fa-shopping-cart'></i></button>
                <input type= 'hidden' name= 'product_id' value='$productid'>
            </div>
        </div>
    </form>
</div>
    ";
    echo $element;
}




function cartElement($productimg, $productname, $productprice, $productid){

$element="
<form action='cart.php?action=remove&id=$productid' method='post' class='cart-items'>
                        <div class='border rounded'>
                            <div class='row bg-white'>
                                <div class='col-md-3'>
                                    <img src='$productimg' alt='product' class='img-fluid'>
                                </div>
                                <div class='col-md-6'>
                                    <h5 class='pt-2'>$productname</h5>
                                    <small class='text-secondary'>Seller: dailytuition</small>
                                    <h2 class='pt-2'>$productprice$</h2>
                                    <button type='submit' class='btn btn-warning'>Save for later</button>
                                    <button type='submit' class='btn btn-danger' name='remove'>Remove</button>
                                </div>
                                <div class='col-md-3 py-5'> </div>
                                <div>
                                    <input type='number' min='0' max = '10' id='number' value='1' class='form-control w-35 d-inline'>

                                </div>
                            </div>
                        </div>
                    </form>
";
echo $element;



}









?>