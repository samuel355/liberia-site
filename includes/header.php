<?php
// Get the current page
$pageFile = basename($_SERVER['PHP_SELF']);
?>

<header class="main-header">
  <div class="container">
    <div class="header-inner">
      <a href="/" class="logo-holder">
        <img src="/images/logo/contourslogoall.png" alt="">
      </a>

      <!--  navigation -->
      <div class="nav-holder main-menu">
        <nav>
          <ul class="no-list-style">
            <li class="<?php echo ($pageFile === 'index.php') ? 'nav-active' : ''; ?>">
              <a href="/">Home</a>
            </li>
            <li class="<?php echo ($pageFile === 'about-us.php') ? 'nav-active' : ''; ?>">
              <a href="/about-us">About Us</a>
            </li>
            <li class="<?php echo ($pageFile === 'services.php') ? 'nav-active' : ''; ?>">
              <a href="/services">Our Services</a>
            </li>
            <li class="<?php echo ($pageFile === 'our-team.php' || $pageFile === 'administrative-assistant.php' || $pageFile === 'administrator.php' || $pageFile === 'ceo.php' || $pageFile === 'secretary.php' || $pageFile === 'surveyor.php') ? 'nav-active' : ''; ?>">
              <a href="/our-team">Our Team</a>
            </li>
            <li class="<?php echo ($pageFile === 'contact.php') ? 'nav-active' : ''; ?>">
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
            <form class="custom-form" id="chat-icon-form">
              <div class="row">
                <div class="col-lg-12">
                  <div class="cs-intputwrap">
                    <i class="fa-light fa-user"></i>
                    <input type="text" name="fullname" id="fullname-ci" placeholder="Full Name" value="">
                    <small class="fullname-error-ci"></small>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="cs-intputwrap">
                    <i class="fa-light fa-phone"></i>
                    <input id="phone-ci" name="phone" type="text" placeholder="Contact" value="">
                    <small class="phone-error-ci"></small>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="cs-intputwrap">
                    <i class="fa-light fa-envelope"></i>
                    <input type="email" name="email" id="email-ci" placeholder="Email Address" value="">
                    <small class="email-error-ci"></small>
                  </div>
                </div>
                <!-- listsearch-input-item -->
                <!-- listsearch-input-item -->
                <div class="col-lg-12">
                  <div class="cs-intputwrap">
                    <i class="fa-light fa-layer-group"></i>
                    <select id="service-ci" name="service" data-placeholder="Categories"
                      class="chosen-select on-radius no-search-select">
                      <option value="Choose Service">Choose Service</option>
                      <option value="Surveying">Surveying</option>
                      <option value="Property Acquistion">Property Acquisition</option>
                      <option value="Property Valuation">Property Valuation</option>
                      <option value="Documentation">Documentation</option>
                      <option value="Other">Other</option>
                    </select>
                    <small class="service-error-ci"></small>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="cs-intputwrap">
                    <i class="fa-light fa-comments"></i>
                    <input name="message" id="message-ci" type="text" placeholder="Message" value="">
                    <span class="message-error-ci"></span>
                  </div>
                </div>
              </div>
              <button type="submit" class="commentssubmit commentssubmit_fw">Submit</button>
            </form>
          </div>
        </div>
      </div>
      <!-- header-search-wrap  end -->
    </div>
  </div>
</header>