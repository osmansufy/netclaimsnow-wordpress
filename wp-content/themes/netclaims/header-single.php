<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package NetClaims
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<body >



 
    <div class="menubar-section-blog" id="menubar-section" >
        <div class="fixed-navbar-container">
               <nav class="navbar navbar-expand-lg navbar-light bg-light w-100 ">
               
               <a class="brand  navbar-brand w-nav-brand w--current" href="<?php bloginfo('url')?>">
   
              <?php echo get_custom_logo() ?></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"  data-target="#navbarText" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse w-nav-menu" id="navbarText">
                  <!-- <ul class="navbar-nav w-100 ml-auto nav-width">
                    <li class="nav-item active">
                      <a class="nav-link w-nav-link" href="index.html#About-Us">About us</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link w-nav-link" href="index.html#Team">Our team</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link w-nav-link" href="blog.html">Bolg</a>
                    </li>
                    
                    

                  </ul> -->
<?php 

wp_nav_menu( array(
  'theme_location'  => 'primary',
  'menu'=>'Fixed-nav',
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
    </div>