<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!-- preloader start -->
<div id="preloader" class="preloader">
 <div class="preloader-area">
    <div class="sk-cube-grid">
       <div class="sk-cube sk-cube1"></div>
       <div class="sk-cube sk-cube2"></div>
       <div class="sk-cube sk-cube3"></div>
       <div class="sk-cube sk-cube4"></div>
       <div class="sk-cube sk-cube5"></div>
       <div class="sk-cube sk-cube6"></div>
       <div class="sk-cube sk-cube7"></div>
       <div class="sk-cube sk-cube8"></div>
       <div class="sk-cube sk-cube9"></div>
    </div>
 </div>
</div>
<!-- preloader end -->
<!-- Top bar start -->
<div class="topbar-area primary-bg">
 <div class="container">
    <div class="row">
       <div class="col-md-6">
          <div class="topbar-content">
              <p>Your Place in the Sun is Right Here!</p>
          </div>
       </div>
       <div class="col-md-6">
          <ul class="lists list-inline topbar-menu">
            <li><a href="#"><?php echo (!empty($home_rows['contact']['phone_number'])) ? '<i class="fa fa-phone"></i> '.$home_rows['contact']['phone_number'] : ''; ?></a></li>
            <li><a href="#"><?php echo (!empty($home_rows['contact']['email_address'])) ? '<i class="fa fa-envelope"></i> '.$home_rows['contact']['email_address'] : ''; ?></a></li>
          </ul>
       </div>
    </div>
    <!-- .row END -->
 </div>
 <!-- .container END -->
</div>
<!-- Top bar end -->
<!-- Menu area start -->
<header class="header-area" id="sticky">
 <div class="container">
    <div class="row">
       <div class="col-md-12">
          <nav class="navbar navbar-expand-lg main-menu">
             <a class="navbar-brand" href="<?php echo site_url(); ?>">
                <img style="width:100px;" src="<?php echo base_url('css/images/'); ?>logo.png" alt="">
             </a>
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainMenu" aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon">
             <i class="fa fa-bars" aria-hidden="true"></i>
             </span>
             </button>
             <div class="collapse navbar-collapse" id="mainMenu">
                <ul class="navbar-nav">
                   <li class="nav-item">
                      <a class="nav-link" href="<?php echo site_url(); ?>">HOME</a>
                   </li>
                   <li class="nav-item">
                      <a class="nav-link" href="<?php echo site_url('about'); ?>">ABOUT</a>
                   </li>                   
                   <?php if(isset($category_rows['parent']) && is_array($category_rows['parent']))
                   {
                      foreach($category_rows['parent'] as $key => $val)
                      {
                        $nav_items = '';
                        if(isset($category_rows['child'][$val['group_id']]) && is_array($category_rows['child'][$val['group_id']]))
                        {
                          foreach($category_rows['child'][$val['group_id']] as $skey => $sval)
                          {
                            $nav_items .= '<li class="nav-item">
                              <a class="dropdown-item" href="'.site_url('products/'.$sval['slug_url']).'">'
                                .$sval['group_name'].
                              '</a>
                            </li>';
                          }
                        }

                        echo '<li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">'
                            .$val['group_name'].
                          '</a>
                          <ul class="dropdown-menu">'.$nav_items.'</ul>                          
                        </li>';
                      }
                    } ?>
                   <?php /*
                   <!-- <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="ProductDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      ENERGY
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="ProductDropdown">
                                        <div class="container-fluid mt-3 mb-3">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-3 col-sm-6">
                                                    <p>Sample</p>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-6">
                                                    <p>Sample</p>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-6">
                                                    <p>Sample</p>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-6">
                                                    <p>Sample</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="ProductDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        CONSTRUCTION
                        </a>
                        <div class="dropdown-menu" aria-labelledby="ProductDropdown2">
                            <div class="container-fluid mt-3 mb-3">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <p>Sample</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="ProductDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          FACTORY AUTOMATION
                        </a>
                        <div class="dropdown-menu" aria-labelledby="ProductDropdown3">
                            <div class="container-fluid mt-3 mb-3">
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-2">
                                        <p>Sample</p>
                                        <ul>
                                            <li>Sample 1Sample 1Sample 1Sample 1Sample 1</li>
                                            <li>Sample 1</li>
                                            <li>Sample 1</li>
                                            <li>Sample 1</li>
                                            <li>Sample 1</li>
                                            <li>Sample 1</li>
                                            <li>Sample 1</li>
                                            <li>Sample 1</li>
                                            <li>Sample 1</li>
                                            <li>Sample 1</li>
                                            <li>Sample 1</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2">
                                        <p>Sample</p>
                                        <ul>
                                            <li>Sample 1</li>
                                            <li>Sample 1</li>
                                            <li>Sample 1</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2">
                                        <p>Sample</p>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2">
                                        <p>Sample</p>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2">
                                        <p>Sample</p>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2">
                                        <p>Sample</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li> -->
                    */ ?>
                   <li class="nav-item">
                      <a class="nav-link" href="<?php echo site_url('contact'); ?>">CONTACT US</a>
                   </li>
                </ul>
             </div>
          </nav>
       </div>
    </div>
    <!-- .row END -->
 </div>
 <!-- .container END -->
</header>
<!-- Menu area end -->