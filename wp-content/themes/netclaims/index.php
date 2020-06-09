<?php
/**
 * The main template file
 * Template Name:Home page
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package NetClaims
 */

get_header();
?>
   <div class="banner-section w-background"> 
       <video  autoplay=""
       loop="" muted="">
           <source src="<?php echo esc_url (carbon_get_the_post_meta( 'bg_video' )) ?>" type="video/mp4">
       </video>
       <div class="banner-nav w-100">
        <nav class="navbar navbar-expand-lg navbar-light bg-light w-100 nav-bg-tr ">
            <a href="index.html" aria-current="page" class="brand  navbar-brand w-nav-brand w--current">
            <?php echo get_custom_logo() ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"  data-target="#navbarText" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse w-nav-menu" id="navbarText">
          
              <?php 

wp_nav_menu( array(
  'theme_location'  => 'primary',
  'menu'=>'Menu 1',
  'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
  'container' => false,
  'menu_class'      => 'navbar-nav w-100 ml-auto nav-width',
  'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
  'walker'          => new WP_Bootstrap_Navwalker(),
) );
?>
   

              <span class="navbar-text ">
                <a href="http://localhost/netclaimsnow/contact-page/" class="nav-link-free-pass w-nav-link"> contact</a>
              </span>
            </div>
          </nav>
    </div>
        <div
       class="banner-content-wrapper"
    >
       
         <?php echo apply_filters( 'the_content', carbon_get_the_post_meta( 'banner-info' ) );
 ?>
        
        <img src="<?php echo esc_url( get_stylesheet_directory_uri() )  ?>/assets/image/brush-stroke.svg" width="200" alt="" class="brush-divider" />
        <div class="banner-buttons-wrapper flex-sm-wrap"><a href="#About-Us" class="banner-colored-button w-button">Learn More</a><a href="tel:4075024886" class="banner-outline-button w-button">Get started!</a></div>
    
       </div>
      
   </div>

   <div class="about-section container-fluid" id="About-Us">
   <?php
   
  ?>     
    <div class="row about-us ">
        
        <?php
        
        $query = new WP_Query( array( 'category_name' => 'services' ) );
        if ($query->have_posts() ) {
        while ( $query ->have_posts() ) {
            $query ->the_post(); 
            
        
            ?>
        

        
        
        <div class="col-lg-4 service-item col-md-4 col-sm-12"> 
        <a href="" class="w-inline-block">
            <div class="about-block">
                <div class="icon-xl">
                    <div class="icon-xl-block"><img src="<?php echo esc_url( get_stylesheet_directory_uri() )  ?>/assets/image/service-img-1.svg" height="75" alt="" class="image-4" /></div>
                </div>
                <h3 class="service-heading">
                    <?php the_title() ?>
                </h3>
                <?php the_content() ?>
            </div>
        </a>
        
        </div>

    
        <?php } 
        
        }
        
        wp_reset_query();?>

        
        
    </div>
    
    <div id="About-Us" class="about-wrapper">
        <h2>about us</h2>
        <img src="<?php echo esc_url( get_stylesheet_directory_uri() )  ?>/assets/image/brush-stroke.svg" width="200" alt="" class="brush-divider" />
        <p class="paragraph-xl"><?php echo carbon_get_the_post_meta( 'about_sub' ) ?></p>
        <div class="col-lg-12">
            <div class="row">
<div class="about-content col-lg-6 ">
<?php echo apply_filters( 'the_content', carbon_get_the_post_meta( 'about_content' ) );
 ?>
    <a href="<?php echo carbon_get_the_post_meta( 'button_link' ) ?>" class="colored-button about-us-button w-button"><?php echo carbon_get_the_post_meta( 'button_text' ) ?></a>

</div>
<div class="col-lg-6">
    <div class="about-imge">

    
    <iframe class="responsive-iframe"src="https://www.youtube.com/embed/1q6YT_EPTHE">
    </iframe>
