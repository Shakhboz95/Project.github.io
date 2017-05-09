
<!DOCTYPE html>
<html>
<head>

  
<link rel="stylesheet" type="text/css" href="css/shop.css"/>

  <link rel="stylesheet" href="css/css.css" type="text/css" />
   <link rel="icon" type="image/png" href="../images/logo2.png">
 

   
  
<?php  
session_start();
$itemCount = 0;
include_once('config.php');

if(isset($_SESSION['cart'])){
   
   $itemCount = count(isset($_SESSION['cart']) ? $_SESSION['cart'] : array());

}
?>
<title>  Laptop </title>

</head>

<body>
<nav>

<div class="nav-bar">
<ul>
               <li><a href="../index.php">Home</a></li>

               <li><a href="tablet.php">Tablets</a></li>
               <li><a href="phone.php">Phones</a></li>
               <li><a href="access.php">Accessories</a></li>
               <li><a href="../LogOut.php">Log Out</a></li>
        </ul>
            <p id="cart_button">
            <a href="cart.php">
              <img src="css/cart.png">
              <input type="button" id="total_items"  value=" <?php echo $itemCount; ?> " >
            </a>
            </p>
        <div class="clear"></div>
</div>
</nav>
<h1>Laptops</h1>

<?php

      $qur = mysqli_query($conn,"SELECT * FROM  product WHERE productID<20");

        ?>
<div id="item_div">
<?php 
 while($r = mysqli_fetch_array($qur)){

                extract($r);
        ?>
  <div class="items">
    <img src="<?=$image?>">
    <a href="curd.php?action=add&pid=<?=$productID?>&p=<?=$productName?>">
    <input type="submit" value="Add To CART">
    </a>
    
    <div>

    <p style="color:#05bca9;"><?=$productName?></p>

    <p style="color:#05bca9;"><?=$price?></p>
</div>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;
display: inline-block;">More</button>
  
  <div id="id01" class="modal">
    <form class="modal-content animate" >
    <p><?=$char?></p>

    
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
  
  
  </form>
 
  </div>
  <script>
var modal = document.getElementById('id01');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

  </div>
  
<?php } ?>

</div>
</p>
</body>

</html>