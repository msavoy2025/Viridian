<?php 
/**
 * Advanced Menu
 *
 * @package viridian
 */

if ( empty( $tabs = carbon_get_the_post_meta( 'crb_home_tabs' ) ) ) {
    return;
}
?>

<div class="capabilities">
    <div class="capabilities-names">
        <?php foreach ( $tabs as $index => $tab ) : ?>
            <h2 class="capability-name cmenu-name-<?php echo $index + 1; ?>"><?php echo esc_html( $tab['title'] ); ?></h2>
        <?php endforeach ?>
    </div>

    <div class="capability-inner">
        <?php foreach ( $tabs as $index => $tab ) : ?>
            <div class="capability-copy cmenu-copy-<?php echo $index + 1; ?> <?php echo $index === 0 ? 'show' : ''; ?>">
                <?php if ( ! empty( $tab['text'] ) ) : ?>
                    <h2><?php echo esc_html( $tab['text'] ); ?></h2>
                <?php endif ?>

                <?php if ( ! empty( $tab['btn_label'] ) && ! empty( $tab['btn_url'] ) ) : ?>
                    <a href="<?php echo esc_url( $tab['btn_url'] ); ?>"><button class="btn capabilityBtn"><?php echo esc_html( $tab['btn_label'] ); ?> <img src="<?php echo get_theme_file_uri('/dist/images/list_arrow_cream.svg'); ?>"></button></a>
                <?php endif ?>
            </div>
        <?php endforeach ?>
    </div>
</div>