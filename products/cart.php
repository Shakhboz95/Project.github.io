<?php

	session_start();

	include_once('config.php');

		$itemCount = 0;

        if(isset($_SESSION['cart'])){

        $itemCount = count(isset($_SESSION['cart']) ? $_SESSION['cart'] : array());

        }
?>
<!DOCTYPE >


<html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="css/css.css" type="text/css" />
        <link rel="stylesheet" type="text/css" href="css/shop.css">
        
   <link rel="icon" type="image/png" href="../images/logo2.png">
		<title>Shopping Cart</title>

    </head>

<body>

<nav>
   <div class="nav-bar">
        <ul>
               <li><a href="../index.php">Home</a></li>

               <li><a href="laptop.php">Laptops</a></li>
               <li><a href="tablet.php">Tablets</a></li>
               <li><a href="phone.php">Phones</a></li>
               <li><a href="access.php">Accessories</a></li>
               <li><a href="../LogOut.php">Log Out</a></li>
        </ul>
            <p id="cart_button">
              <img src="css/cart.png">
              <input type="button" id="total_items"  value=" <?php echo $itemCount; ?> " >
            </p>
        <div class="clear"></div>
  </div>


</nav>

<h2 class="hlab">Shopping Cart</h2>
			<div class="container main-cude">
<div id="border1" style="width: 90%;">

    <?php
    // If cart is empty and user click on cart button show default product list

    if($itemCount == 0){

    echo '<b>Your Cart is empty!.';

    echo ' Add items to it. </b>';

    ?>

<h2> Go our blogs:<br/></h2>
<ul>
<li><a href="laptop.php"> Laptop</li>
<li><a href="tablet.php">Tablet</li>
<li><a href="phone.php">Phone</li>
<li><a href="access.php">Accessories</li>
</div>

       <?php }

    // If user add product to its cart

    else{?>
        <h2>Products in your CART</h2>

        <?php

			$pids = "";

			foreach($_SESSION['cart'] as $id){

			$pids = $pids. $id.',';

            }


                        $pids = rtrim($pids, ",");

						$sql = "SELECT productID, productName, price FROM product WHERE productID IN (".$pids.")";

						$qur = mysqli_query($conn,$sql);

						$row = mysqli_num_rows($qur);  // Count num of rows

						if($row == 0){

					         echo '<p class="msg">No products found in your cart.</p>';

						}else{

                        ?>

        <ul class="item-cont">

				<li>Product Name</li>
				<li>Price</li>

		</ul>

		<div class="clear"></div>
        <?php

            $totalPrice = '';

			while($res = mysqli_fetch_array($qur)){

			extract($res);

			$totalPrice += $price;

        ?>


        <div class="clear"></div>
            <br/>
                <div class="item-cont"><li><?=$productName?></li></div>

                <div class="item-cont"><li>$<?=$price?>
                </li></div>

                <a href="curd.php?action=remove&pid=<?=$productID?>&p=<?=$productName?>" class="button-cart red-bt" style="display: inline;">Remove</a>




        <?php } ?>


            <div style="margin-top: 20px; border-top: #999 solid 1px;">


                <div class="inline-pr"><b>Total</b></div>

				<div class="inline-pr" style="font-weight: bold;"> $<?=$totalPrice?></div>

				<div class="inline-pr">&nbsp;</div>


            </div>


        <?php }} ?>


    <div class="clear"></div>



</body>
</html>
