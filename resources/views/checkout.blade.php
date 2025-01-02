<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Topoco</title>
    <!-- fil css -->
    <link rel="stylesheet" href="./css/styl.css">
    <link rel="stylesheet" href="./css/login_regs.css">
    <!-- font awesom -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>

<body>

    @include('header')


    <section class="checkout">
        <div class="container">
            <form action="">
                <div class="address">
                    <h2>Delivery Address</h2>

                    <div class="inputs">
                        <label for="">Email</label>
                        <input type="email" placeholder="Enter yor Email">

                        <label for="">Name</label>
                        <input type="text" placeholder="Enter yor Name">

                        <label for="">Address</label>
                        <input type="text" placeholder="Enter yor Address">

                        <label for="">phone</label>
                        <input type="number" placeholder="Enter yor phone">
                    </div>
                </div>


                <div class="coupon">
                    <h2>Coupon Code</h2>
                    <div class="inputs">
                        <label for="">Coupon Code </label>
                        <input type="text" placeholder="Enter yor Coupon Code">
                    </div>

                </div>
            </form>


            <div class="ordersummary">

                <h1>Order Summary</h1>

                <div class="items">
                    <div class="item_cart">
                        <img src="img/product/product-1.jpg" alt="">

                        <div class="content">
                            <h4>"Original Mobile Android Dual SIM Smart Phone G3</h4>
                            <p class="price_cart">Price : <span>$185</span></p>
                        </div>
                    </div>


                    <div class="item_cart">
                        <img src="img/product/product3.jpg" alt="">

                        <div class="content">
                            <h4>samsung screen</h4>
                            <p class="price_cart">Price : <span>$295</span></p>
                        </div>
                    </div>

                    <div class="total">
                        <p>total</p>
                        <span>$480.00</span>
                    </div>
                    <div class="button_div">
                        <button>Place order</button>
                    </div>
                </div>
            </div>
        </div>
    </section>


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

<script src="js/main.js"></script>


</html>