</div>
</div>
</div>
         
           
        </div>
    </div>
   </div>
   <div class="team-section container-fluid" id="Team">
    <h2>our team</h2>
    <img src="<?php echo esc_url( get_stylesheet_directory_uri() )  ?>/assets/image/brush-stroke.svg" width="200" alt="" class="brush-divider" />
    <p class="paragraph-xl">See what 300 years of combined restoration experience can do for you</p>

   
    <?php
    

    $members=carbon_get_the_post_meta( 'teams' );
    var_dump($members);
    $count=0;

        foreach($members as $member){
          var_dump($member);
            ?>
        <div class="team-member <?php if ($count==1) {
           ?>reverse<?php
        } ?>">
            <div class="col-md-7">
                    <div class="member-info">
                        <h5><?php echo $member ['member_name'] ?></h5>
                        <h3><?php echo $member ['member_designation'] ?></h3>
                        <p class="team-column-pragraph">
                        <?php echo $member ['member_bio'] ?>
                        </p>
                    </div>
            </div>

            <div class="col-md-5">
                <div class="member-image">
                    <img src="<?php echo $member ['mb_image'] ?>" alt="">
                </div>
            </div>


        </div>
            <?php
    
    $count++;

     }
    
    
    ?>
        
     </div>
    

   
   <div id="Clients" class="clients-section cta-section">
    <div class="w-container">
        <h2 class="heading-9">Reduce Your Admin Labor Costs</h2>
        <div class="text-block-7">Expedite your AR cycle and increase your profit margins by 30% per claim.</div>
        <a href="#" class="colored-button ctabutton w-button">sign up now!</a>
    </div>
</div>
<div class="blog container-fluid">
    <h2>Archive</h2>
    <img src="<?php echo esc_url( get_stylesheet_directory_uri() )  ?>/assets/image/brush-stroke.svg" width="200" alt="" class="brush-divider" />
    <p class="paragraph-xl">See what 300 years of combined restoration experience can do for you</p> 
    <div class="col-lg-12">
        <div class="row blog-post-list">
         <?php
        
        $query = new WP_Query( array( 'category_name' => 'blog' ) );
        if ($query->have_posts() ) {
        while ( $query ->have_posts() ) {
            $query ->the_post(); 
            
        
            ?>      
          <div class="blog-post col-lg-4 col-md-6 ">
                <a  href="<?php the_permalink(); ?>" class="post-link">
                        <div class="post-content-wrapper">
                                    <h3 class="post-title"><?php the_title() ?></h3>
                                    <div class="vertical-line-2"></div>
                                    <div class="vertical-line-2"></div>
                                    <div class="vertical-line-2"></div>
                        </div>
                <?php if ( has_post_thumbnail() ) : ?>
        
        
                <img src="<?php the_post_thumbnail_url(); ?>" class="post-image" alt="">
        
                    <?php endif; ?>

                </a>
          </div>
        <?php
        
        }
    
        wp_reset_query();
    }?>

<a href="#" class="colored-button ctabutton w-button">Read More Articles</a>
</div>
</div>
</div>
<div id="Contact" class="contact-section">
    <h2>our team</h2>
    <img src="<?php echo esc_url( get_stylesheet_directory_uri() )  ?>/assets/image/brush-stroke.svg" width="200" alt="" class="brush-divider" />
    <p class="paragraph-xl">See what 300 years of combined restoration experience can do for you</p>
    <div class="contact-container">
        <div class="contact-img col-lg-6" >
            <img src="<?php echo esc_url( get_stylesheet_directory_uri() )  ?>/assets/image/contact-form.png" alt="">
        </div>
        <div class="contact-form col-lg-6 col-md-12 "
        >
            <?php echo do_shortcode( '[contact-form-7 id="62" title="Contact-form-2"]' ) ?>
              <div id="w-node-49d11db922d1-bb022707" class="contact-info-text-block">
                <div class="contact-info-text-field"><strong class="bold-text">phone: </strong> 407-502-4886</div>
                <div class="contact-info-text-field"><strong class="bold-text">address:</strong>1150 Elboc Way, Winter Garden, FL 34787</div>
                <div class="contact-info-text-field"><strong class="bold-text">email: </strong>learnmore@netclaimsnow.com</div>
            </div>
        </div>
    </div>
</div>
<div id="map" class="map-section">
    <div  style="opacity: 1;" class="icon-xl">
        <div  style="opacity: 1;" class="icon-xl-block">
            <img src="<?php echo esc_url( get_stylesheet_directory_uri() )  ?>/assets/image/map-icon.svg" height="50" alt="" />
        </div>
    </div>
    <div class="map-part">
        <div class="html-embed w-embed w-iframe">
        <?php $maps = carbon_get_theme_option( 'net_map_link' );
        
        echo $maps
        ?>
            <!-- <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3504.6611649015604!2d-81.56547338491929!3d28.549902582450454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88e783aa71c63e7f%3A0x39e83f1eec5c30f1!2s1150%20Elboc%20Way%2C%20Winter%20Garden%2C%20FL%2034787!5e0!3m2!1sen!2sus!4v1567022162886!5m2!1sen!2sus"
                width="100%"
                height="450"
                frameborder="0"
                style="border: 0;"
                allowfullscreen=""
            ></iframe> -->
        </div>
    </div>
</div>

<?php
get_footer();