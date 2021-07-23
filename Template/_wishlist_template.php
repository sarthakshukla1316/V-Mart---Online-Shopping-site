
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['delete-wishlist-submit'])) {
        $deletedrecord = $Cart->deleteCart($_POST['item_id'],'wishlist');
    }

    // Save for later
    if(isset($_POST['cart-submit'])){
        $Cart->saveForLater($_POST['item_id'], 'cart', 'wishlist');
    }
}
?>

<!-- ------------- shopping cart section ------------- -->
<section id="cart" class="py-3 mb-5">
    <div class="container-fluid w-75">
        <h5 class="font-baloo font-size-20">Wishlist</h5>

        <!-- ------- shopping cart items ------------- -->
        <div class="row">
            <div class="col-sm-9">
                <?php
                foreach ($product->getData('wishlist') as $item) :
                    $cart = $product->getProduct($item['item_id']);
                    $subTotal[] = array_map(function ($item) {
                ?>
                        <!-- -------- Cart Item -------- -->
                        <div class="row border-top py-3 mt-3">
                            <div class="col-sm-2">
                                <img src=" <?php echo $item['item_image'] ?? "./assets/products/1.png"; ?>" alt="" style="height: 120px;" class="img-fluid">
                            </div>
                            <div class="col-sm-8">
                                <h5 class="font-baloo font-size-20"><?php echo $item['item_name'] ?? "Unknown"; ?></h5>
                                <small>by <?php echo $item['item_brand'] ?? "Brand"; ?></small>
                                <!-- -------- product rating -------- -->
                                <div class="d-flex">
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <a href="" class="px-2 font-rale font-size-14">20,534 ratings | 1000+ reviews</a>
                                </div>
                                <!-- -------- product rating -------- -->

                                <!-- ---------- product quantity ----------- -->
                                <div class="qty d-flex pt-2">

                                    <form method="post">
                                        <input type="hidden" value="<?php echo $item['item_id'] ?? '0'; ?>" name="item_id">
                                        <button type="submit" name="delete-wishlist-submit" class="btn font-baloo text-danger pl-0 pr-3 border-right">Delete</button>
                                    </form>

                                    <form method="post">
                                        <input type="hidden" value="<?php echo $item['item_id'] ?? '0'; ?>" name="item_id">
                                        <button type="submit" name="cart-submit" class="btn font-baloo text-danger">Add to Cart</button>
                                    </form>
                                    
                                </div>
                                <!-- ---------- product quantity ----------- -->
                            </div>
                            <div class="col-sm-2 text-right">
                                <div class="font-size-20 text-danger font-baloo">
                                <i class="fas fa-rupee-sign"></i> &nbsp;<span class="product_price" data-id="<?php echo $item['item_id'] ?? 0; ?>"><?php echo $item['item_price'] ?? 0; ?></span>
                                </div>
                            </div>

                        </div>
                        <!-- -------- Cart Item -------- -->
                <?php
                        return $item['item_price'];
                    }, $cart);
                endforeach;
                ?>
            </div>

        </div>
        <!-- ------- shopping cart items ------------- -->
    </div>
</section>

<!-- ------------- shopping cart section ------------- -->