
<?php
  
  session_start();
include_once('config.php');

	if(!isset($_REQUEST['pid'])){
		
		exit();
    }
 
    $pid = $_REQUEST['pid'];
	
	$pname = $_REQUEST['p'];

	$case = $_REQUEST['action'];


    // Check if session varible is set or not
	
	if(!isset($_SESSION['cart'])){

        $_SESSION['cart'] = array();

        }

    switch($case):

    case 'add':

        // Now check if product is already stored in session variable

    if(in_array($pid, $_SESSION['cart'])){

       // redirect to product list and tell the user it was added to cart

    header('Location: '. $_SERVER['HTTP_REFERER']);

    }

    else{

        if(!preg_match('/^[0-9]{1,}$/i', $pid)){
        $sql = "INSERT INTO signin(productsid) VALUES('$pid')";
      mysqli_query($conn , $sql);
      
            header('Location:'. $_SERVER['HTTP_REFERER']);

        }else{

             array_push($_SESSION['cart'], $pid);        

              // redirect to product list and tell user it was added to cart


            header('Location:'. $_SERVER['HTTP_REFERER']);

            }

        }
    break;

case 'remove':

	if(!preg_match('/^[0-9]{1,}$/i', $pid)){

		header('Location: '. $_SERVER['HTTP_REFERER']);

        }else{

             $_SESSION['cart'] = array_diff($_SESSION['cart'], array($pid));

               // redirect to product list and tell the user it was removed from cart

             header('Location: cart.php');


                              }
break;

endswitch;
?>