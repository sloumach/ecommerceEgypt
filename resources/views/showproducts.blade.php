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

    <div class="top_page">
        <div class="container">
            <h1>Experience the Future of Technogy with Our Topico</h1>
            <p>Find everything you need to
               transform your home into
               a smart, connected space. Our
               Topico store offers a wide range of devices to fit your needs</p>
        </div>
    </div>

    <section class="all_products">
        <div class="container">

          <span class="btn_filter" onclick=" open_close_filter()">
          filter <i class="fa-solid fa-filter"></i>
          </span>


            <div class="filter">
               <h2>filter</h2>
               <div class="filter_item">
                <h4>categorie</h4>
                <div class="contanier">


                  <div class="item">
                    <span>Phones</span>
                    <input type="checkbox">
                  </div>


                  <div class="item">
                    <span>Tablts</span>
                    <input type="checkbox">
                  </div>

                  <div class="item">
                    <span>Elestronics</span>
                    <input type="checkbox">
                  </div>
                  <div class="item">
                    <span>TV</span>
                    <input type="checkbox">
                  </div>
                  <div class="item">
                    <span>Fashion</span>
                    <input type="checkbox">
                  </div>

                  <div class="item">
                    <span>Watches</span>
                    <input type="checkbox">
                  </div>

                </div>
               </div>


                 <div class="filter_item">
                <h4>Brand</h4>
                <div class="contanier">


                  <div class="item">
                    <span>Apple</span>
                    <input type="checkbox">
                  </div>


                  <div class="item">
                    <span>samsung</span>
                    <input type="checkbox">
                  </div>

                  <div class="item">
                    <span>intel</span>
                    <input type="checkbox">
                  </div>
                  <div class="item">
                    <span>oppo</span>
                    <input type="checkbox">
                  </div>
                  <div class="item">
                    <span>Xiamoi</span>
                    <input type="checkbox">
                  </div>

                  <div class="item">
                    <span>Huewei</span>
                    <input type="checkbox">
                  </div>

                </div>
               </div>





               <div class="filter_item">
                <h4>color</h4>
                <div class="contanier">


                  <div class="item">
                    <span class="color" style="background: red;"></span>
                    <input type="checkbox">
                  </div>




                  <div class="item">
                    <span class="color" style="background: blue;"></span>
                    <input type="checkbox">
                  </div>



                  <div class="item">
                    <span class="color" style="background: black;"></span>
                    <input type="checkbox">
                  </div>



                  <div class="item">
                    <span class="color" style="background: orangered;"></span>
                    <input type="checkbox">
                  </div>


                  <div class="item">
                    <span class="color" style="background: green;"></span>
                    <input type="checkbox">
                  </div>

                  <div class="item">
                    <span class="color" style="background: yellow;"></span>
                    <input type="checkbox">
                  </div>

                </div>
               </div>
            </div>
            <div id="products_dev" class="products_dev">

            </div>
        </div>

        <div class="pagination">
          <span class="btn_page prev"><i class="fa-solid fa-backward-step" ></i></span>
         <a href=""> <span class="mun_page active">1</span></a>
         <a href=""> <span class="mun_page">2</span></a>
         <a href=""> <span class="mun_page ">3</span></a>
          <span class="btn_page next"><i class="fa-solid fa-forward-step" ></i></span>
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


<script src="js/main.js"></script>
<script src="js/all_products.js"></script>

</html>
