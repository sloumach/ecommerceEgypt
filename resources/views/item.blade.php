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

    <div class="item_detail">
        <div class="container">



            <div class="img_item">
                <div class="big_img">
                    <img id="bigimg" src="img/product/product-1.jpg" alt="">
                </div>
                <div class="sm_imgs">
                    <img onclick=" changeItemImage(this.src)" src="img/product/product-1.jpg" alt="">
                    <img onclick=" changeItemImage(this.src)"  src="img/product/product1.jpg" alt="">
                    <img onclick=" changeItemImage(this.src)"  src="img/product/product-2.jpg" alt="">
                    <img onclick=" changeItemImage(this.src)"  src="img/product/product2.jpg" alt="">
                </div>
            </div>


            <div class="details_item">
                <h1 class="name">Original Mobile Android Dual SIM Smart Phone G3</h1>
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <div class="price">
                    <p><span>$120.00</span></p>
                    <p class="old_price">$170.00</p>
                </div>
                <h5> Avaailability: <span>In Stock</span></h5>
                <h5>SKU: <span>Samsung C49J89: $875, Debenhams Plus</span></h5>
                <p class="text_p">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita impedit tempora
                     molestias a nobis, laudantium, voluptas ab nesciunt accusamus repellat quis corporis
                    quos delectus alias corrupti officia pariatur quidem debitis ipsum repellendus
                    ipsa soluta dignissimos optio deserunt? Debitis sequi iste, dolor id accusamus
                    veritatis aspernatur exercitationem natus quae, laudantium cumque?</p>
                    <h4>Hurry Up! Only 98 Products laft in stock</h4>

                    <button>add to cart <i class="fa-solid fa-cart-arrow-down"></i></button>
                    <div class="icons">
                        <span> <i class="fa-regular fa-heart"></i></span>
                        <span> <i class="fa-solid fa-sliders"></i></span>
                        <span> <i class="fa-solid fa-print"></i></span>
                        <span><i class="fa-solid fa-share-nodes"></i></span>
                    </div>
            </div>
        </div>
    </div>

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

      <div class="back_to_top">
        <p>back to top</p>
      </div>

      <footer>
        <div><div class="container">
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
