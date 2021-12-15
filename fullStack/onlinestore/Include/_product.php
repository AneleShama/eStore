<!--product-->
<?php
    $item_id = $_GET['item_id']??1;
    foreach ($product->getData() as $item):
        if ($item['item_id']==$item_id):
?>
<section id="product" class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="<?php echo $item['item_image'] ?? "./assets/products/1.png" ?>" alt="product" class="img-fluid">
                <div class="form-row pt-4 font-size-16 font-baloo">
                    <div class="col">
                        <button type="submit" class="btn btn-danger form-control">Proceed to Buy</button>
                    </div>
                    <div class="col">
                        <?php
                        if(in_array($item['item_id'], $Cart->getCartId($product->getData('cart'))??[])){
                            echo '<button type="submit" disabled class="btn btn-success font-size-16 form-control">Added to Cart</button>';
                        }else{
                            echo '<button type="submit" name="top_sale_submit" class="btn btn-warning font-size-16 form-control">Add to Cart</button>';
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 py-5">
                <h5 class="font-baloo font-size-20"><?php echo $item['item_name']??"Unkown"; ?></h5>
                <small>by <?php echo $item['item_brand']??"Brand"; ?></small>
                <div class="d-flex">
                    <div class="rating text-warning font-size-12">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                    </div>
                    <a href="#" class="px-2 font-rale font-size-14">19500 ratings |1000+ Reviews</a>
                </div>
                <hr class="m-0">

                <!--Product Price-->
                <table class="my-3">
                    <tr class="font-rale font-size-14">
                        <td class="font-size-20 text-danger">R<?php echo $item['item_price']??"0"; ?> <small class="text-dark font-size-12">&nbsp;&nbsp;Inclusive of all taxes</small></td>
                    </tr>
                    <tr class="font-rale font-size-14">
                        <td><strike>R 2 607,78</strike></td>
                    </tr>
                    <tr class="font-rale font-size-14">
                        <td>50% Off</td>
                    </tr>
                </table>
                <!--!Product Price-->

                <!--Policy-->
                <section id="policy">
                    <div class="d-flex">
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-retweet border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">10 Days <br>Return</a>
                        </div>
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-truck border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">Free <br>Delivery</a>
                        </div>
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-check-double border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">1 year <br>Warranty</a>
                        </div>
                    </div>
                </section>
                <!--!Policy-->
                <hr>

                <!--Order Details-->
                <div id="order-details" class="font-rale d-flex flex-column text-dark">
                    <small>Delivery by: Dec 12 - Jan 4</small>
                    <small>Sold by <a href="#">Dailt Electronics</a> (4.6 |12345 rating)</small>
                    <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Deliver to Customer - 10879</small>
                </div>
                <!--!Order Details-->

                <div class="row">
                    <div class="col-6">
                        <!--color-->
                        <div class="color my-3">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-baloo">Color:</h6>
                                <div class="p-2 color-yellow-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                <div class="p-2 color-primary-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                <div class="p-2 color-second-bg rounded-circle"><button class="btn font-size-14"></button></div>
                            </div>
                        </div>
                        <!--!color-->
                    </div>
                    <div class="col-6">
                        <!--Quantity-->
                        <div class="qty d-flex">
                            <h6 class="font-baloo">Quantity</h6>
                            <div class="px-4 d-flex font-rale">
                                <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                <input type="text" data-id="pro1" class="qty_input border px-2 w-50 bg-light" disabled value="1" placeholder="1"></input>
                                <button data-id="pro1" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                            </div>
                            <!--!Quantity-->
                        </div>
                    </div>
                </div>

                <!--Size-->
                <div class="size my-3">
                    <h6 class="font-baloo">Size</h6>
                    <div class="d-flex justify-content-between w-75">
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14">4GB Ram</button>
                        </div>
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14">6GB Ram</button>
                        </div>
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14">8GB Ram</button>
                        </div>
                    </div>
                </div>
                <!--!Size-->

            </div>

            <div class="col-12">
                <h6 class="font-rubik">Product Description</h6>
                <hr>
                <p class="font-rale font-size-14">Features:
                    Go live on a brighter, wider screen
                    - Immerse yourself in the large 6.4 inch Infinity-V Display of Galaxy A30s. A wide aspect ratio fills your screen with content from edge to edge. Watch your favourite videos, games and live streams in vivid HD+ Super AMOLED.
                    Dynamic pattern and a comfortable design
                    - Galaxy A30s has an eye-catching prismatic look and sleek design. With a comfortable grip and smooth curves, it fits right in your hand for easy screen navigation. The holographic pattern stands out with a glossy dynamically changing finish.
                    Ready for life with Triple Camera
                    - Be prepared for life's moments with the Galaxy A30s Triple Camera. Capture everyday details with the 25MP Main Camera or majestic scenery with the 8MP 123 Ultra Wide Camera. Add background blur to focus on what matters with the 5MP Depth Camera.
                </p>
                <p class="font-rale font-size-14">
                    Quick Spec:
                    Display - 6.4" | 720 x 1560(HD+) Resolution
                    Memory - 4GB RAM | 128GB ROM
                    Camera - Rear Camera: 25.0 MP + 5.0 MP + 8.0 MP | Front Camera: 16.0 MP
                </p>
            </div>

        </div>
    </div>
</section>
<!--!product-->
<?php
        endif;
        endforeach;
        ?>