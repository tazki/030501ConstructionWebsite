<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<section class="about-summary-area section-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="about-imge">
          <img src="<?php echo $about_rows['haku_image']; ?>" />
        </div>
      </div>
      <div class="col-md-6">
          <div class="about-summary-content">
            <?php echo $about_rows['haku_description']; ?>
          </div>
      </div>
    </div><!-- .row END -->
  </div><!-- .container END -->
</section><!-- about summary end -->