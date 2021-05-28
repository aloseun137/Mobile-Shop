<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(isset($_POST['deletebutton'])) {
            $item_id = $_POST['item_id'];
            $deletedItem = $cart->deleteCart($item_id);
        }
        if(isset($_POST['saveforlater'])) {
            $item_id = $_POST['item_id'];
            $cart->saveForLater($item_id);
        };
    }

 ?>
<!--shoping-cart-->
<section id="shoppingcart" class="py-3">
            <div class="container">
                <h5 class="font-baloo font-size-20">Shopping Cart</h5>
                <!--shoping-items--->
                <div class="row">
                    <div class="col-sm-9">
                        <?php


                            foreach($product->getData('cart') as $item):
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
                                                <div class="d-flex font-rale w-25">
                                                    <button class="qty-up border bg-light" data-id="<?php echo $item['item_id'] ?? '1' ?>"><span class="fas fa-angle-up"></span></button>
                                                    <input disabled class=" qty-input w-100 border text-center" data-id="<?php echo $item['item_id'] ?? '1' ?>" type="text" value="1">
                                                    <button class="qty-down border bg-light" data-id="<?php echo $item['item_id'] ?? '1' ?>"><span class="fas fa-angle-down"></span></button>

                                                </div>
                                                <form method="post">
                                                    <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? 0; ?>" id="item_id">
                                                    <button type="submit" name='deletebutton' class="btn font-baloo border-right text-danger">
                                                    Delete
                                                </button>
                                                </form>
                                                <form method='post'>
                                                    <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? 0; ?>" id="item_id">
                                                    <button type="submit" name='saveforlater' class="btn font-baloo text-danger">
                                                        Save For Later
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
                    <div class="col-sm-3">
                        <div class="sub-total text-center mt-2 border">
                            <h6 class="text-success font-size-12 font-rale py-3"><i class="fas fa-check"></i> Your order is eligible for FREE Delivery</h6>
                            <div class="border-top py-4">
                                <h5 class="font-baloo font-size-20">Subtotal(<?php echo isset($subTotal) ? count($subTotal) : 0 ?> items)&nbsp; <span class="text-danger">$&nbsp;<span class="text-danger" id="deal-price"><?php echo isset($subTotal) ? $cart->getSum($subTotal): '0';?></span></span></h5>
                                <button type="submit" class="btn font-baloo btn-warning mt-3">Proceed to Buy</button>
                            </div>
                        </div>

                    </div>
                </div>
                <!--/shoping-items--->
            </div>
        </section>
        <!--/shoping-cart--->