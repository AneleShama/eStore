<?php
    ob_start();
    //include header.php file
    include('header.php');

    //Include cart item if it not empty
    count($product->getData('cart')) ? include('Include/_cart.php'): include('Include/notFound/_cart_notFound.php');


    //Include cart item if it not empty
    count($product->getData('wishlist')) ? include('Include/_wishlist.php'): include('Include/notFound/_wishlist_notFound.php');

    //include footer.php file
    include('footer.php');
?>
