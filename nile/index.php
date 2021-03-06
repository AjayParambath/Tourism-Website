<?php session_start();
if(!(isset($_SESSION['username']))){
  $_SESSION['username']="";
}
?>
<html>
    <head>
        <title>Nile - 24/7</title>
        <link rel="stylesheet" href="css/nile-min.css">
        <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <style>
.back1{
  background-image: url('img/back_3.png');
  color: black;
  background-size: cover;
  background-repeat: no-repeat;
}

.back2{
  background-image: url('img/back_1.png');
  color: black;
    background-size: cover;
    background-repeat: no-repeat;
}

.back3{
  background-image: url('img/back_2.png');
  color: black;
    background-size: cover;
    background-repeat: no-repeat;
}
    </style>
<body class="n-nomargin">
  <!-- Nav Bar -->
    <div class="n-navbar n-blue">
        <div class="n-left n-button n-blue-hover n-rounded"><i class="fa fa-shopping-basket n-padding"></i>  Nile-Shopping</div>
        <div class=" n-right">
            <button class="n-button n-rounded n-blue-hover"><a href=""><i class="fa fa-home"></i>Home</a></button>
            <button class="n-button n-rounded n-blue-hover"><a href="shop/"><i class="fa fa-reorder"></i>Shop</a></button>
            <button class="n-button n-rounded n-blue-hover"><a href="cart/"><i class="fa fa-cart-plus"></i> Cart</a></button>
            <?php if($_SESSION['username']!=""){
              echo '<a href="login/"><button class="n-button n-orange n-rounded n-blue-hover"><i class="fa fa-user"></i>'.$_SESSION['username'].'</button></a>';
            }else{
              echo '<a href="login/"><button class="n-button n-rounded n-blue-hover"><i class="fa fa-user"></i>Login</a></button></a>';
            } ?>
        </div>
    </div>
    <!-- Main Content -->
    <div class="n-showreel">
      <h3 class="n-center">Todays Top Deals</h3>
      <div class="n-reel back1 n-item" style="opacity: 1;color:orange !important;">
        <div class="n-reel-caption">
          <p class="n-caption-text">Samsung UHD - Smart TV</p>
          <p class="n-caption-text">Ultra HD - 4K</p>
          <p class="n-center" style="bottom: 0;position: absolute;right: 20%;">Rs.36,000</p>
        </div>
        <div style="text-align:center;">
          <img class="n-image" height="400" src="https://rukminim1.flixcart.com/image/416/416/jzog9e80/television/x/q/z/samsung-ua43n5300arlxl-ua43n5300arxxl-original-imafjmyxgh8r2nef.jpeg?q=70" alt="">
        </div>
      </div>
      <div class="n-reel back2 n-item" style="position:relative;opacity: 0;">
        <div class="n-reel-caption">
          <p class="n-caption-text">Motorola UHD-Smart TV</p>
          <p class="n-caption-text">Ultra HD - 4K</p>
          <p class="n-center" style="bottom: 0;position: absolute;right: 20%;">Rs.36,000</p>
        </div>
        <div style="text-align:center;">
          <img class="n-image" height="400" src="https://rukminim1.flixcart.com/image/416/416/k3hmj680/television/e/b/r/motorola-65sauhdm-original-imafm59fztjjshhm.jpeg?q=70" alt="">
        </div>
      </div>
      <div class="n-reel back3 n-item" style="position:relative;opacity: 0;">
        <div class="n-reel-caption">
          <p class="n-caption-text">The Power - Beast</p>
          <p class="n-caption-text">Coming Soon</p>
          <p class="n-center" style="bottom: 0;position: absolute;right: 20%;">Sale Begins Tomorrow</p>
        </div>
        <div style="text-align:center;">
          <img class="n-image" height="400" src="https://rukminim1.flixcart.com/image/416/416/k7dnonk0/mobile/q/d/h/realme-6-pro-rbs0624in-original-imafpmfthne7brnj.jpeg?q=70" alt="">
        </div>
      </div>
  </div>
</body>
<!-- <script src="js/nile.js"></script> -->
<script src="js/home.js"></script>

</html>
