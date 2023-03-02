<?php 
/**
 * Icons
 *
 * @package viridian
 */
$icons = carbon_get_the_post_meta('crb_buyers');
?>

<section class="icons-section">
    <div class="container">
        <div class="icons-container">
            <div class="icons">
                <div class="icons">
                    <?php foreach ( $icons as $icon ) : ?>
                        <div class="icon" >
                            <img src="<?php echo wp_get_attachment_image_url( $icon['buyers_img'], 'full' ); ?>">
                        </div>
                    <?php endforeach ?>            
                </div>
            </div>
            <h2><?php echo carbon_get_the_post_meta('buyers_icon_copy'); ?></h2>
        </div>
    </div>
</section>