<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(isset($_POST['deletebutton'])) {
            $item_id = $_POST['item_id'];
            $deletedItem = $cart->deleteCart($item_id, $table='wishlist');
        }

        if(isset($_POST['addtocart'])) {
            $item_id = $_POST['item_id'];
            $deletedItem = $cart->saveForLater($item_id, $saveTable = 'cart', $fromTable = 'wishlist');
        }
    };

 ?>
<!--shoping-cart-->
<section id="shoppingcart" class="py-3">
            <div class="container">
                <h5 class="font-baloo font-size-20">WishList</h5>
                <!--shoping-items--->
                <div class="row">
                    <div class="col-sm-9">
                        <?php


                            foreach($product->getData('wishlist') as $item):
                                $result = $product->getProduct($item['item_id']);
                                $subTotal[] = array_map(function($item){ ?>
                                    <div class="row border-top py-3 mt-3">
                                        <div class="col-sm-2">
                                            <img src="<?php echo $item['item_image']; ?>" alt="product1" class="img-fluid">
                                        </div>
                                        <div class="col-sm-8">
                                            <h5 class="font-baloo"><?php echo $item['item_name']; ?></h5>
                                            <small><?php echo $item['item_brand']; ?></small>
                                            <div class="d-flex">
                                                <div class="rating text-warning font-size-12">
                                                    <span><i class="fas fa-star"></i></span>
                                                    <span><i class="fas fa-star"></i></span>
                                                    <span><i class="fas fa-star"></i></span>
                                                    <span><i class="fas fa-star"></i></span>
                                                    <span><i class="far fa-star"></i></span>
                                                </div>
                                                <a href="" class="px-2 font-rale font-size-14">20.534 ratings | 1000+ answeredquestions</a>
                                            </div>
                                            <div class="d-flex pt-2">
                                                <form method="post">
                                                    <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? 0; ?>" id="">
                                                    <button type="submit" name='deletebutton' class="pl-0 btn font-baloo border-right text-danger">
                                                    Delete
                                                </button>
                                                </form>
                                                <form method='post'>
                                                    <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? 0; ?>" id="">
                                                    <button type="submit" name='addtocart' class="btn font-baloo text-danger">
                                                        Add To Cart
                                                    </button>
                                                </form>


                                            </div>

                                        </div>
                                        <div class="col-sm-2">
                                            <div class="font-size-20 text-danger font-baloo">
                                                <span class="product_price   float-right" data-id="<?php echo $item['item_id'] ?? '1' ?>"><?php echo $item['item_price']; ?></span>
                                            </div>
                                        </div>
                                    </div>



                        <?php  return $item['item_price']; }, $result);
                     endforeach; ?>
                    </div>
                    <!--subtotal--->
                    <!--/subtotal--->
                </div>
                <!--/shoping-items--->
            </div>
        </section>
        <!--/shoping-cart--->