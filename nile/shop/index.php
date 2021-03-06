<?php session_start();
if(!(isset($_SESSION['username']))){
  $_SESSION['username']="";
}
?>
<html>
    <head>
        <title>Nile - 24/7</title>
        <link rel="stylesheet" href="../css/nile-min.css">
        <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
<body class="n-nomargin">
  <!-- Nav Bar -->
    <div class="n-navbar n-blue ">
        <div class="n-left n-button n-blue-hover n-rounded"><i class="fa fa-shopping-basket n-padding"></i>  Nile-Shopping</div>
        <div class=" n-right">
            <button class="n-button n-rounded n-blue-hover"><a href="../"><i class="fa fa-home"></i>Home</a></button>
            <button class="n-button n-rounded n-blue-hover"><a href="../shop/"><i class="fa fa-reorder"></i>Shop</a></button>
            <button class="n-button n-rounded n-blue-hover" onclick="proceedToKart()"><i class="fa fa-cart-plus"></i> Cart</button>
            <?php if($_SESSION['username']!=""){
              echo '<a href="../login/"><button class="n-orange n-button n-rounded n-blue-hover"><i class="fa fa-user"></i>'.$_SESSION['username'].'</button></a>';
            }else{
              echo '<a href="../login/"><button class="n-button n-rounded n-blue-hover"><i class="fa fa-user"></i>Login</a></button></a>';
            } ?>
          </div>
    </div>
    <!-- Main Content -->
    <div class="n-content">

      <div class="n-categories">
        Categories
        <li class="n-category n-padding n-blue-hover" onclick="SwitchTab('all')">All Items</li>
        <ul>
          <li class="n-category n-padding n-blue-hover" onclick="SwitchTab('television')">Televisions</li>
          <li class="n-category n-padding n-blue-hover" onclick="SwitchTab('smartphone')">Smartphones</li>
        </ul>
      </div>

      <div class="n-items">
        <h5 id="item-section" class="n-center" onclick="showThis(this)">Searching. . . .</h5>
        <div>
        </div>
        <h5 class="n-center">End of Search Results</h5>
      </div>
    </div>

<!-- Information Bar -->
    <div class=" n-blue n-info" id="tooltip"><p>Loading Results</p></div>

<!-- Bottom Bar -->
  <form  id="goToKart" action="../cart/" method="post">
    <div class="n-selected-bar n-blue n-inline n-center" style="justify-content: center;">



        <span class="n-button n-rounded n-blue-hover n-fixed-left">Total: &#8377;<span class="n-text-large" id="KartTotal">0.0</span></span>
        <button onclick="proceedToKart()" class="n-button n-rounded n-blue-hover n-fixed-right"><i class="fa fa-cart-plus"></i> CheckOut Items</a>
    </div>
  </form>
</body>
<script>
<?php

if (isset($_SESSION['cart'])){
  echo 'var PrevKart = '.json_encode($_SESSION['cart']);
}else{
  echo 'var PrevKart = [];';
}

?>
</script>
<script src="../js/nile.js"></script>
<script src="../js/rupees.js"></script>

</html>
