<?php

// request method post
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(isset($_POST['product_submit'])){
        // call method add to cart
        $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
    }
}

$item_id = $_GET['item_id'] ?? 1;
foreach ($product->getData() as $item) :
    if ($item['item_id'] == $item_id) :
?>

        <!-- ----------- product ------------- -->
        <section id="products" class="py-3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="<?php echo $item['item_image'] ?? "./assets/products/1.png" ?>" class="img-fluid" alt="">
                        <div class="form-row pt-4 font-size-16 font-baloo">
                            <div class="col">
                                <button type="submit" class="btn btn-danger form-control">Proceed to Buy</button>
                            </div>
                            <div class="col">
                            <form method="POST">
                                    <input type="hidden" name="item_id" value="<?php echo $item['item_id']??'1'; ?>">
                                    <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                    <?php
                                        if(in_array($item['item_id'],$Cart->getCartId($product->getData('cart')) ?? [])){
                                            echo '<button type="submit" disabled name="product_submit" class="btn btn-success font-size-12 form-control">In the Cart</button>';
                                        }
                                        else{
                                            echo '<button type="submit" name="product_submit" class="btn btn-warning font-size-12 form-control">Add to Cart</button>';
                                        }
                                    ?>    
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 py-5">
                        <h5 class="font-baloo font-size-20"><?php echo $item['item_name'] ?? "Unknown"; ?></h5>
                        <small>by <?php echo $item['item_brand'] ?? "Brand"; ?></small>
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
                        <hr class="m-0">

                        <!-- -------- product price --------- -->
                        <table class="my-3">
                            <tr class="font-rale font-size-14">
                                <td>M.R.P: </td>
                                <td><i class="fas fa-rupee-sign"></i> &nbsp; <del><span><?php echo ($item['item_price'] + 3000.00); ?></span></del></td>
                            </tr>
                            <tr class="font-rale font-size-14">
                                <td>Deal Price: </td>
                                <td class="font-size-20 text-danger"><i class="fas fa-rupee-sign"></i> &nbsp; <span><?php echo $item['item_price'] ?? 0; ?></span><small class="text-dark font-size-12"> Inclusive of all taxes</small></td>
                            </tr>
                            <tr class="font-rale font-size-14">
                                <td>You Save:</td>
                                <td><span class="font-size-16 text-danger"><i class="fas fa-rupee-sign"></i> &nbsp; 3000.00</span></td>
                            </tr>
                        </table>
                        <!-- -------- product price --------- -->

                        <!-- ------------ policy ----------- -->
                        <div id="policy">
                            <div class="d-flex">
                                <div class="return text-center mr-5">
                                    <div class="font-size-20 my-2 color-second">
                                        <span class="fas fa-retweet border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="" class="font-rale font-size-12">10 Days<br> Replacement</a>
                                </div>
                                <div class="return text-center mr-5">
                                    <div class="font-size-20 my-2 color-second">
                                        <span class="fas fa-truck border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="" class="font-rale font-size-12">V-Mart<br> Delivered</a>
                                </div>
                                <div class="return text-center mr-5">
                                    <div class="font-size-20 my-2 color-second">
                                        <span class="fas fa-check-double border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="" class="font-rale font-size-12">1 Year<br> Warranty</a>
                                </div>
                            </div>
                        </div>
                        <!-- ------------ policy ----------- -->
                        <hr>

                        <!-- -------- Order Details --------- -->
                        <div id="order-details" class="font-rale d-flex flex-column text-dark">
                            <small>Delivery by : Dec 29 - Jan 4</small>
                            <small>Sold by <a href="">Hello Mobile</a> (4.5 out of 5 | 18,198 ratings)</small>
                            <small><i class="fas fa-map-marker-alt color-primary"></i> Deliver to Customer -
                                269474</small>
                        </div>
                        <!-- -------- Order Details --------- -->

                        <!-- ------- color and quantity section -------- -->
                        <div class="row">
                            <!-- ------- color -------- -->
                            <div class="col-6">
                                <!-- -------- color --------- -->
                                <div class="color my-3">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="font-baloo">Color :</h5>
                                        <div class="p-2 color-yellow-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                        <div class="p-2 color-primary-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                        <div class="p-2 color-second-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                    </div>
                                </div>
                                <!-- -------- color --------- -->
                            </div>
                            <!-- ------- color -------- -->

                            <!-- ------- quantity -------- -->
                            <div class="col-6 mt-3">
                                <div class="qty d-flex">
                                    <h5 class="font-baloo">Qty: </h5>
                                    <div class="px-4 d-flex font-rale">
                                        <button data-id="pro1" class="qty-up border bg-light"><i class="fas fa-angle-up"></i></button>
                                        <input type="text" data-id="pro1" class="qty_input border text-center w-50 bg-light" disabled value="1" placeholder="1">
                                        <button data-id="pro1" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                                    </div>
                                </div>
                            </div>
                            <!-- ------- quantity -------- -->
                        </div>
                        <!-- ------ color and quantity section ------- -->

                        <!-- ----------- size ----------- -->
                        <div class="size my-3">
                            <h5 class="font-baloo">Size :</h5>
                            <div class="d-flex justify-content-between w-75">
                                <div class="font-rubik border p-2">
                                    <button class="btn p-0 font-size-14">4GB RAM</button>
                                </div>
                                <div class="font-rubik border p-2">
                                    <button class="btn p-0 font-size-14">6GB RAM</button>
                                </div>
                                <div class="font-rubik border p-2">
                                    <button class="btn p-0 font-size-14">8GB RAM</button>
                                </div>
                            </div>
                        </div>
                        <!-- ----------- size ----------- -->

                    </div>
                    <div class="col-12">
                        <h5 class="">Product Description <i class="fa fa-indent ml-2" style="color: #ff523b;"></i></h5>
                        <hr>
                        <p class="font-rale font-size-14">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum
                            odit natus expedita temporibus eos est obcaecati ab doloribus saepe nesciunt, molestiae
                            voluptates fugit, quidem rerum?
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi eius perferendis quibusdam
                            placeat maiores eligendi esse, molestiae, perspiciatis doloribus odit reprehenderit!
                            Laboriosam rem officia hic fugiat .
                        </p>
                        <p class="font-rale font-size-14">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum
                            odit natus expedita temporibus eos est obcaecati ab doloribus saepe nesciunt, molestiae
                            voluptates fugit, quidem rerum?
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi eius perferendis quibusdam.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- ----------- product ------------- -->

<?php
    endif;
endforeach;
?>