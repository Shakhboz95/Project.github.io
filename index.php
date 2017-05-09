<?php
include'function.php';
?>
<!DOCTYPE html>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
  <title>Online Store</title>
  <meta name="description" content="This website is about an online store for electronics.">  
  <meta name="author" content="Group Project">

        <link rel="shortcut icon" href="../favicon.ico"> 
      <link rel="stylesheet" type="text/css" href="css/style.css" />
      <script src="js/modernizr.custom.63321.js"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles/base.css">  
  <link rel="stylesheet" href="styles/main.css">
  <link rel="stylesheet" href="styles/vendor.css">   
  <link rel="stylesheet" href="styles/style_search.css"> 
  <link rel="stylesheet" href="styles/style.css">
  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Antic'>
  <link rel="shortcut icon" href="../favicon.ico"> 
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link rel="shortcut icon" href="../favicon.ico"> 
 
   
  
  <script src="scripts/modernizr.js"></script>
   <link rel="icon" type="image/png" href="images/logo2.png">
  <script src="js/modernizr.custom.63321.js"></script>
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  

  <script src="jquery-1.9.1.min.js"></script>
 
<!-- Include js plugin -->
<script src="assets/owl-carousel/owl.carousel.js"></script>
 
</head>

<body id="top">
	<!-- header 
   ================================================== -->
   <header>

      <div class="row">
           <div class="logo">
            <a href="index.php">WORLD OF IT</a>
         </div>
        <?php

                   if($_SESSION['logged']==true)
                     { 
               ?>
                         <h2 style="margin-top: 25px; color:#05bca9;">Welcome <?php echo $_SESSION['username'];?>!</h2>
               <?php
                     }
               ?> <nav id="main-nav-wrap">
              <ul class="main-navigation">
                <li class="current"><a class="smoothscroll"  href="#intro" title="">Home</a></li>
                <li><a class="smoothscroll"  href="#categories" title="">Categories</a></li>
                <li><a class="smoothscroll"  href="#cta" title="">Blog</a></li>         
                <li><a class="smoothscroll"  href="#features" title="">News</a></li>
                <li><a class="smoothscroll" href="#testimonials" title="">About us</a></li>
           <li class="highlight with-sep"><a href="LogOut.php" title="">Log Out</a></li>

               <li><a href="products/cart.php" id="cart" class="icon-shopping-cart" style="font-size:30px; color:#05bca9;"></a></li>
	
            	</ul>
              
			</nav>

         <a class="menu-toggle" href="#"><span>Menu</span></a>
      </div>
      
   </header>

   <section id="intro">

      <div class="shadow-overlay"></div>
      <div class="intro-content">
         <div class="row">
            <div class="col-twelve">
               <h5>Welcome to our online store!</h5>
               <h1>Online store!</h1>
            </div>  
         </div>               
      </div> 

   </section>

      <section id="categories">
      <div class="homepage-showcase">
          <div class="row">
            <div class="col-sm-3 col-xs-6 custom_showcase custom_showcase__1">
               <div class="custom_showcase_wrap">
                       <a href="products/laptop.php">
                       <img src="images/pc.jpg" style="width: 250px; height:400px;">
                         <div class="custom_showcase_cnt">
                           <div class="text">
                           <h3 style="">PERSONAL COMPUTERS</h3>
                           <p>Shop now!</p>
                           </div>
                        </div>
                     </a>
                  </div>
                  </div>
            <div class="col-sm-3 col-xs-6 custom_showcase custom_showcase__2">
               <div class="custom_showcase_wrap">
                  <a href='products/tablet.php'>
                           <img src="images/tablet.jpg" style="width: 250px; height:400px;">
                     <div class="custom_showcase_cnt">
                            <div class="text">
                           <h3>TABLETS</h3>
                           <p>Shop now!</p>
                        </div>
                        </div>
                  </a>
               </div>
            </div>
            <div class="col-sm-3 col-xs-6 custom_showcase custom_showcase__3">
               <div class="custom_showcase_wrap">
                  <a href='products/phone.php'>
                  <img src="images/mobile.jpg" style="width: 250px; height:400px;">
                <div class="custom_showcase_cnt">
                            <div class="text">
                           <h3>MOBILE PHONES</h3>
                           <p>Shop now!</p>
                        </div>
                        </div>
                  </a>
               </div>
            </div>
            <div class="col-sm-3 col-xs-6 custom_showcase custom_showcase__4">
               <div class="custom_showcase_wrap">
                  <a href='products/access.php'>
                   <img src="images/accessory.jpg" style="width: 250px; height:400px;">
                 <div class="custom_showcase_cnt">
                            <div class="text">
                           <h3>ACCESSORIES</h3>
                           <p>Shop now!</p>
                        </div>
                        </div>
                  </a>
               </div>
            </div>
            </div>
         </div>

      </section>

  


   <section id="cta">

    <div class="feautered_items">
            <div class="row">
              <div class="col-twelve">
                <h2 class="h01">Feauture Products</h2>
              </div>         
             </div>
            <div id="featured-item-carousel" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="item active"> 
                  <div class="col-sm-4">
                    <div class="product-image-wrapper">
                      <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="images/item1.jpg" style="height: 200px; width: 300px;" alt="" />
                          <h2>$800</h2>
                          <?php $price1=800;
                          $productID1=100;
                          $productName1="ASUS";
                          ?>
                          <h4>ASUS</h4>
                          <a href="products/curd.php?action=add&pid=<?=$productID1?>&p=<?=$productName1?>" class="btn btn-default add-to-cart" style="color:#05bca9;">
                          <i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="product-image-wrapper">
                      <div class="single-products">
                        <div class="productinfo text-center">
                          <img src="images/item2.jpg" style="height: 200px; width: 300px;" alt="" />
                          <h2>$500</h2>
                          <?php $price2=500;
                          $productID2=101;
                          $productName2="SAMSUNG";
                          ?>
                          <h4>SAMSUNG</h4>
                          <a href="products/curd.php?action=add&pid=<?=$productID2?>&p=<?=$productName2?>"
                          class="btn btn-default add-to-cart" style="color:#05bca9;"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="product-image-wrapper">
                      <div class="single-products">
                        <div class="productinfo text-center">
                          <img src="images/item3.png" style="height: 200px; width: 300px;" alt="" />
                          <h2>$400</h2>
                          <?php $price3=400;
                          $productID3=102;
                          $productName3="HUAWEI";
                          ?>
                          <h4>HUAWEI</h4>
                          <a href="products/curd.php?action=add&pid=<?=$productID3?>&p=<?=$productName3?>" class="btn btn-default add-to-cart" style="color:#05bca9;"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">  
                  <div class="col-sm-4">
                    <div class="product-image-wrapper">
                      <div class="single-products">
                        <div class="productinfo text-center">
                          <img src="images/item4.jpeg" style="height: 200px; width: 300px;" alt="" />
                         <h2>$450</h2>

                          <?php $price4=450;
                          $productID4=103;
                          $productName4="MOTOROLLA";
                          ?>
                          <h4>MOTOROLLA</h4>
                          <a href="products/curd.php?action=add&pid=<?=$productID4?>&p=<?=$productName4?>"
                          
                           class="btn btn-default add-to-cart" style="color:#05bca9;"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="product-image-wrapper">
                      <div class="single-products">
                        <div class="productinfo text-center">
                          <img src="images/item5.jpeg" style="height: 200px; width: 300px;" alt="" />
                          <h2>$150</h2>

                          <?php $price5=150;
                          $productID5=104;
                          $productName5="SMART WATCH";
                          ?>
                          <h4>SMART WATCH</h4>
                          <a href="products/curd.php?action=add&pid=<?=$productID5?>&p=<?=$productName5?>"
                           class="btn btn-default add-to-cart" style="color:#05bca9;"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="product-image-wrapper">
                      <div class="single-products">
                        <div class="productinfo text-center">
                          <img src="images/item6.jpeg" style="height: 200px; width: 300px;" alt="" />
                          <h2>$80</h2>

                          <?php $price6=80;
                          $productID6=105;
                          $productName6="BEATS X";
                          ?>
                          <h4>BEATS X</h4>
                          <a href="products/curd.php?action=add&pid=<?=$productID6?>&p=<?=$productName6?>"
                           class="btn btn-default add-to-cart" style="color:#05bca9;"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
               <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
                </a>
                <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
                </a>      
            </div>
          </div>
   </section> 

  
   <section id="features">

    <div class="row section-intro">
      <div class="col-twelve with-bottom-line">

        <h1>Latest news</h1>

      </div>      
    </div>

    <div class="row features-content">
      <div class="features-list block-1-3 block-s-1-2 block-tab-full group">
          <div class="bgrid feature">             
              <div class="ourserv"> 
                <article>
                  <h3 class="h05">Blackpills streaming platform launches, has mobile viewers in its sights</h3>
                  <p>Blackpills has landed. Thursday, May 4, the streaming platform launched in 15 European countries, as well as the USA and Canada. What makes this streaming service different is that it specializes in short series designed for viewing on mobile devices.</p>
                  <a href="http://www.gadgetsnow.com/tech-news/blackpills-streaming-platform-launches-has-mobile-viewers-in-its-sights/articleshow/58545512.cms"><button class="button" ><span>Read more</span></button></a>
                </article>
            </div>             

          </div> 

          <div class="bgrid feature"> 
              <div class="ourserv">  
                <article>
                  <h3 class="h05">With Over 4.5 Million Units Sold Worldwide, This is The Most Affordable Solution to Find Your Lost Items!</h3>
                  <p>Have you ever lost your car on a parking lot? It happens. You park and go shopping. When you get back, you don't have a clue where your car is. Then you start roaming around clicking on the panic button on your car keys so the alarm goes off. It can be frustrating, especially on a hot, sunny day.</p>
                  <a href="http://www.gadgetsnow.com/tech-news/quikr-acquires-on-demand-services-player-zimmber-for-10-million/articleshow/58537574.cms"><button class="button"><span>Read more</span></button></a>
                 </article>
              </div>             
        </div> 
                    
         <div class="bgrid feature"> 
            <div class="ourserv"> 
                <article>
                  <h3 class="h05">Here's what Apple didn't get right about iPhone 7 demand, according to CEO Tim Cook</h3>
                  <p>SAN FRANCISCO: Apple sold fewer iPhones than expected in the first three months of the year, but that bare statistic hides an important bright spot for the company. The average selling price of an iPhone grew more than it has since the days of the iPhone 6 .</p>
                  <a href="http://www.gadgetsnow.com/tech-news/heres-what-apple-didnt-get-right-about-iphone-7-demand-according-to-ceo-tim-cook/articleshow/58489429.cms"><button  class="button"><span>Read more</span></button></a>
                </article>
            </div>             
          </div> 

      </div>  
    </div> 
    
  </section> 



   <section id="testimonials">

      <div class="row">
         <div class="col-twelve">
            <h2 class="h01">About Us</h2>
         </div>         
      </div>      

      <div class="row flex-container">
    
         <div id="testimonial-slider" class="flexslider">

            <ul class="slides">

               <li>
                  <div class="testimonial-author">
                     <img src="images/avatars/Shahboz.png" alt="Author image">
                     <div class="author-info">
                        Shakhboz
                        <span class="position">Student</span>
                     </div>
                  </div>

                  <p>
                      My name is Shakhboz Juraev. I am a second-year student at Inha University in Tashkent, department of Information and Communication Engineering. I am highly interested in computer programming.
                  </p>                   
                                  
               </li> 

               <li> 

                  <div class="testimonial-author">
                     <img src="images/avatars/Madinabonu.png" alt="Author image">
                     <div class="author-info">
                        Madinabonu
                        <span>Student<span>
                     </div>
                  </div> 

                  <p>
                    My name is Madinabonu Kholmatova. I am a second-year student at Inha University in Tashkent, department of Information and Communication Engineering. I am highly interested in computer programming.
                  </p>
                                         
               </li> <!-- /slide -->

               <li> 

                  <div class="testimonial-author">
                     <img src="images/avatars/Beknazar.png" alt="Author image">
                     <div class="author-info">
                        Beknazar
                        <span>Student</span>
                     </div>
                  </div> 

                  <p>
                  My name is Beknazar Norkuziev. I am a second-year student at Inha University in Tashkent, department of Information and Communication Engineering. I am highly interested in computer programming.
                  </p>    
                  
                                         
               </li> <!-- /slide -->

