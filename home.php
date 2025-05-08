<!DOCTYPE html>
<html >
<head>
<?php
session_start();

$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
$count = count($cart);
$total = 0;

foreach ($cart as $item) {
    $total += $item['price'] * $item['quantity'];
}
?>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>alibaba | Online Store</title>

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="swiperJs/swiper-bundle.min.css" />

    <!-- Link Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Link File CSS -->
    <link rel="stylesheet" href="styleaf.css">
</head>
<body class="menu-side-in-bag">

    <header>

        <div class="header-info">
            <div class="contanier">
                <img src="Capture.PNG" alt="">
            

            <div class="search-bar">
                <form action="">
                    <input type="search" placeholder="Search for your order...">
                    <button class="btn-srch">Search</button>
                </form>
            </div>
            
            <div class="card">
                <div class="price">
                    <p>Cart:</p>
                    <span><?php echo number_format($total, 2); ?> USD</span>
                </div>
                <a href="cart1.php" class="cart-btn"><i class="fa-solid fa-bag-shopping"></i> <span class="count-in-card"><?php echo $count; ?></span></a>
            
            </div>
            </div>
        </div>
    
        <div class="header-bottom">
           <div class="contanier">
            <i id="open-side" class="fa-solid fa-bars"></i>
            <ul class="nav-links">
                <li><a href="index.html">Home</a></li>
                <li>
                    <a href="features.html">Beauty</a>
                    <div class="drobdwon">
                        <ul><li><a href="Beauty.html">Beauty</a></li></ul>
                        <ul><li><a href="shoespage.html">Shoes & Accessories</a></li></ul>
                        <ul><li><a href="jewelry.html">Jewelry & Eyewear</a></li></ul>
                        <ul><li><a href="clothes1.html">Apparel & Accessories</a></li></ul>
                    </div>
                </li>
                <li>
                    <a href="carspage.html">Cars</a>
                </li>
                <li>
                    <a href="elect.html">Mobile Phones & Accessories</a>
                </li>
                <li><a href="clothes1.html">Clothing</a></li>
                <li><a href="sport.html">Consumer Electronics</a></li>
                <li><a href="index.html">Furniture</a></li>
                <li style="margin-right: 20px;"><a href="new_products.php">New Products</a></li>
                <li style="margin-right: 20px;"><a href="favorites.php">Favorites</a></li>
            </ul>
           </div>
        </div>
    </header>
    
    <section class="slide-sec contanier">
        <div id="side-bar" class="side-bar">
            <h5><i class="fa-solid fa-bars"></i> SHOP BY DEPARTMENT</h5>
            <img class="logo-slide" src="Capture.PNG" alt="">
            <i id="btn-close" class="fa-solid fa-bars fa-times"></i>
            <ul class="side-links">
                <a href="home.html"><li>Home Appliances</li></a>
                <a href="sport.html"><li>Sports & Entertainment</li></a>
                <a href="clothes1.html"><li>Apparel & Accessories</li></a>
                <a href="furniture1.html"><li>Furniture</li></a>
                <a href="jewelry.html"><li>Jewelry & Eyewear</li></a>
                <a href="clothes1.html"><li>Clothing</li></a>
                <a href="shoespage.html"><li>Shoes</li></a>
                <a href="jewelry.html"><li>Accessories</li></a>
                <a href="elect.html"><li>Consumer Electronics</li></a>
                <a href="Beauty.html"><li>Beauty</li></a>
                <a href="new_products.php"><li>New Products</li></a>
                <a href="favorites.php"><li>Favorites</li></a>
            </ul>
        </div>
    </section>

        <div class="slide">
            <div class="slide-swp swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide swiper-slide1">
                        <img src="img/slide1.jpg" alt="">
                    </div>
                    <div class="swiper-slide swiper-slide2">
                        <img src="img/slide2.jpg" alt="">
                    </div>
                    <div class="swiper-slide swiper-slide3">
                        <img src="img/slide3.jpg" alt="">
                    </div>
                    <div class="swiper-slide swiper-slide3">
                        <img src="img/slide4.jpg" alt="">
                    </div>
                    <div class="swiper-slide swiper-slide3">
                        <img src="img/slide5.png" alt="">
                    </div>
                </div>
                <div class="swiper-pagination"></div>
              </div>
        </div>
    </section>
    
    <div class="features contanier">
        <div class="boxs">
            <div class="box">
              
                <div class="content">
                    <h6>Free Shipping</h6>
                    <p>Delivery within 1 to 3 days</p>
                </div>
                <img src="img/features1.png" alt="">
                </div>
                
                <div class="box">
                    <div class="content">
                        <h6>Money Guarantee</h6>
                        <p>14-day money back guarantee</p>
                    </div>
                    <img src="img/features2.png" alt="">
                </div>
                
                <div class="box">
                    <div class="content">
                        <h6>24/7 Online Support</h6>
                        <p>Technical support always ready</p>
                    </div>
                    <img src="img/features3.png" alt="">
                </div>
                
                <div class="box">
                    <div class="content">
                        <h6>Secure Payment</h6>
                        <p>All payment methods accepted</p>
                    </div>
                    <img src="img/features4.png" alt="">
                </div>
                
                <div class="box">
                    <div class="content">
                        <h6>Daily Offers</h6>
                        <p>Discounts up to 50%</p>
                    </div>
                    <img src="img/features5.png" alt="">
                </div>
                </div>
                </div>
                
                <div class="banner contanier">
                <div class="boxs">
                    <div class="box">
                        <a href="#"><img src="img/banner-1.jpg" alt="">
                            <span class="glass-hover"></span></a>
                    </div>
                    <div class="box">
                        <a href="#"><img src="img/banner-2.jpg" alt="">
                            <span class="glass-hover"></span>
                        </a>
                    </div>
                    <div class="box">
                        <a href="#"><img src="img/banner-3.jpg" alt="">
                            <span class="glass-hover"></span>
                        </a>
                    </div>
                </div>
                </div>
                
                <section class="deals contanier swiper mySwiper">
                <div class="section-head">
                    <h4>Special <span>Offers</span></h4>
                </div>
        <div class="boxs swiper-wrapper">

            <div class="box product-item swiper-slide">
              <a href="#">  
                <div class="product-btn">
                <ul class="product-action">
                    <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                    <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                    <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                </ul>
                </div>
                <div class="div-img">
                <span class="discount">34%</span>
                <img src="img/product-14.jpg" class="img-product">
                <img src="img/product-2.jpg" class="hover-img">
                </div>
                <div class="content">
                <a href="buy product.html" class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                </div>
                <div class="price">
                    <span>$120.00</span>
                    <del>$125.00</del>
                </div>
                <p class="product-parg">Typi non habent claritatem insitam, est usus legentis in iis qui facit...</p>
                <h4>Hurry Up! Offer ends in:</h4>

                
                <ul class="countdown">
                    <li><span>0</span> Days</li>
                    <li><span>19</span> Hours</li>
                    <li><span>54</span>Mins</li>
                    <li><span>39</span>Sec</li>
                </ul>
                
                </div>
              </a>
            </div>
            <div class="box product-item swiper-slide">
                <a href="#">  
                  <div class="product-btn">
                  <ul class="product-action">
                      <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                      <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                      <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                  </ul>
              </div>
              <div class="div-img">
                  <span class="discount">34%</span>
                  <img src="img/product-13.jpg" class="img-product">
                  <img src="img/product-2.jpg" class="hover-img">
              </div>
              <div class="content">
                  <a href="buy product.html" class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                  <div class="stars">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star-half-stroke"></i>
                  </div>
                  <div class="price">
                      <span>$120.00</span>
                      <del>$125.00</del>
                  </div>
                  <p class="product-parg">Typi non habent claritatem insitam, est usus legentis in iis qui facit...</p>
                  <h4>Hurry Up! Offer ends in:</h4>
  
                  
                  <ul class="countdown">
                      <li><span>0</span> Days</li>
                      <li><span>19</span> Hours</li>
                      <li><span>54</span>Mins</li>
                      <li><span>39</span>Sec</li>
                  </ul>
                  
              </div>
                </a>
              </div>

              <div class="box product-item swiper-slide">
                <a href="#">  
                  <div class="product-btn">
                  <ul class="product-action">
                      <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                      <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                      <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                  </ul>
              </div>
              <div class="div-img">
                  <span class="discount">34%</span>
                  <img src="img/product-9.jpg" class="img-product">
                  <img src="img/product-2.jpg" class="hover-img">
              </div>
              <div class="content">
                  <a href="buy product.html" class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                  <div class="stars">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star-half-stroke"></i>
                  </div>
                  <div class="price">
                      <span>$120.00</span>
                      <del>$125.00</del>
                  </div>
                  <p class="product-parg">Typi non habent claritatem insitam, est usus legentis in iis qui facit...</p>
                  <h4>Hurry Up! Offer ends in:</h4>
  
                  
                  <ul class="countdown">
                      <li><span>0</span> Days</li>
                      <li><span>19</span> Hours</li>
                      <li><span>54</span>Mins</li>
                      <li><span>39</span>Sec</li>
                  </ul>
                  
              </div>
                </a>
              </div>


              <div class="box product-item swiper-slide">
                <a href="#">  
                  <div class="product-btn">
                  <ul class="product-action">
                      <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                      <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                      <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                  </ul>
              </div>
              <div class="div-img">
                  <span class="discount">34%</span>
                  <img src="img/product-8.jpg" class="img-product">
                  <img src="img/product-2.jpg" class="hover-img">
              </div>
              <div class="content">
                  <a href="#" class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                  <div class="stars">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star-half-stroke"></i>
                  </div>
                  <div class="price">
                      <span>$120.00</span>
                      <del>$125.00</del>
                  </div>
                  <p class="product-parg">Typi non habent claritatem insitam, est usus legentis in iis qui facit...</p>
                  <h4>Hurry Up! Offer ends in:</h4>
  
                  
                  <ul class="countdown">
                      <li><span>0</span> Days</li>
                      <li><span>19</span> Hours</li>
                      <li><span>54</span>Mins</li>
                      <li><span>39</span>Sec</li>
                  </ul>
                  
              </div>
                </a>
              </div>

        </div>

    </section>

    <section class="sale-sec contanier swiper mySwiper">

        <div class="section-head">
            <h4>Discounts on products</span> </h4>
        </div>
        
        <div class="boxs swiper-wrapper">

            <div class="box column product-item swiper-slide">

                <div class="product-btn">
                    <ul class="product-action">
                        <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                    </ul>
                </div>

                <div class="div-img">
                    <span class="discount">34%</span>
                    <img src="img/product-8.jpg" class="img-product">
                    <img src="img/product-1.jpg" class="hover-img">
                </div>
                <div class="content">
                    <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <div class="price">
                        <span>$120.00</span>
                        <del>$125.00</del>
                    </div>
        
                </div>
            </div>

            <div class="box column product-item swiper-slide">

                <div class="product-btn">
                    <ul class="product-action">
                        <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                    </ul>
                </div>
                <div class="div-img">
                    <span class="discount">34%</span>
                    <img src="img/product-2.jpg" class="img-product">
                    <img src="img/product-9.jpg" class="hover-img">
                </div>
                <div class="content">
                    <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <div class="price">
                        <span>$120.00</span>
                        <del>$125.00</del>
                    </div>
        
                </div>
            </div>

            <div class="box column product-item swiper-slide">

                <div class="product-btn">
                    <ul class="product-action">
                        <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                    </ul>
                </div>
                <div class="div-img">
                    <span class="discount">34%</span>
                    <img src="img/product-3.jpg" class="img-product">
                    <img src="img/product-10.jpg" class="hover-img">
                </div>
                <div class="content">
                    <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <div class="price">
                        <span>$120.00</span>
                        <del>$125.00</del>
                    </div>
        
                </div>
            </div>


            <div class="box column product-item swiper-slide">

                <div class="product-btn">
                    <ul class="product-action">
                        <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                    </ul>
                </div>
                <div class="div-img">
                    <span class="discount">34%</span>
                    <img src="img/product-4.jpg" class="img-product">
                    <img src="img/product-8.jpg" class="hover-img">
                </div>
                <div class="content">
                    <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <div class="price">
                        <span>$120.00</span>
                        <del>$125.00</del>
                    </div>
        
                </div>
            </div>


            <div class="box column product-item swiper-slide">
                <div class="div-img">
                    <span class="discount">34%</span>
                    <img src="img/product-9.jpg" class="img-product">
                    <img src="img/product-16.jpg" class="hover-img">
                </div>
                <div class="content">
                    <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <div class="price">
                        <span>$120.00</span>
                        <del>$125.00</del>
                    </div>
        
                </div>
            </div>


            <div class="box column product-item swiper-slide">

                <div class="product-btn">
                    <ul class="product-action">
                        <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                    </ul>
                </div>
                <div class="div-img">
                    <span class="discount">34%</span>
                    <img src="img/product-12.jpg" class="img-product">
                    <img src="img/product-3.jpg" class="hover-img">
                </div>
                <div class="content">
                    <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <div class="price">
                        <span>$120.00</span>
                        <del>$125.00</del>
                    </div>
        
                </div>
            </div>


            <div class="box column product-item swiper-slide">

                <div class="product-btn">
                    <ul class="product-action">
                        <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                    </ul>
                </div>
                <div class="div-img">
                    <span class="discount">34%</span>
                    <img src="img/product-15.jpg" class="img-product">
                    <img src="img/product-1.jpg" class="hover-img">
                </div>
                <div class="content">
                    <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <div class="price">
                        <span>$120.00</span>
                        <del>$125.00</del>
                    </div>
        
                </div>
            </div>

            <div class="box column product-item swiper-slide">

                <div class="product-btn">
                    <ul class="product-action">
                        <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                    </ul>
                </div>
                <div class="div-img">
                    <span class="discount">34%</span>
                    <img src="img/product-14.jpg" class="img-product">
                    <img src="img/product-6.jpg" class="hover-img">
                </div>
                <div class="content">
                    <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <div class="price">
                        <span>$120.00</span>
                        <del>$125.00</del>
                    </div>
        
                </div>
            </div>


            <div class="box column product-item swiper-slide">

                <div class="product-btn">
                    <ul class="product-action">
                        <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                    </ul>
                </div>
                <div class="div-img">
                    <span class="discount">34%</span>
                    <img src="img/product-7.jpg" class="img-product">
                    <img src="img/product-11.jpg" class="hover-img">
                </div>
                <div class="content">
                    <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <div class="price">
                        <span>$120.00</span>
                        <del>$125.00</del>
                    </div>
        
                </div>
            </div>

            <div class="box column product-item swiper-slide">

                <div class="product-btn">
                    <ul class="product-action">
                        <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                    </ul>
                </div>
                <div class="div-img">
                    <span class="discount">34%</span>
                    <img src="img/product-15.jpg" class="img-product">
                    <img src="img/product-16.jpg" class="hover-img">
                </div>
                <div class="content">
                    <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <div class="price">
                        <span>$120.00</span>
                        <del>$125.00</del>
                    </div>
        
                </div>
            </div>


        </div>

        
      

    </section>

    <div class="banner2 contanier">
        <div class="boxs">
            <div class="box">
                <a href="#"><img src="img/banner-4.jpg" alt="">
                    <span class="glass-hover"></span></a>
            </div>
            <div class="box">
                <a href="#"><img src="img/banner-5.jpg" alt="">
                    <span class="glass-hover"></span></a>
            </div>
        </div>
    </div>

    <section class="slide-with-img contanier">

        <div class="section-head">
            <h4>Electronic devices <span></span> </h4>
        </div>
        
        <div class="cont">
            <div class="img-with-slide">
                <a href="#"><img src="img/banner-sm-1.jpg" alt=""></a>
            </div>
            <div class="swip-with-img swiper mySwiper">
                <div class="boxs swiper-wrapper">

                    <div class="box column product-item swiper-slide">

                        <div class="product-btn">
                            <ul class="product-action">
                                <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                            </ul>
                        </div>
                        <div class="div-img">
                            <img src="img/product-3.jpg" class="img-product">
                            <img src="img/product-9.jpg" class="hover-img">
                        </div>
                        <div class="content">
                            <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <div class="price">
                                <span>$120.00</span>
                                <del>$125.00</del>
                            </div>
                
                        </div>
                    </div>
        
                    <div class="box column product-item swiper-slide">

                        <div class="product-btn">
                            <ul class="product-action">
                                <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                            </ul>
                        </div>
                        <div class="div-img">
                            <img src="img/product-8.jpg" class="img-product">
                            <img src="img/product-2.jpg" class="hover-img">
                        </div>
                        <div class="content">
                            <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <div class="price">
                                <span>$120.00</span>
                                <del>$125.00</del>
                            </div>
                
                        </div>
                    </div>
        
                    <div class="box column product-item swiper-slide">

                        <div class="product-btn">
                            <ul class="product-action">
                                <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                            </ul>
                        </div>
                        <div class="div-img">
                      
                            <img src="img/product-1.jpg" class="img-product">
                            <img src="img/product-15.jpg" class="hover-img">
                        </div>
                        <div class="content">
                            <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <div class="price">
                                <span>$120.00</span>
                                <del>$125.00</del>
                            </div>
                
                        </div>
                    </div>
        
        
                    <div class="box column product-item swiper-slide">

                        <div class="product-btn">
                            <ul class="product-action">
                                <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                            </ul>
                        </div>
                        <div class="div-img">
                         
                            <img src="img/product-7.jpg" class="img-product">
                            <img src="img/product-14.jpg" class="hover-img">
                        </div>
                        <div class="content">
                            <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <div class="price">
                                <span>$120.00</span>
                                <del>$125.00</del>
                            </div>
                
                        </div>
                    </div>
        
                    <div class="box column product-item swiper-slide">
                        <div class="product-btn">
                            <ul class="product-action">
                                <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                            </ul>
                        </div>
                        <div class="div-img">
                            <img src="img/product-15.jpg" class="img-product">
                            <img src="img/product-9.jpg" class="hover-img">
                        </div>
                        <div class="content">
                            <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <div class="price">
                                <span>$120.00</span>
                                <del>$125.00</del>
                            </div>
                
                        </div>
                    </div>
        
        
                    <div class="box column product-item swiper-slide">
                        <div class="product-btn">
                            <ul class="product-action">
                                <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                            </ul>
                        </div>
                        <div class="div-img">
                            
                            <img src="img/product-2.jpg" class="img-product">
                            <img src="img/product-6.jpg" class="hover-img">
                        </div>
                        <div class="content">
                            <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <div class="price">
                                <span>$120.00</span>
                                <del>$125.00</del>
                            </div>
                
                        </div>
                    </div>
        
                    <div class="box column product-item swiper-slide">
                        <div class="product-btn">
                            <ul class="product-action">
                                <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                            </ul>
                        </div>
                        <div class="div-img">
                            
                            <img src="img/product-11.jpg" class="img-product">
                            <img src="img/product-1.jpg" class="hover-img">
                        </div>
                        <div class="content">
                            <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <div class="price">
                                <span>$120.00</span>
                                <del>$125.00</del>
                            </div>
                
                        </div>
                    </div>

                    <div class="box column product-item swiper-slide">
                        <div class="product-btn">
                            <ul class="product-action">
                                <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                            </ul>
                        </div>
                        <div class="div-img">
                            
                            <img src="img/product-5.jpg" class="img-product">
                            <img src="img/product-16.jpg" class="hover-img">
                        </div>
                        <div class="content">
                            <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <div class="price">
                                <span>$120.00</span>
                                <del>$125.00</del>
                            </div>
                
                        </div>
                    </div>
        
        
                </div>

                <div class="swiper-button-next swiper-btn"></div>
                <div class="swiper-button-prev swiper-btn"></div>
            </div>
            
        </div>

    </section>

    <section class="slide-with-img contanier">

        <div class="section-head">
            <h4> Mobile phones and accessories <span> </span></h4>
        </div>
        
        <div class="cont">
            <div class="swip-with-img swiper mySwiper">
                <div class="boxs swiper-wrapper">

                    <div class="box column product-item swiper-slide">
                        <div class="product-btn">
                            <ul class="product-action">
                                <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                            </ul>
                        </div>
                        <div class="div-img">
                            
                            <img src="img/product-1.jpg" class="img-product">
                            <img src="img/product-14.jpg" class="hover-img">
                        </div>
                        <div class="content">
                            <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <div class="price">
                                <span>$120.00</span>
                                <del>$125.00</del>
                            </div>
                
                        </div>
                    </div>
        
                    <div class="box column product-item swiper-slide">
                        <div class="product-btn">
                            <ul class="product-action">
                                <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                            </ul>
                        </div>
                        <div class="div-img">
                          
                            <img src="img/product-4.jpg" class="img-product">
                            <img src="img/product-14.jpg" class="hover-img">
                        </div>
                        <div class="content">
                            <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <div class="price">
                                <span>$120.00</span>
                                <del>$125.00</del>
                            </div>
                
                        </div>
                    </div>
        
                    <div class="box column product-item swiper-slide">
                        <div class="product-btn">
                            <ul class="product-action">
                                <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                            </ul>
                        </div>
                        <div class="div-img">
                    
                            <img src="img/product-7.jpg" class="img-product">
                            <img src="img/product-2.jpg" class="hover-img">
                        </div>
                        <div class="content">
                            <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <div class="price">
                                <span>$120.00</span>
                                <del>$125.00</del>
                            </div>
                
                        </div>
                    </div>
        
        
                    <div class="box column product-item swiper-slide">
                        <div class="product-btn">
                            <ul class="product-action">
                                <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                            </ul>
                        </div>
                        <div class="div-img">
                        
                            <img src="img/product-3.jpg" class="img-product">
                            <img src="img/product-1.jpg" class="hover-img">
                        </div>
                        <div class="content">
                            <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <div class="price">
                                <span>$120.00</span>
                                <del>$125.00</del>
                            </div>
                
                        </div>
                    </div>
        
                    <div class="box column product-item swiper-slide">
                        <div class="product-btn">
                            <ul class="product-action">
                                <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                            </ul>
                        </div>
                        <div class="div-img">
                           
                            <img src="img/product-9.jpg" class="img-product">
                            <img src="img/product-13.jpg" class="hover-img">
                        </div>
                        <div class="content">
                            <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <div class="price">
                                <span>$120.00</span>
                                <del>$125.00</del>
                            </div>
                
                        </div>
                    </div>
        
        
                    <div class="box column product-item swiper-slide">
                        <div class="product-btn">
                            <ul class="product-action">
                                <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                            </ul>
                        </div>
                        <div class="div-img">
                            
                            <img src="img/product-14.jpg" class="img-product">
                            <img src="img/product-5.jpg" class="hover-img">
                        </div>
                        <div class="content">
                            <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <div class="price">
                                <span>$120.00</span>
                                <del>$125.00</del>
                            </div>
                
                        </div>
                    </div>
        
                    <div class="box column product-item swiper-slide">
                        <div class="product-btn">
                            <ul class="product-action">
                                <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                            </ul>
                        </div>
                        <div class="div-img">
                     
                            <img src="img/product-13.jpg" class="img-product">
                            <img src="img/product-9.jpg" class="hover-img">
                        </div>
                        <div class="content">
                            <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <div class="price">
                                <span>$120.00</span>
                                <del>$125.00</del>
                            </div>
                
                        </div>
                    </div>

                    <div class="box column product-item swiper-slide">
                        <div class="product-btn">
                            <ul class="product-action">
                                <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                            </ul>
                        </div>
                        <div class="div-img">
                          
                            <img src="img/product-15.jpg" class="img-product">
                            <img src="img/product-6.jpg" class="hover-img">
                        </div>
                        <div class="content">
                            <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <div class="price">
                                <span>$120.00</span>
                                <del>$125.00</del>
                            </div>
                
                        </div>
                    </div>
        
        
                </div>

                <div class="swiper-button-next swiper-btn"></div>
                <div class="swiper-button-prev swiper-btn"></div>
            </div>

            <div class="img-with-slide">
                <a href="#"><img src="img/banner-sm-2.jpg" alt=""></a>
            </div>
            
        </div>

    </section>

    <section class="slide-with-img contanier">

        <div class="section-head">
            <h4> Electrical appliances <span></span> </h4>
        </div>
        
        <div class="cont">
            <div class="img-with-slide">
                <a href="#"><img src="img/banner-sm-3.jpg" alt=""></a>
            </div>
            <div class="swip-with-img swiper mySwiper">
                <div class="boxs swiper-wrapper">

                    <div class="box column product-item swiper-slide">
                        <div class="product-btn">
                            <ul class="product-action">
                                <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                            </ul>
                        </div>
                        <div class="div-img">
                         
                            <img src="img/product-15.jpg" class="img-product">
                            <img src="img/product-5.jpg" class="hover-img">
                        </div>
                        <div class="content">
                            <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <div class="price">
                                <span>$120.00</span>
                                <del>$125.00</del>
                            </div>
                
                        </div>
                    </div>
        
                    <div class="box column product-item swiper-slide">
                        <div class="product-btn">
                            <ul class="product-action">
                                <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                            </ul>
                        </div>
                        <div class="div-img">
                            
                            <img src="img/product-8.jpg" class="img-product">
                            <img src="img/product-12.jpg" class="hover-img">
                        </div>
                        <div class="content">
                            <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <div class="price">
                                <span>$120.00</span>
                                <del>$125.00</del>
                            </div>
                
                        </div>
                    </div>
        
                    <div class="box column product-item swiper-slide">
                        <div class="product-btn">
                            <ul class="product-action">
                                <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                            </ul>
                        </div>
                        <div class="div-img">
                            
                            <img src="img/product-11.jpg" class="img-product">
                            <img src="img/product-2.jpg" class="hover-img">
                        </div>
                        <div class="content">
                            <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <div class="price">
                                <span>$120.00</span>
                                <del>$125.00</del>
                            </div>
                
                        </div>
                    </div>
        
        
                    <div class="box column product-item swiper-slide">
                        <div class="product-btn">
                            <ul class="product-action">
                                <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                            </ul>
                        </div>
                        <div class="div-img">
                            
                            <img src="img/product-3.jpg" class="img-product">
                            <img src="img/product-2.jpg" class="hover-img">
                        </div>
                        <div class="content">
                            <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <div class="price">
                                <span>$120.00</span>
                                <del>$125.00</del>
                            </div>
                
                        </div>
                    </div>
        
                    <div class="box column product-item swiper-slide">
                        <div class="product-btn">
                            <ul class="product-action">
                                <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                            </ul>
                        </div>
                        <div class="div-img">
                            
                            <img src="img/product-9.jpg" class="img-product">
                            <img src="img/product-11.jpg" class="hover-img">
                        </div>
                        <div class="content">
                            <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <div class="price">
                                <span>$120.00</span>
                                <del>$125.00</del>
                            </div>
                
                        </div>
                    </div>
        
        
                    <div class="box column product-item swiper-slide">
                        <div class="product-btn">
                            <ul class="product-action">
                                <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                            </ul>
                        </div>
                        <div class="div-img">
                            
                            <img src="img/product-14.jpg" class="img-product">
                            <img src="img/product-4.jpg" class="hover-img">
                        </div>
                        <div class="content">
                            <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <div class="price">
                                <span>$120.00</span>
                                <del>$125.00</del>
                            </div>
                
                        </div>
                    </div>
        
                    <div class="box column product-item swiper-slide">
                        <div class="product-btn">
                            <ul class="product-action">
                                <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                            </ul>
                        </div>
                        <div class="div-img">
                            
                            <img src="img/product-5.jpg" class="img-product">
                            <img src="img/product-7.jpg" class="hover-img">
                        </div>
                        <div class="content">
                            <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <div class="price">
                                <span>$120.00</span>
                                <del>$125.00</del>
                            </div>
                
                        </div>
                    </div>

                    <div class="box column product-item swiper-slide">
                        <div class="product-btn">
                            <ul class="product-action">
                                <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                            </ul>
                        </div>
                        <div class="div-img">
                            
                            <img src="img/product-4.jpg" class="img-product">
                            <img src="img/product-9.jpg" class="hover-img">
                        </div>
                        <div class="content">
                            <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <div class="price">
                                <span>$120.00</span>
                                <del>$125.00</del>
                            </div>
                
                        </div>
                    </div>
        
        
                </div>

                <div class="swiper-button-next swiper-btn"></div>
                <div class="swiper-button-prev swiper-btn"></div>
            </div>
            
        </div>

    </section>
    
    <div class="banner contanier">
        <div class="boxs">
            <div class="box">
                <a href="#"><img src="img/banner-6.jpg" alt="">
                <span class="glass-hover"></span></a>
            </div>
            <div class="box">
                <a href="#"><img src="img/banner-7.jpg" alt="">
                <span class="glass-hover"></span></a>
            </div>
            <div class="box">
                <a href="#"><img src="img/banner-8.jpg" alt="">
                <span class="glass-hover"></span></a>
            </div>
        </div>
    </div>

    <section class="sale-sec contanier swiper mySwiper">

        <div class="section-head">
            <h4>Viewed Products<span></span> </h4>
        </div>
        
        <div class="boxs swiper-wrapper">

            <div class="box column product-item swiper-slide">

                <div class="product-btn">
                    <ul class="product-action">
                        <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                    </ul>
                </div>

                <div class="div-img">
       
                    <img src="img/product-8.jpg" class="img-product">
                    <img src="img/product-1.jpg" class="hover-img">
                </div>
                <div class="content">
                    <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <div class="price">
                        <span>$120.00</span>
                        <del>$125.00</del>
                    </div>
        
                </div>
            </div>

            <div class="box column product-item swiper-slide">

                <div class="product-btn">
                    <ul class="product-action">
                        <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                    </ul>
                </div>
                <div class="div-img">
                  
                    <img src="img/product-2.jpg" class="img-product">
                    <img src="img/product-9.jpg" class="hover-img">
                </div>
                <div class="content">
                    <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <div class="price">
                        <span>$120.00</span>
                        <del>$125.00</del>
                    </div>
        
                </div>
            </div>

            <div class="box column product-item swiper-slide">

                <div class="product-btn">
                    <ul class="product-action">
                        <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                    </ul>
                </div>
                <div class="div-img">
                 
                    <img src="img/product-3.jpg" class="img-product">
                    <img src="img/product-10.jpg" class="hover-img">
                </div>
                <div class="content">
                    <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <div class="price">
                        <span>$120.00</span>
                        <del>$125.00</del>
                    </div>
        
                </div>
            </div>


            <div class="box column product-item swiper-slide">

                <div class="product-btn">
                    <ul class="product-action">
                        <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                    </ul>
                </div>
                <div class="div-img">
                
                    <img src="img/product-4.jpg" class="img-product">
                    <img src="img/product-8.jpg" class="hover-img">
                </div>
                <div class="content">
                    <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <div class="price">
                        <span>$120.00</span>
                        <del>$125.00</del>
                    </div>
        
                </div>
            </div>


            <div class="box column product-item swiper-slide">
                <div class="div-img">
                   
                    <img src="img/product-9.jpg" class="img-product">
                    <img src="img/product-16.jpg" class="hover-img">
                </div>
                <div class="content">
                    <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <div class="price">
                        <span>$120.00</span>
                        <del>$125.00</del>
                    </div>
        
                </div>
            </div>


            <div class="box column product-item swiper-slide">

                <div class="product-btn">
                    <ul class="product-action">
                        <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                    </ul>
                </div>
                <div class="div-img">
               
                    <img src="img/product-12.jpg" class="img-product">
                    <img src="img/product-3.jpg" class="hover-img">
                </div>
                <div class="content">
                    <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <div class="price">
                        <span>$120.00</span>
                        <del>$125.00</del>
                    </div>
        
                </div>
            </div>


            <div class="box column product-item swiper-slide">

                <div class="product-btn">
                    <ul class="product-action">
                        <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                    </ul>
                </div>
                <div class="div-img">
                
                    <img src="img/product-15.jpg" class="img-product">
                    <img src="img/product-1.jpg" class="hover-img">
                </div>
                <div class="content">
                    <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <div class="price">
                        <span>$120.00</span>
                        <del>$125.00</del>
                    </div>
        
                </div>
            </div>

            <div class="box column product-item swiper-slide">

                <div class="product-btn">
                    <ul class="product-action">
                        <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                    </ul>
                </div>
                <div class="div-img">
                 
                    <img src="img/product-14.jpg" class="img-product">
                    <img src="img/product-6.jpg" class="hover-img">
                </div>
                <div class="content">
                    <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <div class="price">
                        <span>$120.00</span>
                        <del>$125.00</del>
                    </div>
        
                </div>
            </div>


            <div class="box column product-item swiper-slide">

                <div class="product-btn">
                    <ul class="product-action">
                        <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                    </ul>
                </div>
                <div class="div-img">
                    
                    <img src="img/product-7.jpg" class="img-product">
                    <img src="img/product-11.jpg" class="hover-img">
                </div>
                <div class="content">
                    <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <div class="price">
                        <span>$120.00</span>
                        <del>$125.00</del>
                    </div>
        
                </div>
            </div>

            <div class="box column product-item swiper-slide">

                <div class="product-btn">
                    <ul class="product-action">
                        <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                    </ul>
                </div>
                <div class="div-img">
                   
                    <img src="img/product-15.jpg" class="img-product">
                    <img src="img/product-16.jpg" class="hover-img">
                </div>
                <div class="content">
                    <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <div class="price">
                        <span>$120.00</span>
                        <del>$125.00</del>
                    </div>
        
                </div>
            </div>

        </div>

        


    </section>

    <div class="newsletter">
        <div class="contanier">
            <div class="subscribe-content">
                <a href="sign_up.html"><img src="img/icon_email.png" alt=""></a>
                <div class="text">
                    <h4>Sign up for the latest news</h4>
                    <p>Sign up with your email to receive the latest news and new products</p>
                    <span></span>
                </div>
            </div>
            <div class="subscribe-form">
                    <form action="">
                        <input type="search" placeholder="Search here......">
                        <button class="btn-srch">Search</button>
                    </form>
            </div>
        </div>
    </div>

    <div class="back-top">
        <a href="#">Back to top</a>
    </div>

    <footer>
        <div class="contanier">
            <div class="top-footer">
                <div class="row">
                    <img src="Capture.PNG" alt="">
                    <div class="hotline">
                        
                        <div class="hotline-text">
                            <h6>24/7 Customer Service</h6>
                            <span>(+100) 123 456 7890</span>
                        </div>
                        <i class="fa-solid fa-headset"></i>
                    </div>
                    
                </div>
                <div class="small-row">
                    <h6>Learn more about us</h6>
                    <div class="links-row">
                        <a href="#"> <i class="fa-solid fa-angle-left"></i>Information about Exprimo</a>
                        <a href="#"><i class="fa-solid fa-angle-left"></i>Shipping and Delivery</a>
                       
                    </div>
                </div>

                <div class="small-row">
                    <h6>Shop with us</h6>
                    <div class="links-row">
                        <a href="#"><i class="fa-solid fa-angle-left"></i>Your Account</a>
                        <a href="#"> <i class="fa-solid fa-angle-left"></i>Your Purchases</a>
                        <a href="#"> <i class="fa-solid fa-angle-left"></i>Your addresses</a>
                        <a href="#"> <i class="fa-solid fa-angle-left"></i>Your Lists</a>
                    </div>
                </div>

                <div class="small-row">
                    <h6>Let us help you</h6>
                    <div class="links-row">
                        <a href="#"><i class="fa-solid fa-angle-left"></i>Help & Support</a>
<a href="#"><i class="fa-solid fa-angle-left"></i>Track Order</a>
<a href="#"><i class="fa-solid fa-angle-left"></i>Return Policy</a>
<a href="#"><i class="fa-solid fa-angle-left"></i>Terms & Conditions</a>
                    </div>
                </div>

        

            </div>

        </div>
        

        <div class="bottom-footer">
            <div class="contanier">
                <p> </p>
            <div class="payment">
                <img src="img/payment-1.png" alt="">
                <img src="img/payment-2.png" alt="">
                <img src="img/payment-3.png" alt="">
                <img src="img/payment-4.png" alt="">
            </div>
            </div>
        </div>
    </footer>

    <!-- Swiper JS -->
    <script src="swiperJs/swiper-bundle.min.js"></script>

    <!-- Linke File JS -->
    <script src="main.js"></script>
    
</body>
</html>
