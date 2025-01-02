<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Topoco</title>
    <!-- fil css -->
    <link rel="stylesheet" href="{{ asset('css/styl.css') }}">

    <!-- font awesom -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

</head>

<body>

    @include('header')

    <section class="slider">
        <div class="container">
            <div class="side_bar">
                <h2><i class="fa-solid fa-bars"></i>SHOP by derparment</h2>

                <a href="#">All categories</a>
                <a href="#">Best seller products</a>
                <a href="#">New Arrivals</a>
                <a href="#">Top 10 offers</a>
                <a href="#">Phones & Tablet</a>
                <a href="#">Elestronics & Digita</a>
                <a href="#">Fashion & Clothings</a>
                <a href="#">Jawelry & Watches</a>
                <a href="#">TV & Audio</a>
            </div>

            <!-- Swiper -->
            <div class="slide-swp mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="#"> <img src="img/slider-01.jpg" alt=""> </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#"> <img src="img/slider-02.jpg" alt=""> </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#"> <img src="img/slider-03.jpg" alt=""> </a>
                    </div>

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section>


    <section class="featurs">
        <div class="container">
            <div class="feature_item">
                <img src="img/features1.png" alt="">
                <div class="text">
                    <h4>Free Shipping</h4>
                    <p>Free Shipping on all order</p>
                </div>
            </div>

            <div class="feature_item">
                <img src="img/features2.png" alt="">
                <div class="text">
                    <h4>Free Shipping</h4>
                    <p>Free Shipping on all order</p>
                </div>
            </div>
            <div class="feature_item">
                <img src="img/features3.png" alt="">
                <div class="text">
                    <h4>Free Shipping</h4>
                    <p>Free Shipping on all order</p>
                </div>
            </div>
            <div class="feature_item">
                <img src="img/features4.png" alt="">
                <div class="text">
                    <h4>Free Shipping</h4>
                    <p>Free Shipping on all order</p>
                </div>
            </div>
            <div class="feature_item">
                <img src="img/features5.png" alt="">
                <div class="text">
                    <h4>Free Shipping</h4>
                    <p>Free Shipping on all order</p>
                </div>
            </div>
        </div>
    </section>


    <section class="banner">
        <div class="container">

            <div class="banner_img">
                <div class="galass_hover"></div>
                <a href="#"> </a>
                <img src="img/banner/banner-1.jpg" alt="">

            </div>
            <div class="banner_img">
                <div class="galass_hover"></div>
                <a href="#"></a>
                <img src="img/banner/banner-2.jpg" alt="">

            </div>
            <div class="banner_img">
                <div class="galass_hover"></div>
                <a href="#"> </a>
                <img src="img/banner/banner-3.jpg" alt="">

            </div>
        </div>
    </section>

    <section class="slide slide_sale">
        <div class="container">

            <div class="sale_sec mySwiper">

                <div class="top_slide">
                    <h2>on sale <span>prodct</span></h2>
                </div>

                <div id="swiper_items_sale" class="products swiper-wrapper">




                </div>



                <div class="swiper-button-next btn_swip"></div>
                <div class="swiper-button-prev btn_swip"></div>



            </div>
        </div>
    </section>


    <section class="banner banner_big">
        <div class="container">


            <div class="banner_img">
                <div class="galass_hover"></div>
                <a href="#"></a>
                <img src="img/banner/banner-4.jpg" alt="">

            </div>
            <div class="banner_img">
                <div class="galass_hover"></div>
                <a href="#"> </a>
                <img src="img/banner/banner-5.jpg" alt="">

            </div>
        </div>
    </section>



    <section class="slide slide_product">
        <div class="container">
            <div class="top_slide">
                <h2>Computer & Desktop <span>prodcts</span></h2>
            </div>
            <div class="slide_with_img">

                <div class="categ_img">
                    <a href="#"><img src="img/banner/banner-sm-1.jpg" alt=""></a>
                </div>

                <div class="product_swip mySwiper">
                    <div class="products othre_product_swiper swiper-wrapper" id="othre_product_swiper">

                    </div>

                    <div class="swiper-button-next btn_swip"></div>
                    <div class="swiper-button-prev btn_swip"></div>

                </div>


            </div>

        </div>
    </section>




    <section class="slide slide_product">
        <div class="container">
            <div class="top_slide">
                <h2>Computer & Desktop <span>prodcts</span></h2>
            </div>
            <div class="slide_with_img">



                <div class="product_swip mySwiper">
                    <div class="products othre_product_swiper swiper-wrapper" id="othre_product_swiper2">

                    </div>

                    <div class="swiper-button-next btn_swip"></div>
                    <div class="swiper-button-prev btn_swip"></div>

                </div>

                <div class="categ_img">
                    <a href="#"><img src="img/banner/banner-sm-2.jpg" alt=""></a>
                </div>
            </div>

        </div>
    </section>

    <section class="banner">
        <div class="container">

            <div class="banner_img">
                <div class="galass_hover"></div>
                <a href="#"> </a>
                <img src="img/banner/banner-6.jpg" alt="">

            </div>
            <div class="banner_img">
                <div class="galass_hover"></div>
                <a href="#"></a>
                <img src="img/banner/banner-7.jpg" alt="">

            </div>
            <div class="banner_img">
                <div class="galass_hover"></div>
                <a href="#"> </a>
                <img src="img/banner/banner-8.jpg" alt="">

            </div>
        </div>
    </section>

    <div class="newslertter">
        <div class="container">
            <div class="text">
                <img src="img/icon_email.png" alt="">
                <div class="content">
                    <h4>sign up to newsletter</h4>
                    <p>Get email updates about our latest shop...and receive</p>
                    <h6>$30 Coupon For First Shopping</h6>
                </div>
            </div>

            <form action="" class="newslertter_form">
                <input type="email" placeholder="Enter your email here...">
                <button type="submit">subscribe</button>
            </form>
        </div>
    </div>

    <div class="back_to_top">
        <p>back to top</p>
    </div>

    <footer>
        <div>
            <div class="container">
                <div class="big_row">
                    <img src="img/logo-white.png" alt="">
                    <div class="hotline">
                        <i class="fa-solid fa-headset"></i>
                        <div class="text">
                            <h5>Hotline Free 24/24</h5>
                            <h6>(+100) 123 456 789</h6>
                        </div>
                    </div>


                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                </div>


                <div class="row">
                    <h4>FAQS & Help</h4>
                    <div class="links">
                        <a href="#">F.A.Q.S</a>
                        <a href="#">Ordering Tracking</a>
                        <a href="#">Contact</a>
                        <a href="#">Events</a>
                        <a href="#">Help Center</a>
                    </div>
                </div>
                <div class="row">
                    <h4>Shipping & Delivery</h4>
                    <div class="links">
                        <a href="#">Delivery Information</a>
                        <a href="#">Discount</a>
                        <a href="#">Paymen & Shipping</a>
                        <a href="#">Estimated Delivery</a>
                        <a href="#">Shipping Guide</a>
                    </div>
                </div>
                <div class="row">
                    <h4>Information</h4>
                    <div class="links">
                        <a href="#">Popular</a>
                        <a href="#">Our Sarvices</a>
                        <a href="#">Your Account</a>
                        <a href="#">Privacy</a>
                        <a href="#">Ters & Condituon</a>
                    </div>
                </div>






            </div>


            <div class="bottom_footer">
                <div class="container">
                    <p>Copyright &copy; <span>Topico</span> all rights reserved</p>

                    <div class="payment_img">
                        <img src="img/payment-1.png" alt="">
                        <img src="img/payment-2.png" alt="">
                        <img src="img/payment-3.png" alt="">
                        <img src="img/payment-4.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


<script src="js/Swiper.js"></script>
<script src="js/main.js"></script>
<script src="js/items_hom.js"></script>

</html>
