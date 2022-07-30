<?php get_header();?>
<?php $herosection=get_field('hero_section','option');?>
<!-- Bnner Section -->
<section class="banner-section-two">
    <div class="sec-bg"
        style="background-image: url(<?php bloginfo('template_directory');?>/assets/images/main-slider/shape-1.png);">
    </div>
    <div class="shape-one"></div>
    <div class="content-outer">
        <div class="content-box">
            <div class="inner">
                <?php echo $herosection ?>
            </div>
            <div class="image-wrapper">
                <span class="shape-two"><img
                        src="<?php bloginfo('template_directory');?>/assets/images/shape/shape-2.png" alt=""></span>
                <span class="shape-three"><img
                        src="<?php bloginfo('template_directory');?>/assets/images/shape/shape-3.png" alt=""></span>
                <div class="image">
                    <div class="bg"
                        style="background-image: url(<?php bloginfo('template_directory');?>/assets/images/resource/image-9.jpg);background: white;">
                    </div>
                    <img src="<?php bloginfo('template_directory');?>/assets/images/TooLskitlogo.png" alt="">
                </div>
     
            </div>
        </div>
    </div>
</section>
<!-- End Bnner Section -->

<!-- services Section -->
<section class="services-section">
    <div class="auto-container">
        <div class="wrapper-box">
            <div class="row">
                <?php if( have_rows('features_section','options') ):?>

                <?php while( have_rows('features_section','options') ) : the_row();
$featuresheading = get_sub_field('features_heading');
$featurespara = get_sub_field('features_para');?>
                <div class="col-lg-4 col-md-5 service-block-one">
                    <div class="inner-box wow fadeInDown" data-wow-duration="1500ms">
                        <div class="icon">
                            <img width="100" height="100"
                                src="<?php bloginfo('template_directory');?>/assets/images/Untitled-design-35-min-1.png"
                                class="attachment-large size-large" alt="" loading="lazy">
                        </div>
                        <h4><?php echo $featuresheading ?></h4>
                        <div class="text"><?php echo $featurespara ?></div>
                    </div>
                </div>
                <?php endwhile;?>

                <?php endif; ?>

            </div>
        </div>
    </div>
</section>

<!-- Fun facts section -->
<!-- Pricing Plan -->
<section class="pricing-plan-section">
    <div class="auto-container">
        <div class="row">
            <?php if( have_rows('packages_section','options') ):?>
            <?php while( have_rows('packages_section','options') ) : the_row();
$packageheading = get_sub_field('package_heading');
$packagedescription = get_sub_field('package_description');
$packageprice = get_sub_field('package_price');
				$pricedescription = get_sub_field('price_description');
				$packagebutton = get_sub_field('package_button');
				$packagelink = get_sub_field('package_link');?>
            <div class="col-lg-4 pricing-block text-center">
                <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                    <div class="price"><?php echo $packageheading ?></div>
                    <h4><?php echo $packagedescription ?></h4>
                    <div class="content">
                        <h1 style="font-weight: bolder;padding-bottom: 10px;"><?php echo $packageprice ?></h1>
                        <P><?php echo $pricedescription ?></P>

                    </div>
                    <div class="link-btn text-center"><a href="<?php echo $packagelink ?>" class=" "><span>
                                <?php echo $packagebutton ?></span></a></div>
                </div>
            </div>
            <?php endwhile;?>

            <?php endif; ?>
            <!-- end card -->
        </div>
    </div>
</section>
<!-- Testimonial Section -->
<section class="testimonials-section">
    <div class="auto-container">
        <div class="sec-title text-center">
            <div class="sub-title">Testimonials</div>
            <h2>FACES WE MADE HAPPY !</h2>
        </div>
        <div class="theme_carousel owl-theme owl-carousel"
            data-options='{"loop": true, "margin": 40, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 1000, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "1" }, "768" :{ "items" : "1" } , "992":{ "items" : "1" }, "1200":{ "items" : "1" }}}'>
            <?php if( have_rows('testimonial_section','options') ):?>
            <?php while( have_rows('testimonial_section','options') ) : the_row();
$testimonialprofile = get_sub_field('testimonial_profile');
$testimonialstars = get_sub_field('testimonial_stars');
$testimonialpara = get_sub_field('testimonial_para');
				$testimonialname = get_sub_field('testimonial_name');
				$testimonialplace = get_sub_field('testimonial_place');?>
            <div class="testimonial-block">
                <div class="inner-box">
                    <div class="image">
                        <img src="<?php echo $testimonialprofile ?>" alt="">
                    </div>

                    <div class="rating">
                        <?php  
                        for ($x = 0; $x <=  $testimonialstars; $x++) {
                        echo "<span class='fas fa-star'></span>";
                        }
                        ?>
                    </div>
                    <div class="text"><?php echo $testimonialpara;?></div>
                    <div class="author-info">
                        <h4><?php echo $testimonialname ?></h4>
                        <div class="designation"><?php echo $testimonialplace ?></div>
                    </div>
                </div>
            </div>
            <?php endwhile;?>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- Blog Section -->
<?php $testimonialname=get_field('frequently_asked_queries','option');?>
<section class="blog-section">
      <?php echo $testimonialname ?>
</section>
<!-- Newsletter -->
<?php
	$newsletter=get_field('newsletter_section','option');?>
<section class="newsletter-section">
    <div class="container">
        <!-- <div class="wrapper-box"> -->
        <div class="card" style="padding: 10px 20px 10px 50px;background-color: #77ecc5;">
        <?php echo $newsletter;?>
        </div>
    </div>
</section>
		<?php
	$trust=get_field('trust_section','option');?>
<section class="trust">
    <div class="container">
        <!-- <div class="wrapper-box"> -->
        <div class="card" style="padding: 10px 0px 10px 0px;background-color: #77ecc5;">
	
            <?php echo $trust;?>
        </div>
    </div>
</section>
<?php get_footer();?>