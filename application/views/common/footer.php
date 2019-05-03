<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!-- footer section start -->
<footer class="footer-section gray-bg">
<div class="container">
    <div class="row">
       <div class="col-lg-4 col-md-6">
         <div class="footer-widget">
             <h5 class="widget-title">About Us</h5>
             <div class="media">
            <img src="<?php echo base_url('css/images/'); ?>logo.png" alt="logo-image" class="mr-3 mt-3" style="width:60px;">
            <div class="media-body">
              <p>AHT is engaged on the Phlippines boosting infrastuctue section, power energy production and distribution, building material industry.</p>
            </div>
          </div>
          </div>
       </div>
       <div class="col-lg-5 col-md-6">
          <div class="footer-widget">
             <h5 class="widget-title">Events</h5>
              <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center aht-news-list">
                  <a href="#">AHT Corporation participates in IIEE 3E XPO 2018 on November 14-17</a>
                  <span class="badge badge-pill">12/11/2018</span>
                </li>
              </ul>
          </div>
       </div>
       <div class="col-lg-3 col-md-6">
          <div class="footer-widget">
             <h5 class="widget-title">Contact Us</h5>
             <div class="row no-gutters">
              <div class="col-lg-12">
                  <ul class="info-list list-inline">
                      <li>
                          <div class="media">
                              <i class="fa fa-map-marker"></i>
                              <div class="media-body">
                                  <a href="#" target="_blank"><?php echo (!empty($home_rows['contact']['address'])) ? $home_rows['contact']['address'] : ''; ?></a>
                              </div>
                          </div>
                      </li>
                      <li>
                          <div class="media">
                              <i class="fa fa-phone"></i>
                              <div class="media-body">
                                <p><?php echo (!empty($home_rows['contact']['phone_number'])) ? 'Trunk line: '.$home_rows['contact']['phone_number'].'<br />' : ''; ?>
                                  <?php echo (!empty($home_rows['contact']['fax_number'])) ? 'Fax: '.$home_rows['contact']['fax_number'].'<br />' : ''; ?>
                                  <?php echo (!empty($home_rows['contact']['email_address'])) ? 'Email:'.$home_rows['contact']['email_address'] : ''; ?>
                                </p>
                              </div>
                          </div>
                      </li>
                  </ul>
              </div>
             </div>
          </div>
       </div>
       <div class="col-sm-12">
          <div class="copyright text-center mt-4">
            <p>AHT © <?php echo date('Y'); ?> All Right Reserved</p>
          </div>
       </div>
    </div>
 </div>
</footer>
<!-- back to top start -->
<div class="backtotop-wraper">
 <a href="#" class="backtotop backtotop-btn"><i class="fa fa-angle-up"></i></a>
</div>
<!-- back to top end -->
<!-- footer section end -->