    <?php

        include 'header.php';
    ?>

    <?php
    count($product->getData('cart'))?include 'template/_shoppingcart.php': include 'template/notfound/cartnotfound.php';

    count($product->getData('wishlist'))? include 'template/_wishlist.php': include 'template/notfound/wishlistnotfound.php';

    ?>

    <?php
    include 'footer.php';
    ?>