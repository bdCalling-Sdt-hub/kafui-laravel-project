<!DOCTYPE html>
<html dir="ltr" lang="en-US">
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="author" content="Ayman Fikry"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="description" content="Multi-purpose energy html5 template"/>
    <title> <?php echo $__env->yieldContent('title'); ?> Home Main - Energia Responsive Bootstrap 5 energy HTML5 Template</title>
    <link href="<?php echo e(asset('assets/images/favicon/favicon.png'), false); ?>" rel="icon"/>
    <!--  Fonts ==
    -->
    <link rel="preconnect" href="https://fonts.gstatic.com"/>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&amp;display=swap" rel="stylesheet"/>
    <!--  Stylesheets==
    -->
    <link href="<?php echo e(asset('assets/css/vendor.min.css'), false); ?>" rel="stylesheet"/>
    <link href="<?php echo e(asset('assets/css/style.css'), false); ?>" rel="stylesheet"/> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/brands.min.css" integrity="sha512-DJLNx+VLY4aEiEQFjiawXaiceujj5GA7lIY8CHCIGQCBPfsEG0nGz1edb4Jvw1LR7q031zS5PpPqFuPA8ihlRA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/fontawesome.min.css" integrity="sha512-UuQ/zJlbMVAw/UU8vVBhnI4op+/tFOpQZVT+FormmIEhRSCnJWyHiBbEVgM4Uztsht41f3FzVWgLuwzUqOObKw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    <div class="preloader">
      <div class="dual-ring"></div>
    </div>
    <!-- Document Wrapper-->
    <div class="wrapper clearfix" id="wrapperParallax">
      <!-- 
      ============================
      Header #2
      ============================
      -->
      <header class="header header-light header-topbar header-topbar1 header-shadow" id="navbar-spy">
        <div class="top-bar">
          <div class="block-left"> 
            <div class="top-contact">
              <div class="contact-infos"><i class="energia-phone-Icon"></i>
                <div class="contact-body"> 
                  <p>phone: <a href="tel:123-456-7890">+233 (0) 20 148 2289</a></p>
                </div>
              </div>
              <div class="contact-infos"><i class="energia-email--icon"></i>
                <div class="contact-body"> 
                  <p>email: <a href="mailto:info@energia.com"> info@invictasolutionsltd.com			</a></p>
                </div>
              </div>
              <div class="contact-infos"><i class="energia-clock-Icon"></i>
                <div class="contact-body"> 
                  <p>hours: Mon-Fri: 8am – 7pm			</p>
                </div>
              </div>
            </div>
          </div>
          <div class="block-right">
            <!-- Start .social-links-->
            <div class="social-links"><a class="share-facebook" href="https://www.facebook.com/invictasolutionsltd" target="_blank"><i class="energia-facebook"></i></a><a class="share-instagram" href="https://www.instagram.com/invictasolutionsltd" target="_blank"><i class="fa-brands fa-instagram"></i></a><a class="share-twitter" href="https://www.linkedin.com/company/invictasolutionsltd" target="_blank" ><i class="fa-brands fa-linkedin-in"></i></a></div>
            <!-- End .social-links-->
            <div class="topbar-links"><a href="<?php echo e(route('faq'), false); ?>">FAQs</a></div>
            <!-- <div class="module module-language">
              <div class="selected"><img src="<?php echo e(asset('assets/images/module-language/en.png'), false); ?>" alt="En Language"/><span>english</span><i class="fas fa-chevron-down"></i></div>
              <div class="lang-list">
                <ul> 
                  <li> <img src="<?php echo e(asset('assets/images/module-language/en.png'), false); ?>" alt="En Language"/><a href="#">english</a></li>
                  <li> <img src="<?php echo e(asset('assets/images/module-language/ar.png'), false); ?>" alt="AR Language"/><a href="#">arabic</a></li>
                </ul>
              </div>
            </div> -->
          </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-sticky" id="primary-menu"><a class="navbar-brand" href="<?php echo e(url('/'), false); ?>"><img class="logo logo-dark" src="<?php echo e(asset('assets/images/logo/logo-dark.png'), false); ?>" alt="Energia Logo"/><img class="logo logo-mobile" src="<?php echo e(asset('assets/images/logo/logo-mobile.png'), false); ?>" alt="Energia Logo"/></a>
          <div class="module-holder module-holder-phone">
            <div class="module module-search">
              <div class="module-icon module-icon-search"><i class="energia-search-Icon"></i></div>
            </div>
            <!-- <div class="module module-cart">
              <div class="module-icon module-icon-cart"><i class="fas fa-shopping-cart"></i><span class="title">shop cart</span>
                <label class="module-label">2</label>
              </div>
              <div class="module-cart-warp">  
                <ul class="cart-overview">
                  <li> <img src="<?php echo e(asset('assets/images/shop/thumb/1.png'), false); ?>" alt="product"/>
                    <div class="product-meta"> 
                      <h5>pentair controller</h5>
                      <p>$ 325.00</p>
                    </div><a class="cart-cancel" href="javascript:void(0)"><i class="fas fa-times"></i></a>
                  </li>
                  <li> <img src="<?php echo e(asset('assets/images/shop/thumb/2.png'), false); ?>" alt="product"/>
                    <div class="product-meta"> 
                      <h5>solar royal</h5>
                      <p>$ 295.00</p>
                    </div><a class="cart-cancel" href="javascript:void(0)"><i class="fas fa-times"></i></a>
                  </li>
                </ul><span>total: <i class="total-price">$620.00</i></span>
                <div class="cart--control"> <a class="btn" href="shop-cart.html">view cart</a></div>
              </div>
            </div> -->
            <div class="module module-language">
              <div class="selected"><img src="<?php echo e(asset('assets/images/module-language/en.png'), false); ?>" alt="En Language"/><span>english</span><i class="fas fa-chevron-down"></i></div>
              <div class="lang-list">
                <ul> 
                  <li> <img src="<?php echo e(asset('assets/images/module-language/en.png'), false); ?>" alt="En Language"/><a href="#">english</a></li>
                  <li> <img src="<?php echo e(asset('assets/images/module-language/ar.png'), false); ?>" alt="AR Language"/><a href="#">arabic</a></li>
                </ul>
              </div>
            </div>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          </div>
          <div class="collapse navbar-collapse" id="navbarContent">
                        <ul class="navbar-nav me-auto">   
                          <li class="nav-item has-dropdown active" data-hover=""><a class="dropdown-toggle" href="<?php echo e(url('/'), false); ?>" data-toggle="dropdown"><span>Home</span></a>
                                        <!-- <ul class="dropdown-menu">
                                          <li class="nav-item current"><a href="<?php echo e(url('/'), false); ?>"><span>Home main</span></a></li>
                                          <li class="nav-item"><a href="home-modern.html"><span>home modern</span></a></li>
                                          <li class="nav-item"><a href="home-classic.html"><span>home classic</span></a></li>
                                        </ul> -->
                          </li>
                          <!-- <li class="nav-item has-dropdown" data-hover=""><a class="dropdown-toggle" href="#" data-toggle="dropdown"><span>company</span></a>
                                        <ul class="dropdown-menu">
                                          <li class="nav-item"><a href="<?php echo e(route('about'), false); ?>"><span>about us</span></a></li> -->
                                         
                                          <!-- <li class="nav-item"><a href="<?php echo e(route('pricing'), false); ?>"><span>pricing &amp; plans</span></a></li>
                                           <li class="nav-item"><a href="<?php echo e(route('faq'), false); ?>"><span>help &amp; fAQs</span></a></li>
                                          <li class="nav-item"><a href="<?php echo e(route('gallery'), false); ?>"><span>our gallery</span></a></li> --
                               
                                        </ul>
                          </li> -->
                          <li class="nav-item" id="contact" data-hover=""><a href="<?php echo e(route('service'), false); ?>"><span>Service</span></a></li>
                          <li class="nav-item" id="contact" data-hover=""><a href="<?php echo e(route('pricing'), false); ?>"><span>Pricing & Plans</span></a></li>
                          <li class="nav-item" id="contact" data-hover=""><a href="<?php echo e(route('about'), false); ?>"><span>About</span></a></li>                       
                       <li class="nav-item" id="contact" data-hover=""><a href="<?php echo e(route('faq'), false); ?>"><span>Faq</span></a></li>

                          <!-- <li class="nav-item has-dropdown" id="departments" data-hover=""><a class="dropdown-toggle" href="<?php echo e(route('service'), false); ?>" data-toggle="dropdown"><span>services</span></a>
                                        <ul class="dropdown-menu">
                                          <li class="nav-item"><a href="<?php echo e(route('service'), false); ?>"><span>Our service</span></a></li>
                                          
                                        </ul>
                          </li> -->
                          <!-- <li class="nav-item has-dropdown" data-hover=""><a class="dropdown-toggle" href="#" data-toggle="dropdown"><span>projects</span></a>
                                        <ul class="dropdown-menu">
                                          <li class="nav-item"><a href="<?php echo e(route('project'), false); ?>"><span>projects standard</span></a></li>
                                          
                                        </ul>
                          </li> -->
                         
                          <li class="nav-item" id="contact" data-hover=""><a href="<?php echo e(route('contact'), false); ?>"><span>contact</span></a></li>
                          
                          
                         
                          
                        </ul>
            <div class="module-holder">
              <div class="module module-search">
                <div class="module-icon module-icon-search"><i class="energia-search-Icon"></i></div>
              </div>
              <!-- <div class="module module-cart">
                <div class="module-icon module-icon-cart"><i class="fas fa-shopping-cart"></i><span class="title">shop cart</span>
                  <label class="module-label">2</label>
                </div>
                <div class="module-cart-warp">  
                  <ul class="cart-overview">
                    <li> <img src="<?php echo e(asset('assets/images/shop/thumb/1.png'), false); ?>" alt="product"/>
                      <div class="product-meta"> 
                        <h5>pentair controller</h5>
                        <p>$ 325.00</p>
                      </div><a class="cart-cancel" href="javascript:void(0)"><i class="fas fa-times"></i></a>
                    </li>
                    <li> <img src="<?php echo e(asset('assets/images/shop/thumb/2.png'), false); ?>" alt="product"/>
                      <div class="product-meta"> 
                        <h5>solar royal</h5>
                        <p>$ 295.00</p>
                      </div><a class="cart-cancel" href="javascript:void(0)"><i class="fas fa-times"></i></a>
                    </li>
                  </ul><span>total: <i class="total-price">$620.00</i></span>
                  <div class="cart--control"> <a class="btn" href="shop-cart.html">view cart</a></div>
                </div>
              </div> -->
              <div class="module-contact"><a class="btn btn--primary " href="<?php echo e(route('requestQueate'), false); ?>">
                   request a quote<i class="energia-arrow-right"></i></a></div>
            </div>
            <!--  End .module-holder-->
          </div>
          <!--  End .navbar-collapse-->
        </nav>
        <!--  End .navbar-->
      </header>
      <!-- End .header-->
      <!--
      ============================
      Module Search
      ============================
      -->
      <div class="module-content module-search-warp">
        <div class="pos-vertical-center">
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                <form class="form-search">
                  <input class="form-control" type="text" placeholder="type words then enter"/>
                  <button></button>
                </form>
                <!-- End .form-search -->
              </div>
              <!-- End .col-lg-8 -->
            </div>
            <!--  End .row-->
          </div>
          <!--  End .container-->
        </div><a class="module-cancel" href="#"><i class="fas fa-times"></i></a>
        <!-- End .module-cancel-->
      </div>
      
      <?php echo $__env->yieldContent('content'); ?>
      <!--
      ============================
      Footer #1
      ============================
      -->
      <footer class="footer footer-1">
        <div class="footer-top">
          <div class="container">
            <div class="row">
              <div class="col-12 col-sm-6 col-md-6 col-lg-2">
                <div class="footer-widget widget-links">
                  <div class="footer-widget-title">
                    <h5>company</h5>
                  </div>
                  <div class="widget-content">
                    <ul>
                    <li><a href="<?php echo e(url('/'), false); ?>">Home</a></li>
                      <li><a href="<?php echo e(route('about'), false); ?>">About Us</a></li>                      
                      <li><a href="<?php echo e(route('service'), false); ?>">Service</a></li>
                      <li><a href="<?php echo e(route('project'), false); ?>">Our Projects</a></li>
                      <li><a href="<?php echo e(route('contact'), false); ?>">contact</a></li>
                      <li><a href="<?php echo e(route('faq'), false); ?>">Faq</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <!--  End .col-lg-2-->
              <div class="col-12 col-sm-6 col-md-6 col-lg-2">
                <div class="footer-widget widget-links">
                  <div class="footer-widget-title">
                    <h5>Services</h5>
                  </div>
                  <div class="widget-content">
                    <ul>
                      <li><a href="<?php echo e(route('service'), false); ?>">Solar Panels</a></li>
                      <li><a href="<?php echo e(route('service'), false); ?>">Wind Turbines</a></li>
                      <li><a href="<?php echo e(route('service'), false); ?>">Hydropower Plants</a></li>
                      <li><a href="<?php echo e(route('service'), false); ?>">Fossil Resources</a></li>
                      <li><a href="<?php echo e(route('service'), false); ?>">Battery Materials</a></li>
                      <li><a href="<?php echo e(route('service'), false); ?>">biofuels</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <!--  End .col-lg-2-->
              <div class="col-12 col-sm-6 col-md-6 col-lg-5">
                <div class="footer-widget widget-links widget-icon">
                  <div class="footer-widget-title">
                    <h5>support</h5>
                  </div>
                  <div class="widget-content">
                    <ul>
                      <li><a href="<?php echo e(route('contact'), false); ?>">Terms & Conditions</a></li>
                      <li><a href="<?php echo e(route('contact'), false); ?>">Shipping Policy</a></li>
                      <li><a href="<?php echo e(route('contact'), false); ?>">Delivery Tips</a></li>
                      <li><a href="<?php echo e(route('contact'), false); ?>">Returns</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <!--  End .col-lg-5-->
              <div class="col-12 col-md-6 col-lg-3">
                <div class="footer-widget widget-contact">
                  <div class="widget-content">
                    <ul> 
                      <li class="phone">+2<a href="tel:+01061245741"> 	33 (0) 20 148 2289</a></li>
                      <li class="phone">+2<a href="tel:+01061245741"> 	33 (0) 50 657 7764</a></li>
                      <li class="phone">+2<a href="tel:+01061245741"> 	33 (0) 24 451 9227</a></li>
                      <li class="email">Email: <a href="mailto:info@energia.com">info@invictasolutionsltd.com</a></li>
                      <li class="address">                       
                        <p> 3rd Floor Oswald Building, Off Jerry Rawlings Highway, Adenta SDA Junction, Accra., Accra, Ghana</p>
                      </li>
                      <li class="directions"><a href="<?php echo e(route('contact'), false); ?>"><i class="energia-location-Icon"></i>get directions</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <!--  End .col-lg-3-->
            </div>
            <!-- End .row-->
          </div>
          <!--  End .container-->
        </div>
        <!--  End .footer-top-->
        <div class="footer-bottom">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="footer-copyright">
                  <div class="copyright"><span>&copy; 2021 energia by  <a href="https://1.envato.market/kP9BV"> Zytheme.com</a>. all rights reserved. </span>
                    <ul class="list-unstyled social-icons">
                      <li> <a class="share-facebook" href="https://www.facebook.com/invictasolutionsltd" target="_blank"><i class="energia-facebook"></i>facebook </a></li>
                      <li> <a class="share-twitter" href="https://www.linkedin.com/company/invictasolutionsltd" target="_blank"><i class="fa-brands fa-linkedin-in"></i></i>linkedin</a></li>
                      <li> <a class="share-youtube" href="https://www.instagram.com/invictasolutionsltd" target="_blank"><i class="fa-brands fa-instagram"></i>instagram</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--  End .row-->
        </div>
        <!--  End .footer-bottom-->
      </footer>
      <!--
      ============================
      BackToTop #1
      ============================
      -->
      <div class="back-top" id="back-to-top" data-hover=""><i class="energia-arrow-up"></i></div>
    </div>
    <!--  Footer Scripts==
    -->   
    <script src="<?php echo e(asset('assets/js/vendor/jquery-3.6.0.min.js'), false); ?>"></script>
   <script src="<?php echo e(asset('assets/js/vendor.js'), false); ?>"></script>
    <script src="<?php echo e(asset('assets/js/functions.js'), false); ?>"></script>
  </body>
</html><?php /**PATH E:\xampp\htdocs\kafio\resources\views\Frontend\layout\app.blade.php ENDPATH**/ ?>