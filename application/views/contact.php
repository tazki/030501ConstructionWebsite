<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!-- map start -->
<!-- <div id="map" class="map map-area"></div> --><!-- map end -->

<!-- contact info block start -->
<div class="contact-info-block-area" style="margin-top:50px;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="single-info-block media" style="height: 150px;">
                    <div class="round-icon">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="media-body">
                        <p>
                            <?php echo (!empty($home_rows['contact']['phone_number'])) ? 'Phone: <a href="callto:'.$home_rows['contact']['phone_number'].'">'.$home_rows['contact']['phone_number'].'</a><br />' : ''; ?>
                            <?php echo (!empty($home_rows['contact']['fax_number'])) ? 'Fax: '.$home_rows['contact']['fax_number'] : ''; ?>
                        </p>
                    </div>
                </div><!-- .single-info-block END -->
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="single-info-block media" style="height: 150px;">
                    <div class="round-icon">
                        <i class="fa fa-map-marker"></i>
                    </div>
                    <div class="media-body">
                        <?php echo (!empty($home_rows['contact']['address'])) ? 'Address: '.$home_rows['contact']['address'] : ''; ?>
                    </div>
                </div><!-- .single-info-block END -->
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="single-info-block media" style="height: 150px;">
                    <div class="round-icon">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <div class="media-body">
                        <p>Email: 
                            <?php echo (!empty($home_rows['contact']['email_address'])) ? '<a href="mailto:'.$home_rows['contact']['email_address'].'">'.$home_rows['contact']['email_address'].'</a>' : ''; ?>
                        </p>
                    </div>
                </div><!-- .single-info-block END -->
            </div>
        </div><!-- .row END -->
    </div><!-- .container END -->
</div><!-- contact info block end -->

<!-- contact form start -->
<!-- <div class="contact-form-area section-padding pt-0">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="contact-form-wraper">
                    <form action="#" class="contact-form input-style3" id="contact-form" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="contact_name" name="name" placeholder="Your Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="contact_email" name="email" placeholder="Your Email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="number" class="form-control" id="contact_phone" name="phone" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="contact_subject" name="subject" placeholder="Subject">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea name="massage" class="form-control" id="contact_massage" placeholder="Message" cols="30" rows="10"></textarea>
                        </div> 
                        <input type="submit" value="Send Message" class="btn btn-primary style2" id="contact_submit">           
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- contact form end -->