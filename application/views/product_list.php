<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<section class="shop-area section-padding">
 <div class="container">
    <div class="row">
       <div class="col-lg-12 col-md-12">
          <div class="product-filter">
             <div class="row align-items-center">
                <div class="col-lg-10">
                  <h3><?php echo $current_category_name; ?></h3>
                  <span class="shop-filter-title">Showing <?php echo (isset($product_rows) && is_array($product_rows)) ? sizeof($product_rows) : 0; ?> Results</span>
                </div>
                <div class="col-lg-2">
                   <ul class="nav nav-tabs filter-tab" id="myTab" role="tablist">
                      <li class="nav-item">
                         <a class="nav-link" id="filter-cate1-tab" data-toggle="tab" href="#filter-cate1" role="tab" aria-controls="filter-cate1" aria-selected="false"><i class="fa fa-th"></i></a>
                      </li>
                      <li class="nav-item">
                         <a class="nav-link active show" id="filter-cate2-tab" data-toggle="tab" href="#filter-cate2" role="tab" aria-controls="filter-cate2" aria-selected="true"><i class="fa fa-list"></i></a>
                      </li>
                   </ul>
                </div>
             </div>
             <!-- .row END -->
          </div>
          <!-- .product-filter END -->
          <div class="tab-content">
             <div class="tab-pane fade" id="filter-cate1" role="tabpanel" aria-labelledby="filter-cate1-tab">
                <div class="row">
                    <?php if(isset($product_rows) && is_array($product_rows)) {foreach($product_rows as $key => $val) { ?>
                    <div class="col-lg-4 col-md-6">
                      <div class="single-product">
                         <div class="product-header">
                            <img src="<?php echo $val['haku_image']; ?>" />
                         </div>
                         <div class="product-footer text-center">
                            <h4 class="product-title">
                                <a href="<?php echo site_url('products/detail/'.productUrl($val['haku_id'], $val['haku_name'])); ?>">
                                    <?php echo $val['haku_name']; ?>
                                </a>
                            </h4>
                            <div class="btn-wraper">
                                <a href="<?php echo site_url('products/detail/'.productUrl($val['haku_id'], $val['haku_name'])); ?>" class="btn btn-primary hover-style2">
                                    View Product
                                </a>
                            </div>
                         </div>
                      </div>
                      <!-- .single-product END -->
                    </div>
                   <?php }} else { echo '<div class="text-center" style="width: 100%;">Page is being under construction, and will go online soon...</div>'; } ?>
                </div>
                <!-- pagination start -->
                <!-- <ul class="pagination justify-content-center">
                   <li class="page-item active"><a class="page-link" href="#">1</a></li>
                   <li class="page-item"><a class="page-link" href="#">2</a></li>
                   <li class="page-item"><a class="page-link" href="#">3</a></li>
                   <li class="page-item">
                      <a class="page-link" href="#">Next</a>
                   </li>
                </ul> -->
                <!-- pagination end -->
             </div>
             <!-- #filter-cate1 END -->
             <div class="tab-pane fade active show" id="filter-cate2" role="tabpanel" aria-labelledby="filter-cate2-tab">
                <div class="row product-style-list">
                    <?php if(isset($product_rows) && is_array($product_rows)) {foreach($product_rows as $key => $val) { ?>
                    <div class="col-lg-6">
                      <div class="single-product">
                         <div class="product-header">
                            <img src="<?php echo $val['haku_image']; ?>" />
                         </div>
                         <div class="product-footer">
                            <h4 class="product-title">
                                <a href="<?php echo site_url('products/detail/'.productUrl($val['haku_id'], $val['haku_name'])); ?>">
                                    <?php echo $val['haku_name']; ?>
                                </a>
                            </h4>
                            <div class="btn-wraper">
                                <a href="<?php echo site_url('products/detail/'.productUrl($val['haku_id'], $val['haku_name'])); ?>" class="btn btn-primary hover-style2">
                                    View Product
                                </a>
                            </div>
                         </div>
                      </div>
                      <!-- .single-product END -->
                    </div>
                    <?php }} else { echo '<div class="text-center" style="width: 100%; font-size:24px;">Page is being under construction, and will go online soon...</div>'; } ?>
                </div>
                <!-- pagination start -->
                <!-- <ul class="pagination justify-content-center">
                   <li class="page-item active"><a class="page-link" href="#">1</a></li>
                   <li class="page-item"><a class="page-link" href="#">2</a></li>
                   <li class="page-item"><a class="page-link" href="#">3</a></li>
                   <li class="page-item">
                      <a class="page-link" href="#">Next</a>
                   </li>
                </ul> -->
                <!-- pagination end -->
             </div>
             <!-- #filter-cate2 END -->
          </div>
       </div>
    </div>
    <!-- .row END -->
 </div>
 <!-- .container END -->
</section>