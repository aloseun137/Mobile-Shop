
<!--shoping-cart-->
<section id="shoppingcart" class="py-3">
            <div class="container">
                <h5 class="font-baloo font-size-20">Shopping Cart</h5>
                <!--shoping-items--->
                <div class="row">
                    <div class="col-sm-9">
                                            <!--empty cart--->
                    <div class="row border-top py-3 mt-3">
                        <div class="col-sm-12 text-center py-2">
                            <img src="./assets/blog/empty_cart.png" alt="Empty cart" class="img-fluid", style="height:200px" >
                            <h2 class="font-baloo font-size-20 text-black">Your Cart is Empty</h2>
                        </div>
                    </div>
                    <!--/empty cart--->
                    </div>

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