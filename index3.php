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
                                        <a href="#" class="act-link">Home <i class="fa-solid fa-caret-down"></i></a>
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
                                        <a href="#">Pages <i class="fa-solid fa-caret-down"></i></a>
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
                <div class="content">
                    <!--section-->
                    <div class="section hero-section home-hero-section">
                        <div class="hero-section-wrap">
                            <div class="hero-section-wrap-item">
                                <div class="container">
                                    <div class="hero-section-container">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <div class="hero-section-title hs_align-title">
                                                    <div class="hero-section-title_sub">Welcome to  the Renstate Agency</div>
                                                    <h2>Find The House of Your Dream   Using <br>  Our RealEatate   Platform</h2>
                                                    <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nec tincidunt arcu, sit amet fermentum sem.</h5>
                                                    <a href="#sec1" class="commentssubmit csb_color  custom-scroll-link" style="margin-top: 40px">Start Explore</a>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mob-hid">
                                                <!-- list-searh-input-wrap-->
                                                <div class="list-searh-input-wrap box_list-searh-input-wrap lws_column lsiw_dec ">
                                                    <div class="list-searh-input-wrap-title_wrap">
                                                        <div class="list-searh-input-wrap-title"><i class="far fa-sliders-h"></i><span>Use Quick Search</span></div>
                                                        <div class="list-searh-input-radio_wrap">
                                                            <div class="header-search-radio">
                                                                <input class="hidden radio-label" type="radio" name="accept-offers2" id="sale-button2" checked="checked">
                                                                <label class="button-label" for="sale-button2">Sale</label>
                                                                <input class="hidden radio-label" type="radio" name="accept-offers2" id="rent-button2">
                                                                <label class="button-label" for="rent-button2">Rent</label>							
                                                                <input class="hidden radio-label" type="radio" name="accept-offers2" id="comm-button2">
                                                                <label class="button-label" for="comm-button2">Commercial</label>								
                                                            </div>
                                                            <div class="reset-form reset-btn tolt" data-microtip-position="bottom"  data-tooltip="Reset Filters"><i class="fa-solid fa-arrows-rotate"></i></div>
                                                        </div>
                                                    </div>
                                                    <div class="custom-form">
                                                        <div class="row">
                                                            <!-- listsearch-input-item -->
                                                            <div class="col-lg-12">
                                                                <div class="cs-intputwrap">
                                                                    <i class="fa-light fa-location-dot"></i>
                                                                    <input type="text"   placeholder="Address , Street , State..." value="">
                                                                </div>
                                                            </div>
                                                            <!-- listsearch-input-item -->
                                                            <!-- listsearch-input-item -->
                                                            <div class="col-lg-12">
                                                                <div class="cs-intputwrap">
                                                                    <i class="fa-light fa-layer-group"></i>
                                                                    <select data-placeholder="Categories" class="chosen-select on-radius no-search-select" >
                                                                        <option>All Categories</option>
                                                                        <option>House</option>
                                                                        <option>Apartment</option>
                                                                        <option>Hotel</option>
                                                                        <option>Villa</option>
                                                                        <option>Office</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!-- listsearch-input-item -->											
                                                            <!-- listsearch-input-item -->
                                                            <div class="col-lg-12">
                                                                <div class="cs-intputwrap">
                                                                    <div class="price-range-wrap">
                                                                        <label>Price Range</label>
                                                                        <div class="price-rage-item">
                                                                            <input type="text" class="price-range-double" data-min="100" data-max="100000"  name="price-range1"  data-step="1" value="1" data-prefix="$">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- listsearch-input-item -->											
                                                        </div>
                                                        <!-- listsearch-input-item -->									
                                                        <button onclick="window.location.href='listing.html'" class="commentssubmit commentssubmit_fw">Search</button>											
                                                    </div>
                                                </div>
                                                <!-- list-searh-input-wrap end-->							
                                                <div class="hero-notifer">Need more search options? <a href="listing.html">Advanced Search</a></div>
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
                                    <div class="sc-controls shc_controls2 slideshow-container-pag-init  "></div>
                                </div>
                                <div class="bg-wrap bg-hero bg-parallax-wrap-gradien fs-wrapper">
                                    <!--ms-container-->
                                    <div class="slideshow-container_wrap fl-wrap full-height">
                                        <div class="swiper-container full-height">
                                            <div class="swiper-wrapper">
                                                <!--ms_item-->
                                                <div class="swiper-slide">
                                                    <div class="ms-item_fs  full-height fl-wrap">
                                                        <div class="bg"  data-bg="images/bg/10.jpg"  ></div>
                                                    </div>
                                                </div>
                                                <!--ms_item end-->
                                                <!--ms_item-->
                                                <div class="swiper-slide ">
                                                    <div class="ms-item_fs full-height fl-wrap">
                                                        <div class="bg"  data-bg="images/bg/9.jpg"></div>
                                                    </div>
                                                </div>
                                                <!--ms_item end-->
                                                <!--ms_item-->
                                                <div class="swiper-slide">
                                                    <div class="ms-item_fs full-height fl-wrap">
                                                        <div class="bg"  data-bg="images/bg/2.jpg"></div>
                                                    </div>
                                                </div>
                                                <!--ms_item end-->                                              
                                            </div>
                                        </div>
                                    </div>
                                    <!--ms-container end-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--section-end-->	
                    <!--container-->
                    <div class="container">
                        <!--breadcrumbs-list-->
                        <div class="breadcrumbs-list bl_flat">
                            <a href="#">Home</a><span>Home SlideShow</span>
                            <div class="breadcrumbs-list_dec"><i class="fa-thin fa-arrow-up"></i></div>
                        </div>
                        <!--breadcrumbs-list end-->		
                        <!--main-content-->
                        <div class="main-content ms_vir_height" id="sec1">
                            <!--boxed-container-->
                            <div class="boxed-container">
                                <div class="listing-grid_heroheader">
                                    <h3>Browse Hot  Properties</h3>
                                    <div class="gallery-filters">
                                        <a href="#" class="gallery-filter gallery-filter-active"  data-filter="*"> All Properties</a>
                                        <a href="#" class="gallery-filter " data-filter=".cat-sale">Sale</a>
                                        <a href="#" class="gallery-filter" data-filter=".cat-rent">Rent</a>
                                        <a href="#" class="gallery-filter" data-filter=".cat-comercial">Comercial</a>
                                    </div>
                                </div>
                                <!-- listing-grid-->
                                <div class="listing-grid gisp">
                                    <!-- listing-grid-item-->
                                    <div class="listing-grid-item">
                                        <div class="listing-item cat-comercial cat-sale">
                                            <div class="geodir-category-listing">
                                                <div class="geodir-category-img">
                                                    <a href="listing-single.html" class="geodir-category-img_item">
                                                        <div class="bg" data-bg="images/all/1.jpg"></div>
                                                        <div class="overlay"></div>
                                                    </a>
                                                    <div class="geodir-category-location">
                                                        <a href="#4" class="map-item tolt single-map-item" data-newlatitude="40.72956781" data-newlongitude="-73.99726866"   data-microtip-position="top" data-tooltip="On the map"><i class="fas fa-map-marker-alt"></i>  40 Journal Square  , NJ, USA</a>
                                                    </div>
                                                    <ul class="list-single-opt_header_cat">
                                                        <li><a href="#" class="cat-opt">Sale</a></li>
                                                        <li><a href="#" class="cat-opt">House</a></li>
                                                    </ul>
                                                    <a href="#" class="geodir_save-btn tolt" data-microtip-position="left" data-tooltip="Save"><span><i class="fal fa-heart"></i></span></a>
                                                    <div class="geodir-category-listing_media-list">
                                                        <span><i class="fas fa-camera"></i> 13</span>
                                                    </div>
                                                </div>
                                                <div class="geodir-category-content">
                                                    <h3><a href="listing-single.html">Gorgeous House For Sale</a></h3>
                                                    <div class="geodir-category-content_price">$ 500,000</div>
                                                    <p> Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Lorem ipsum dolor sit amet, consectetur adipiscing elit.  Donec a consectetur nulla.</p>
                                                    <div class="geodir-category-content-details">
                                                        <ul>
                                                            <li><i class="fa-light fa-bed"></i><span>2</span></li>
                                                            <li><i class="fa-light fa-bath"></i><span>2</span></li>
                                                            <li><i class="fa-light fa-chart-area"></i><span>150 ft2</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="geodir-category-footer">
                                                    <a href="agent-single.html" class="gcf-company"><img src="images/avatar/2.jpg" alt=""><span>By Niko Furingee </span></a>
                                                    <a href="listing-single.html" class="gid_link"><span>View Details</span> <i class="fa-solid fa-caret-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- listing-grid-item end-->
                                    <!-- listing-grid-item-->
                                    <div class="listing-grid-item cat-sale cat-rent">
                                        <div class="listing-item">
                                            <div class="geodir-category-listing">
                                                <div class="geodir-category-img">
                                                    <a href="listing-single.html" class="geodir-category-img_item">
                                                        <div class="bg" data-bg="images/all/8.jpg"></div>
                                                        <div class="overlay"></div>
                                                    </a>
                                                    <div class="geodir-category-location">
                                                        <a href="#4" class="map-item tolt single-map-item" data-newlatitude="40.88496706" data-newlongitude="-73.88191222"   data-microtip-position="top" data-tooltip="On the map"><i class="fas fa-map-marker-alt"></i>   70 Bright St, Jersey City, NJ USA</a>
                                                    </div>
                                                    <ul class="list-single-opt_header_cat">
                                                        <li><a href="#" class="cat-opt">Rent</a></li>
                                                        <li><a href="#" class="cat-opt">Apartment</a></li>
                                                    </ul>
                                                    <a href="#" class="geodir_save-btn tolt" data-microtip-position="left" data-tooltip="Save"><span><i class="fal fa-heart"></i></span></a>
                                                    <div class="geodir-category-listing_media-list">
                                                        <span><i class="fas fa-camera"></i> 5</span>
                                                    </div>
                                                </div>
                                                <div class="geodir-category-content">
                                                    <h3><a href="listing-single.html">Kayak Point House</a></h3>
                                                    <div class="geodir-category-content_price">$ 1500 / per month</div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla.</p>
                                                    <div class="geodir-category-content-details">
                                                        <ul>
                                                            <li><i class="fa-light fa-bed"></i><span>1</span></li>
                                                            <li><i class="fa-light fa-bath"></i><span>1</span></li>
                                                            <li><i class="fa-light fa-chart-area"></i><span>70 ft2</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="geodir-category-footer">
                                                    <a href="agent-single.html" class="gcf-company"><img src="images/avatar/5.jpg" alt=""><span>By Andy Sposty</span></a>
                                                    <a href="listing-single.html" class="gid_link"><span>View Details</span> <i class="fa-solid fa-caret-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- listing-grid-item end-->			
                                    <!-- listing-grid-item-->
                                    <div class="listing-grid-item cat-sale">
                                        <div class="listing-item">
                                            <div class="geodir-category-listing">
                                                <div class="geodir-category-img">
                                                    <a href="listing-single.html" class="geodir-category-img_item">
                                                        <div class="bg" data-bg="images/all/4.jpg"></div>
                                                        <div class="overlay"></div>
                                                    </a>
                                                    <div class="geodir-category-location">
                                                        <a href="#4" class="map-item tolt single-map-item" data-newlatitude="40.94982541" data-newlongitude="-73.84357452"    data-microtip-position="top" data-tooltip="On the map"><i class="fas fa-map-marker-alt"></i>   W 85th St, New York, USA </a>
                                                    </div>
                                                    <ul class="list-single-opt_header_cat">
                                                        <li><a href="#" class="cat-opt">Sale</a></li>
                                                        <li><a href="#" class="cat-opt">Apartment</a></li>
                                                    </ul>
                                                    <a href="#" class="geodir_save-btn tolt" data-microtip-position="left" data-tooltip="Save"><span><i class="fal fa-heart"></i></span></a>
                                                    <div class="geodir-category-listing_media-list">
                                                        <span><i class="fas fa-camera"></i> 7</span>
                                                    </div>
                                                </div>
                                                <div class="geodir-category-content">
                                                    <h3><a href="listing-single.html">Luxury Family Home</a></h3>
                                                    <div class="geodir-category-content_price">$ 450,000</div>
                                                    <p> Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Lorem ipsum dolor sit amet, consectetur adipiscing elit.  Donec a consectetur nulla.</p>
                                                    <div class="geodir-category-content-details">
                                                        <ul>
                                                            <li><i class="fa-light fa-bed"></i><span>2</span></li>
                                                            <li><i class="fa-light fa-bath"></i><span>1</span></li>
                                                            <li><i class="fa-light fa-chart-area"></i><span>150 ft2</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="geodir-category-footer">
                                                    <a href="agent-single.html" class="gcf-company"><img src="images/avatar/6.jpg" alt=""><span>By Anna Lips</span></a>
                                                    <a href="listing-single.html" class="gid_link"><span>View Details</span> <i class="fa-solid fa-caret-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- listing-grid-item end-->						
                                    <!-- listing-grid-item-->
                                    <div class="listing-grid-item cat-rent">
                                        <div class="listing-item">
                                            <div class="geodir-category-listing">
                                                <div class="geodir-category-img">
                                                    <a href="listing-single.html" class="geodir-category-img_item">
                                                        <div class="bg" data-bg="images/all/11.jpg"></div>
                                                        <div class="overlay"></div>
                                                    </a>
                                                    <div class="geodir-category-location">
                                                        <a href="#4" class="map-item tolt single-map-item" data-newlatitude="40.72228267" data-newlongitude="-73.99246214"   data-microtip-position="top" data-tooltip="On the map"><i class="fas fa-map-marker-alt"></i>   75 Prince St, NY, USA</a>
                                                    </div>
                                                    <ul class="list-single-opt_header_cat">
                                                        <li><a href="#" class="cat-opt">Rent</a></li>
                                                        <li><a href="#" class="cat-opt">House</a></li>
                                                    </ul>
                                                    <a href="#" class="geodir_save-btn tolt" data-microtip-position="left" data-tooltip="Save"><span><i class="fal fa-heart"></i></span></a>
                                                    <div class="geodir-category-listing_media-list">
                                                        <span><i class="fas fa-camera"></i> 11</span>
                                                    </div>
                                                </div>
                                                <div class="geodir-category-content">
                                                    <h3><a href="listing-single.html">Urban House for Rent</a></h3>
                                                    <div class="geodir-category-content_price">$ 130,000</div>
                                                    <p> Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Lorem ipsum dolor sit amet, consectetur adipiscing elit.  Donec a consectetur nulla.</p>
                                                    <div class="geodir-category-content-details">
                                                        <ul>
                                                            <li><i class="fa-light fa-bed"></i><span>2</span></li>
                                                            <li><i class="fa-light fa-bath"></i><span>1</span></li>
                                                            <li><i class="fa-light fa-chart-area"></i><span>110 ft2</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="geodir-category-footer">
                                                    <a href="agent-single.html" class="gcf-company"><img src="images/avatar/3.jpg" alt=""><span>By Viki Morintagee </span></a>
                                                    <a href="listing-single.html" class="gid_link"><span>View Details</span> <i class="fa-solid fa-caret-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- listing-grid-item end-->							
                                    <!-- listing-grid-item-->
                                    <div class="listing-grid-item cat-rent cat-comercial">
                                        <div class="listing-item">
                                            <div class="geodir-category-listing">
                                                <div class="geodir-category-img">
                                                    <a href="listing-single.html" class="geodir-category-img_item">
                                                        <div class="bg" data-bg="images/all/9.jpg"></div>
                                                        <div class="overlay"></div>
                                                    </a>
                                                    <div class="geodir-category-location">
                                                        <a href="#4" class="map-item tolt single-map-item" data-newlatitude="40.88496706" data-newlongitude="-73.88191222"   data-microtip-position="top" data-tooltip="On the map"><i class="fas fa-map-marker-alt"></i>    34-42 Montgomery St , NY, USA</a>
                                                    </div>
                                                    <ul class="list-single-opt_header_cat">
                                                        <li><a href="#" class="cat-opt">Rent</a></li>
                                                        <li><a href="#" class="cat-opt">Residential</a></li>
                                                    </ul>
                                                    <a href="#" class="geodir_save-btn tolt" data-microtip-position="left" data-tooltip="Save"><span><i class="fal fa-heart"></i></span></a>
                                                    <div class="geodir-category-listing_media-list">
                                                        <span><i class="fas fa-camera"></i> 8</span>
                                                    </div>
                                                </div>
                                                <div class="geodir-category-content">
                                                    <h3><a href="listing-single.html">Family House for Rent</a></h3>
                                                    <div class="geodir-category-content_price">$ 1500 / per month</div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla.</p>
                                                    <div class="geodir-category-content-details">
                                                        <ul>
                                                            <li><i class="fa-light fa-bed"></i><span>2</span></li>
                                                            <li><i class="fa-light fa-bath"></i><span>2</span></li>
                                                            <li><i class="fa-light fa-chart-area"></i><span>95  ft2</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="geodir-category-footer">
                                                    <a href="agent-single.html" class="gcf-company"><img src="images/avatar/4.jpg" alt=""><span>By Liza Archer</span></a>
                                                    <a href="listing-single.html" class="gid_link"><span>View Details</span> <i class="fa-solid fa-caret-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- listing-grid-item end-->							
                                    <!-- listing-grid-item-->
                                    <div class="listing-grid-item cat-sale cat-comercial">
                                        <div class="listing-item">
                                            <div class="geodir-category-listing">
                                                <div class="geodir-category-img">
                                                    <a href="listing-single.html" class="geodir-category-img_item">
                                                        <div class="bg" data-bg="images/all/16.jpg"></div>
                                                        <div class="overlay"></div>
                                                    </a>
                                                    <div class="geodir-category-location">
                                                        <a href="#4" class="map-item tolt single-map-item" data-newlatitude="40.76221766" data-newlongitude="-73.96511769"  data-microtip-position="top" data-tooltip="On the map"><i class="fas fa-map-marker-alt"></i>    75 Prince St, NY, USA </a>
                                                    </div>
                                                    <ul class="list-single-opt_header_cat">
                                                        <li><a href="#" class="cat-opt">Sale</a></li>
                                                        <li><a href="#" class="cat-opt">Comercial</a></li>
                                                    </ul>
                                                    <a href="#" class="geodir_save-btn tolt" data-microtip-position="left" data-tooltip="Save"><span><i class="fal fa-heart"></i></span></a>
                                                    <div class="geodir-category-listing_media-list">
                                                        <span><i class="fas fa-camera"></i> 5</span>
                                                    </div>
                                                </div>
                                                <div class="geodir-category-content">
                                                    <h3><a href="listing-single.html">Contemporary Apartment</a></h3>
                                                    <div class="geodir-category-content_price">$ 850,000</div>
                                                    <p> Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Lorem ipsum dolor sit amet, consectetur adipiscing elit.  Donec a consectetur nulla.</p>
                                                    <div class="geodir-category-content-details">
                                                        <ul>
                                                            <li><i class="fa-light fa-bed"></i><span>4</span></li>
                                                            <li><i class="fa-light fa-bath"></i><span>2</span></li>
                                                            <li><i class="fa-light fa-chart-area"></i><span>450 ft2</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="geodir-category-footer">
                                                    <a href="agent-single.html" class="gcf-company"><img src="images/avatar/1.jpg" alt=""><span>By Judi Colinns</span></a>
                                                    <a href="listing-single.html" class="gid_link"><span>View Details</span> <i class="fa-solid fa-caret-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- listing-grid-item end-->	
                                </div>
                                <!-- listing-grid end-->
                                <a href="listing.html" class="commentssubmit csb-no-align">View All Properties <i class="fa-solid fa-caret-right"></i></a>
                            </div>
                            <!--boxed-container end-->
                        </div>
                        <!--main-content end-->	
                    </div>
                    <!--container end-->				 
                    <div class="dark-bg half-carousel-container">
                        <div class="city-carousel-wrap">
                            <div class="half-carousel-title-wrap">
                                <div class="half-carousel-title">
                                    <h2>Explore Best Cities</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <a href="listing.html" class="commentssubmit" style="margin-top: 20px">View All Cities<i class="fa-solid fa-caret-right"></i></a>
                                </div>
                                <div class="abs_bg"></div>
                            </div>
                            <div class="city-carousel">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <!--city-carousel-item-->
                                        <div class="swiper-slide">
                                            <div class="city-carousel-item">
                                                <div class="bg-wrap fs-wrapper">
                                                    <div class="bg"  data-bg="images/bg/long/1.jpg" data-swiper-parallax="10%"></div>
                                                    <div class="overlay"></div>
                                                </div>
                                                <div class="city-carousel-content">
                                                    <div class="hc-counter">26 Properties</div>
                                                    <h3><a href="listing.html">Explore NewYork</a></h3>
                                                    <p>Constant care and attention to the patients makes good record</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--city-carousel-item end-->
                                        <!--city-carousel-item-->
                                        <div class="swiper-slide">
                                            <div class="city-carousel-item">
                                                <div class="bg-wrap fs-wrapper">
                                                    <div class="bg"  data-bg="images/bg/long/2.jpg" data-swiper-parallax="10%"></div>
                                                    <div class="overlay"></div>
                                                </div>
                                                <div class="city-carousel-content">
                                                    <div class="hc-counter">15 Properties</div>
                                                    <h3><a href="listing.html">Awesome Rome</a></h3>
                                                    <p>Constant care and attention to the patients makes good record</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--city-carousel-item end-->
                                        <!--city-carousel-item-->
                                        <div class="swiper-slide">
                                            <div class="city-carousel-item">
                                                <div class="bg-wrap fs-wrapper">
                                                    <div class="bg"  data-bg="images/bg/long/4.jpg" data-swiper-parallax="10%"></div>
                                                    <div class="overlay"></div>
                                                </div>
                                                <div class="city-carousel-content">
                                                    <div class="hc-counter">78 Properties</div>
                                                    <h3><a href="listing.html">Elite Houses in Dubai</a></h3>
                                                    <p>Constant care and attention to the patients makes good record</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--city-carousel-item end-->											
                                        <!--city-carousel-item-->
                                        <div class="swiper-slide">
                                            <div class="city-carousel-item">
                                                <div class="bg-wrap fs-wrapper">
                                                    <div class="bg"  data-bg="images/bg/long/3.jpg" data-swiper-parallax="10%"></div>
                                                    <div class="overlay"></div>
                                                </div>
                                                <div class="city-carousel-content">
                                                    <div class="hc-counter">32 Properties</div>
                                                    <h3><a href="listing.html">Find Dream in Paris</a></h3>
                                                    <p>Constant care and attention to the patients makes good record</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--city-carousel-item end-->
                                    </div>
                                </div>
                                <div class="sc-controls city-pag-init"></div>
                            </div>
                        </div>
                        <div class="city-carousel_controls">
                            <div class="csc-button csc-button-prev"><i class="fas fa-caret-left"></i></div>
                            <div class="csc-button csc-button-next"><i class="fas fa-caret-right"></i></div>
                        </div>
                    </div>
                    <!--main-content-->
                    <div class="main-content ms_vir_height">
                        <!--container -->
                        <div class="container">
                            <div class="boxed-container">
                                <div class="boxed-content "  >
                                    <div class="about-wrap boxed-content-item">
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <div class="about-title ab-hero">
                                                    <h2>Why Choose Our Properties </h2>
                                                    <h4>Check video presentation to find   out more about us .</h4>
                                                </div>
                                                <div class="services-opions">
                                                    <ul>
                                                        <li>
                                                            <i class="fal fa-headset"></i>
                                                            <h4>24 Hours Support  </h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                        </li>
                                                        <li>
                                                            <i class="fal fa-users-cog"></i>
                                                            <h4>User Admin Panel</h4>
                                                            <p>Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Curabitur convallis fringilla diam sed aliquam. </p>
                                                        </li>
                                                        <li>
                                                            <i class="fal fa-phone-laptop"></i>
                                                            <h4>Mobile Friendly</h4>
                                                            <p>Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa.</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="about-img">
                                                    <img src="images/all/15.jpg" class="respimg" alt="">
                                                    <div class="about-img-hotifer">
                                                        <p>Your website is fully responsive so visitors can view your content from their choice of device.</p>
                                                        <h4>Mark Antony</h4>
                                                        <h5>Renstate CEO</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- clients-carousel-wrap-->
                                <div class="clients-carousel-wrap">
                                    <div class="clients-carousel-title">Our Trusted Partners  </div>
                                    <div class="clients-carousel">
                                        <div class="swiper-container">
                                            <div class="swiper-wrapper">
                                                <!--client-item-->
                                                <div class="swiper-slide">
                                                    <a href="#" class="client-item"><img src="images/clients/1.png" alt=""></a>
                                                </div>
                                                <!--client-item end-->
                                                <!--client-item-->
                                                <div class="swiper-slide">
                                                    <a href="#" class="client-item"><img src="images/clients/2.png" alt=""></a>
                                                </div>
                                                <!--client-item end-->
                                                <!--client-item-->
                                                <div class="swiper-slide">
                                                    <a href="#" class="client-item"><img src="images/clients/3.png" alt=""></a>
                                                </div>
                                                <!--client-item end-->											
                                                <!--client-item-->
                                                <div class="swiper-slide">
                                                    <a href="#" class="client-item"><img src="images/clients/4.png" alt=""></a>
                                                </div>
                                                <!--client-item end-->
                                                <!--client-item-->
                                                <div class="swiper-slide">
                                                    <a href="#" class="client-item"><img src="images/clients/5.png" alt=""></a>
                                                </div>
                                                <!--client-item end-->
                                            </div>
                                        </div>
                                        <div class="cc-button cc-button-next"><i class="fal fa-angle-right"></i></div>
                                        <div class="cc-button cc-button-prev"><i class="fal fa-angle-left"></i></div>
                                    </div>
                                </div>
                                <!-- clients-carousel-wrap end-->									
                            </div>
                        </div>
                        <!--container end-->
                        <div class="parallax-section-wrap">
                            <div class="bg-wrap    fs-wrapper" data-scrollax-parent="true">
                                <div class="bg" data-bg="images/bg/3.jpg" data-scrollax="properties: { translateY: '20%' }"></div>
                                <div class="overlay"></div>
                            </div>
                            <div class="container  ">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="parallax-section-content">
                                            <h3>How Our Platform  Works</h3>
                                            <p>In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida. Lorem ipsum dolor sit amet, conse ctetuer adipiscing elit, sed diam nonu mmy nibh euismod tincidunt ut laoreet dolore magna aliquam erat</p>
                                            <a href="add-listing.html" class="commentssubmit csb_color " style="margin-top: 20px">Add Your Propperty</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="process-wrap">
                                            <ul>
                                                <li>
                                                    <div class="process-item">
                                                        <span class="process-count">01 . </span>
                                                        <div class="process-item-icon"><i class="fa-light fa-house-building"></i></div>
                                                        <h4> Find Interesting Place</h4>
                                                        <p>Proin dapibus nisl ornare diam varius tempus. Aenean a quam luctus, finibus tellus ut, convallis eros sollicitudin turpis.</p>
                                                    </div>
                                                    <span class="pr-dec"></span>
                                                </li>
                                                <li>
                                                    <div class="process-item">
                                                        <span class="process-count">02 .</span>
                                                        <div class="process-item-icon"><i class="fa-light fa-mailbox"></i></div>
                                                        <h4> Contact a Few Owners</h4>
                                                        <p>Faucibus ante, in porttitor tellus blandit et. Phasellus tincidunt metus lectus sollicitudin feugiat pharetra consectetur.</p>
                                                    </div>
                                                    <span class="pr-dec"></span>
                                                </li>
                                                <li>
                                                    <div class="process-item">
                                                        <span class="process-count">03 .</span>
                                                        <div class="process-item-icon"><i class="fa-light fa-layer-plus"></i></div>
                                                        <h4> Make a Listing</h4>
                                                        <p>Maecenas pulvinar, risus in facilisis dignissim, quam nisi hendrerit nulla, id vestibulum metus nullam viverra porta.</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- section   -->
                        <div class="content-section">
                            <div class="container  ">
                                <div class="section-title">
                                    <h4>What said about us</h4>
                                    <h2>Testimonials and Clients</h2>
                                </div>
                            </div>
                            <div class="testimonilas-carousel-wrap">
                                <div class="testimonilas-carousel">
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                            <!--testi-item-->
                                            <div class="swiper-slide">
                                                <div class="testi-item">
                                                    <div class="testimonilas-text">
                                                        <div class="testi-header">
                                                            <div class="testi-avatar"><img src="images/avatar/3.jpg" alt=""></div>
                                                            <h3>Centa Simpson</h3>
                                                        </div>
                                                        <div class="testimonilas-text-item">
                                                            <div class="testimonilas-text-item-wrap">
                                                                <p>"Vestibulum orci felis, ullamcorper non condimentum non, ultrices ac nunc. Mauris non ligula suscipit, vulputate mi accumsan, dapibus felis. Nullam sed sapien dui. Nulla auctor sit amet sem non porta. Lorem ipsum dolor sit amet, conse ctetuer adipiscing elit, sed diam nonu mmy nibh euismod tincidunt ut  . "</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="testi-footer">
                                                        <a href="#" class="testi-link" target="_blank">Via X-Twitter</a>
                                                        <span class="testi-number">01.</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--testi-item end-->
                                            <!--testi-item-->
                                            <div class="swiper-slide">
                                                <div class="testi-item">
                                                    <div class="testimonilas-text">
                                                        <div class="testi-header">
                                                            <div class="testi-avatar"><img src="images/avatar/2.jpg" alt=""></div>
                                                            <h3>Andy Dimasky</h3>
                                                        </div>
                                                        <div class="testimonilas-text-item">
                                                            <div class="testimonilas-text-item-wrap">
                                                                <p>"Lorem ipsum dolor sit amet, conse ctetuer adipiscing elit, sed diam nonu mmy nibh euismod tincidunt ut laoreet dolore magna aliquam erat.  Vestibulum orci felis, ullamcorper non condimentum non, ultrices ac nunc. Mauris non ligula suscipit, vulputate mi accumsan, dapibus felis.   "</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="testi-footer">
                                                        <a href="#" class="testi-link" target="_blank">Via Facebook</a>
                                                        <span class="testi-number">02.</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--testi-item end-->
                                            <!--testi-item-->
                                            <div class="swiper-slide">
                                                <div class="testi-item">
                                                    <div class="testimonilas-text">
                                                        <div class="testi-header">
                                                            <div class="testi-avatar"><img src="images/avatar/1.jpg" alt=""></div>
                                                            <h3>Jannet Dellov</h3>
                                                        </div>
                                                        <div class="testimonilas-text-item">
                                                            <div class="testimonilas-text-item-wrap">
                                                                <p>"Ultrices ac nunc. Mauris non ligula suscipit, vulputate mi accumsan, dapibus felis. Nullam sed sapien dui. Nulla auctor sit amet sem non porta. Lorem ipsum dolor sit amet, conse ctetuer adipiscing elit, sed diam nonu mmy nibh euismod tincidunt ut laoreet dolore magna aliquam erat. "</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="testi-footer">
                                                        <a href="#" class="testi-link" target="_blank">Via Instagram</a>
                                                        <span class="testi-number">03.</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--testi-item end-->
                                            <!--testi-item-->
                                            <div class="swiper-slide">
                                                <div class="testi-item">
                                                    <div class="testimonilas-text">
                                                        <div class="testi-header">
                                                            <div class="testi-avatar"><img src="images/avatar/5.jpg" alt=""></div>
                                                            <h3>Nicolo Svensky</h3>
                                                        </div>
                                                        <div class="testimonilas-text-item">
                                                            <div class="testimonilas-text-item-wrap">
                                                                <p>"Amet, conse ctetuer adipiscing elit, sed diam nonu mmy nibh euismod tincidunt ut laoreet dolore magna aliquam erat.  Vestibulum orci felis, ullamcorper non condimentum non, ultrices ac nunc. Mauris non ligula suscipit, vulputate mi accumsan, dapibus felis. Nullam sed sapien dui. Nulla auctor sit amet sem non porta.  "</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="testi-footer">
                                                        <a href="#" class="testi-link" target="_blank">Via X-Twitter</a>
                                                        <span class="testi-number">04.</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--testi-item end-->
                                        </div>
                                    </div>
                                    <div class="tc-button tc-button-next"><i class="fas fa-caret-right"></i></div>
                                    <div class="tc-button tc-button-prev"><i class="fas fa-caret-left"></i></div>
                                </div>
                                <div class="fwc-controls_wrap">
                                    <div class="solid-pagination_btns tcs-pagination_init"></div>
                                </div>
                            </div>
                        </div>
                        <!-- section end  -->										
                        <!--container-->
                        <div class="container">
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
                            <div class="to_top-btn-wrap">
                                <div class="to-top to-top_btn"><span>Back to top</span> <i class="fa-solid fa-arrow-up"></i></div>
                                <div class="svg-corner svg-corner_white"  style="top:0;left:  -40px; transform: rotate(-90deg)"></div>
                                <div class="svg-corner svg-corner_white"  style="top:0;right: -40px; transform: rotate(-180deg)"></div>
                            </div>
                        </div>
                        <!--container end-->
                    </div>
                    <!--main-content end-->
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
                                                    <li><span>Mail :</span><a href="#" target="_blank">yourmail@domain.com</a></li>
                                                    <li> <span>Adress :</span><a href="#" target="_blank">USA 27TH Brooklyn NY</a></li>
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
                                    <a href="#" target="_blank"><i class="fa-brands fa-facebook-f"></i></a> 
                                    <a href="#" target="_blank"><i class="fa-brands fa-x-twitter"></i></a> 
                                    <a href="#" target="_blank"><i class="fa-brands fa-instagram"></i></a> 
                                    <a href="#" target="_blank"><i class="fa-brands fa-tiktok"></i></a>
                                    <a href="#" target="_blank"><i class="fa-brands fa-youtube"></i></a>										 
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
            <!--map-modal -->
            <div class="map-modal-wrap">
                <div class="map-modal-wrap-overlay"></div>
                <div class="map-modal-item">
                    <div class="map-modal-container fl-wrap">
                        <h3> <span>Listing Title </span></h3>
                        <div class="map-modal-close"><i class="fa-regular fa-xmark"></i></div>
                        <div class="map-modal fl-wrap">
                            <div id="singleMap" data-latitude="40.7" data-longitude="-73.1"></div>
                            <div class="scrollContorl"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--map-modal end --> 			
        </div>
        <!-- Main end -->
        <!--=============== scripts  ===============-->   
        <script  src="js/jquery.min.js"></script>
        <script  src="js/plugins.js"></script>
        <script  src="js/scripts.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwJSRi0zFjDemECmFl9JtRj1FY7TiTRRo&libraries=places"></script>
        <script src="js/map-single.js"></script>
    </body>
</html>