<footer>
    <div class="wrapper">
        <div class="footer-social">
            <div>

                <?php if ( is_active_sidebar('twitter_feed') ) { ?>
                    <div class="widget widget_categories">
                        <?php dynamic_sidebar('twitter_feed'); ?>
                    </div>
                <?php } ?>

<!--                <img src="--><?php //bloginfo('template_url'); ?><!--/img/placeholder/twitter.png" alt="">-->
            </div>
            <div>
                <h4><?php the_field('footer_newsletter_titre', 'option'); ?></h4>
                <p><?php the_field('fotter_newsletter_description', 'option'); ?></p>
                <form action="" method="get" name="newsletter" class="newsletter">
                    <div>
                        <input type="email" id="email" name="email" placeholder="Adresse courriel" required>
                        <button type="submit" class="button-newsletter"><span class="icon-send"></span></button>
                    </div>
                </form>
                <div class="footer-social-networks">

                    <?php wp_nav_menu(array(
                            'theme_location' => "menu_footer")
                    ); ?>

                </div>
            </div>
        </div>
        <div class="footer-badges">
            <a href="<?php the_field('footer_apple', 'option'); ?>"><img
                        src="<?php bloginfo('template_url'); ?>/img/badges/app-store-badge.svg" alt="App Store"
                        class="badge"></a>
            <a href="<?php the_field('footer_google', 'option'); ?>"><img
                        src="<?php bloginfo('template_url'); ?>/img/badges/google-play-badge.svg" alt="Google Play"
                        class="badge"></a>
        </div>
        <div class="footer-copyrights">
            <div><p><?php the_field('footer_description', 'option'); ?></p>
                <p><span><?php the_field('footer_technique', 'option'); ?></span> -
                    <span><?php the_field('footer_description', 'option'); ?></span></p></div>
            <div><p><?php the_field('footer_copyrights01', 'option'); ?></p>
                <p><?php the_field('footer_copyrights02', 'option'); ?></p></div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>