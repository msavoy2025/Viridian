<footer>
    <div class="container-sm">
        <img class="footer_logo" src="<?php echo get_theme_file_uri('/dist/images/logo_green.svg'); ?>">
        <div class="footer_flex">
            <div class="footer_left">
                <div class="dinger-bold">company contact</div>
                <?php echo wpautop(carbon_get_theme_option('footer_company_contact')); ?>
            </div>
            <div class="footer_mid">
                <div class="dinger-bold">more links</div>
                <?php
                    wp_nav_menu( array(
                    'theme_location' => 'footer-menu',
                    'container_class' => 'footer-nav' ) );
                ?>
            </div>
            <div class="footer_right">
                <div class="dinger-bold">Let's Work Together</div>
                <p><?php echo carbon_get_theme_option('footer_para'); ?></p>
                <?php
                $btn_label = carbon_get_theme_option('footer_btn_txt');
                $btn_url   = carbon_get_theme_option('footer_btn_link');

                if ( ! empty( $btn_label ) && ! empty( $btn_url ) ) : ?>
                    <a href="<?php echo esc_url( $btn_url ); ?>"><button class="btn footer_btn"><?php echo esc_html( $btn_label ); ?> <img src="<?php echo get_theme_file_uri('/dist/images/arrow_green_sm.svg'); ?>"></button></a>
                <?php endif ?>
            </div>
            <div class="footer_absolute"><img src="<?php echo get_theme_file_uri('/dist/images/footer_arrows.gif'); ?>"></div>
        </div>
    </div>
</footer>

<?php wp_footer();?>
</body>
</html>
