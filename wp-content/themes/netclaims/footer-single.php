
    <div class="footer-section">
     

     <div class="div-block-8 ">
       <div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
        
         <div class="carousel-inner">
         <?php 
   $testimonials = carbon_get_theme_option( 'net_testimonials' );
$t=0;
// var_dump($testimonials);
   foreach( $testimonials as $testimonial){
     
   ?>
             <div class="carousel-item <?php if ($t==0) {
               ?>active<?php
             } ?> ">
                
               <div class="div-block-9">
                 <div class="text-block-4">
                     <em>
                         &quot;<?php echo $testimonial ['net_customer_reiews'] ?>&quot;
                     </em>
                 </div>
                 <div class="text-block-5">
                     <strong><?php echo $testimonial  ["net_customer_name"] ?></strong>
                 </div>
             </div>
             </div>
             <?php
             
        $t++;   }?>
         
         </div>
        
     </div>
     </div>
     <div class="footer-menu">
    
         <?php
         wp_nav_menu( array(
           'theme_location'  => 'footer-nav',
           
           'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
           'container' => false,
           'menu_class'      => 'nav justify-content-center',
           'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
           'walker'          => new WP_Bootstrap_Navwalker(),
         ) );
         ?>
         ?>
         <h5>Powered by Webflow</h5>
     </div>
 </div>
  


   
<?php wp_footer(); ?>

</body>
</html>