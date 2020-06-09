
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
   
  <script>
    // When the user scrolls down 20px from the top of the document, slide down the navbar
    window.onscroll = function() {scrollFunction()};
    
    function scrollFunction() {
        if(window.innerWidth >= 1024){
        var nav = document.getElementById("menubar-section");
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20 ) {
        nav.style.top = "0";
        nav.style.opacity = 1;
      } else {
        nav.style.top = "-150px";
        nav.style.opacity = 0;
      }
    }
    }
    </script>

    
 <?php wp_footer(); ?>

</body>
</html>