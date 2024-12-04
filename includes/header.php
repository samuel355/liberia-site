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
    </div>
  </div>
</header>