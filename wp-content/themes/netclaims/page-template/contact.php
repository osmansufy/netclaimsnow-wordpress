

<?php
/**
 * 
 * Template Name:Contact page
 * 
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package NetClaims
 */

get_header( 'single' );
?>
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
<?php
get_footer();