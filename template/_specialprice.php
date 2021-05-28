  <?php
    shuffle($product_shuffle);
    $brand = array_map(function($pro) {return $pro['item_brand'];}, $product_shuffle);
    $uniqueVal = array_unique($brand);
    $arrSort = sort($uniqueVal);

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['specialprice_submit'])) {
            $item_id = $_POST['item_id'];
            $user_id = $_POST['user_id'];

            $cart->addToCart($user_id, $item_id);
        }

    }

  ?>
  <!--/special-price-->
  <section id="special-price">
            <div class="container">
                <h4 class="font-rubik font-size-20">Special Price</h4>
                <div id="filter" class="button-group text-right font-baloo font-size-16">
                <button class="btn is-checked" data-filter="*">All Brands</button>
                <?php array_map(function ($item) {?>
                    <button class="btn" data-filter=".<?php echo $item; ?>"><?php echo $item; ?></button> <?php }, $uniqueVal)?>
                </div>

                <div class="grid">
                    <?php array_map(function ($item) use ($itemIdArr){?>
                        <div class="grid-item border <?php echo $item['item_brand'] ?? 'unknown'; ?>">
                        <div class="item py-2" style="width: 250px;">
                            <div class="product font-rale">
                                <a href="<?php printf('%s?item_id=%s', 'product.php', $item['item_id'])?>"><img src="<?php echo $item['item_image'] ?? 'unknown'; ?>" alt="product1" class="img-fluid"></a>
                                <div class="text-center">
                                    <h4><?php echo $item['item_name'] ?></h4>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>

                                    </div>
                                    <div class="price py-2">
                                        <span><?php echo $item['item_price'] ?></span>
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

                    </div> <?php }, $product_shuffle)?>

                </div>
            </div>
        </section>
        <!--/special-price-->