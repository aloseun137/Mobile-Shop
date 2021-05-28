<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['product_submit'])) {
            $item_id = $_POST['item_id'];
            $user_id = $_POST['user_id'];

            $cart->addToCart($user_id, $item_id);
        }

    }
    $item_id = $_GET['item_id'] ?? 1;
    foreach ($product->getData() as $item):
    if($item['item_id'] == $item_id): ?>

<!--product-->
<section id="product" class="py-3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="<?php echo $item['item_image'] ?? './assets/products/1.png' ?>" alt="product" class="img-fluid">
                        <div class="form-row pt-4 font-size-16 font-baloo">
                            <div class="col">
                                <button type="submit" class="btn btn-danger form-control">Proceed to Buy</button>
                            </div>

                            <div class="col">
                                <form method="post">
                                        <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?>">
                                        <input type="hidden" name="user_id" value="<?php echo '1' ?>">
                                        <?php if(in_array($item['item_id'], $itemIdArr)){
                                        echo '<button  disabled type="submit" class="btn btn-success form-control">In Cart</button>';
                                    } else {
                                        echo '<button type="submit" name="product_submit" class="btn btn-warning form-control">Add To Cart</button>';
                                    }
                                    ?>
                                </form>


                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 py-5">
                        <h5 class="font-baloo font-size-20"><?php echo $item['item_name'] ?? 'unknown' ?></h5>
                        <small>by <?php echo $item['item_brand'] ?? 'unknown' ?></small>
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
                        <hr class="m-0">
                         <!--product price-->
        <table class="my-3">
            <tr class="font-rale font-size-14">
                <td>M.R.P</td>
                <td><strike>$1600.00</strike></td>
            </tr>
            <tr class="font-rale font-size-14">
                <td>Deal Price</td>
                <td class="font-size-20 text-danger"><?php echo $item['item_price'] ?? 0 ?> <span><small class="text-dark font-size-12">inclusive of all tax</small></span></td>
            </tr>
            <tr class="font-rale font-size-14">
                <td>You Save</td>
                <td><span class="font-size-16 text-danger">$152.00</span></td>
            </tr>
        </table>
        <!--/product price-->

        <!--policy-->
        <div id="policy">
            <div class="d-flex">
                <div class="return text-center mr-5">
                    <div class="font-size-20 my2 color-second">
                        <span class="fas fa-retweet border p-3 rounded-pill"></span>
                    </div>
                    <a href="" class="font-rale font-size-12">10 Days <br>Replacement</a>
                </div>
                <div class="return text-center mr-5">
                    <div class="font-size-20 my2 color-second">
                        <span class="fas fa-truck border p-3 rounded-pill"></span>
                    </div>
                    <a href="" class="font-rale font-size-12">Daily Tution <br>Delivered</a>
                </div>
                <div class="return text-center mr-5">
                    <div class="font-size-20 my2 color-second">
                        <span class="fas fa-check border p-3 rounded-pill"></span>
                    </div>
                    <a href="" class="font-rale font-size-12">1 year<br>Warranty</a>
                </div>
            </div>
        </div>
        <!--/policy-->
        <hr>
        <!--order details-->
        <div id="order-details" class="font-rale d-flex flex-column text-dark">
            <small>Delivery by Mar 24 - Apr 10</small>
            <small>Sold by <a href="">Daily Electronics</a></small>
            <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Deliver to Customer 121201</small>
        </div>
        <!--/order details-->
        <div class="row">
            <div class="col-6">
                <div class="color my-3">
                    <div class="d-flex justify-content-between">
                        <h6 class="font-baloo">Color</h6>
                    <div class="p-2 color-yellow-bg rounded-circle"><button class="btn font-size-14"></button></div>
                    <div class="p-2 color-primary-bg rounded-circle"><button class="btn font-size-14"></button></div>
                    <div class="p-2 color-second-bg rounded-circle"><button class="btn font-size-14"></button></div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="qty d-flex">
                    <h4 class="font-baloo">Qty</h4>
                    <div class="px-4 d-flex font-rale">
                        <button class="qty-up border bg-light"><span class="fas fa-angle-up"></span></button>
                        <input disabled class=" qty-input w-50 border text-center" type="text" value="1">
                        <button class="qty-down border bg-light"><span class="fas fa-angle-down"></span></button>

                    </div>
                </div>
            </div>
        </div>
        <!--size-->
        <div class="size my-3">
            <h6 class="font-baloo">
                <div class="d-flex justify-content-between w-75">
                    <div class="font-rubik border p-2">
                        <button class="btn p-0 font-size-14">4GB RAM</button>
                    </div>
                    <div class="font-rubik border p-2">
                        <button class="btn p-0 font-size-14">8GB RAM</button>
                    </div>
                    <div class="font-rubik border p-2">
                        <button class="btn p-0 font-size-14">16GB RAM</button>
                    </div>
                </div>
            </h6>
        </div>
        <!--/size-->



                    </div>
                    <div class="col-12">
                        <h6 class="font-rubik">Product Description</h6>
                        <hr>
                        <p class="font-rale font-size-14">Lorem, ipsum dolor sit amet Lorem ipsum dolor sit amet consectetu
                            r adipisicing elit. Earum aliquam repudiandae aperiam aut porro minus neque minima commodi animi quis error
                            , ipsam in enim dolore non, modi tempore voluptatem illo!
                            consectetur adipisicing elit. Laboriosam sit ad quibusdam sed debitis exercitationem nesciunt quis v
                            eritatis perferendis quos.</p>
                        <p class="font-rale font-size-14">Lorem, ipsum dolor sit amet Lorem ipsum dolor sit amet consectetu
                            r adipisicing elit. Earum aliquam repudiandae aperiam aut porro minus neque minima commodi animi quis error
                            , ipsam in enim dolore non, modi tempore voluptatem illo!
                            consectetur adipisicing elit. Laboriosam sit ad quibusdam sed debitis exercitationem nesciunt quis v
                            eritatis perferendis quos.</p>
                    </div>
                </div>
            </div>
        </section>
        <!--/product-->
    <?php
    endif;
    endforeach;//closing foreach ?>