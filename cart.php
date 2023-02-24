<?php include('header.php'); ?> 
<?php include('menubar.php'); ?>  
        <!-- main-area -->
        <main>

            <!-- shop-cart-area -->
            <section class="shop-cart-area wishlist-area pt-100 pb-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="table-responsive-xl">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th class="product-thumbnail"></th>
                                            <th class="product-name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="product-quantity">QUANTITY</th>
                                            <th class="product-subtotal">SUBTOTAL</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="product-thumbnail"><a href="#" class="wishlist-remove"><i class="flaticon-cancel-1"></i></a><a href="shop-details.html"><img src="img/product/wishlist_thumb01.jpg" alt=""></a>
                                            </td>
                                            <td class="product-name">
                                                <h4><a href="shop-details.html">Woman Lathers Jacket</a></h4>
                                                <p>Cramond Leopard & Pythong Anorak</p>
                                                <span>65% poly, 35% rayon</span>
                                            </td>
                                            <td class="product-price">$ 29.00</td>
                                            <td class="product-quantity">
                                                <div class="cart-plus">
                                                    <form action="#">
                                                        <div class="cart-plus-minus">
                                                            <input type="text" value="2">
                                                        </div>
                                                    </form>
                                                </div>
                                            </td>
                                            <td class="product-subtotal"><span>$ 68.00</span></td>
                                        </tr>
                                        <tr>
                                            <td class="product-thumbnail"><a href="#" class="wishlist-remove"><i class="flaticon-cancel-1"></i></a><a href="shop-details.html"><img src="img/product/wishlist_thumb02.jpg" alt=""></a>
                                            </td>
                                            <td class="product-name">
                                                <h4><a href="shop-details.html">Woman Lathers Jacket</a></h4>
                                                <p>Cramond Leopard & Pythong Anorak</p>
                                                <span>65% poly, 35% rayon</span>
                                            </td>
                                            <td class="product-price">$ 29.00</td>
                                            <td class="product-quantity">
                                                <div class="cart-plus">
                                                    <form action="#">
                                                        <div class="cart-plus-minus">
                                                            <input type="text" value="2">
                                                        </div>
                                                    </form>
                                                </div>
                                            </td>
                                            <td class="product-subtotal"><span>$ 68.00</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="shop-cart-bottom mt-20">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="cart-coupon">
                                            <form action="#">
                                                <input type="text" placeholder="Enter Coupon Code...">
                                                <button class="btn">Apply Coupon</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="continue-shopping">
                                            <a href="shop.php" class="btn">Continue Shopping</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-8">
                            <aside class="shop-cart-sidebar">
                                <div class="shop-cart-widget">
                                    <h6 class="title">Cart Totals</h6>
                                    <form action="#">
                                        <ul>
                                            <li><span>SUBTOTAL</span> $ 136.00</li>
                                            <li>
                                                <span>SHIPPING</span>
                                                <div class="shop-check-wrap">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                        <label class="custom-control-label" for="customCheck1">FLAT RATE: $15</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                        <label class="custom-control-label" for="customCheck2">FREE SHIPPING</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="cart-total-amount"><span>TOTAL</span> <span class="amount">$ 151.00</span></li>
                                        </ul>
                                        <button class="btn"><a data-toggle="modal" data-target="#chktmodal">PROCEED TO CHECKOUT</a></button>
                                    </form>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </section>
            <?php include ('chktmodal.php') ?>
            <!-- shop-cart-area-end -->
          <?php include('gnote.php'); ?>
          <?php include('ad.php'); ?>

        </main>
        <!-- main-area-end -->
 <?php include('footer.php'); ?>       