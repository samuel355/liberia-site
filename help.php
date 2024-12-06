<!DOCTYPE HTML>
<html lang="en">
    <head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Rentstate - Real Estate Agency Template</title>
        <!--=============== css  ===============-->	
        <link type="text/css" rel="stylesheet" href="css/plugins.css">
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="images/favicon.ico">
    </head>
    <body>
        <!--loader-->
        <div class="loader-wrap">
            <div class="loader-inner">
                <svg>
                    <defs>
                        <filter id="goo">
                            <fegaussianblur in="SourceGraphic" stdDeviation="2" result="blur" />
                            <fecolormatrix in="blur"   values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 5 -2" result="gooey" />
                            <fecomposite in="SourceGraphic" in2="gooey" operator="atop"/>
                        </filter>
                    </defs>
                </svg>
            </div>
        </div>
        <!--loader end-->
        <!--  main   -->
        <div id="main">
            <!--header-->
            <header class="main-header">
                <div class="container">
                    <div class="header-inner">
                        <a href="index.html" class="logo-holder"><img src="images/logo.png" alt=""></a>
                        <!--  navigation --> 
                        <div class="nav-holder main-menu">
                            <nav>
                                <ul class="no-list-style">
                                    <li>
                                        <a href="#">Home <i class="fa-solid fa-caret-down"></i></a>
                                        <!--second level -->   
                                        <ul>
                                            <li><a href="index.html">Slider</a></li>
                                            <li><a href="index2.html">Video</a></li>
                                            <li><a href="index3.html">Slideshow</a></li>
                                            <li><a href="index4.html">Parallax Image</a></li>
                                            <li><a href="dashboard.html">User Dasboard</a></li>
                                        </ul>
                                        <!--second level end-->
                                    </li>
                                    <li>
                                        <a href="#">Listings <i class="fa-solid fa-caret-down"></i></a>
                                        <!--second level -->
                                        <ul>
                                            <li><a href="listing.html">Style 1</a></li>
                                            <li><a href="listing2.html">Style 2</a></li>
                                            <li><a href="listing3.html">Style 3</a></li>
                                            <li><a href="listing4.html">Style 4</a></li>
                                            <li>
                                                <a href="#">Single <i class="fa-solid fa-caret-right"></i></a>
                                                <!--third  level  -->
                                                <ul>
                                                    <li><a href="listing-single.html">Style 1</a></li>
                                                    <li><a href="listing-single2.html">Style 2</a></li>
                                                    <li><a href="listing-single3.html">Style 3</a></li>
                                                </ul>
                                                <!--third  level end-->
                                            </li>
                                        </ul>
                                        <!--second level end-->
                                    </li>
                                    <li>
                                        <a href="blog.html">News</a>
                                    </li>
                                    <li>
                                        <a href="#" class="act-link">Pages <i class="fa-solid fa-caret-down"></i></a>
                                        <!--second level -->   
                                        <ul>
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="contacts.html">Contacts</a></li>
                                            <li><a href="agent-single.html">Agent single</a></li>
                                            <li><a href="help.html">How it Works</a></li>
                                            <li><a href="pricing.html">Pricing</a></li>
                                            <li><a href="blog-single.html">Blog Single</a></li>
                                            <li><a href="add-listing.html">Add Listing</a></li>
                                        </ul>
                                        <!--second level end-->                                
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- navigation  end -->						
                        <!-- nav-button-wrap-->
                        <div class="nav-button-wrap">
                            <div class="nav-button">
                                <span></span><span></span><span></span>
                            </div>
                        </div>
                        <!-- nav-button-wrap end-->					
                        <div class="header-search-btn tolt" data-microtip-position="bottom"  data-tooltip="Search"><i class="fa-regular fa-magnifying-glass"></i> </div>
                        <a href="add-listing.html" class="header-btn"><span>Add Your Propperty</span></a>
                        <div class="wish_btn swl_btn tolt" data-microtip-position="bottom"  data-tooltip="Wishlist">
                            <div class="wish_btn-item"><i class="fa-thin fa-heart"></i><span class="wish_count">3</span></div>
                        </div>
                        <div class="show-reg-form modal-open"><i class="fa-thin fa-user"></i><span>Sign In</span></div>
                        <!-- header-search-wrap  -->	
                        <div class="header-search-wrap novis_search">
                            <div class="header-search">
                                <div class="header-search-nav">
                                    <div class="header-search-nav_container">
                                        <div class="header-search-radio">
                                            <input class="hidden radio-label" type="radio" name="accept-offers" id="sale-button" checked="checked">
                                            <label class="button-label" for="sale-button">Sale</label>
                                            <input class="hidden radio-label" type="radio" name="accept-offers" id="rent-button">
                                            <label class="button-label" for="rent-button">Rent</label>							
                                            <input class="hidden radio-label" type="radio" name="accept-offers" id="comm-button">
                                            <label class="button-label" for="comm-button">Commercial</label>								
                                        </div>
                                    </div>
                                </div>
                                <div class="header-search-container">
                                    <div class="custom-form">
                                        <!-- listsearch-input-item -->
                                        <div class="cs-intputwrap">
                                            <i class="fa-light fa-house"></i>
                                            <input type="text"   placeholder="Keywords..." value="">
                                        </div>
                                        <!-- listsearch-input-item -->									
                                        <!-- listsearch-input-item -->
                                        <div class="cs-intputwrap">
                                            <i class="fa-light fa-location-dot"></i>
                                            <input type="text"   placeholder="Location..." value="">
                                        </div>
                                        <!-- listsearch-input-item -->										
                                        <!-- listsearch-input-item -->
                                        <div class="cs-intputwrap">
                                            <div class="price-range-wrap ">
                                                <label>Price Range</label>
                                                <div class="price-rage-item">
                                                    <input type="text" class="price-range-double" data-min="100" data-max="100000"  name="price-range1"  data-step="1" value="1" data-prefix="$">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- listsearch-input-item -->										
                                        <button onclick="window.location.href='listing.html'" class="commentssubmit commentssubmit_fw">Search</button>	
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- header-search-wrap  end -->		
                    </div>
                </div>
            </header>
            <div class="body-overlay fs-wrapper search-form-overlay close-search-form"></div>
            <!--header-end-->
            <!--warpper-->
            <div class="wrapper">
                <!--content-->
                <div class="content">
                    <!--section-->
                    <div class="section hero-section hero-section_sin">
                        <div class="hero-section-wrap">
                            <div class="hero-section-wrap-item">
                                <div class="container">
                                    <div class="hero-section-container">
                                        <div class="hero-section-title">
                                            <h2>Frequently Asked Questions</h2>
                                            <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nec tincidunt arcu, sit amet fermentum sem.</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="hs-scroll-down-wrap">
                                    <div class="scroll-down-item">
                                        <div class="mousey">
                                            <div class="scroller"></div>
                                        </div>
                                        <span>Scroll Down To Discover</span>
                                    </div>
                                    <div class="svg-corner svg-corner_white"  style="bottom:0;right: -39px; transform: rotate( 90deg)" ></div>
                                    <div class="svg-corner svg-corner_white"  style="bottom:0;left:  -39px;"></div>
                                </div>
                                <div class="bg-wrap bg-hero bg-parallax-wrap-gradien fs-wrapper" data-scrollax-parent="true">
                                    <div class="bg" data-bg="images/bg/6.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--section-end-->				
                    <!--container-->
                    <div class="container">
                        <!--breadcrumbs-list-->
                        <div class="breadcrumbs-list bl_flat">
                            <a href="#">Home</a><a href="#">Pages</a><span>Help</span>
                            <div class="breadcrumbs-list_dec"><i class="fa-thin fa-arrow-up"></i></div>
                        </div>
                        <!--breadcrumbs-list end-->					
                        <!--main-content-->
                        <div class="main-content ms_vir_height">
                            <!--boxed-container-->
                            <div class="boxed-container">
                                <div class="row">
                                    <!-- boxed-content -->	
                                    <div class="col-lg-4">
                                        <div class="boxed-content btf_init">
                                            <div class="boxed-content-title">
                                                <h3>FAQ Navigation</h3>
                                            </div>
                                            <div class="faq-nav-wrap">
                                                <div class="faq-nav scroll-init">
                                                    <ul>
                                                        <li><a class="act-scrlink" href="#faq1">Payments</a></li>
                                                        <li><a  href="#faq2">Suggestions</a></li>
                                                        <li><a   href="#faq3">Reccomendations</a></li>
                                                        <li><a   href="#faq4">Properties</a></li>
                                                    </ul>
                                                </div>
                                                <div class="search-widget">
                                                    <form action="#">
                                                        <input name="se" id="se" type="text" class="search-inpt-item" placeholder="Keywords.." value="Keywords..">
                                                        <button class="search-submit color-bg" id="submit_btn"><i class="fa-regular fa-magnifying-glass"></i> </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- boxed-content end-->	
                                    <div class="col-lg-8">
                                        <!-- help-item-wrap -->	
                                        <div class="help-item-wrap" id="faq1">
                                            <div class="help-item-title">Payments</div>
                                            <div class="accordion">
                                                <a class="toggle act-accordion" href="#"> How long does the sending process take? <i class="fa-solid fa-caret-down"></i></a>
                                                <div class="accordion-inner visible">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.</p>
                                                </div>
                                                <a class="toggle" href="#">Can I use more than one payment method to pay for a reservation? <i class="fa-solid fa-caret-down"></i></a>
                                                <div class="accordion-inner">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.</p>
                                                </div>
                                                <a class="toggle" href="#"> How do I edit or remove a payment method?   <i class="fa-solid fa-caret-down"></i></a>
                                                <div class="accordion-inner">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- help-item-wrap end-->
                                        <!-- help-item-wrap -->	
                                        <div class="help-item-wrap" id="faq2">
                                            <div class="help-item-title">Suggestions</div>
                                            <div class="accordion">
                                                <a class="toggle" href="#"> How long does the sending process take? <i class="fa-solid fa-caret-down"></i></a>
                                                <div class="accordion-inner">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.</p>
                                                </div>
                                                <a class="toggle" href="#">Can I use more than one payment method to pay for a reservation? <i class="fa-solid fa-caret-down"></i></a>
                                                <div class="accordion-inner">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- help-item-wrap end-->											
                                        <!-- help-item-wrap -->	
                                        <div class="help-item-wrap" id="faq3">
                                            <div class="help-item-title">Reccomendations</div>
                                            <div class="accordion">
                                                <a class="toggle" href="#"> How long does the sending process take? <i class="fa-solid fa-caret-down"></i></a>
                                                <div class="accordion-inner">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.</p>
                                                </div>
                                                <a class="toggle" href="#">Can I use more than one payment method to pay for a reservation? <i class="fa-solid fa-caret-down"></i></a>
                                                <div class="accordion-inner">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.</p>
                                                </div>
                                                <a class="toggle" href="#"> How do I edit or remove a payment method?   <i class="fa-solid fa-caret-down"></i></a>
                                                <div class="accordion-inner">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- help-item-wrap end-->											
                                        <!-- help-item-wrap -->	
                                        <div class="help-item-wrap" id="faq4">
                                            <div class="help-item-title">Properties</div>
                                            <div class="accordion">
                                                <a class="toggle" href="#"> How long does the sending process take? <i class="fa-solid fa-caret-down"></i></a>
                                                <div class="accordion-inner">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.</p>
                                                </div>
                                                <a class="toggle" href="#">Can I use more than one payment method to pay for a reservation? <i class="fa-solid fa-caret-down"></i></a>
                                                <div class="accordion-inner">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.</p>
                                                </div>
                                                <a class="toggle" href="#"> How do I edit or remove a payment method?   <i class="fa-solid fa-caret-down"></i></a>
                                                <div class="accordion-inner">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.</p>
                                                </div>
                                                <a class="toggle" href="#"> How long does the sending process take? <i class="fa-solid fa-caret-down"></i></a>
                                                <div class="accordion-inner">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- help-item-wrap end-->											
                                        <!--post-banner-widget-->
                                        <div class="post-banner-widget">
                                            <div class="bg-wrap fs-wrapper bg-parallax-wrap-gradien">
                                                <div class="bg  " data-bg="images/all/19.jpg"></div>
                                            </div>
                                            <div class="post-banner-widget_content">
                                                <h5>Still haven't found a suitable solution to your question or problem?</h5>
                                                <a href="add-listing.html">Get In Touch With Us</a>
                                            </div>
                                        </div>
                                        <!--post-banner-widget end-->										
                                    </div>
                                </div>
                                <div class="limit-box"></div>
                            </div>
                            <!--boxed-container end-->
                            <div class="api-wrap">
                                <div class="api-container">
                                    <div class="api-img">
                                        <img src="images/api.png" alt="" class="respimg">
                                    </div>
                                    <div class="api-text">
                                        <h3>Our App Available Now</h3>
                                        <p>In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida. Lorem ipsum dolor sit amet, conse ctetuer adipiscing elit, sed diam nonu mmy nibh euismod tincidunt ut laoreet dolore magna aliquam erat.</p>
                                        <div class="api-text-links">
                                            <a href="#"><span> On Apple Store</span><i class="fa-brands fa-apple"></i></a>
                                            <a href="#"><span> On Google PLay</span><i class="fa-brands fa-google-play"></i></a>												
                                        </div>
                                    </div>
                                    <div class="api-wrap-bg" data-run="2">
                                        <div class="api-wrap-bg-container">
                                            <span class="api-bg-pin"></span><span class="api-bg-pin"></span>
                                            <div class="abs_bg"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--main-content end-->
                        <div class="to_top-btn-wrap">
                            <div class="to-top to-top_btn"><span>Back to top</span> <i class="fa-solid fa-arrow-up"></i></div>
                            <div class="svg-corner svg-corner_white"  style="top:0;left:  -40px; transform: rotate(-90deg)"></div>
                            <div class="svg-corner svg-corner_white"  style="top:0;right: -40px; transform: rotate(-180deg)"></div>
                        </div>
                    </div>
                    <!-- container end-->
                </div>
                <!--content  end-->
                <!--main-footer-->
                <div class="height-emulator"></div>
                <footer class="main-footer">
                    <div class="container">
                        <div class="footer-inner">
                            <div class="row">
                                <!-- footer-widget -->
                                <div class="col-lg-4">
                                    <div class="footer-widget">
                                        <div class="footer-widget-title">Get Our Application</div>
                                        <div class="footer-widget-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
                                            <div class="api-links-wrap">
                                                <a href="#" class="footer-widget-content-link"><span> On Apple Store</span><i class="fa-brands fa-apple"></i></a>
                                                <a href="#" class="footer-widget-content-link"><span> On Google PLay</span><i class="fa-brands fa-google-play"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- footer-widget  end-->
                                <!-- footer-widget -->
                                <div class="col-lg-2">
                                    <div class="footer-widget">
                                        <div class="footer-widget-title">Helpful links</div>
                                        <div class="footer-widget-content">
                                            <div class="footer-list footer-box  ">
                                                <ul>
                                                    <li><a href="#">Our last News</a></li>
                                                    <li><a href="#">Pricing Plans</a></li>
                                                    <li><a href="#">Contacts</a></li>
                                                    <li><a href="#">Help Center</a></li>
                                                    <li><a href="#">Privacy Policy</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- footer-widget  end-->
                                <!-- footer-widget -->
                                <div class="col-lg-2">
                                    <div class="footer-widget">
                                        <div class="footer-widget-title">Our Contacts</div>
                                        <div class="footer-widget-content">
                                            <div class="footer-list footer-box  ">
                                                <ul  class="footer-contacts  ">
                                                    <li><span>Mail :</span><a href="#" >yourmail@domain.com</a></li>
                                                    <li> <span>Adress :</span><a href="#" >USA 27TH Brooklyn NY</a></li>
                                                    <li><span>Phone :</span><a href="#">+2(111)123456789</a></li>
                                                </ul>
                                                <a href="contacts.html" class="footer-widget-content-link"><span>Get in Touch</span><i class="fa-solid fa-caret-right"></i></a>	
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- footer-widget  end-->								
                                <!-- footer-widget -->
                                <div class="col-lg-4">
                                    <div class="footer-widget">
                                        <div class="footer-widget-title">Subscribe</div>
                                        <div class="footer-widget-content">
                                            <p>Want to be notified when we launch a new template or an udpate. Just sign up and we'll send you a notification by email.</p>
                                            <form id="subscribe"   class="subscribe-item">
                                                <input class="enteremail" name="email" id="subscribe-email" placeholder="Your Email" spellcheck="false" type="text">
                                                <button type="submit" id="subscribe-button" class="subscribe-button"><span>Send</span> </button>
                                                <label for="subscribe-email" class="subscribe-message"></label>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- footer-widget  end-->
                            </div>
                            <!-- footer-widget-wrap end-->					
                        </div>
                        <div class="footer-bottom">
                            <a href="index.html" class="footer-home_link"><i class="fa-regular  fa-house"></i></a>		
                            <div class="copyright"> <span>&#169;Renstate 2024</span> . All rights reserved. </div>
                            <div class="footer-social">
                                <span class="footer-social-title">Follow Us</span>
                                <div class="footer-social-wrap">
                                    <a href="#" ><i class="fa-brands fa-facebook-f"></i></a> 
                                    <a href="#" ><i class="fa-brands fa-x-twitter"></i></a> 
                                    <a href="#" ><i class="fa-brands fa-instagram"></i></a> 
                                    <a href="#" ><i class="fa-brands fa-tiktok"></i></a>
                                    <a href="#" ><i class="fa-brands fa-youtube"></i></a>										 
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!--main-footer end-->
            </div>
            <!--warpper end-->
            <!--wish-list-wrap-->
            <div class="wish-list-wrap">
                <div class="wish-list-close clwl_btn"><i class="fa-regular fa-xmark"></i></div>
                <div class="wish-list_header">
                    <div class="wish-list-title">Your Wishlist <span>3</span></div>
                </div>
                <div class="wish-list-container">
                    <!--wish-list-item-->
                    <div class="wish-list-item fl-wrap">
                        <div class="wish-list-img"><a href="listing-single.html"><img src="images/all/thumbnails/1.jpg" alt=""></a>  
                        </div>
                        <div class="wish-list-descr">
                            <h4><a href="listing-single.html">Urban House</a></h4>
                            <div class="geodir-category-location fl-wrap"><a href="#"> 40 Journal Square  , NJ, USA</a></div>
                            <div class="wish-list-price"> $ 320,000</div>
                            <div class="clear-wishlist"><i class="fa-regular fa-trash-can"></i></div>
                        </div>
                    </div>
                    <!--wish-list-item end-->
                    <!--wish-list-item-->
                    <div class="wish-list-item fl-wrap">
                        <div class="wish-list-img"><a href="listing-single.html"><img src="images/all/thumbnails/2.jpg" alt=""></a>  
                        </div>
                        <div class="wish-list-descr">
                            <h4><a href="listing-single.html">Luxury Family Home</a></h4>
                            <div class="geodir-category-location fl-wrap"><a href="#">  40 Journal Square  , NJ, USA</a></div>
                            <div class="wish-list-price">  $ 1500 - per month</div>
                            <div class="clear-wishlist"><i class="fa-regular fa-trash-can"></i></div>
                        </div>
                    </div>
                    <!--wish-list-item end-->
                    <!--wish-list-item-->
                    <div class="wish-list-item fl-wrap">
                        <div class="wish-list-img"><a href="listing-single.html"><img src="images/all/thumbnails/3.jpg" alt=""></a>  
                        </div>
                        <div class="wish-list-descr">
                            <h4><a href="listing-single.html">Modern Apartment</a></h4>
                            <div class="geodir-category-location fl-wrap"><a href="#">  40 Journal Square  , NJ, USA</a></div>
                            <div class="wish-list-price"> $ 1,600,000</div>
                            <div class="clear-wishlist"><i class="fa-regular fa-trash-can"></i></div>
                        </div>
                    </div>
                    <!--wish-list-item end-->					
                </div>
                <div class="wish-list-footer">
                    <div class="clear_wishlist">  Clear Wishlist</div>
                </div>
            </div>
            <!--wish-list-wrap end-->
            <div class="mob-nav-overlay fs-wrapper"></div>
            <div class="body-overlay fs-wrapper wishlist-wrap-overlay clwl_btn"></div>
            <!--register form -->
            <div class="main-register-container">
                <div class="main-register_box">
                    <div class="main-register-holder">
                        <div class="main-register-wrap ">
                            <div class="main-register_bg">
                                <div class="mr_title">
                                    <h4>Welcome to Rentstate</h4>
                                    <h5>Premium Real Estate Agency</h5>
                                </div>
                                <div class="main-register_contacts-wrap">
                                    <h4>Have a questions?</h4>
                                    <a href="contacts.html">  Get in Touch</a>
                                    <div class="svg-corner svg-corner_white"  style="bottom:0;left:  -39px;"></div>
                                    <div class="svg-corner svg-corner_white"  style="bottom:0;right:  -39px;transform: rotate(90deg)"></div>
                                </div>
                                <div class="main-register_bg-dec"></div>
                            </div>
                            <div class="main-register tabs-act fl-wrap">
                                <ul class="tabs-menu">
                                    <li class="current"><a href="#tab-1"><i class="fa-regular fa-sign-in-alt"></i> Login</a></li>
                                    <li><a href="#tab-2"> <i class="fa-regular fa-user-plus"></i> Register</a></li>
                                </ul>
                                <div class="close-modal close-reg-form"><i class="fa-regular fa-xmark"></i></div>
                                <!--tabs -->
                                <div id="tabs-container">
                                    <div class="tab">
                                        <!--tab -->
                                        <div id="tab-1" class="tab-content first-tab">
                                            <div class="custom-form">
                                                <form method="post" name="registerform">
                                                    <!-- listsearch-input-item -->
                                                    <div class="cs-intputwrap">
                                                        <i class="fa-light fa-user"></i>
                                                        <input type="text"   placeholder="Username or Email Address" value="">
                                                    </div>
                                                    <!-- listsearch-input-item -->												
                                                    <div class="cs-intputwrap pass-input-wrap">
                                                        <i class="fa-light fa-lock"></i>
                                                        <input type="password" class="pass-input" placeholder="Current Password" value="">
                                                        <div class="view-pass"></div>
                                                    </div>
                                                    <!-- listsearch-input-item -->	
                                                    <div class="filter-tags">
                                                        <input id="check-a" type="checkbox" name="check" checked>
                                                        <label for="check-a">Remember me</label>
                                                    </div>
                                                    <div class="lost_password">
                                                        <a href="#">Lost Your Password?</a>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <button type="submit" class="commentssubmit"> Log In </button>
                                                </form>
                                            </div>
                                        </div>
                                        <!--tab end -->
                                        <!--tab -->
                                        <div class="tab">
                                            <div id="tab-2" class="tab-content">
                                                <div class="custom-form">
                                                    <form method="post" name="registerform" class="main-register-form" id="main-register-form2">
                                                        <!-- listsearch-input-item -->
                                                        <div class="cs-intputwrap">
                                                            <i class="fa-light fa-user"></i>
                                                            <input type="text"   placeholder="Full Name" value="">
                                                        </div>
                                                        <!-- listsearch-input-item -->													
                                                        <!-- listsearch-input-item -->
                                                        <div class="cs-intputwrap">
                                                            <i class="fa-light fa-envelope"></i>
                                                            <input type="text"   placeholder="Email Address" value="">
                                                        </div>
                                                        <!-- listsearch-input-item -->														
                                                        <!-- listsearch-input-item -->
                                                        <div class="cs-intputwrap pass-input-wrap">
                                                            <i class="fa-light fa-lock"></i>
                                                            <input type="password" class="pass-input" placeholder="Password" value="">
                                                            <div class="view-pass"></div>
                                                        </div>
                                                        <!-- listsearch-input-item -->														
                                                        <button type="submit" class="commentssubmit"><span>Register</span></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!--tab end -->
                                    </div>
                                    <!--tabs end -->
                                    <div class="log-separator fl-wrap"><span>or</span></div>
                                    <div class="soc-log  fl-wrap">
                                        <p>For faster login or register use your social account.</p>
                                        <a href="#" class="google_log"><i class="fa-brands fa-google"></i>Connect with Google</a>
                                        <a href="#" class="fb_log"><i class="fa-brands fa-facebook-f"></i> Connect with Facebook</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="body-overlay fs-wrapper reg-overlay close-reg-form"></div>
            </div>
            <!--register form end -->				
            <!-- progress-bar  -->
            <div class="progress-bar-wrap">
                <div class="progress-bar color-bg"></div>
            </div>
            <!-- progress-bar end -->			
        </div>
        <!-- Main end -->
        <!--=============== scripts  ===============-->   
        <script  src="js/jquery.min.js"></script>
        <script  src="js/plugins.js"></script>
        <script  src="js/scripts.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCLbbqPyt9k72CSUbi2d4F_aUKAjB6oekI&libraries=places"></script>
        <script src="js/map-single.js"></script>
    </body>
</html>