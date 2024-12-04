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
                            <fegaussianblur in="SourceGraphic" stdDeviation="2" result="blur"/>
                            <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 5 -2" result="gooey"/>
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
                        <a href="index.html" class="logo-holder">
                            <img src="images/logo.png" alt="">
                        </a>
                        <!--  navigation -->
                        <div class="nav-holder main-menu">
                            <nav>
                                <ul class="no-list-style">
                                    <li>
                                        <a href="#">
                                            Home <i class="fa-solid fa-caret-down"></i>
                                        </a>
                                        <!--second level -->
                                        <ul>
                                            <li>
                                                <a href="index.html">Slider</a>
                                            </li>
                                            <li>
                                                <a href="index2.html">Video</a>
                                            </li>
                                            <li>
                                                <a href="index3.html">Slideshow</a>
                                            </li>
                                            <li>
                                                <a href="index4.html">Parallax Image</a>
                                            </li>
                                            <li>
                                                <a href="dashboard.html">User Dasboard</a>
                                            </li>
                                        </ul>
                                        <!--second level end-->
                                    </li>
                                    <li>
                                        <a href="#" class="act-link">
                                            Listings <i class="fa-solid fa-caret-down"></i>
                                        </a>
                                        <!--second level -->
                                        <ul>
                                            <li>
                                                <a href="listing.html">Style 1</a>
                                            </li>
                                            <li>
                                                <a href="listing2.html">Style 2</a>
                                            </li>
                                            <li>
                                                <a href="listing3.html">Style 3</a>
                                            </li>
                                            <li>
                                                <a href="listing4.html">Style 4</a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    Single <i class="fa-solid fa-caret-right"></i>
                                                </a>
                                                <!--third  level  -->
                                                <ul>
                                                    <li>
                                                        <a href="listing-single.html">Style 1</a>
                                                    </li>
                                                    <li>
                                                        <a href="listing-single2.html">Style 2</a>
                                                    </li>
                                                    <li>
                                                        <a href="listing-single3.html">Style 3</a>
                                                    </li>
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
                                        <a href="#">
                                            Pages <i class="fa-solid fa-caret-down"></i>
                                        </a>
                                        <!--second level -->
                                        <ul>
                                            <li>
                                                <a href="about.html">About</a>
                                            </li>
                                            <li>
                                                <a href="contacts.html">Contacts</a>
                                            </li>
                                            <li>
                                                <a href="agent-single.html">Agent single</a>
                                            </li>
                                            <li>
                                                <a href="help.html">How it Works</a>
                                            </li>
                                            <li>
                                                <a href="pricing.html">Pricing</a>
                                            </li>
                                            <li>
                                                <a href="blog-single.html">Blog Single</a>
                                            </li>
                                            <li>
                                                <a href="add-listing.html">Add Listing</a>
                                            </li>
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
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <!-- nav-button-wrap end-->
                        <div class="header-search-btn tolt" data-microtip-position="bottom" data-tooltip="Search">
                            <i class="fa-regular fa-magnifying-glass"></i>
                        </div>
                        <a href="add-listing.html" class="header-btn">
                            <span>Add Your Propperty</span>
                        </a>
                        <div class="wish_btn swl_btn tolt" data-microtip-position="bottom" data-tooltip="Wishlist">
                            <div class="wish_btn-item">
                                <i class="fa-thin fa-heart"></i>
                                <span class="wish_count">3</span>
                            </div>
                        </div>
                        <div class="show-reg-form modal-open">
                            <i class="fa-thin fa-user"></i>
                            <span>Sign In</span>
                        </div>
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
                                            <input type="text" placeholder="Keywords..." value="">
                                        </div>
                                        <!-- listsearch-input-item -->
                                        <!-- listsearch-input-item -->
                                        <div class="cs-intputwrap">
                                            <i class="fa-light fa-location-dot"></i>
                                            <input type="text" placeholder="Location..." value="">
                                        </div>
                                        <!-- listsearch-input-item -->
                                        <!-- listsearch-input-item -->
                                        <div class="cs-intputwrap">
                                            <div class="price-range-wrap ">
                                                <label>Price Range</label>
                                                <div class="price-rage-item">
                                                    <input type="text" class="price-range-double" data-min="100" data-max="100000" name="price-range1" data-step="1" value="1" data-prefix="$">
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
                <div class="content">
                    <!--section-->
                    <div class="section hero-section">
                        <div class="hero-section-wrap">
                            <div class="hero-section-wrap-item">
                                <div class="container">
                                    <div class="hero-section-container">
                                        <div class="hero-section-breadcrumbs">
                                            <div class="breadcrumbs-list">
                                                <a href="#">Home</a>
                                                <a href="#">Properties</a>
                                                <a href="#">New York</a>
                                                <span>Property Single</span>
                                                <div class="breadcrumbs-list_dec">
                                                    <i class="fa-thin fa-arrow-up"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hero-section-title_container">
                                            <div class="hero-section_categories">
                                                <a href="#">For Sale</a>
                                                <a href="#">Houses</a>
                                            </div>
                                            <div class="hero-section-title">
                                                <h2>House in Financial District</h2>
                                                <h4>
                                                    <i class="fa-solid fa-location-dot"></i>
                                                    <span>70 Bright St New York, USA</span>
                                                </h4>
                                            </div>
                                            <div class="hero-section-opt">
                                                <div class="property-single-header-price" data-propertyprise="50500">
                                                    <strong>Price:</strong>
                                                    <span class="pshp_item">
                                                        <span>$</span>
                                                        150.500 
                                                    </span>
                                                </div>
                                                <div class="property-single-header-date">
                                                    <span>Developer Company:</span>
                                                    <a href="#">House Construction</a>
                                                </div>
                                                <div class="property-single-header-date">
                                                    <span>Status:</span>
                                                    Shutdown 2025
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
                                            <div class="svg-corner svg-corner_white" style="bottom:0;left:  -40px;"></div>
                                        </div>
                                        <div class="hs-pv_wrap">
                                            <div class="pv-item">
                                                <i class="fa-light fa-glasses"></i>
                                                <span>
                                                    Viewed - <strong>335</strong>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="hero-opt-btnns">
                                            <a href="#" class="like-btn tolt" data-microtip-position="left" data-tooltip="Add to Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </a>
                                            <a href="#single_cf" class="custom-scroll-link tolt" data-microtip-position="left" data-tooltip="Contact to View">
                                                <i class="fa-light fa-envelope"></i>
                                            </a>
                                        </div>
                                        <a href="agent-single.html" class="hero-section-agent_link">
                                            <img src="images/avatar/2.jpg" alt="">
                                            <span>Agent:</span>
                                            Niko Furingee <i class="fa-regular fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="bg-wrap bg-hero bg-parallax-wrap-gradien fs-wrapper" data-scrollax-parent="true">
                                    <div class="bg" data-bg="images/bg/2.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
                                </div>
                                <div class="svg-corner svg-corner_white" style="bottom:64px;right: 0;z-index: 100"></div>
                            </div>
                        </div>
                    </div>
                    <!--section-end-->
                    <div class="container">
                        <div class="main-content">
                            <div class="boxed-container">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <!--boxed-container-->
                                        <div class="scroll-content-wrap">
                                            <div class="share-holder init-fix-column">
                                                <span class="share-title">Share   </span>
                                                <div class="share-container  isShare"></div>
                                            </div>
                                            <!--ps-facts-wrapper-->
                                            <div class="ps-facts-wrapper">
                                                <!--ps-facts-item-->
                                                <div class="ps-facts-item">
                                                    <h4>Bedroom</h4>
                                                    <h5>Four</h5>
                                                    <i class="fa-light fa-bed"></i>
                                                </div>
                                                <!--ps-facts-item end-->
                                                <!--ps-facts-item-->
                                                <div class="ps-facts-item">
                                                    <h4>Bethroom</h4>
                                                    <h5>Two</h5>
                                                    <i class="fa-light fa-bath"></i>
                                                </div>
                                                <!--ps-facts-item end-->
                                                <!--ps-facts-item-->
                                                <div class="ps-facts-item">
                                                    <h4>Area</h4>
                                                    <h5>365 ft</h5>
                                                    <i class="fa-light fa-chart-area"></i>
                                                </div>
                                                <!--ps-facts-item end-->
                                                <!--ps-facts-item-->
                                                <div class="ps-facts-item">
                                                    <h4>Parking</h4>
                                                    <h5>Outdoor</h5>
                                                    <i class="fa-light fa-car"></i>
                                                </div>
                                                <!--ps-facts-item end-->
                                            </div>
                                            <!--ps-facts-wrapper end-->
                                            <!--boxed-content-->
                                            <div class="boxed-content">
                                                <!--boxed-content-title-->
                                                <div class="boxed-content-title">
                                                    <h3>About this Property</h3>
                                                </div>
                                                <!--boxed-content-title end-->
                                                <!--boxed-content-item-->
                                                <div class="boxed-content-item">
                                                    <p>Praesent eros turpis, commodo vel justo at, pulvinar mollis eros. Mauris aliquet eu quam id ornare. Morbi ac quam enim. Cras vitae nulla condimentum, semper dolor non, faucibus dolor. Vivamus adipiscing eros quis orci fringilla, sed pretium lectus viverra. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec nec velit non odio aliquam suscipit. Sed non neque faucibus, condimentum lectus at, accumsan enim.   </p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.</p>
                                                    <div class="pp-single-opt-wrap">
                                                        <div class="pp-single-opt-links">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" download>
                                                                        <i class="fa-light fa-file-pdf"></i>
                                                                        Download Brochure 
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa-light fa-layer-group"></i>
                                                                        View Floor Plans
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                            <a href="#" class="pp-single-opt-link_silngle">Visit Website</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--boxed-content-item end-->
                                            </div>
                                            <!--boxed-content end-->
                                            <!--boxed-content-->
                                            <div class="boxed-content">
                                                <!--boxed-content-title-->
                                                <div class="boxed-content-title">
                                                    <h3>Property Gallery</h3>
                                                </div>
                                                <!--boxed-content-title end-->
                                                <!--boxed-content-item-->
                                                <div class="boxed-content-item">
                                                    <div class="single-gallery-filters">
                                                        <div class="gallery-filters">
                                                            <a href="#" class="gallery-filter gallery-filter-active" data-filter="*">All Media</a>
                                                            <a href="#" class="gallery-filter " data-filter=".interior">Interior</a>
                                                            <a href="#" class="gallery-filter" data-filter=".outdoor">Outdoor</a>
                                                            <a href="#" class="gallery-filter" data-filter=".video">Video</a>
                                                        </div>
                                                        <div class="gf_counter">
                                                            <div class="num-album"></div>
                                                            <div class="all-album"></div>
                                                        </div>
                                                    </div>
                                                    <!-- gallery-items   -->
                                                    <div class="gallery-items gisp  grid-small-pad  list-single-gallery three-coulms lightgallery">
                                                        <!-- 1 -->
                                                        <div class="gallery-item interior">
                                                            <div class="grid-item-holder hovzoom">
                                                                <img src="images/all/1.jpg" alt="">
                                                                <a href="images/all/1.jpg" class="gal-link popup-image">
                                                                    <i class="fa fa-search"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <!-- 1 end -->
                                                        <!-- 2 -->
                                                        <div class="gallery-item outdoor gallery-item-second">
                                                            <div class="grid-item-holder hovzoom">
                                                                <img src="images/all/2.jpg" alt="">
                                                                <a href="images/all/2.jpg" class="gal-link popup-image">
                                                                    <i class="fa fa-search"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <!-- 2 end -->
                                                        <!-- 3 -->
                                                        <div class="gallery-item  interior  ">
                                                            <div class="grid-item-holder hovzoom">
                                                                <img src="images/all/3.jpg" alt="">
                                                                <a href="images/all/3.jpg" class="gal-link popup-image">
                                                                    <i class="fa fa-search"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <!-- 3 end -->
                                                        <!-- 4 -->
                                                        <div class="gallery-item outdoor">
                                                            <div class="grid-item-holder hovzoom">
                                                                <img src="images/all/4.jpg" alt="">
                                                                <a href="images/all/4.jpg" class="gal-link popup-image">
                                                                    <i class="fa fa-search"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <!-- 4 end -->
                                                        <!-- 5 -->
                                                        <div class="gallery-item video">
                                                            <div class="grid-item-holder hovzoom">
                                                                <img src="images/all/14.jpg" alt="">
                                                                <a href="images/all/14.jpg" class="gal-link popup-image">
                                                                    <i class="fa fa-search"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <!-- 5 end -->
                                                        <!-- 7 -->
                                                        <div class="gallery-item interior">
                                                            <div class="grid-item-holder hovzoom">
                                                                <img src="images/all/13.jpg" alt="">
                                                                <a href="images/all/13.jpg" class="gal-link popup-image">
                                                                    <i class="fa fa-search"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <!-- 7 end -->
                                                    </div>
                                                    <!-- end gallery items -->
                                                </div>
                                                <!--boxed-content-item end-->
                                            </div>
                                            <!--boxed-content end-->
                                            <!--boxed-content-->
                                            <div class="boxed-content">
                                                <!--boxed-content-title-->
                                                <div class="boxed-content-title">
                                                    <h3>Property Amenities</h3>
                                                </div>
                                                <!--boxed-content-title end-->
                                                <!--boxed-content-item-->
                                                <div class="boxed-content-item">
                                                    <div class="pp-single-opt">
                                                        <div class="pp-single-features ">
                                                            <ul>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fal fa-dumbbell"></i>
                                                                        Gym
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fal fa-wifi"></i>
                                                                        Wi Fi
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fal fa-parking"></i>
                                                                        Parking
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fal fa-cloud"></i>
                                                                        Air Conditioned
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fal fa-swimmer"></i>
                                                                        Pool
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fal fa-cctv"></i>
                                                                        Security
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fal fa-washer"></i>
                                                                        Laundry Room
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--boxed-content-item end-->
                                            </div>
                                            <!--boxed-content end-->
                                            <div class="accordion">
                                                <a class="toggle act-accordion" href="#">
                                                    Details option   <i class="fa-solid fa-caret-down"></i>
                                                </a>
                                                <div class="accordion-inner visible">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.</p>
                                                </div>
                                                <a class="toggle" href="#">
                                                    Details option 2  <i class="fa-solid fa-caret-down"></i>
                                                </a>
                                                <div class="accordion-inner">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.</p>
                                                </div>
                                                <a class="toggle" href="#">
                                                    Details option 3  <i class="fa-solid fa-caret-down"></i>
                                                </a>
                                                <div class="accordion-inner">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.</p>
                                                </div>
                                            </div>
                                            <!--banner-widget-wrap-->
                                            <div class="banner-widget-wrap">
                                                <div class="bg-wrap bg-parallax-wrap-gradien fs-wrapper">
                                                    <div class="bg" data-bg="images/all/14.jpg"></div>
                                                </div>
                                                <div class="banner-widget_content">
                                                    <div class="video-box-btn" id="html5-videos" data-html="#video1">
                                                        <i class="fas fa-play"></i>
                                                    </div>
                                                    <h5>
                                                        <span>Property  Video Presentation</span>
                                                    </h5>
                                                </div>
                                                <div style="display:none;" id="video1" class="popup_video" data-videolink="video/2.mp4">
                                                    <video class="lg-video-object lg-html5" controls preload="none">
                                                        <source src="/" type="video/mp4">
                                                    </video>
                                                </div>
                                            </div>
                                            <!--banner-widget-wrap end-->
                                            <!--boxed-content-->
                                            <div class="boxed-content">
                                                <!--boxed-content-title-->
                                                <div class="boxed-content-title">
                                                    <h3>Property Location  </h3>
                                                </div>
                                                <!--boxed-content-title end-->
                                                <!--boxed-content-item-->
                                                <div class="boxed-content-item">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="map-container mapC_vis2">
                                                                <div id="singleMap" class="single-map-container fs-wrapper" data-latitude="40.7427837" data-longitude="-73.11445617675781" data-mapTitle="Our Location" data-infotitle="House in Financial Distric" data-infotext="70 Bright St New York, USA"></div>
                                                                <div class="scrollContorl"></div>
                                                                <input id="pac-input" class="controls fl-wrap controls-mapwn" autocomplete="on" type="text" placeholder="What Nearby? Schools, Gym... " value="">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="nerby-list-wrap">
                                                                <div class="nerby-list-container">
                                                                    <div class="nerby-list">
                                                                        <span class="nerby-title">What's Nearby</span>
                                                                        <div class="nerby-list-box">
                                                                            <ul>
                                                                                <li>
                                                                                    <i class="fa-light fa-school"></i>
                                                                                    School: <span>1.2km</span>
                                                                                </li>
                                                                                <li>
                                                                                    <i class="fa-light fa-cart-shopping"></i>
                                                                                    Shopping Mall: <span>2.2km</span>
                                                                                </li>
                                                                                <li>
                                                                                    <i class="fa-light fa-user-police-tie"></i>
                                                                                    Police Station: <span>1.6km</span>
                                                                                </li>
                                                                                <li>
                                                                                    <i class="fa-light fa-truck-medical"></i>
                                                                                    Hospital: <span>0.7km</span>
                                                                                </li>
                                                                                <li>
                                                                                    <i class="fa-light fa-teddy-bear"></i>
                                                                                    Playschool: <span>1.1km</span>
                                                                                </li>
                                                                                <li>
                                                                                    <i class="fa-light fa-bench-tree"></i>
                                                                                    Parks: <span>0.2km</span>
                                                                                </li>
                                                                            </ul>
                                                                            <a href="#" class="commentssubmit commentssubmit_fw" style="margin-top: 10px">Get Directions</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--boxed-content-item end-->
                                            </div>
                                            <!--boxed-content end-->
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <!--boxed-container-->
                                        <div class="sb-container">
                                            <div class="charts-container">
                                                <div class="dec-title">
                                                    <div class="dec-title_item">
                                                        Dynamics of Price Changes 
                                                        <div class="svg-corner svg-corner_dark" style="top:12px;right: -39px; transform: rotate(90deg)"></div>
                                                    </div>
                                                </div>
                                                <div class="charts-item dark-bg sb-widget">
                                                    <div class="graph-price-container">
                                                        <div class="graph-price animaper">
                                                            <div class="graph-price-item">
                                                                <div class="graph" data-percent="50%">
                                                                    <div class="gil">
                                                                        <span>$130.00</span>
                                                                    </div>
                                                                </div>
                                                                <div class="graph-price-item-title">March</div>
                                                            </div>
                                                            <div class="graph-price-item">
                                                                <div class="graph" data-percent="65%">
                                                                    <div class="gil">
                                                                        <span>$145.00</span>
                                                                    </div>
                                                                </div>
                                                                <div class="graph-price-item-title">April</div>
                                                            </div>
                                                            <div class="graph-price-item">
                                                                <div class="graph" data-percent="55%">
                                                                    <div class="gil">
                                                                        <span>$135.00</span>
                                                                    </div>
                                                                </div>
                                                                <div class="graph-price-item-title">May</div>
                                                            </div>
                                                            <div class="graph-price-item">
                                                                <div class="graph" data-percent="78%">
                                                                    <div class="gil">
                                                                        <span>$155.500</span>
                                                                    </div>
                                                                </div>
                                                                <div class="graph-price-item-title">June</div>
                                                            </div>
                                                        </div>
                                                        <div class="graph-price-counter">
                                                            <div class="graph-price-counter-wrap">
                                                                <div class="stats animaper">
                                                                    <div class="num" data-content="27" data-num="27">0</div>
                                                                    <span class="price-perc">
                                                                        <i class="fa-light fa-percent"></i>
                                                                    </span>
                                                                </div>
                                                                <h4>Object Price change percentage</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--boxed-content-->
                                            <div class="boxed-content">
                                                <!--boxed-content-title-->
                                                <div class="boxed-content-title">
                                                    <h3>Property Tags</h3>
                                                </div>
                                                <!--boxed-content-title end-->
                                                <!--boxed-content-item-->
                                                <div class="boxed-content-item bc-item_smal_pad">
                                                    <div class="tags-widget">
                                                        <a href="#">Hotel</a>
                                                        <a href="#">Hostel</a>
                                                        <a href="#">Room</a>
                                                        <a href="#">Spa</a>
                                                        <a href="#">Restourant</a>
                                                        <a href="#">Parking</a>
                                                    </div>
                                                </div>
                                                <!--boxed-content-item end-->
                                            </div>
                                            <!--boxed-content end-->
                                            <!--boxed-content-->
                                            <div class="fixed-form-wrap">
                                                <div class="fixed-form">
                                                    <div class="boxed-content">
                                                        <!--boxed-content-title-->
                                                        <div class="boxed-content-title">
                                                            <h3>Request a Showing</h3>
                                                        </div>
                                                        <!--boxed-content-title end-->
                                                        <!--boxed-content-item-->
                                                        <div class="boxed-content-item">
                                                            <div class="property-contacts-wrap">
                                                                <div class="property-contacts-item sh-links">
                                                                    <div class="property-contacts_profile">
                                                                        <a href="agent-single.html" class="property-contacts_profile_link">
                                                                            <img src="images/avatar/2.jpg" alt="">
                                                                            <span>Agent:</span>
                                                                            Niko Furingee 
                                                                        </a>
                                                                    </div>
                                                                    <div class="property-contacts-links">
                                                                        <a href="tel:+18475555555" class="tolt pcl_btn" data-microtip-position="left" data-tooltip="Call">
                                                                            <i class="fa-solid fa-phone"></i>
                                                                        </a>
                                                                        <a href="#" class="show-messenger-links pcl_btn tolt" data-microtip-position="left" data-tooltip="Write Message">
                                                                            <i class="fa-solid fa-message-sms"></i>
                                                                        </a>
                                                                    </div>
                                                                    <div class="messenger-links-container">
                                                                        <a href="#" class="tolt" data-microtip-position="bottom" data-tooltip="Viber">
                                                                            <i class="fa-brands fa-viber"></i>
                                                                        </a>
                                                                        <a href="#" class="tolt" data-microtip-position="bottom" data-tooltip="Whatsapp">
                                                                            <i class="fa-brands fa-whatsapp"></i>
                                                                        </a>
                                                                        <a href="#" class="tolt" data-microtip-position="bottom" data-tooltip="Telegram">
                                                                            <i class="fa-brands fa-telegram"></i>
                                                                        </a>
                                                                        <a href="#" class="tolt" data-microtip-position="bottom" data-tooltip="Facebook Messenger">
                                                                            <i class="fa-brands fa-facebook-messenger"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="log-separator">
                                                                    <span>or</span>
                                                                </div>
                                                                <p>Use the form below to select a viewing time and date.</p>
                                                            </div>
                                                            <div class="custom-form" id="single_cf">
                                                                <form method="post" name="contact-property-form">
                                                                    <div class="cs-intputwrap">
                                                                        <i class="fa-light fa-user"></i>
                                                                        <input name="name" type="text" placeholder="Your name" onClick="this.select()" value="">
                                                                    </div>
                                                                    <div class="cs-intputwrap">
                                                                        <i class="fa-light fa-phone-office"></i>
                                                                        <input name="phone" type="text" placeholder="Your Phone" onClick="this.select()" value="">
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-sm-6">
                                                                            <div class="cs-intputwrap">
                                                                                <i class="fa-light fa-calendar"></i>
                                                                                <div class="date-container">
                                                                                    <input type="text" placeholder="Date" id="res_date" name="datepicker-here" value="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <div class="cs-intputwrap">
                                                                                <i class="fa-light fa-calendar"></i>
                                                                                <select data-placeholder="Time" class="chosen-select on-radius no-search-select">
                                                                                    <option>9 AM</option>
                                                                                    <option>10 AM</option>
                                                                                    <option>11 AM</option>
                                                                                    <option>12 AM</option>
                                                                                    <option>13 PM</option>
                                                                                    <option>14 PM</option>
                                                                                    <option>15 PM</option>
                                                                                    <option>16 PM</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <button onclick="window.location.href='listing.html'" class="commentssubmit commentssubmit_fw">Send Request</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <!--boxed-content-item end-->
                                                    </div>
                                                </div>
                                            </div>
                                            <!--boxed-content end-->
                                        </div>
                                    </div>
                                </div>
                                <div class="limit-box"></div>
                            </div>
                            <div class="boxed-container">
                                <div class="boxed-content-title bcst_ca">
                                    <h3>Similar Properties</h3>
                                </div>
                                <div class="single-carousel-wrap">
                                    <div class="single-carousel">
                                        <div class="swiper-container">
                                            <div class="swiper-wrapper">
                                                <!-- swiper-slide -->
                                                <div class="swiper-slide">
                                                    <!-- listing-item -->
                                                    <div class="listing-item">
                                                        <div class="geodir-category-listing">
                                                            <div class="geodir-category-img">
                                                                <a href="listing-single.html" class="geodir-category-img_item">
                                                                    <div class="bg" data-bg="images/all/1.jpg"></div>
                                                                    <div class="overlay"></div>
                                                                </a>
                                                                <div class="geodir-category-location">
                                                                    <a href="#4" class="map-item">
                                                                        <i class="fas fa-map-marker-alt"></i>
                                                                        W 85th St, New York, USA 
                                                                    </a>
                                                                </div>
                                                                <ul class="list-single-opt_header_cat">
                                                                    <li>
                                                                        <a href="#" class="cat-opt">Sale</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" class="cat-opt">Apartment</a>
                                                                    </li>
                                                                </ul>
                                                                <a href="#" class="geodir_save-btn tolt" data-microtip-position="left" data-tooltip="Save">
                                                                    <span>
                                                                        <i class="fal fa-heart"></i>
                                                                    </span>
                                                                </a>
                                                                <div class="geodir-category-listing_media-list">
                                                                    <span>
                                                                        <i class="fas fa-camera"></i>
                                                                        13
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="geodir-category-content">
                                                                <h3>
                                                                    <a href="listing-single.html">Contemporary Apartment</a>
                                                                </h3>
                                                                <div class="geodir-category-content_price">$ 1,600,000</div>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla.</p>
                                                                <div class="geodir-category-content-details">
                                                                    <ul>
                                                                        <li>
                                                                            <i class="fa-light fa-bed"></i>
                                                                            <span>4</span>
                                                                        </li>
                                                                        <li>
                                                                            <i class="fa-light fa-bath"></i>
                                                                            <span>1</span>
                                                                        </li>
                                                                        <li>
                                                                            <i class="fa-light fa-chart-area"></i>
                                                                            <span>550 ft2</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="geodir-category-footer">
                                                                <a href="agent-single.html" class="gcf-company">
                                                                    <img src="images/avatar/4.jpg" alt="">
                                                                    <span>By Liza Rose</span>
                                                                </a>
                                                                <a href="listing-single.html" class="gid_link">
                                                                    <span>View Details</span>
                                                                    <i class="fa-solid fa-caret-right"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- listing-item end-->
                                                </div>
                                                <!--swiper-slide end -->
                                                <!-- swiper-slide -->
                                                <div class="swiper-slide">
                                                    <!-- listing-item -->
                                                    <div class="listing-item">
                                                        <div class="geodir-category-listing">
                                                            <div class="geodir-category-img">
                                                                <a href="listing-single.html" class="geodir-category-img_item">
                                                                    <div class="bg" data-bg="images/all/2.jpg"></div>
                                                                    <div class="overlay"></div>
                                                                </a>
                                                                <div class="geodir-category-location">
                                                                    <a href="#4" class="map-item">
                                                                        <i class="fas fa-map-marker-alt"></i>
                                                                        40 Journal Square  , NJ, USA
                                                                    </a>
                                                                </div>
                                                                <ul class="list-single-opt_header_cat">
                                                                    <li>
                                                                        <a href="#" class="cat-opt">Sale</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" class="cat-opt">House</a>
                                                                    </li>
                                                                </ul>
                                                                <a href="#" class="geodir_save-btn tolt" data-microtip-position="left" data-tooltip="Save">
                                                                    <span>
                                                                        <i class="fal fa-heart"></i>
                                                                    </span>
                                                                </a>
                                                                <div class="geodir-category-listing_media-list">
                                                                    <span>
                                                                        <i class="fas fa-camera"></i>
                                                                        13
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="geodir-category-content">
                                                                <h3>
                                                                    <a href="listing-single.html">Gorgeous House For Sale</a>
                                                                </h3>
                                                                <div class="geodir-category-content_price">$ 500,000</div>
                                                                <p>Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Lorem ipsum dolor sit amet, consectetur adipiscing elit.  Donec a consectetur nulla.</p>
                                                                <div class="geodir-category-content-details">
                                                                    <ul>
                                                                        <li>
                                                                            <i class="fa-light fa-bed"></i>
                                                                            <span>2</span>
                                                                        </li>
                                                                        <li>
                                                                            <i class="fa-light fa-bath"></i>
                                                                            <span>2</span>
                                                                        </li>
                                                                        <li>
                                                                            <i class="fa-light fa-chart-area"></i>
                                                                            <span>150 ft2</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="geodir-category-footer">
                                                                <a href="agent-single.html" class="gcf-company">
                                                                    <img src="images/avatar/2.jpg" alt="">
                                                                    <span>By Niko Furingee </span>
                                                                </a>
                                                                <a href="listing-single.html" class="gid_link">
                                                                    <span>View Details</span>
                                                                    <i class="fa-solid fa-caret-right"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- listing-item end-->
                                                </div>
                                                <!--swiper-slide end -->
                                                <!-- swiper-slide -->
                                                <div class="swiper-slide">
                                                    <!-- listing-item -->
                                                    <div class="listing-item">
                                                        <div class="geodir-category-listing">
                                                            <div class="geodir-category-img">
                                                                <a href="listing-single.html" class="geodir-category-img_item">
                                                                    <div class="bg" data-bg="images/all/8.jpg"></div>
                                                                    <div class="overlay"></div>
                                                                </a>
                                                                <div class="geodir-category-location">
                                                                    <a href="#4" class="map-item">
                                                                        <i class="fas fa-map-marker-alt"></i>
                                                                        70 Bright St, Jersey City, NJ USA
                                                                    </a>
                                                                </div>
                                                                <ul class="list-single-opt_header_cat">
                                                                    <li>
                                                                        <a href="#" class="cat-opt">Rent</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" class="cat-opt">Apartment</a>
                                                                    </li>
                                                                </ul>
                                                                <a href="#" class="geodir_save-btn tolt" data-microtip-position="left" data-tooltip="Save">
                                                                    <span>
                                                                        <i class="fal fa-heart"></i>
                                                                    </span>
                                                                </a>
                                                                <div class="geodir-category-listing_media-list">
                                                                    <span>
                                                                        <i class="fas fa-camera"></i>
                                                                        5
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="geodir-category-content">
                                                                <h3>
                                                                    <a href="listing-single.html">Kayak Point House</a>
                                                                </h3>
                                                                <div class="geodir-category-content_price">$ 1500 / per month</div>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla.</p>
                                                                <div class="geodir-category-content-details">
                                                                    <ul>
                                                                        <li>
                                                                            <i class="fa-light fa-bed"></i>
                                                                            <span>1</span>
                                                                        </li>
                                                                        <li>
                                                                            <i class="fa-light fa-bath"></i>
                                                                            <span>1</span>
                                                                        </li>
                                                                        <li>
                                                                            <i class="fa-light fa-chart-area"></i>
                                                                            <span>70 ft2</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="geodir-category-footer">
                                                                <a href="agent-single.html" class="gcf-company">
                                                                    <img src="images/avatar/5.jpg" alt="">
                                                                    <span>By Andy Sposty</span>
                                                                </a>
                                                                <a href="listing-single.html" class="gid_link">
                                                                    <span>View Details</span>
                                                                    <i class="fa-solid fa-caret-right"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- listing-item end-->
                                                </div>
                                                <!--swiper-slide end -->
                                                <!-- swiper-slide -->
                                                <div class="swiper-slide">
                                                    <!-- listing-item -->
                                                    <div class="listing-item">
                                                        <div class="geodir-category-listing">
                                                            <div class="geodir-category-img">
                                                                <a href="listing-single.html" class="geodir-category-img_item">
                                                                    <div class="bg" data-bg="images/all/4.jpg"></div>
                                                                    <div class="overlay"></div>
                                                                </a>
                                                                <div class="geodir-category-location">
                                                                    <a href="#4" class="map-item">
                                                                        <i class="fas fa-map-marker-alt"></i>
                                                                        W 85th St, New York, USA 
                                                                    </a>
                                                                </div>
                                                                <ul class="list-single-opt_header_cat">
                                                                    <li>
                                                                        <a href="#" class="cat-opt">Sale</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" class="cat-opt">House</a>
                                                                    </li>
                                                                </ul>
                                                                <a href="#" class="geodir_save-btn tolt" data-microtip-position="left" data-tooltip="Save">
                                                                    <span>
                                                                        <i class="fal fa-heart"></i>
                                                                    </span>
                                                                </a>
                                                                <div class="geodir-category-listing_media-list">
                                                                    <span>
                                                                        <i class="fas fa-camera"></i>
                                                                        7
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="geodir-category-content">
                                                                <h3>
                                                                    <a href="listing-single.html">Luxury Family Home</a>
                                                                </h3>
                                                                <div class="geodir-category-content_price">$ 450,000</div>
                                                                <p>Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Lorem ipsum dolor sit amet, consectetur adipiscing elit.  Donec a consectetur nulla.</p>
                                                                <div class="geodir-category-content-details">
                                                                    <ul>
                                                                        <li>
                                                                            <i class="fa-light fa-bed"></i>
                                                                            <span>2</span>
                                                                        </li>
                                                                        <li>
                                                                            <i class="fa-light fa-bath"></i>
                                                                            <span>1</span>
                                                                        </li>
                                                                        <li>
                                                                            <i class="fa-light fa-chart-area"></i>
                                                                            <span>150 ft2</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="geodir-category-footer">
                                                                <a href="agent-single.html" class="gcf-company">
                                                                    <img src="images/avatar/6.jpg" alt="">
                                                                    <span>By Anna Lips</span>
                                                                </a>
                                                                <a href="listing-single.html" class="gid_link">
                                                                    <span>View Details</span>
                                                                    <i class="fa-solid fa-caret-right"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- listing-item end-->
                                                </div>
                                                <!--swiper-slide end -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ss-carousel-pagination_wrap">
                                    <div class="solid-pagination_btns ss-carousel-pagination_init"></div>
                                </div>
                                <div class="ss-carousel-button-wrap">
                                    <div class="ss-carousel-button ss-carousel-button-prev">
                                        <i class="fas fa-caret-left"></i>
                                    </div>
                                    <div class="ss-carousel-button ss-carousel-button-next">
                                        <i class="fas fa-caret-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--main-content end-->
                        <div class="to_top-btn-wrap">
                            <div class="to-top to-top_btn">
                                <span>Back to top</span>
                                <i class="fa-solid fa-arrow-up"></i>
                            </div>
                            <div class="svg-corner svg-corner_white" style="top:0;left:  -40px; transform: rotate(-90deg)"></div>
                            <div class="svg-corner svg-corner_white" style="top:0;right: -40px; transform: rotate(-180deg)"></div>
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
                                        <div class="footer-widget-title">About us</div>
                                        <div class="footer-widget-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Eaque ipsa quae ab illo inventore veritatis et quasi architecto. </p>
                                            <a href="about.html" class="footer-widget-content-link">
                                                <span>Read more</span>
                                                <i class="fa-solid fa-caret-right"></i>
                                            </a>
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
                                                    <li>
                                                        <a href="#">Our last News</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Pricing Plans</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Contacts</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Help Center</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Privacy Policy</a>
                                                    </li>
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
                                                <ul class="footer-contacts  ">
                                                    <li>
                                                        <span>Mail :</span>
                                                        <a href="#" target="_blank">yourmail@domain.com</a>
                                                    </li>
                                                    <li>
                                                        <span>Adress :</span>
                                                        <a href="#" target="_blank">USA 27TH Brooklyn NY</a>
                                                    </li>
                                                    <li>
                                                        <span>Phone :</span>
                                                        <a href="#">+2(111)123456789</a>
                                                    </li>
                                                </ul>
                                                <a href="contacts.html" class="footer-widget-content-link">
                                                    <span>Get in Touch</span>
                                                    <i class="fa-solid fa-caret-right"></i>
                                                </a>
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
                                            <form id="subscribe" class="subscribe-item">
                                                <input class="enteremail" name="email" id="subscribe-email" placeholder="Your Email" spellcheck="false" type="text">
                                                <button type="submit" id="subscribe-button" class="subscribe-button">
                                                    <span>Send</span>
                                                </button>
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
                            <a href="index.html" class="footer-home_link">
                                <i class="fa-regular  fa-house"></i>
                            </a>
                            <div class="copyright">
                                <span>&#169;Renstate 2024</span>
                                . All rights reserved. 
                            </div>
                            <div class="footer-social">
                                <span class="footer-social-title">Follow Us</span>
                                <div class="footer-social-wrap">
                                    <a href="#" target="_blank">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                    <a href="#" target="_blank">
                                        <i class="fa-brands fa-x-twitter"></i>
                                    </a>
                                    <a href="#" target="_blank">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                    <a href="#" target="_blank">
                                        <i class="fa-brands fa-tiktok"></i>
                                    </a>
                                    <a href="#" target="_blank">
                                        <i class="fa-brands fa-youtube"></i>
                                    </a>
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
                <div class="wish-list-close clwl_btn">
                    <i class="fa-regular fa-xmark"></i>
                </div>
                <div class="wish-list_header">
                    <div class="wish-list-title">
                        Your Wishlist <span>3</span>
                    </div>
                </div>
                <div class="wish-list-container">
                    <!--wish-list-item-->
                    <div class="wish-list-item fl-wrap">
                        <div class="wish-list-img">
                            <a href="listing-single.html">
                                <img src="images/all/thumbnails/1.jpg" alt="">
                            </a>
                        </div>
                        <div class="wish-list-descr">
                            <h4>
                                <a href="listing-single.html">Urban House</a>
                            </h4>
                            <div class="geodir-category-location fl-wrap">
                                <a href="#">40 Journal Square  , NJ, USA</a>
                            </div>
                            <div class="wish-list-price">$ 320,000</div>
                            <div class="clear-wishlist">
                                <i class="fa-regular fa-trash-can"></i>
                            </div>
                        </div>
                    </div>
                    <!--wish-list-item end-->
                    <!--wish-list-item-->
                    <div class="wish-list-item fl-wrap">
                        <div class="wish-list-img">
                            <a href="listing-single.html">
                                <img src="images/all/thumbnails/2.jpg" alt="">
                            </a>
                        </div>
                        <div class="wish-list-descr">
                            <h4>
                                <a href="listing-single.html">Luxury Family Home</a>
                            </h4>
                            <div class="geodir-category-location fl-wrap">
                                <a href="#">40 Journal Square  , NJ, USA</a>
                            </div>
                            <div class="wish-list-price">$ 1500 - per month</div>
                            <div class="clear-wishlist">
                                <i class="fa-regular fa-trash-can"></i>
                            </div>
                        </div>
                    </div>
                    <!--wish-list-item end-->
                    <!--wish-list-item-->
                    <div class="wish-list-item fl-wrap">
                        <div class="wish-list-img">
                            <a href="listing-single.html">
                                <img src="images/all/thumbnails/3.jpg" alt="">
                            </a>
                        </div>
                        <div class="wish-list-descr">
                            <h4>
                                <a href="listing-single.html">Modern Apartment</a>
                            </h4>
                            <div class="geodir-category-location fl-wrap">
                                <a href="#">40 Journal Square  , NJ, USA</a>
                            </div>
                            <div class="wish-list-price">$ 1,600,000</div>
                            <div class="clear-wishlist">
                                <i class="fa-regular fa-trash-can"></i>
                            </div>
                        </div>
                    </div>
                    <!--wish-list-item end-->
                </div>
                <div class="wish-list-footer">
                    <div class="clear_wishlist">Clear Wishlist</div>
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
                                    <a href="contacts.html">Get in Touch</a>
                                    <div class="svg-corner svg-corner_white" style="bottom:0;left:  -39px;"></div>
                                    <div class="svg-corner svg-corner_white" style="bottom:0;right:  -39px;transform: rotate(90deg)"></div>
                                </div>
                                <div class="main-register_bg-dec"></div>
                            </div>
                            <div class="main-register tabs-act fl-wrap">
                                <ul class="tabs-menu">
                                    <li class="current">
                                        <a href="#tab-1">
                                            <i class="fa-regular fa-sign-in-alt"></i>
                                            Login
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#tab-2">
                                            <i class="fa-regular fa-user-plus"></i>
                                            Register
                                        </a>
                                    </li>
                                </ul>
                                <div class="close-modal close-reg-form">
                                    <i class="fa-regular fa-xmark"></i>
                                </div>
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
                                                        <input type="text" placeholder="Username or Email Address" value="">
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
                                                    <button type="submit" class="commentssubmit">Log In </button>
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
                                                            <input type="text" placeholder="Full Name" value="">
                                                        </div>
                                                        <!-- listsearch-input-item -->
                                                        <!-- listsearch-input-item -->
                                                        <div class="cs-intputwrap">
                                                            <i class="fa-light fa-envelope"></i>
                                                            <input type="text" placeholder="Email Address" value="">
                                                        </div>
                                                        <!-- listsearch-input-item -->
                                                        <!-- listsearch-input-item -->
                                                        <div class="cs-intputwrap pass-input-wrap">
                                                            <i class="fa-light fa-lock"></i>
                                                            <input type="password" class="pass-input" placeholder="Password" value="">
                                                            <div class="view-pass"></div>
                                                        </div>
                                                        <!-- listsearch-input-item -->
                                                        <button type="submit" class="commentssubmit">
                                                            <span>Register</span>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!--tab end -->
                                    </div>
                                    <!--tabs end -->
                                    <div class="log-separator fl-wrap">
                                        <span>or</span>
                                    </div>
                                    <div class="soc-log  fl-wrap">
                                        <p>For faster login or register use your social account.</p>
                                        <a href="#" class="google_log">
                                            <i class="fa-brands fa-google"></i>
                                            Connect with Google
                                        </a>
                                        <a href="#" class="fb_log">
                                            <i class="fa-brands fa-facebook-f"></i>
                                            Connect with Facebook
                                        </a>
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
        <script src="js/jquery.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/scripts.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwJSRi0zFjDemECmFl9JtRj1FY7TiTRRo&libraries=places"></script>
        <script src="js/map-single.js"></script>
    </body>
</html>