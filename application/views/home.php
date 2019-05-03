<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!-- banner area start -->
<section class="banner-area">
 <div class="banner-slider owl-carousel">
    <?php if (isset($imageslider_rows) && is_array($imageslider_rows)) { foreach ($imageslider_rows as $key => $val) { ?>
        <div class="banner-single-slider" style="background-image: url('<?php echo $val['haku_image']; ?>');">
          <?php /* ?>
          <div class="container">
              <div class="row">
                  <div class="col-md-10 mx-auto">
                      <div class="banner-content text-center">
                         <h2 class="banner-sub-title">Know safety No Accidents</h2>
                         <h3 class="banner-title">When it is bright switch off the light</h3>
                         <div class="btn-wraper">
                            <a href="<?php echo site_url('contact'); ?>" class="btn btn-secondary">Contact Us</a>
                         </div>
                      </div>
                      <!-- .banner-content END -->
                  </div>
              </div>
              <!-- .row END -->
          </div>
          <!-- .container END -->
          <div class="overlay black-bg"></div>
          <?php */ ?>
        </div>
    <?php }} ?>
 </div>
 <!-- .banner-slider END -->
</section>
<!-- banner area end -->
<!-- work tab area start -->
<section class="section-padding ">
  <!-- client start -->
  <div class="myclient-area">
    <div class="col-lg-10 mx-auto">
      <div class="section-title-area text-center" id="aht-products-label">
        <h2 class="section-title">Our <span>Products</span></h2>
      </div>
    </div>
    <div class="container-fluid">
      <div class="client-slider owl-carousel">
        <?php if(isset($product_rows) && is_array($product_rows)) {foreach ($product_rows as $key => $val) { ?>
        <div class="single-client">
          <a href="<?php echo site_url('products/detail/'.productUrl($val['haku_id'], $val['haku_name'])); ?>">
            <div class="img-slide-products" style="background-image:url(<?php echo $val['haku_image']; ?>);"></div>
          </a>
        </div>
        <!-- .single-client END -->
        <?php }} ?>
      </div>
   </div>
   <!-- .container END -->
  </div>
  <!-- client end -->
  <?php /*
  <!-- <div class="container">
      <div class="row">
         <div class="col-lg-4 col-md-6">
           <div class="footer-widget">
               <h5 class="widget-title">About Us</h5>
               <div class="media">
              <img src="http://localhost/AHT-Company/css/images/logo.png" alt="logo-image" class="mr-3 mt-3" style="width:60px;">
              <div class="media-body">
                <p>Electronics is the discipline dealing with the development and application of devices and systems involving.</p>
              </div>
            </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="footer-widget">
               <h5 class="widget-title">Company</h5>
                <ul class="list-group">
                  <li class="list-group-item d-flex justify-content-between align-items-center aht-news-list">
                    AHT Corporation participates in IIEE 3E XPO 2018 on November 14-17
                    <span class="badge badge-pill">12/11/2018</span>
                  </li>
                </ul>
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
          <div class="footer-widget">
               <h5 class="widget-title">Contact Us</h5>
               <div class="row no-gutters">
                <div class="col-lg-12">
                    <ul class="info-list list-inline">
                        <li>
                            <div class="media">
                                <i class="fa fa-map-marker"></i>
                                <div class="media-body">
                                    <a href="https://www.google.com/maps/place/New+York,+NY,+USA/@40.6976701,-74.2598628,10z/data=!3m1!4b1!4m5!3m4!1s0x89c24fa5d33f083b:0xc80b8f06e177fe62!8m2!3d40.7127753!4d-74.0059728" target="_blank">7004 Signal Hall Road Hongkong, NA, 20200</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="media">
                                <i class="fa fa-clock-o"></i>
                                <div class="media-body">
                                    <p>Mon-Fri 08:00 AM - 04:00 PM Sat-Sun 08:00 AM - 12:00 PM</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
               </div>
            </div>
         </div>
      </div>
   </div> -->
   */ ?>
   <!-- .container END -->
</section>
<!-- work tab area end -->