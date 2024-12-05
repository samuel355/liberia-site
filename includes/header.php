<?php
// Get the current page
$pageFile = basename($_SERVER['PHP_SELF']);
?>

<header class="main-header">
  <div class="container">
    <div class="header-inner">
      <a href="/" class="logo-holder"><img src="images/logo.png" alt=""></a>
      <!--  navigation -->
      <div class="nav-holder main-menu">
        <nav>
          <ul class="no-list-style">
            <li class="<?php echo ($pageFile == 'index.php') ? 'nav-active' : ''; ?>">
              <a href="/">Home</a>
            </li>
            <li class="<?php echo ($pageFile == 'about-us.php') ? 'nav-active' : ''; ?>">
              <a href="/about-us">About Us</a>
            </li>
            <li class="<?php echo ($pageFile == 'services.php') ? 'nav-active' : ''; ?>">
              <a href="/services">Our Services</a>
            </li>
            <li class="<?php echo ($pageFile == 'faqs.php') ? 'nav-active' : ''; ?>">
              <a href="/faqs">FAQs</a>
            </li>
            <li class="<?php echo ($pageFile == 'contact.php') ? 'nav-active' : ''; ?>">
              <a href="/contact">Contact Us</a>
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

      <!-- header-search-wrap  -->
      <div class="header-search-wrap novis_search">
        <div class="header-search">
          <div class="header-search-container">
            <div class="list-searh-input-wrap-title_wrap">
              <div class="list-searh-input-wrap-title">
                <span>You Have any Enquiries?</span>
              </div>
            </div>
            <form class="custom-form" id="contact-form">
              <div class="row">
                <div class="col-lg-12">
                  <div class="cs-intputwrap">
                    <i class="fa-light fa-user"></i>
                    <input type="text" placeholder="Full Name" value="">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="cs-intputwrap">
                    <i class="fa-light fa-phone"></i>
                    <input type="text" placeholder="Contact" value="">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="cs-intputwrap">
                    <i class="fa-light fa-envelope"></i>
                    <input type="email" placeholder="Email Address" value="">
                  </div>
                </div>
                <!-- listsearch-input-item -->
                <!-- listsearch-input-item -->
                <div class="col-lg-12">
                  <div class="cs-intputwrap">
                    <i class="fa-light fa-layer-group"></i>
                    <select data-placeholder="Categories"
                      class="chosen-select on-radius no-search-select">
                      <option>Choose Service</option>
                      <option>Surveying</option>
                      <option>Property Acquisition</option>
                      <option>Property Valuation</option>
                      <option>Documentation</option>
                      <option>Other</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="cs-intputwrap">
                    <i class="fa-light fa-comments"></i>
                    <input type="text" placeholder="Message" value="">
                  </div>
                </div>
              </div>
              <button class="commentssubmit commentssubmit_fw">Submit</button>
            </form>
          </div>
        </div>
      </div>
      <!-- header-search-wrap  end -->
    </div>
  </div>
</header>