<li> 

                  <div class="testimonial-author">
                     <img src="images/avatars/Saidakbar.png" alt="Author image">
                     <div class="author-info">
                        Saidakbar
                        <span>Student</span>
                     </div>
                  </div> 

                  <p>
                  My name is SaidAkbar Egamberdiev. I am a second-year student at Inha University in Tashkent, department of Information and Communication Engineering. I am highly interested in computer programming.
                  </p>
                
                                         
               </li> <!-- /slide -->

            </ul> <!-- /slides -->

         </div> <!-- /celebrity slider -->         
        
      </div> <!-- /flex-container -->

   </section> <!-- /celebrities -->
   


   <!-- Footer
   ================================================== -->
   <footer>

    <div class="footer-main">

      <div class="row">  

          <div class="col-two tab-1-3 mob-1-2 site-links">

            <h4>Site Links</h4>

            <ul>
              <li><a href="#intro">Home</a></li>
            <li><a href="#categories">Categories</a></li>
            <li><a href="#cta">Blog</a></li>
            <li><a href="#features">News</a></li>
            <li><a href="testimonials">About us</a></li>
            <li><a href="tutorials.html">Sign in</a></li>
          </ul>
          </div> <!-- /site-links -->  

          <div class="col-two tab-1-3 mob-1-2 social-links">

            <h4>Social</h4>

            <ul>
                  <li><a href="https://twitter.com/">Twitter</a></li>
                  <li><a href="https://www.facebook.com/">Facebook</a></li>
                  <li><a href="http://linkedin.com/">Linkedin</a></li>
                  <li><a href="https://www.instagram.com/">Instagram</a></li>
               </ul>
                      
          </div> <!-- /social --> 

          <div class="col-four tab-1-3 mob-full footer-subscribe">

            <h4>Subscribe</h4>

            <div class="subscribe-form">

            <img src="images/facebook.png" style="height: 50px; width: 50px;">
            <img src="images/linkedin.png" style="height: 50px; width: 50px;">
            <img src="images/instagram.png" style="height: 50px; width: 50px;">
            <img src="images/twitter.png" style="height: 50px; width: 50px;">
            </div>            
                      
          </div> <!-- /subscribe -->         

        </div> <!-- /row -->

    </div> <!-- /footer-main -->


      <div class="footer-bottom">

        <div class="row">

          <div class="col-twelve">
            <div class="copyright">
              <span>© All rights reserved 2017</span> 
                          
             </div>

             <div id="go-top" style="display: block;">
                <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon ion-android-arrow-up"></i></a>
             </div>         
          </div>

        </div> <!-- /footer-bottom -->      

      </div>

   </footer>  

   <div id="preloader"> 
      <div id="loader"></div>
   </div> 

   <!-- Java Script (I put the scripts at the end in order to make faster the page loading. The scripts will work after loading the whole page)
   ================================================== --> 
   <script src="scripts/jquery-1.11.3.min.js"></script>
   <script src="scripts/jquery-migrate-1.2.1.min.js"></script>
   <script src="scripts/plugins.js"></script>
   <script src="scripts/main.js"></script>

</body>

</html>