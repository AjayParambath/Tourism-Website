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
            <button class="n-button n-rounded n-blue-hover"><a href="../cart/"><i class="fa fa-cart-plus"></i> Cart</a></button>
            <?php if($_SESSION['username']!=""){
              echo '<a href="../login/"><button class="n-button n-rounded n-orange n-blue-hover"><i class="fa fa-user"></i>'.$_SESSION['username'].'</button></a>';
            }else{
              echo '<a href="../login/"><button class="n-button n-rounded n-blue-hover"><i class="fa fa-user"></i>Login</a></button></a>';
            } ?>
          </div>
    </div>
<!--*Main Content-->
<?php
if($_SESSION['username']!=""){
  echo '<a href="logout.php"><button class= "n-text-center n-button n-blue-hover n-orange" >Already Logged In.. Logout ?</button></a>';
}else{
  if(isset($_POST['uname'])){
    $_SESSION['username']=$_POST['uname'];
    echo '<a href="logout.php"><button class= "n-text-center n-button n-blue-hover n-orange" >Already Logged In.. Logout ?</button></a>';
  }else{
  echo '
  <form method="post">
    <div class="n-logincontent">
       <div class="n-image n-center" style="text-align:center;margin:10px;">
      <img src="https://img.pngio.com/thin-line-user-icon-transparent-png-stickpng-user-icon-png-2232_1902.png" alt="" width=200 height=200 class="n-image">
    </div>
      <div>
        <b>Username</b><input type="text" class="n-f-width" placeholder="Enter Username" name="uname" value="Daniel" required>
        <br>
        <b>Password</b><input type="password" class="n-f-width" class="n-input" placeholder="Enter Password" name="psw" value="daniel123" required>
        <br>
        <button type="submit" class="n-button n-rounded n-nomargin n-f-width n-orange n-orange-hover">Login</button>
        <input type="checkbox" checked="checked" name="remember" style="margin:20px;"> Remember me
        <p class="n-right" onclick="tooltip(\'Paticheee!!\')">Forgot password?</p>
      </div>
    </div>
  </form>
  ';
}
}
?>


<!-- Information Bar -->
    <div class=" n-blue n-info" id="tooltip"><p>This is an information Bar</p></div>
<script src="../js/nile.js"></script>
</body>
</html>
