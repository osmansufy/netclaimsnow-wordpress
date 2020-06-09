

<?php
/**
 * 
 * Template Name:Blog page
 * 
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package NetClaims
 */

get_header( 'single' );
?>
<div class="blog-banner-section w-background"> 
       <video  autoplay=""
       loop="" muted="">
           <source src="<?php echo esc_url (carbon_get_the_post_meta( 'page_bg_video' )) ?>" type="video/mp4">
       </video>
    
        <div
       class="blog-banner-content-wrapper"
    >
       <h1><?php the_title() ?></h1>
    
       </div>
      
   </div>

   <div class="about-section container-fluid">
       
   
    <?php
        
        $query = new WP_Query( array( 'category_name' => 'blog' ) );
        if ($query->have_posts() ) {?>
         <div class="row about-us ">
        <?php
        while ( $query ->have_posts() ) {
            $query ->the_post(); 
            
        
            ?>  
            <div class="col-lg-4 col-md-6  col-sm-6 service-item"> 
             <a href="" class="w-inline-block">
            <div class="about-block blog">
                <div class="blog-block-wrapper">
                <?php
                        
                        if(has_post_thumbnail(  )){
                        ?>
                    <a href="<?php the_permalink(  ) ?>" class="blog-block w-inline-block">
                        <div class="overlay">
                            <div class="inner-ovver"></div>
                            <div class="inner-ovver"></div>
                            <div class="inner-ovver"></div>
                        </div>
                       
                        <img
                            src="<?php the_post_thumbnail_url(  ) ?>"
                            alt="Benefits of Third-Party Billing for Restoration Companies"
                           
                            
                            
                            class="image"
                        />
                        
                    </a>
                    <?php }?>
                    <div class="content-wrapper">
                        <h3 class="blog-title ed-page"><?php the_title() ?></h3>
                        <h5 class="heading-8 w-dyn-bind-empty"></h5>
                        <div class="post-excerpt">
                        <?php the_excerpt();
                        
                        
                        ?>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
            
        </a>
    </div>
        <?php }
            ?> 
  
   
</div>
<?php
        };
        wp_reset_query();
?>
</div>
<?php
get_footer();