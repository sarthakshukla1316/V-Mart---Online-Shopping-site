

<!-- ------------- shopping cart section ------------- -->
<section id="cart" class="py-3 mb-5">
    <div class="container-fluid w-75">
        <h5 class="font-baloo font-size-20">Shopping Cart</h5>

        <!-- ------- shopping cart items ------------- -->
        <div class="row">
            <div class="col-sm-9">
                <!-- ---------- Empty Cart ----------- -->

                <div class="row border-top py-3 mt-3">
                    <div class="col-sm-12 text-center py-2">
                        <img src="./assets/blog/empty_cart.png" class="img-fluid" style="height: 200px;" alt="">
                        <p class="font-baloo text-black-50" style="font-size: 32px;"><b>Hey, it feels so light!</b></p>
                        <small class="font-baloo text-black-50" style="font-size: 16px;">There is nothing in your bag. Let's add some items.</small><br>
                        <a href="/tutorial/V-Mart/wishlist.php" class="btn btn-danger mt-3">ADD ITEMS FROM WISHLIST</a>
                    </div>
                </div>

                <!-- ---------- Empty Cart ----------- -->
            </div>

            <!-- ----------- subtotal section ----------- -->
            <div class="col-sm-3">
                <div class="sub-total border text-center mt-2 ml-6">
                    <h6 class="font-size-12 font-rale text-success py-3"><i class="fas fa-check"></i> Your Order is eligible for FREE Delivery</h6>
                    <div class="border-top py-4">
                        <h5 class="font-baloo font-size-20">Subtotal (<?php echo isset($subTotal) ? count($subTotal) : 0 ?> item): <span class="text-danger">$<span class="text-danger" id="deal-price"><?php echo isset($subTotal) ? $Cart->getSum($subTotal) : 0; ?></span></span></h5>
                        <button class="btn btn-warning mt-3">Proceed to Buy</button>
                    </div>
                </div>
            </div>
            <!-- ----------- subtotal section ----------- -->

        </div>
        <!-- ------- shopping cart items ------------- -->
    </div>
</section>

<!-- ------------- shopping cart section ------------- -->