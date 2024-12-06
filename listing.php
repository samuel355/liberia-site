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
                                        <a href="#" class="act-link">Listings <i class="fa-solid fa-caret-down"></i></a>
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
                                            <h2>Latest Properties</h2>
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
                                    <div class="bg" data-bg="images/bg/12.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--section-end-->				
                    <!--container-->
                    <div class="container">
                        <!--breadcrumbs-list-->
                        <div class="breadcrumbs-list bl_flat">
                            <a href="#">Home</a><a href="#">Listings</a><span>Properties style 4</span>
                            <div class="breadcrumbs-list_dec"><i class="fa-thin fa-arrow-up"></i></div>
                        </div>
                        <!--breadcrumbs-list end-->
                        <!--main-content-->
                        <div class="main-content">
                            <!--boxed-container-->
                            <div class="boxed-container">
                                <div class="show-mob-filter"><i class="far fa-sliders-h"></i> Search Filters</div>
                                <!-- list-searh-input-wrap-->
                                <div class="list-searh-input-wrap box_list-searh-input-wrap lws_mobile lsw_mb-btn">
                                    <div class="close_mob-filter cmf"><i class="fa-regular fa-xmark"></i></div>
                                    <div class="list-searh-input-wrap-title_wrap">
                                        <div class="list-searh-input-wrap-title"><i class="far fa-sliders-h"></i><span>Search Filters</span></div>
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
                                            <div class="col-lg-4">
                                                <div class="cs-intputwrap">
                                                    <i class="fa-light fa-location-dot"></i>
                                                    <input type="text"   placeholder="Address , Street , State..." value="">
                                                </div>
                                            </div>
                                            <!-- listsearch-input-item -->
                                            <!-- listsearch-input-item -->
                                            <div class="col-lg-4">
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
                                            <div class="col-lg-4">
                                                <div class="cs-intputwrap">
                                                    <i class="fa-light fa-city"></i>
                                                    <select data-placeholder="All Cities" class="chosen-select on-radius no-search-select" >
                                                        <option>All Cities</option>
                                                        <option>New York</option>
                                                        <option>London</option>
                                                        <option>Paris</option>
                                                        <option>Kiev</option>
                                                        <option>Moscow</option>
                                                        <option>Dubai</option>
                                                        <option>Rome</option>
                                                        <option>Beijing</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- listsearch-input-item -->										
                                            <!-- listsearch-input-item -->
                                            <div class="col-lg-4">
                                                <div class="cs-intputwrap">
                                                    <div class="price-range-wrap fl-wrap">
                                                        <label>Price Range</label>
                                                        <div class="price-rage-item">
                                                            <input type="text" class="price-range-double" data-min="100" data-max="100000"  name="price-range1"  data-step="1" value="1" data-prefix="$">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- listsearch-input-item -->											
                                            <!-- listsearch-input-item -->
                                            <div class="col-lg-4">
                                                <div class="cs-intputwrap">
                                                    <div class="price-range-wrap fl-wrap">
                                                        <label>Area Sq/ft</label>
                                                        <div class="price-rage-item pr-nopad fl-wrap">
                                                            <input type="text" class="price-range-double" data-min="1" data-max="1000"  name="price-range2"  data-step="1" value="1" data-prefix="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- listsearch-input-item -->										
                                            <!-- listsearch-input-item -->
                                            <div class="col-lg-2">
                                                <div class="hidden-listing_search_wrap">
                                                    <div class="more_search-btn">More Options <i class="fa-regular fa-plus"></i></div>
                                                    <div class="hidden-listing-filter">
                                                        <!-- quantity_wrap -->								
                                                        <div class="quantity_wrap">
                                                            <div class="quantity_wrap_title"><i class="fa-light fa-bed"></i><span>Badrooms</span></div>
                                                            <div class="quantity">
                                                                <div class="quantity-item">
                                                                    <input type="button" value="-" class="minus">
                                                                    <input type="text"    name="quantity"   title="Qty" class="qty" data-min="1" data-max="6" data-step="1" value="1">
                                                                    <input type="button" value="+" class="plus">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- quantity_wrap end-->
                                                        <!-- quantity_wrap -->								
                                                        <div class="quantity_wrap">
                                                            <div class="quantity_wrap_title"><i class="fa-light fa-bath"></i><span>Bathrooms</span></div>
                                                            <div class="quantity">
                                                                <div class="quantity-item">
                                                                    <input type="button" value="-" class="minus">
                                                                    <input type="text"    name="quantity"   title="Qty" class="qty" data-min="1" data-max="6" data-step="1" value="1">
                                                                    <input type="button" value="+" class="plus">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- quantity_wrap end-->										
                                                        <!-- hidden-listing-item -->
                                                        <div class="hidden-listing-item">
                                                            <div class="filter-tags-title">Amenities</div>
                                                            <div class=" filter-tags">
                                                                <ul class="no-list-style">
                                                                    <li>
                                                                        <input id="check-aa" type="checkbox" name="check">
                                                                        <label for="check-aa">Elevator in building</label>
                                                                    </li>
                                                                    <li>
                                                                        <input id="check-b" type="checkbox" name="check">
                                                                        <label for="check-b"> Laundry Room</label>
                                                                    </li>
                                                                    <li>
                                                                        <input id="check-c" type="checkbox" name="check" checked>
                                                                        <label for="check-c">Equipped Kitchen</label>
                                                                    </li>
                                                                    <li>
                                                                        <input id="check-d" type="checkbox" name="check">
                                                                        <label for="check-d">Air Conditioned</label>
                                                                    </li>
                                                                    <li>
                                                                        <input id="check-d2" type="checkbox" name="check" checked>
                                                                        <label for="check-d2">Parking</label> 
                                                                    </li>
                                                                    <li>
                                                                        <input id="check-d3" type="checkbox" name="check" checked>
                                                                        <label for="check-d3">Swimming Pool</label> 
                                                                    </li>
                                                                    <li>   
                                                                        <input id="check-d4" type="checkbox" name="check">
                                                                        <label for="check-d4">Fitness Gym</label>
                                                                    </li>
                                                                    <li>   
                                                                        <input id="check-d5" type="checkbox" name="check">
                                                                        <label for="check-d5">Security</label>
                                                                    </li>
                                                                    <li>   
                                                                        <input id="check-d6" type="checkbox" name="check">
                                                                        <label for="check-d6">Garage Attached</label>
                                                                    </li>
                                                                    <li>   
                                                                        <input id="check-d7" type="checkbox" name="check">
                                                                        <label for="check-d7">Back yard</label>
                                                                    </li>
                                                                    <li>   
                                                                        <input id="check-d8" type="checkbox" name="check">
                                                                        <label for="check-d8">Fireplace</label>
                                                                    </li>
                                                                    <li>   
                                                                        <input id="check-d9" type="checkbox" name="check">
                                                                        <label for="check-d9">Window Covering</label>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <!-- hidden-listing-item end-->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- listsearch-input-item -->									
                                            <!-- listsearch-input-item -->
                                            <div class="col-lg-2">
                                                <button onclick="window.location.href='listing.html'" class="commentssubmit commentssubmit_fw">Search</button>									
                                            </div>
                                            <!-- listsearch-input-item --> 		
                                        </div>
                                    </div>
                                </div>
                                <!-- list-searh-input-wrap end-->							
                                <div class="mob-filter-overlay cmf fs-wrapper"></div>
                                <!-- list-main-wrap-header-->
                                <div class="list-main-wrap-header box-list-header">
                                    <!-- list-main-wrap-title-->
                                    <div class="list-main-wrap-title">
                                        <h2>Results For : <span>New York </span><strong>9</strong></h2>
                                    </div>
                                    <!-- list-main-wrap-title end-->
                                    <!-- list-main-wrap-opt-->
                                    <div class="list-main-wrap-opt">
                                        <!-- price-opt-->
                                        <div class="price-opt">
                                            <span class="price-opt-title">Sort   by:</span>
                                            <div class="cs-intputwrap" style="margin-bottom: 0">
                                                <i class="fa-light fa-arrow-down-small-big"></i>
                                                <select data-placeholder="Popularity" class="chosen-select no-search-select" >
                                                    <option>Popularity</option>
                                                    <option>Latest</option>
                                                    <option>Price: low to high</option>
                                                    <option>Price: high to low</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- price-opt end-->
                                    </div>
                                    <!-- list-main-wrap-opt end-->                    
                                </div>
                                <!-- list-main-wrap-header end-->								
                                <!--listing-item-container-->
                                <div class="listing-item-container three-columns-grid">
                                    <!-- listing-item -->
                                    <div class="listing-item">
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
                                    <!-- listing-item end-->																	
                                    <!-- listing-item -->
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
                                    <!-- listing-item end-->																	
                                    <!-- listing-item -->
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
                                    <!-- listing-item end-->									
                                    <!-- listing-item -->
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
                                    <!-- listing-item end-->																	
                                    <!-- listing-item -->
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
                                    <!-- listing-item end-->																	
                                    <!-- listing-item -->
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
                                    <!-- listing-item end-->									
                                </div>
                                <!--listing-item-container end-->
                                <div class="pagination-wrap">
                                    <div class="pagination">
                                        <a href="#" class="prevposts-link"><i class="fa fa-caret-left"></i></a>
                                        <a href="#" >1</a>
                                        <a href="#" class="current-page">2</a>
                                        <a href="#">3</a>
                                        <a href="#">4</a>
                                        <a href="#" class="nextposts-link"><i class="fa fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!--boxed-container end-->
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