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
      <!-- Chat Icon on page -->
      <?php include_once('includes/chat-icon.php') ?>

      <div class="content">

        <!--hero section-->
        <div class="section hero-section home-hero-section">
          <div class="hero-section-wrap">
            <div class="hero-section-wrap-item">
              <div class="container">
                <div class="hero-section-container">
                  <div class="row">
                    <div class="col-lg-8">
                      <div class="hero-slider-wrapper">
                        <div class="hero-slider">
                          <div class="swiper-container">
                            <div class="swiper-wrapper">
                              <!-- swiper-slide-->
                              <div class="swiper-slide">
                                <div class="hero-carousel_item"
                                  data-imbg="images/bg/9.jpg">
                                  <div class="hero-section-title hs_align-title">
                                    <div class="hero-section-title_sub">Welcome to
                                      Contours LTD</div>
                                    <h2>Your Trusted Partner in Surveying, <br> Mapping, and Geo-informatics Services</h2>
                                    <p>Delivering innovative, professional land and spatial solutions tailored for Liberia’s unique landscape.</p>
                                    <a href="/about-us"
                                      class="commentssubmit csb_color  custom-scroll-link"
                                      style="margin-top: 40px">Read More</a>
                                  </div>
                                </div>
                              </div>
                              <!-- swiper-slide end-->
                              <!-- swiper-slide-->
                              <div class="swiper-slide">
                                <div class="hero-carousel_item"
                                  data-imbg="images/bg/slide-2.jpg">
                                  <div class="hero-section-title hs_align-title">

                                    <h2><a href="javascript:void()">
                                        Expert Teamwork</a></h2>

                                    <p>Showcasing the seamless collaboration of skilled professionals who bring expertise, precision, and dedication to every geo-spatial project.</p>
                                    <a href="/contact"
                                      class="commentssubmit csb_color"
                                      style="margin-top: 40px">Get in Touch</a>
                                  </div>
                                </div>
                              </div>
                              <!-- swiper-slide end-->
                              <!-- swiper-slide-->
                              <div class="swiper-slide">
                                <div class="hero-carousel_item"
                                  data-imbg="images/bg/slider-1.jpg">
                                  <div class="hero-section-title hs_align-title">
                                    <div class="hero-section-title_sub">Few Words
                                      About Our Agency</div>
                                    <h2>We are International <br> Real Estate Agency
                                    </h2>
                                    <p>Contours Limited bridges the gap in Liberia's land surveying and mapping industry, offering top-notch services to public and private sectors.</p>
                                    <a href="/about-us"
                                      class="commentssubmit csb_color  custom-scroll-link"
                                      style="margin-top: 40px">Read more about
                                      us</a>
                                  </div>
                                </div>
                              </div>
                              <!-- swiper-slide end-->
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- hero-carousel-wrapper -->
                    </div>
                    <div class="col-lg-4 mob-hid">
                      <!-- Enquiries-->
                      <div
                        class="list-searh-input-wrap box_list-searh-input-wrap lws_column hero_home_search lsiw_dec">
                        <div class="list-searh-input-wrap-title_wrap">
                          <div class="list-searh-input-wrap-title">
                            <span>You Have any Enquiries?</span>
                          </div>
                        </div>
                        <form class="custom-form" id="enquiry-hero-form">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="cs-intputwrap">
                                <i class="fa-light fa-user"></i>
                                <input type="text" name="fullname" id="fullname-hr" placeholder="Full Name" value="">
                                <small class="fullname-error-hr"></small>
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="cs-intputwrap">
                                <i class="fa-light fa-phone"></i>
                                <input onkeypress="handleInput(event)" id="phone-hr" name="phone" type="text" placeholder="Contact" value="">
                                <small class="phone-error-hr"></small>
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="cs-intputwrap">
                                <i class="fa-light fa-envelope"></i>
                                <input type="email" name="email" id="email-hr" placeholder="Email Address" value="">
                                <small class="email-error-hr"></small>
                              </div>
                            </div>
                            <!-- listsearch-input-item -->
                            <!-- listsearch-input-item -->
                            <div class="col-lg-12">
                              <div class="cs-intputwrap">
                                <i class="fa-light fa-layer-group"></i>
                                <select id="service-hr" name="service" data-placeholder="Categories"
                                  class="chosen-select on-radius no-search-select">
                                  <option value="Choose Service">Choose Service</option>
                                  <option value="Surveying" >Surveying</option>
                                  <option value="Property Acquistion" >Property Acquisition</option>
                                  <option value="Property Valuation" >Property Valuation</option>
                                  <option value="Documentation" >Documentation</option>
                                  <option value="Other">Other</option>
                                </select>
                                <small class="service-error-hr"></small>
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="cs-intputwrap">
                                <i class="fa-light fa-comments"></i>
                                <input name="message" id="message-hr" type="text" placeholder="Message" value="">
                                <span class="message-error-hr" ></span>
                              </div>
                            </div>
                          </div>
                          <button type="submit" class="commentssubmit commentssubmit_fw">Submit</button>
                        </form>
                      </div>
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
                  <div class="svg-corner svg-corner_white"
                    style="bottom:0;right: -39px; transform: rotate( 90deg)"></div>
                  <div class="svg-corner svg-corner_white" style="bottom:0;left:  -39px;"></div>
                </div>
                <div class="sc-controls shc_controls2 shc_controls3 slideshow-container-pag-init  ">
                </div>
                <div class="hs-slider-controls">
                  <div class="hs-button-prev hs-slider-button"><i
                      class="fa-solid fa-chevron-left"></i></div>
                  <div class="hs-button-next hs-slider-button"><i
                      class="fa-solid fa-chevron-right"></i></div>
                </div>
              </div>
              <div class="bg-wrap bg-hero bg-parallax-wrap-gradien fs-wrapper">
                <div class="hero-blur-container fs-wrapper">
                  <div class="hero-blur-container_item fs-wrapper">
                    <div class="bg" data-bg=""></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- hero section-end-->

        <!--main-content-->
        <div class="main-content ms_vir_height">

          <!-- Why Choose Us container -->
          <div class="container">
            <div class="boxed-container">
              <div class="boxed-content ">
                <div class="about-wrap boxed-content-item">
                  <div class="row">
                    <div class="col-lg-5">
                      <div class="about-title ab-hero">
                        <h2>Why Choose Contours Ltd <?php echo htmlspecialchars($pageTitle) ?> </h2>
                        <h4>Explore these features about Contours Ltd</h4>
                      </div>
                      <div class="services-opions">
                        <ul>
                          <li>
                            <i class="fal fa-shield"></i>
                            <h4>Proven Track Record</h4>
                            <p>With a portfolio of successful projects across various industries, we have built a reputation for delivering high-quality results on time and within budget.</p>
                          </li>
                          <li>
                            <i class="fal fa-phone-laptop"></i>
                            <h4>State-of-the-Art Technology</h4>
                            <p>
                              We utilize cutting-edge tools and technologies, from advanced surveying equipment to drone mapping and LiDAR, to deliver accurate and reliable results every time.
                            </p>
                          </li>
                          <li>
                            <i class="fal fa-users"></i>
                            <h4>Client-Centric Approach</h4>
                            <p>Your satisfaction is our priority. We tailor our services to meet your specific needs, providing customized solutions that align with your project goals.</p>
                          </li>
                          <li>
                            <i class="fal fa-cogs"></i>
                            <h4>Unmatched Expertise</h4>
                            <p>Our team is composed of industry-leading professionals with years of experience in geo-spatial solutions, ensuring your projects are handled with the utmost precision and care.</p>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-lg-7">
                      <div class="about-img">
                        <img src="images/all/15.jpg" class="respimg" alt="">
                        <div class="about-img-hotifer">
                          <p>Contours Limited is a full-service Land Surveying & Mapping and Geo-informatics
                            company in Liberia.</p>
                          <h4>Albert D. Giah Jr</h4>
                          <h5> CEO</h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- <div class="clients-carousel-wrap">
                                <div class="clients-carousel-title">Our Trusted Partners </div>
                                <div class="clients-carousel">
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                            
                                            <div class="swiper-slide">
                                                <a href="#" class="client-item"><img src="images/clients/1.png"
                                                        alt=""></a>
                                            </div>
            
                                            <div class="swiper-slide">
                                                <a href="#" class="client-item"><img src="images/clients/2.png"
                                                        alt=""></a>
                                            </div>
            
                                            <div class="swiper-slide">
                                                <a href="#" class="client-item"><img src="images/clients/3.png"
                                                        alt=""></a>
                                            </div>
            
                                            <div class="swiper-slide">
                                                <a href="#" class="client-item"><img src="images/clients/4.png"
                                                        alt=""></a>
                                            </div>
            
                                            <div class="swiper-slide">
                                                <a href="#" class="client-item"><img src="images/clients/5.png"
                                                        alt=""></a>
                                            </div>
                                
                                    </div>
                                    <div class="cc-button cc-button-next"><i class="fal fa-angle-right"></i></div>
                                    <div class="cc-button cc-button-prev"><i class="fal fa-angle-left"></i></div>
                                </div>
                            </div> -->

            </div>
          </div>
          <!-- Why Choose Us container end-->

          <!-- Platform works section -->
          <div class="parallax-section-wrap">
            <div class="bg-wrap    fs-wrapper" data-scrollax-parent="true">
              <div class="bg" data-bg="images/bg/3.jpg" data-scrollax="properties: { translateY: '20%' }">
              </div>
              <div class="overlay"></div>
            </div>
            <div class="container  ">
              <div class="row">
                <div class="col-lg-4">
                  <div class="parallax-section-content">
                    <h3>The Services we render</h3>
                    <p>Contours Limited is a leading land surveying and mapping service provider. Using cutting-edge tools, we empower businesses and individuals to make informed decisions about land use and spatial planning.</p>
                    <a href="/services" class="commentssubmit csb_color "
                      style="margin-top: 20px">View All Services</a>
                  </div>
                </div>
                <div class="col-lg-8">
                  <div class="process-wrap">
                    <ul>
                      <li>
                        <div class="process-item">
                          <span class="process-count">01 . </span>
                          <div class="process-item-icon"><i
                              class="fa-light fa-mailbox"></i></div>
                          <h4> Land Surveying and Mapping</h4>
                          <p>
                            We provide comprehensive land surveying services, including parcel delineation to define property boundaries and more
                          </p>
                        </div>
                        <span class="pr-dec"></span>
                      </li>
                      <li>
                        <div class="process-item">
                          <span class="process-count">02 .</span>
                          <div class="process-item-icon"><i class="fa-light fa-house-building"></i>
                          </div>
                          <h4> Property Valuation</h4>
                          <p>
                            Our services include property valuation for accurate assessments, data management for efficient organization and maintenance of property records, and providing infrastructure insights
                          </p>
                        </div>
                        <span class="pr-dec"></span>
                      </li>
                      <li>
                        <div class="process-item">
                          <span class="process-count">03 .</span>
                          <div class="process-item-icon"><i
                              class="fa-light fa-layer-plus"></i></div>
                          <h4> Construction Services</h4>
                          <p>
                            Our construction services ensure quality and precision, offering project planning and management for seamless execution, site preparation and excavation for efficient groundwork, structural construction for residential, commercial, and industrial buildings.
                          </p>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Platform works section end -->

          <!-- Testimonials section   -->
          <?php include_once('includes/testimonials.php') ?>
          <!-- Testimonials section end  -->

          <!-- Team /Staff -->
          <?php include_once('includes/team.php') ?>

          <!-- section end  -->
          <?php include_once('includes/cta-arch-design.php') ?>
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


    <div class="body-overlay fs-wrapper wishlist-wrap-overlay clwl_btn"></div>
    <div class="mob-nav-overlay fs-wrapper"></div>


    <!-- progress-bar  -->
    <div class="progress-bar-wrap">
      <div class="progress-bar color-bg"></div>
    </div>
    <!-- progress-bar end -->

  </div>
  <!-- Main end -->

  <!--=============== scripts  ===============-->
  <?php include_once('includes/script.php') ?>
</body>

</html>