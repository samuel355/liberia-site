<?php include('includes/head.php') ?>

<body>
  <!--loader-->
  <?php include_once('includes/loader.php') ?>
  <!--loader end-->

  <!--  main   -->
  <div id="main">
    <!--header-->
    <?php include_once('includes/header.php') ?>
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
                    <h2>Error Page</h2>
                    <h5>Contours Consult is a leading real estate agency based in Liberia.</h5>
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
                <div class="svg-corner svg-corner_white" style="bottom:0;right: -39px; transform: rotate( 90deg)"></div>
                <div class="svg-corner svg-corner_white" style="bottom:0;left:  -39px;"></div>
              </div>
              <div class="bg-wrap bg-hero bg-parallax-wrap-gradien fs-wrapper" data-scrollax-parent="true">
                <div class="bg" data-bg="images/bg/8.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
              </div>
            </div>
          </div>
        </div>
        <!--section-end-->
        <!--container-->
        <div class="container">
          <!--breadcrumbs-list-->
          <div class="breadcrumbs-list bl_flat">
            <a href="#">Home</a><span>Error Page</span>
            <div class="breadcrumbs-list_dec"><i class="fa-thin fa-arrow-up"></i></div>
          </div>
          <!--breadcrumbs-list end-->
        </div>
        <!--container end-->
        <!--main-content-->
        <div class="main-content ms_vir_height">

          <div class="container">
            <div class="section-title">
              <h4 style="color: red">Error Page</h4>
              <h1 style="font-weight: 900; font-size:120px">404</h1>
            </div>
            <a href="javascript:void()" style="font-size: 24px; margin-bottom:10px">Sorry it seems the page you are looking for does not exist</a> <br>
            <a href="/" style="font-size: 20px; color: #029800; text-decoration:underline">Go back to Home Page</a>
          </div>
        </div>
        <!--main-content end-->
      </div>
      <!--content  end-->
      <!--main-footer-->
      <div class="height-emulator"></div>
      <?php include_once('includes/footer.php') ?>
      <!--main-footer end-->
    </div>
    <!--warpper end-->

    <div class="mob-nav-overlay fs-wrapper"></div>
    <div class="body-overlay fs-wrapper wishlist-wrap-overlay clwl_btn"></div>

    <!-- progress-bar  -->
    <div class="progress-bar-wrap">
      <div class="progress-bar color-bg"></div>
    </div>
    <!-- progress-bar end -->
  </div>
  <!-- Main end -->
  <?php include_once('includes/script.php') ?>
</body>

</html>