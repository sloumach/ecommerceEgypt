<header>
    <div class="container top-nav">
      <a href="index.html" class="logo"><img src="img/logo-black.png" alt=""></a>
      <form action="" class="search">
        <input type="search" placeholder="search for products...">
        <button type="submit">search</button>
      </form>
      <div class="cart_header">
        <div onclick=" open_cart()" class="icon_cart ">
          <i class="fa-solid fa-bag-shopping"></i>
          <span class="count_item">0</span>


        </div>
        <div class="tottal_price">
          <p>my cart:</p>
          <p class="price_cart_head">$0</p>
        </div>
      </div>
    </div>
    <nav>
      <div class="links container">
        <i onclick=" open_menu()" class="fa-solid fa-bars btn_open_menu"></i>
        <ul id="menu">
          <span onclick=" close_menu()"  class="bg_overley"></span>
          <i onclick=" close_menu()" class="fa-regular fa-circle-xmark btn_close_menu"></i>
          <img class="logo_menu" src="img/logo-black.png" alt="">

          <li ><a href="{{ route('home') }}">home</a></li>
          <li><a href="{{ route('products') }}">all products</a></li>
          <li><a href="{{ route('aboutus') }}">about us</a></li>
          <li><a href="{{ route('contactus') }}">contact</a></li>
        </ul>
        <div class="ioging_signup">
            <a href="{{ route('login') }}">login <i class="fa-solid fa-right-to-bracket"></i></a>

          <a href="{{ route('register') }}">sign up <i class="fa-solid fa-user-plus"></i></a>

        </div>
      </div>
    </nav>
  </header>
  <div class="cart">
    <div class="top_cart">
        <h3>my cart <span class="count_item_cart">(0 Item in cart)</span></h3>
        <span onclick="close_cart()" class="close_cart"><i class="fa-regular fa-circle-xmark"></i></span>
    </div>
    <div class="items_in_cart"></div>
    <div class="bottom_cart">
        <div class="tottal">
            <p>cart subtotal</p>
            <p class="price_cart_total">$0</p>
        </div>
        <div class="button_cart">
            <a href="checkout.html" class="btn_cart">proceed to checkout</a>
            <button onclick="close_cart()" class="btn_cart trans_bg">shop more</button>
        </div>
    </div>
</div>
