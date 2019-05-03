<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<section class="snigle-shop-area section-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <img src="<?php echo $product_row['haku_image']; ?>" />
      </div>
      <div class="col-md-6">
        <div class="product-summary">
          <div class="product-header">
            <h2 class="product-title"><?php echo $product_row['haku_name']; ?></h2>
            <?php if(!empty($product_row['haku_content'])) { ?>
            <a href="<?php echo $product_row['haku_content']; ?>" target="_blank">View Product Details (PDF)</a>
            <?php } ?>
          </div><!-- .product-header END -->
          <div class="product-body">
            <?php echo $product_row['haku_description']; ?>
          </div>
        </div><!-- .product-summary END -->
      </div>
    </div><!-- .row END -->
  </div><!-- .container END -->
</section><!-- single shop end -->