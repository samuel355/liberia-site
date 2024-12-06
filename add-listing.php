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
        <link type="text/css" rel="stylesheet" href="css/db-style.css">
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
                                        <a href="#" class="act-link">
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
                                        <a href="#">
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
                        <div class="header-user-menu">
                            <div class="header-user-name">
                                <span>
                                    Hello , <strong>Alisa</strong>
                                </span>
                                <img src="images/avatar/4.jpg" alt="">
                            </div>
                            <div class="header-user-menu_wrap">
                                <ul>
                                    <li>
                                        <a href="dashboard.html" class="hum_act">Dashboard</a>
                                    </li>
                                    <li>
                                        <a href="dashboard-editprofile.html">Edit profile</a>
                                    </li>
                                    <li>
                                        <a href="add-listing.html">Add Listing</a>
                                    </li>
                                    <li>
                                        <a href="dashboard-properties.html">Properties</a>
                                    </li>
                                </ul>
                                <a href="index.html" class="hum_log-out_btn">
                                    <i class="fa-light fa-power-off"></i>
                                    Log Out  
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div class="body-overlay fs-wrapper search-form-overlay close-search-form"></div>
            <!--header-end-->
            <!--warpper-->
            <div class="wrapper">
                <!--content-->
                <div class="content">
                    <!--container-->
                    <div class="container">
                        <!--breadcrumbs-list-->
                        <div class="breadcrumbs-list bl_flat">
                            <a href="#">Home</a>
                            <a href="#">Dashboard</a>
                            <span>Add New Listing</span>
                            <div class="breadcrumbs-list_dec">
                                <i class="fa-thin fa-arrow-up"></i>
                            </div>
                        </div>
                        <!--breadcrumbs-list end-->
                        <!--main-content-->
                        <div class="main-content  ms_vir_height">
                            <!--boxed-container-->
                            <div class="boxed-container">
                                <div class="row">
                                    <!-- user-dasboard-menu_wrap -->
                                    <div class="col-lg-3">
                                        <div class="boxed-content btf_init">
                                            <div class="user-dasboard-menu_wrap">
                                                <div class="user-dasboard-menu-header">
                                                    <div class="user-dasboard-menu_header-avatar">
                                                        <img src="images/avatar/4.jpg" alt="">
                                                        <span>
                                                            Welcome :  <strong>Alisa</strong>
                                                        </span>
                                                        <a href="dashboard-editprofile.html" class="usmha_edit tolt" data-microtip-position="left" data-tooltip="Edit Profile">
                                                            <i class="fa-light fa-user-pen"></i>
                                                        </a>
                                                        <div class="db-menu_modile_btn">
                                                            <strong>Menu</strong>
                                                            <i class="fa-regular fa-bars"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="user-dasboard-menu faq-nav ">
                                                    <ul>
                                                        <li>
                                                            <a href="dashboard.html">Dashboard</a>
                                                        </li>
                                                        <li>
                                                            <a href="dashboard-listing.html">Your Advertisements </a>
                                                        </li>
                                                        <li>
                                                            <a href="dashboard-requests.html">
                                                                Your  Requests <span>6</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="add-listing.html" class="act-scrlink">Add New Propperty </a>
                                                        </li>
                                                        <li>
                                                            <a href="dashboard-editprofile.html">Edit profile</a>
                                                        </li>
                                                    </ul>
                                                    <a href="index.html" class="hum_log-out_btn">
                                                        <i class="fa-light fa-power-off"></i>
                                                        Log Out  
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- user-dasboard-menu_wrap end-->
                                    <!-- pricing-column -->
                                    <div class="col-lg-9">
                                        <div class="dashboard-title">
                                            <div class="dashboard-title-item">
                                                <span>Add Propperty</span>
                                            </div>
                                            <!--Tariff Plan menu-->
                                            <div class="tfp-det-container">
                                                <div class="db-date">
                                                    <i class="fa-regular fa-calendar"></i>
                                                    <strong></strong>
                                                </div>
                                                <div class="tfp-btn">
                                                    <span>Your Tariff Plan : </span>
                                                    <strong>Extended</strong>
                                                </div>
                                                <div class="tfp-det">
                                                    <p>
                                                        You Are on <a href="#">Extended</a>
                                                        . Use link bellow to view details or upgrade. 
                                                    </p>
                                                    <a href="#" class="tfp-det-btn color-bg">
                                                        View Details <i class="fa-solid fa-caret-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!--Tariff Plan menu end-->
                                        </div>
                                        <div class="db-container">
                                            <!--dasboard-content-item-->
                                            <div class="dasboard-content-item">
                                                <div class="dashboard-widget-title-single">Basic Informations</div>
                                                <div class="custom-form">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <!-- listsearch-input-item -->
                                                            <div class="cs-intputwrap">
                                                                <i class="fa-light fa-input-text"></i>
                                                                <input type="text" placeholder="Main Title" value="">
                                                            </div>
                                                            <!-- listsearch-input-item -->
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <!-- listsearch-input-item -->
                                                            <div class="cs-intputwrap">
                                                                <i class="fa-light fa-building"></i>
                                                                <select data-placeholder="Categories" class="chosen-select on-radius no-search-select">
                                                                    <option>All Types</option>
                                                                    <option>Sale</option>
                                                                    <option>Rent</option>
                                                                    <option>Comercial</option>
                                                                </select>
                                                            </div>
                                                            <!-- listsearch-input-item -->
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <div class="cs-intputwrap">
                                                                <i class="fa-light fa-layer-group"></i>
                                                                <select data-placeholder="Categories" class="chosen-select on-radius no-search-select">
                                                                    <option>All Categories</option>
                                                                    <option>House</option>
                                                                    <option>Apartment</option>
                                                                    <option>Hotel</option>
                                                                    <option>Villa</option>
                                                                    <option>Office</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <!-- listsearch-input-item -->
                                                            <div class="cs-intputwrap">
                                                                <i class="fa-light fa-money-bill"></i>
                                                                <input type="text" placeholder="Price" value="">
                                                            </div>
                                                            <!-- listsearch-input-item -->
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <!-- listsearch-input-item -->
                                                            <div class="cs-intputwrap">
                                                                <i class="fa-light fa-tags"></i>
                                                                <input type="text" placeholder="Keywords" value="">
                                                            </div>
                                                            <!-- listsearch-input-item -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--dasboard-content-item end-->
                                            <!--dasboard-content-item-->
                                            <div class="dasboard-content-item" style="margin-top: 20px">
                                                <div class="dashboard-widget-title-single">Location / Contacts</div>
                                                <div class="custom-form">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <!-- listsearch-input-item -->
                                                            <div class="cs-intputwrap">
                                                                <i class="fa-light fa-phone-office"></i>
                                                                <input type="text" placeholder="Phone" value="">
                                                            </div>
                                                            <!-- listsearch-input-item -->
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <!-- listsearch-input-item -->
                                                            <div class="cs-intputwrap">
                                                                <i class="fa-light fa-envelope"></i>
                                                                <input type="text" placeholder="E-mail" value="">
                                                            </div>
                                                            <!-- listsearch-input-item -->
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <!-- listsearch-input-item -->
                                                            <div class="cs-intputwrap">
                                                                <i class="fa-light fa-city"></i>
                                                                <select data-placeholder="All Cities" class="chosen-select on-radius no-search-select">
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
                                                            <!-- listsearch-input-item end-->
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <!-- listsearch-input-item -->
                                                            <div class="cs-intputwrap">
                                                                <i class="fa-light fa-address-card"></i>
                                                                <input type="text" placeholder="Adress" value="">
                                                            </div>
                                                            <!-- listsearch-input-item -->
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <!-- listsearch-input-item -->
                                                            <div class="cs-intputwrap">
                                                                <i class="fa-light fa-right"></i>
                                                                <input type="text" id="long" placeholder="Longitude (Drag marker on the map)" value="">
                                                            </div>
                                                            <!-- listsearch-input-item -->
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <!-- listsearch-input-item -->
                                                            <div class="cs-intputwrap">
                                                                <i class="fa-light fa-up"></i>
                                                                <input type="text" id="lat" placeholder="Latitude (Drag marker on the map)" value="">
                                                            </div>
                                                            <!-- listsearch-input-item -->
                                                        </div>
                                                    </div>
                                                    <div class="map-container" style="margin-bottom: 30px">
                                                        <div id="singleMap" class="drag-map single-map-container fs-wrapper" data-latitude="40.7427837" data-longitude="-73.11445617675781"></div>
                                                    </div>
                                                    <div class="dashboard-widget-title-single">What's Nearby</div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <!-- listsearch-input-item -->
                                                            <div class="cs-intputwrap">
                                                                <i class="fa-light fa-city"></i>
                                                                <select data-placeholder="All Cities" class="chosen-select on-radius no-search-select">
                                                                    <option>All Places</option>
                                                                    <option>School:</option>
                                                                    <option>Shopping Mall: </option>
                                                                    <option>Police Station: </option>
                                                                    <option>Hospital: </option>
                                                                    <option>Playschool: </option>
                                                                    <option>Parks: </option>
                                                                </select>
                                                            </div>
                                                            <!-- listsearch-input-item -->
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <!-- listsearch-input-item -->
                                                            <div class="cs-intputwrap">
                                                                <div class="price-range-wrap fl-wrap">
                                                                    <label>Distance  </label>
                                                                    <input type="text" class="price-range" data-min="0" data-max="10000" data-step="10" value="m">
                                                                </div>
                                                            </div>
                                                            <!-- listsearch-input-item -->
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <!-- listsearch-input-item -->
                                                            <div class="cs-intputwrap">
                                                                <button class="commentssubmit cs_amin_btn">Update</button>
                                                            </div>
                                                            <!-- listsearch-input-item -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--dasboard-content-item end-->
                                            <!--dasboard-content-item-->
                                            <div class="dasboard-content-item" style="margin-top: 20px">
                                                <div class="dashboard-widget-title-single">Property Media</div>
                                                <div class="custom-form">
                                                    <div class="row">
                                                        <div class="col-lg-8">
                                                            <!-- listsearch-input-item -->
                                                            <div class="cs-intputwrap">
                                                                <i class="fa-light fa-building"></i>
                                                                <select data-placeholder="Categories" class="chosen-select on-radius no-search-select">
                                                                    <option>Gallery Type</option>
                                                                    <option>Grid Gallery</option>
                                                                    <option>Carousel</option>
                                                                    <option>Slider</option>
                                                                </select>
                                                            </div>
                                                            <!-- listsearch-input-item -->
                                                            <!-- listsearch-input-item -->
                                                            <form class="fuzone">
                                                                <div class="fu-text">
                                                                    <span>
                                                                        <i class="fa-light fa-cloud-arrow-up"></i>
                                                                        Click here or drop files to upload
                                                                    </span>
                                                                    <div class="photoUpload-files fl-wrap"></div>
                                                                </div>
                                                                <input type="file" class="upload" multiple>
                                                            </form>
                                                            <!-- listsearch-input-item -->
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="sin-uidb">Background Image for Grid Gallery</div>
                                                            <!-- listsearch-input-item -->
                                                            <form class="fuzone">
                                                                <div class="fu-text">
                                                                    <span>
                                                                        <i class="fa-light fa-cloud-arrow-up"></i>
                                                                        Click here or drop files to upload
                                                                    </span>
                                                                    <div class="photoUpload-files fl-wrap"></div>
                                                                </div>
                                                                <input type="file" class="upload" multiple>
                                                            </form>
                                                            <!-- listsearch-input-item -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--dasboard-content-item end-->
                                            <!--dasboard-content-item-->
                                            <div class="dasboard-content-item" style="margin-top: 20px">
                                                <div class="dashboard-widget-title-single">Property Details</div>
                                                <div class="custom-form">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <!-- listsearch-input-item -->
                                                                    <div class="cs-intputwrap">
                                                                        <i class="fa-light fa-chart-area"></i>
                                                                        <input type="text" placeholder="Area:" value="">
                                                                    </div>
                                                                    <!-- listsearch-input-item -->
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <!-- listsearch-input-item -->
                                                                    <div class="cs-intputwrap">
                                                                        <i class="fa-light fa-bed"></i>
                                                                        <input type="text" placeholder="Bedrooms:" value="">
                                                                    </div>
                                                                    <!-- listsearch-input-item -->
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <!-- listsearch-input-item -->
                                                                    <div class="cs-intputwrap">
                                                                        <i class="fa-light fa-bath"></i>
                                                                        <input type="text" placeholder="Bethrooms:" value="">
                                                                    </div>
                                                                    <!-- listsearch-input-item -->
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <!-- listsearch-input-item -->
                                                                    <div class="cs-intputwrap">
                                                                        <i class="fa-light fa-car"></i>
                                                                        <input type="text" placeholder="Parking:" value="">
                                                                    </div>
                                                                    <!-- listsearch-input-item -->
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <!-- listsearch-input-item -->
                                                                    <div class="cs-intputwrap">
                                                                        <i class="fa-light fa-users"></i>
                                                                        <input type="text" placeholder="Accomodation:" value="">
                                                                    </div>
                                                                    <!-- listsearch-input-item -->
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <!-- listsearch-input-item -->
                                                                    <div class="cs-intputwrap">
                                                                        <i class="fa-light fa-globe-pointer"></i>
                                                                        <input type="text" placeholder="Web site:" value="">
                                                                    </div>
                                                                    <!-- listsearch-input-item -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="cs-intputwrap">
                                                                <textarea name="comments" id="comments" cols="40" rows="3" placeholder="Property Details:"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="dashboard-widget-title-single">Amenities:</div>
                                                            <ul class="  filter-tags no-list-style ds-tg">
                                                                <li>
                                                                    <input id="check-aaa5" type="checkbox" name="check" checked="">
                                                                    <label for="check-aaa5">Wi Fi</label>
                                                                </li>
                                                                <li>
                                                                    <input id="check-bb5" type="checkbox" name="check" checked="">
                                                                    <label for="check-bb5">Pool</label>
                                                                </li>
                                                                <li>
                                                                    <input id="check-dd5" type="checkbox" name="check">
                                                                    <label for="check-dd5">Security</label>
                                                                </li>
                                                                <li>
                                                                    <input id="check-cc5" type="checkbox" name="check">
                                                                    <label for="check-cc5">Laundry Room</label>
                                                                </li>
                                                                <li>
                                                                    <input id="check-ff5" type="checkbox" name="check" checked="">
                                                                    <label for="check-ff5">Equipped Kitchen</label>
                                                                </li>
                                                                <li>
                                                                    <input id="check-c4" type="checkbox" name="check">
                                                                    <label for="check-c4">Air Conditioning</label>
                                                                </li>
                                                                <li>
                                                                    <input id="check-c18" type="checkbox" name="check">
                                                                    <label for="check-c18">Parking</label>
                                                                </li>
                                                                <li>
                                                                    <input id="check-bb53" type="checkbox" name="check" checked="">
                                                                    <label for="check-bb53">Garage Attached</label>
                                                                </li>
                                                                <li>
                                                                    <input id="check-dd54" type="checkbox" name="check">
                                                                    <label for="check-dd54">Fireplace</label>
                                                                </li>
                                                                <li>
                                                                    <input id="check-cc555" type="checkbox" name="check">
                                                                    <label for="check-cc555">Window Covering</label>
                                                                </li>
                                                                <li>
                                                                    <input id="check-ff511" type="checkbox" name="check" checked="">
                                                                    <label for="check-ff511">Back yard</label>
                                                                </li>
                                                                <li>
                                                                    <input id="check-c444" type="checkbox" name="check">
                                                                    <label for="check-c444">Fitness Gym</label>
                                                                </li>
                                                                <li>
                                                                    <input id="check-c1843" type="checkbox" name="check">
                                                                    <label for="check-c1843">Elevator in building</label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="dashboard-widget-title-single">Upload Plans and Brochure:</div>
                                                            <!-- listsearch-input-item -->
                                                            <form class="fuzone">
                                                                <div class="fu-text">
                                                                    <span>
                                                                        <i class="fa-light fa-cloud-arrow-up"></i>
                                                                        Click here or drop files to upload
                                                                    </span>
                                                                    <div class="photoUpload-files fl-wrap"></div>
                                                                </div>
                                                                <input type="file" class="upload" multiple>
                                                            </form>
                                                            <!-- listsearch-input-item -->
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="dashboard-widget-title-single" style="margin-top: 20px">
                                                                Accordion Widget
                                                                
                                                                <div class="onoffswitch-wrap_db">
                                                                    <div class="onoffswitch">
                                                                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch5" checked="">
                                                                        <label class="onoffswitch-label" for="myonoffswitch5">
                                                                            <span class="onoffswitch-inner"></span>
                                                                            <span class="onoffswitch-switch"></span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- add_acc-item-wrap -->
                                                            <div class="add_acc-item-wrap">
                                                                <div class="add_acc-container">
                                                                    <div class="add_acc-item">
                                                                        <!-- listsearch-input-item -->
                                                                        <div class="cs-intputwrap">
                                                                            <i class="fa-light fa-globe-pointer"></i>
                                                                            <input type="text" placeholder="Accardion title:" value="">
                                                                        </div>
                                                                        <!-- listsearch-input-item -->
                                                                        <div class="cs-intputwrap">
                                                                            <textarea name="comments" cols="40" rows="3" placeholder="Accardion Details:"></textarea>
                                                                        </div>
                                                                        <span class="remove-rp tolt" data-microtip-position="left" data-tooltip="Remove Item">
                                                                            <i class="fa-light fa-trash"></i>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="add-acc">Add New Item</div>
                                                            </div>
                                                            <!-- add_acc-item-wrap end -->
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="dashboard-widget-title-single" style="margin-top: 20px">
                                                                Video Widget
                                                                
                                                                <div class="onoffswitch-wrap_db">
                                                                    <div class="onoffswitch">
                                                                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch51" checked="">
                                                                        <label class="onoffswitch-label" for="myonoffswitch51">
                                                                            <span class="onoffswitch-inner"></span>
                                                                            <span class="onoffswitch-switch"></span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- listsearch-input-item -->
                                                            <div class="cs-intputwrap">
                                                                <i class="fa-light fa-input-text"></i>
                                                                <input type="text" placeholder="Video Widget title" value="">
                                                            </div>
                                                            <!-- listsearch-input-item -->
                                                            <!-- listsearch-input-item -->
                                                            <div class="cs-intputwrap">
                                                                <i class="fa-brands fa-youtube"></i>
                                                                <input type="text" placeholder="Youtube url" value="">
                                                            </div>
                                                            <!-- listsearch-input-item -->
                                                            <!-- listsearch-input-item -->
                                                            <div class="cs-intputwrap">
                                                                <i class="fa-brands fa-vimeo-v"></i>
                                                                <input type="text" placeholder="Vimeo url" value="">
                                                            </div>
                                                            <!-- listsearch-input-item -->
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="dashboard-widget-title-single" style="margin-top: 20px">Premium Options</div>
                                                            <!-- listsearch-input-item -->
                                                            <div class="cs-intputwrap">
                                                                <div class="content-widget-switcher">
                                                                    <span class="content-widget-switcher-title">Similar Properties</span>
                                                                    <div class="onoffswitch">
                                                                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitchmc423" checked="">
                                                                        <label class="onoffswitch-label" for="myonoffswitchmc423">
                                                                            <span class="onoffswitch-inner"></span>
                                                                            <span class="onoffswitch-switch"></span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- listsearch-input-item -->
                                                            <!-- listsearch-input-item -->
                                                            <div class="cs-intputwrap">
                                                                <div class="content-widget-switcher">
                                                                    <span class="content-widget-switcher-title">Dynamics of Price Changes</span>
                                                                    <div class="onoffswitch">
                                                                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitchmc2423" checked="">
                                                                        <label class="onoffswitch-label" for="myonoffswitchmc2423">
                                                                            <span class="onoffswitch-inner"></span>
                                                                            <span class="onoffswitch-switch"></span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- listsearch-input-item -->
                                                            <!-- listsearch-input-item -->
                                                            <div class="cs-intputwrap">
                                                                <div class="content-widget-switcher">
                                                                    <span class="content-widget-switcher-title">Gooogle Maps</span>
                                                                    <div class="onoffswitch">
                                                                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitchmc823" checked="">
                                                                        <label class="onoffswitch-label" for="myonoffswitchmc823">
                                                                            <span class="onoffswitch-inner"></span>
                                                                            <span class="onoffswitch-switch"></span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- listsearch-input-item -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="commentssubmit" style="margin-top: 10px">
                                                    <span>Save Property Changes </span>
                                                </button>
                                            </div>
                                            <!--dasboard-content-item end-->
                                        </div>
                                    </div>
                                    <!-- pricing-column end-->
                                </div>
                                <div class="limit-box"></div>
                            </div>
                            <!--boxed-container end-->
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
                                        <div class="footer-widget-title">Get Our Application</div>
                                        <div class="footer-widget-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
                                            <div class="api-links-wrap">
                                                <a href="#" class="footer-widget-content-link">
                                                    <span>On Apple Store</span>
                                                    <i class="fa-brands fa-apple"></i>
                                                </a>
                                                <a href="#" class="footer-widget-content-link">
                                                    <span>On Google PLay</span>
                                                    <i class="fa-brands fa-google-play"></i>
                                                </a>
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
                                                        <a href="#" >yourmail@domain.com</a>
                                                    </li>
                                                    <li>
                                                        <span>Adress :</span>
                                                        <a href="#" >USA 27TH Brooklyn NY</a>
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
                                    <a href="#" >
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                    <a href="#" >
                                        <i class="fa-brands fa-x-twitter"></i>
                                    </a>
                                    <a href="#" >
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                    <a href="#" >
                                        <i class="fa-brands fa-tiktok"></i>
                                    </a>
                                    <a href="#" >
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
        <script src="js/map-add.js"></script>
        <script src="js/db-scripts.js"></script>
    </body>
</html>
