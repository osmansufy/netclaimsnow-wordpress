<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'net_page_options' );
function net_page_options() {
    Container::make( 'post_meta', __( 'Custom Data' ) )
    ->where( 'post_type', '=', 'page' )
        ->add_fields( array(
            Field::make( 'text', 'crb_page_banner_info', 'Banner Information' ),
            Field::make( 'file', 'page_bg_video', __( ' Page Background Video' ) )
	->set_type( array( 'video' ) )
	->set_value_type( 'url' )
        ) );
}
