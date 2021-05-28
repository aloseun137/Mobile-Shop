<?php
     require 'database/dbcontroller.php';
     require 'database/product.php';
     require 'database/cart.php';

     $db = new DBController();

     $product = new Product($db);

     $product_shuffle = $product->getData();

     $cart = new Cart($db);
     $arr = array(
          'user_id'=> 2,
          'item_id'=> 3
     );
    $itemIdArr = $cart->getItemid($product->getData('cart'));


?>