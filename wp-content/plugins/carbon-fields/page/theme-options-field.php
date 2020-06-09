<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;
add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
// Default options page
$basic_options_container = Container::make( 'theme_options', __( 'Basic Options' ) )
    ->add_fields( array(
        Field::make( 'header_scripts', 'crb_header_script', __( 'Header Script' ) ),
        Field::make( 'footer_scripts', 'crb_footer_script', __( 'Footer Script' ) ),
    ) );

// Add second options page under 'Basic Options'
Container::make( 'theme_options', __( 'Maps' ) )
    ->set_page_parent( $basic_options_container ) // reference to a top level container
    ->add_fields( array(
        Field::make( 'textarea', 'net_map_link', __( 'Map embeded src' ) ),
     
    ) );
Container::make( 'theme_options', __( 'Footer' ) )
    ->set_page_parent( $basic_options_container ) // reference to a top level container
    ->add_fields( array(
        Field::make( 'text', 'letclaisnoe_copyright', __( 'Copy Right' ) ),
        Field::make( 'complex', 'net_testimonials', __( 'Reviews' ) )
			->add_fields( array(
                Field::make( 'text', 'net_customer_name', __( 'Customer Name' ) ),

				Field::make( 'textarea', 'net_customer_reiews', __( 'Customer Comment' ) ),
				

			) )
      
    ) );

// Add third options page under "Appearance"
Container::make( 'theme_options', __( 'Custom ' ) )
    ->set_page_parent( 'themes.php' ) // identificator of the "Appearance" admin section
    ->add_fields( array(
        Field::make( 'color', 'crb_background_color', __( 'Background Color' ) ),
        Field::make( 'image', 'crb_background_image', __( 'Background Image' ) ),
    ) );
    }