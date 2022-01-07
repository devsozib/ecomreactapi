@extends('layouts.front')
@section('title')
Bghaat
@endsection
@section('content')

    <div class="container py-md-5 py-4">
        <!-- tittle heading -->
        <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
            <span class="font-weight-normal">Our</span> New Products</h3>
        <!-- //tittle heading -->
        <div class="row">
            <!-- product right -->
            <div class="col-lg-3 mt-lg-0 mt-4 p-lg-0 order-lg-first order-last">
                <div class="side-bar p-sm-4 p-3">
                    <!-- reviews -->
                    <div class="customer-rev left-side py-2">
                        <h3 class="agileits-sear-head mb-3">Customer Review</h3>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span>5.0</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span>4.0</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half"></i>
                                    <span>3.5</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span>3.0</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half"></i>
                                    <span>2.5</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- //reviews -->
                    <!-- price -->
                    <div class="range py-2">
                        <h3 class="agileits-sear-head mb-3">Price</h3>
                        <div class="w3l-range">
                            <ul>
                                <li>
                                    <a href="#">Under $1,000</a>
                                </li>
                                <li class="my-1">
                                    <a href="#">$1,000 - $5,000</a>
                                </li>
                                <li>
                                    <a href="#">$5,000 - $10,000</a>
                                </li>
                                <li class="my-1">
                                    <a href="#">$10,000 - $20,000</a>
                                </li>
                                <li>
                                    <a href="#">$20,000 $30,000</a>
                                </li>
                                <li class="mt-1">
                                    <a href="#">Over $30,000</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- //price -->
                    <!-- discounts -->
                    <div class="left-side py-2">
                        <h3 class="agileits-sear-head mb-3">Discount</h3>
                        <ul>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">5% or More</span>
                            </li>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">10% or More</span>
                            </li>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">20% or More</span>
                            </li>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">30% or More</span>
                            </li>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">50% or More</span>
                            </li>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">60% or More</span>
                            </li>
                        </ul>
                    </div>
                    <!-- //discounts -->
                    <!-- electronics -->
                    <div class="left-side py-2">
                        <h3 class="agileits-sear-head mb-3">Electronics</h3>
                        <ul>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">Accessories</span>
                            </li>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">Cameras & Photography</span>
                            </li>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">Car & Vehicle Electronics</span>
                            </li>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">Computers & Accessories</span>
                            </li>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">GPS & Accessories</span>
                            </li>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">Headphones</span>
                            </li>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">Home Audio</span>
                            </li>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">Home Theater, TV & Video</span>
                            </li>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">Mobiles & Accessories</span>
                            </li>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">Portable Media Players</span>
                            </li>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">Tablets</span>
                            </li>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">Telephones & Accessories</span>
                            </li>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">Wearable Technology</span>
                            </li>
                        </ul>
                    </div>
                    <!-- //electronics -->
                    <!-- delivery -->
                    <div class="left-side py-2">
                        <h3 class="agileits-sear-head mb-3">Cash On Delivery</h3>
                        <ul>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">Eligible for Cash On Delivery</span>
                            </li>
                        </ul>
                    </div>
                    <!-- //delivery -->
                    <!-- arrivals -->
                    <div class="left-side py-2">
                        <h3 class="agileits-sear-head mb-3">New Arrivals</h3>
                        <ul>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">Last 30 days</span>
                            </li>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">Last 90 days</span>
                            </li>
                        </ul>
                    </div>
                    <!-- //arrivals -->
                    <!-- best seller -->
                    <div class="f-grid py-2">
                        <h3 class="agileits-sear-head mb-3">Best Seller</h3>
                        <div class="box-scroll">
                            <div class="scroll">
                                <div class="row">
                                    <div class="col-lg-3 col-sm-2 col-3 left-mar">
                                        <img src="images/k1.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-lg-9 col-sm-10 col-9 w3_mvd">
                                        <a href="">Samsung Galaxy F62 (Laser Grey, 128 GB) (6 GB RAM)</a>
                                        <a href="" class="price-mar mt-2">$12,990.00</a>
                                    </div>
                                </div>
                                <div class="row my-4">
                                    <div class="col-lg-3 col-sm-2 col-3 left-mar">
                                        <img src="images/k2.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-lg-9 col-sm-10 col-9 w3_mvd">
                                        <a href="">Samsung 192 L Direct Cool Single Door 3 Star (2021)
                                            Refrigerator</a>
                                        <a href="" class="price-mar mt-2">$12,499.00</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-sm-2 col-3 left-mar">
                                        <img src="images/k3.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-lg-9 col-sm-10 col-9 w3_mvd">
                                        <a href="">boAt Rockerz 450 Bluetooth Headset (Luscious Black, On the
                                            Ear)</a>
                                        <a href="" class="price-mar mt-2">$1,199.00 </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- //best seller -->
                </div>
                <!-- //product right -->
            </div>
            <!-- product left -->
            <div class="agileinfo-ads-display col-lg-9 order-lg-last order-first">
                <div class="wrapper">
                    <!-- first section -->
                    <div class="product-sec1 px-lg-4">
                        <div class="row">
                            <div class="col-md-4 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item text-center">
                                        <img src="images/m1.png" alt="" class="img-fluid">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info-product text-center mt-2">
                                        <h4 class="pt-1">
                                            <a href="single.html">Redmi 9 Prime</a>
                                        </h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$200.00</span>
                                            <del>$280.00</del>
                                        </div>
                                        <div
                                            class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                            <form action="#" method="post">
                                                <fieldset>
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="business" value=" " />
                                                    <input type="hidden" name="item_name" value="Redmi 9 Prime" />
                                                    <input type="hidden" name="amount" value="200.00" />
                                                    <input type="hidden" name="discount_amount" value="1.00" />
                                                    <input type="hidden" name="currency_code" value="USD" />
                                                    <input type="hidden" name="return" value=" " />
                                                    <input type="hidden" name="cancel_return" value=" " />
                                                    <input type="submit" name="submit" value="Add to cart"
                                                        class="btn btn-style btn-style-secondary mt-3" />
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 product-men mt-md-0 mt-5">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item text-center">
                                        <img src="images/m2.png" alt="" class="img-fluid">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="single2.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product text-center mt-2">
                                        <h4 class="pt-1">
                                            <a href="single2.html">Refrigerator </a>
                                        </h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$230.00</span>
                                            <del>$250.00</del>
                                        </div>
                                        <div
                                            class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                            <form action="#" method="post">
                                                <fieldset>
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="business" value=" " />
                                                    <input type="hidden" name="item_name" value="Refrigerator " />
                                                    <input type="hidden" name="amount" value="230.00" />
                                                    <input type="hidden" name="discount_amount" value="1.00" />
                                                    <input type="hidden" name="currency_code" value="USD" />
                                                    <input type="hidden" name="return" value=" " />
                                                    <input type="hidden" name="cancel_return" value=" " />
                                                    <input type="submit" name="submit" value="Add to cart"
                                                        class="btn btn-style btn-style-secondary mt-3" />
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 product-men mt-md-0 mt-5">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item text-center">
                                        <img src="images/m3.png" alt="" class="img-fluid">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product text-center mt-2">
                                        <h4 class="pt-1">
                                            <a href="single.html">Apple iPhone 11</a>
                                        </h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$280.00</span>
                                            <del>$300.00</del>
                                        </div>
                                        <div
                                            class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                            <form action="#" method="post">
                                                <fieldset>
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="business" value=" " />
                                                    <input type="hidden" name="item_name" value="Apple iPhone X" />
                                                    <input type="hidden" name="amount" value="280.00" />
                                                    <input type="hidden" name="discount_amount" value="1.00" />
                                                    <input type="hidden" name="currency_code" value="USD" />
                                                    <input type="hidden" name="return" value=" " />
                                                    <input type="hidden" name="cancel_return" value=" " />
                                                    <input type="submit" name="submit" value="Add to cart"
                                                        class="btn btn-style btn-style-secondary mt-3" />
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- //first section -->
                    <!-- second section -->
                    <div class="product-sec1 px-lg-4 mb-5">
                        <div class="row">
                            <div class="col-md-4 product-men mt-5">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item text-center">
                                        <img src="images/m4.png" alt="" class="img-fluid">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="single2.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>
                                    </div>
                                    <div class="item-info-product text-center mt-2">
                                        <h4 class="pt-1">
                                            <a href="single2.html">Mi 4A Horizon</a>
                                        </h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$320.00</span>
                                            <del>$340.00</del>
                                        </div>
                                        <div
                                            class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                            <form action="#" method="post">
                                                <fieldset>
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="business" value=" " />
                                                    <input type="hidden" name="item_name" value="Mi 4A Horizon" />
                                                    <input type="hidden" name="amount" value="320.00" />
                                                    <input type="hidden" name="discount_amount" value="1.00" />
                                                    <input type="hidden" name="currency_code" value="USD" />
                                                    <input type="hidden" name="return" value=" " />
                                                    <input type="hidden" name="cancel_return" value=" " />
                                                    <input type="submit" name="submit" value="Add to cart"
                                                        class="btn btn-style btn-style-secondary mt-3" />
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 product-men mt-5">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item text-center">
                                        <img src="images/m6.png" alt="" class="img-fluid">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info-product text-center mt-2">
                                        <h4 class="pt-1">
                                            <a href="single.html">Smart AC with Wi-fi</a>
                                        </h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$349.00</span>
                                            <del>$399.00</del>
                                        </div>
                                        <div
                                            class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                            <form action="#" method="post">
                                                <fieldset>
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="business" value=" " />
                                                    <input type="hidden" name="item_name"
                                                        value="Smart AC with Wi-fi" />
                                                    <input type="hidden" name="amount" value="349.00" />
                                                    <input type="hidden" name="discount_amount" value="1.00" />
                                                    <input type="hidden" name="currency_code" value="USD" />
                                                    <input type="hidden" name="return" value=" " />
                                                    <input type="hidden" name="cancel_return" value=" " />
                                                    <input type="submit" name="submit" value="Add to cart"
                                                        class="btn btn-style btn-style-secondary mt-3" />
                                                </fieldset>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 product-men mt-5">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item text-center">
                                        <img src="images/m5.png" alt="" class="img-fluid">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info-product text-center mt-2">
                                        <h4 class="pt-1">
                                            <a href="single.html">Microwave Oven</a>
                                        </h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$249.00</span>
                                            <del>$300.00</del>
                                        </div>
                                        <div
                                            class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                            <form action="#" method="post">
                                                <fieldset>
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="business" value=" " />
                                                    <input type="hidden" name="item_name" value="Microwave Oven" />
                                                    <input type="hidden" name="amount" value="249.00" />
                                                    <input type="hidden" name="discount_amount" value="1.00" />
                                                    <input type="hidden" name="currency_code" value="USD" />
                                                    <input type="hidden" name="return" value=" " />
                                                    <input type="hidden" name="cancel_return" value=" " />
                                                    <input type="submit" name="submit" value="Add to cart"
                                                        class="btn btn-style btn-style-secondary mt-3" />
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- //second section -->
                    <!-- third section -->
                    <div class="px-lg-4 my-5">
                        <div class="product-sec1 product-sec2">
                            <div class="row p-5">
                                <h3 class="col-md-4 effect-bg">Exciting Deals</h3>
                                <p class="w3l-nut-middle">Up to 40% Off</p>
                                <div class="col-md-8 bg-right-nut">
                                    <img src="images/image1.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- //third section -->
                    <!-- fourth section -->
                    <div class="product-sec1 px-lg-4 mt-md-0 mt-5">
                        <div class="row">
                            <div class="col-md-4 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item text-center">
                                        <img src="images/m7.png" alt="">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="product-new-top">New</span>
                                    <div class="item-info-product text-center mt-2">
                                        <h4 class="pt-1">
                                            <a href="single.html">Desert Air Cooler</a>
                                        </h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$230.00</span>
                                            <del>$280.00</del>
                                        </div>
                                        <div
                                            class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                            <form action="#" method="post">
                                                <fieldset>
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="business" value=" " />
                                                    <input type="hidden" name="item_name"
                                                        value="Desert Air Cooler" />
                                                    <input type="hidden" name="amount" value="230.00" />
                                                    <input type="hidden" name="discount_amount" value="1.00" />
                                                    <input type="hidden" name="currency_code" value="USD" />
                                                    <input type="hidden" name="return" value=" " />
                                                    <input type="hidden" name="cancel_return" value=" " />
                                                    <input type="submit" name="submit" value="Add to cart"
                                                        class="btn btn-style btn-style-secondary mt-3" />
                                                </fieldset>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 product-men mt-md-0 mt-5">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item text-center">
                                        <img src="images/m8.png" alt="">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="single2.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info-product text-center mt-2">
                                        <h4 class="pt-1">
                                            <a href="single2.html">Auto Washing Machine</a>
                                        </h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$180.00</span>
                                            <del>$200.00</del>
                                        </div>
                                        <div
                                            class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                            <form action="#" method="post">
                                                <fieldset>
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="business" value=" " />
                                                    <input type="hidden" name="item_name" value="Washing Machine" />
                                                    <input type="hidden" name="amount" value="180.00" />
                                                    <input type="hidden" name="discount_amount" value="1.00" />
                                                    <input type="hidden" name="currency_code" value="USD" />
                                                    <input type="hidden" name="return" value=" " />
                                                    <input type="hidden" name="cancel_return" value=" " />
                                                    <input type="submit" name="submit" value="Add to cart"
                                                        class="btn btn-style btn-style-secondary mt-3" />
                                                </fieldset>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 product-men mt-md-0 mt-5">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item text-center">
                                        <img src="images/m9.png" alt="">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info-product text-center mt-2">
                                        <h4 class="pt-1">
                                            <a href="single.html">Water Purifier</a>
                                        </h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$199.00</span>
                                            <del>$299.00</del>
                                        </div>
                                        <div
                                            class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                            <form action="#" method="post">
                                                <fieldset>
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="business" value=" " />
                                                    <input type="hidden" name="item_name" value="Water Purifier" />
                                                    <input type="hidden" name="amount" value="199.00" />
                                                    <input type="hidden" name="discount_amount" value="1.00" />
                                                    <input type="hidden" name="currency_code" value="USD" />
                                                    <input type="hidden" name="return" value=" " />
                                                    <input type="hidden" name="cancel_return" value=" " />
                                                    <input type="submit" name="submit" value="Add to cart"
                                                        class="btn btn-style btn-style-secondary mt-3" />
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- //fourth section -->
                    <!-- 5th section -->
                    <div class="product-sec1 px-lg-4 mt-5">
                        <div class="row">
                            <div class="col-md-4 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item text-center">
                                        <img src="images/mk8.png" alt="" class="img-fluid">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info-product text-center mt-2">
                                        <h4 class="pt-1">
                                            <a href="single.html">Panasonic Tab 8</a>
                                        </h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$499.00</span>
                                            <del>$599.00</del>
                                        </div>
                                        <div
                                            class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                            <form action="#" method="post">
                                                <fieldset>
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="business" value=" " />
                                                    <input type="hidden" name="item_name" value="Panasonic Tab 8" />
                                                    <input type="hidden" name="amount" value="499.00" />
                                                    <input type="hidden" name="discount_amount" value="1.00" />
                                                    <input type="hidden" name="currency_code" value="USD" />
                                                    <input type="hidden" name="return" value=" " />
                                                    <input type="hidden" name="cancel_return" value=" " />
                                                    <input type="submit" name="submit" value="Add to cart"
                                                        class="btn btn-style btn-style-secondary mt-3" />
                                                </fieldset>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 product-men mt-md-0 mt-5">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item text-center">
                                        <img src="images/mk7.png" alt="" class="img-fluid">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info-product text-center mt-2">
                                        <h4 class="pt-1">
                                            <a href="single.html">Lenovo Yoga Tab</a>
                                        </h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$599.00</span>
                                            <del>$699.00</del>
                                        </div>
                                        <div
                                            class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                            <form action="#" method="post">
                                                <fieldset>
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="business" value=" " />
                                                    <input type="hidden" name="item_name" value="Lenovo Yoga Tab" />
                                                    <input type="hidden" name="amount" value="599.00" />
                                                    <input type="hidden" name="discount_amount" value="1.00" />
                                                    <input type="hidden" name="currency_code" value="USD" />
                                                    <input type="hidden" name="return" value=" " />
                                                    <input type="hidden" name="cancel_return" value=" " />
                                                    <input type="submit" name="submit" value="Add to cart"
                                                        class="btn btn-style btn-style-secondary mt-3" />
                                                </fieldset>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 product-men mt-md-0 mt-5">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item text-center">
                                        <img src="images/mk9.png" alt="" class="img-fluid">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>
                                    </div>
                                    <div class="item-info-product text-center mt-2">
                                        <h4 class="pt-1">
                                            <a href="single.html">Samsung Galaxy Tab</a>
                                        </h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$699.00</span>
                                            <del>$899.00</del>
                                        </div>
                                        <div
                                            class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                            <form action="#" method="post">
                                                <fieldset>
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="business" value=" " />
                                                    <input type="hidden" name="item_name"
                                                        value="Samsung Galaxy Tab" />
                                                    <input type="hidden" name="amount" value="699.00" />
                                                    <input type="hidden" name="discount_amount" value="1.00" />
                                                    <input type="hidden" name="currency_code" value="USD" />
                                                    <input type="hidden" name="return" value=" " />
                                                    <input type="hidden" name="cancel_return" value=" " />
                                                    <input type="submit" name="submit" value="Add to cart"
                                                        class="btn btn-style btn-style-secondary mt-3" />
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 5th section -->
                </div>
            </div>
            <!-- //product left -->
        </div>
    </div>


@endsection