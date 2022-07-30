 <!--Main Footer-->
 <footer class="main-footer">
     <div class="upper-box">
         <div class="auto-container">
             <div class="row">
                 <div class="col-lg-4 col-md-7">
                     <div class="widget about-widget">
                         <div id="footer-1">
                             <?php if(is_active_sidebar('footer-1')){dynamic_sidebar('footer-1');}?>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-4 col-md-6">
                     <div class="widget links-widget">
                         <div id="footer-2">
                             <?php if(is_active_sidebar('footer-2')){dynamic_sidebar('footer-2');}?>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-4  col-md-6">
                     <div class="widget contact-widget">
                         <div id="footer-3">
                             <?php if(is_active_sidebar('footer-3')){dynamic_sidebar('footer-3');}?>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </footer>
 <!--End Main Footer-->
 <div class="footer-bottom">
     <div class="auto-container">
         <div class="content">
             <div class="logo"><?php the_custom_logo();?></div>
             <div id="footer-4">
                 <?php if(is_active_sidebar('footer-4')){dynamic_sidebar('footer-4');}?>
             </div>
         </div>
     </div>
 </div>
 </div>
 <!--End pagewrapper-->
 <!--Scroll to top-->
 <div class="scroll-to-top scroll-to-target" data-target="html"><span class="flaticon-right-arrow-4"></span></div>
 <script src="<?php echo get_template_directory_uri();?>/assets/js/jquery.js"></script>
 <script src="<?php echo get_template_directory_uri();?>/assets/js/popper.min.js"></script>
 <script src="<?php echo get_template_directory_uri();?>/assets/js/bootstrap.min.js"></script>
 <script src="<?php echo get_template_directory_uri();?>/assets/js/bootstrap-select.min.js"></script>
 <script src="<?php echo get_template_directory_uri();?>/assets/js/jquery.fancybox.js"></script>
 <script src="<?php echo get_template_directory_uri();?>/assets/js/isotope.js"></script>
 <script src="<?php echo get_template_directory_uri();?>/assets/js/owl.js"></script>
 <script src="<?php echo get_template_directory_uri();?>/assets/js/appear.js"></script>
 <script src="<?php echo get_template_directory_uri();?>/assets/js/wow.js"></script>
 <script src="<?php echo get_template_directory_uri();?>/assets/js/lazyload.js"></script>
 <script src="<?php echo get_template_directory_uri();?>/assets/js/scrollbar.js"></script>
 <script src="<?php echo get_template_directory_uri();?>/assets/js/TweenMax.min.js"></script>
 <script src="<?php echo get_template_directory_uri();?>/assets/js/swiper.min.js"></script>
 <script src="<?php echo get_template_directory_uri();?>/assets/js/jquery.polyglot.language.switcher.js"></script>
 <script src="<?php echo get_template_directory_uri();?>/assets/js/jquery.ajaxchimp.min.js"></script>
 <script src="<?php echo get_template_directory_uri();?>/assets/js/parallax-scroll.js"></script>
 <script src="<?php echo get_template_directory_uri();?>/assets/js/script.js"></script>
 <?php wp_footer();?>
 </body>

 </html>