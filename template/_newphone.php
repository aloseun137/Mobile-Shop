<?php
    shuffle($product_shuffle);

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['newphone_submit'])) {
            $item_id = $_POST['item_id'];
            $user_id = $_POST['user_id'];

            $cart->addToCart($user_id, $item_id);
        }

    }
?>
<!--New Phones-->
<section id="newphones">
            <div class="container">
                <h4 class="font-rubik font-size-20">New Phones</h4>
                <hr>
                 <!--owl-carousel-->
                <div class="owl-carousel owl-theme">
                    <?php foreach ($product_shuffle as $item) { ?>
                    <div class="item py-2">
                        <div class="product font-rale">
                            <a href="<?php printf('%s?item_id=%s', 'product.php', $item['item_id'])?>"><img src="<?php echo $item['item_image'] ?? "./assets/products/1.png";?>" alt="product1" class="img-fluid"></a>
                            <div class="text-center">
                                <h4><?php echo $item['item_name'] ?? "Unknown";?></h4>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>

                                </div>
                                <div class="price py-2">
                                    <span><?php echo $item['item_price'] ?? '0';?></span>
                                </div>
                                <form method="post">
                                    <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?>">
                                    <input type="hidden" name="user_id" value="<?php echo '1' ?>">
                                    <?php if(in_array($item['item_id'], $itemIdArr)){
                                        echo '<button disabled type="submit" name="newphone_submit" class="btn btn-success font-size-12">Item In Cart</button>';
                                    } else {
                                        echo '<button type="submit" name="newphone_submit" class="btn btn-warning font-size-12">Add To Cart</button>';
                                    }
                                    ?>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php }//closing foreach ?>
                </div>
                <!--/owl-carousel-->

            </div>
        </section>
        <!--/New Phones-->