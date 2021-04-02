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
<style>
.n-detail-entry{
  text-align: left;
  background: bisque;
  padding: 10px;
  margin: 0;
}
</style>
    </head>
<body class="n-nomargin" style="padding-bottom:200px;" >
  <!-- Nav Bar -->
    <div class="n-navbar n-blue ">
        <div class="n-left n-button n-blue-hover n-rounded"><i class="fa fa-shopping-basket n-padding"></i>  Nile-Shopping</div>
        <div class=" n-right">
            <button class="n-button n-rounded n-blue-hover"><a href="../"><i class="fa fa-home"></i>Home</a></button>
            <button class="n-button n-rounded n-blue-hover"><a href="../shop/"><i class="fa fa-reorder"></i>Shop</a></button>
            <button class="n-button n-rounded n-blue-hover"><a href="#"><i class="fa fa-cart-plus"></i> Cart</a></button>
<?php if($_SESSION['username']!=""){
  echo '<a href="../login/"><button class="n-button n-orange n-rounded n-blue-hover"><i class="fa fa-user"></i>'.$_SESSION['username'].'</button></a>';
}else{
  echo '<a href="../login/"><button class="n-button n-rounded n-blue-hover"><i class="fa fa-user"></i>Login</a></button></a>';
} ?>
        </div>
    </div>
<!-- Main Content -->
<div style="padding-left:100px;padding-right:100px">
  <br><br>
  <h2 class="n-center">My Cart</h2>
  <br><br>
<?php //----------------------------------------------------Commons -----

if(isset($_POST)){
  $Cart = $_POST;
  $_SESSION['cart']=$_POST;
}else{
  if(isset($_SESSION['cart'])){
    $Cart = $_SESSION['cart'];
  }
}


$str = file_get_contents('../data/items.json');
$database = json_decode($str,true);
$total = 0.0;

function getCategory($item){
  $directory = array("phone"=>"smartphone","tele"=>"television");
  return $directory[substr($item,0,strlen($item)-1)];
}

// -----------------------------------------------------------------------
foreach ($Cart as $item => $quantity) {
  $category = getCategory($item);
  echo '<div class="n-card">
    <img class="n-image" style="height:40px;margin-left:10px;" src="'.$database[$category][$item]["i-img"].'" alt="">
    <span class="n-text-large" style="margin-left:20px;">'.$database[$category][$item]["i-name"].'</span>
    <p class="n-right">Quantity: '.$quantity.'</p>
    <div style="text-align:right;margin:20px;display:none;"><hr>
      <p class="n-detail-entry"> Rate per Piece :<span class="n-right n-text-bold"> '.$database[$category][$item]["i-price"].'</span></p>
      <p class="n-detail-entry" style="background-color:white;"> Tax per Piece :<span class="n-right n-text-bold"> 18%</span></p>
      <p class="n-detail-entry">Item Total :<span class="n-text-bold n-right">'.(($database[$category][$item]["i-price"])*$quantity).'</span></p>--!>

    </div><hr>
    <p class="n-right"> Net Total :<span class="n-text-large">'.(($database[$category][$item]["i-price"])*$quantity).'</span></p>
    <button class="n-button n-rounded n-orange-hover" onclick="showHideDetails(this);"><i class="fa fa-angle-down"></i>Show details</button>
    <a href="../shop/"><button class="n-button n-rounded n-red-hover">Return to Shop</button></a>
  </div>';
  $total+=(($database[$category][$item]["i-price"])*$quantity);
}

//-----------------------------------------------------------------------

echo '
  <hr>
  <p class="n-left"> No.of items for checkout : '.count($Cart).'</p>
  <p class="n-right">Grand Total: <span class="n-text-large n-rupees"> '.$total.'</span></p>
';


?>

</div>

</body>
<script>
  function showHideDetails(element){
    var detailsDiv = element.parentElement.children[3]
    if(detailsDiv.style.display=='none'){
      detailsDiv.style.display='block';
      element.innerHTML='<i class="fa fa-angle-up"></i> Show Details';
    }else{
      detailsDiv.style.display='none';
      element.innerHTML='<i class="fa fa-angle-down"></i> Show Details';
    }
  }
</script>
</html>
