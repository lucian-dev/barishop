<section class="ya-newsletter">
  <div class="ya-newsletter__wrapper">
    <div class="container">
      <div class="ya-newsletter__title">
        <h2><?php echo get_field('newsletter_title','option')['title'];?></h2>
        <p><?php echo get_field('newsletter_title','option')['sub_title'];?></p>
      </div>
      <div class="ya-newsletter__form">
        <?php echo do_shortcode(get_field('newsletter_form','option')) ?>
      </div>
    </div>
  </div>
</section>

</main><!--END WRAPPER-->

<footer class="ya-footer">
  <div class="container">
    <div class="ya-footer__content">
      <div class="ya-footer__left">
        <div class="ya-footer__logo">
          <?php
            if( has_custom_logo() ){
                the_custom_logo();
            }else{
                ?>
                <a href="<?php echo site_url(); ?>"><?php bloginfo( 'name' ); ?></a>
                <?php
            }
          ?>
        </div>
        <div class="ya-footer__social">
          <?php
            if ( get_theme_mod( 'ya_facebook_handle') ) {
                ?><a href="<?php echo get_theme_mod('ya_facebook_handle');?>" target="_blank"><svg><use xlink:href="#fb-icon"></use></svg></a><?php
            }
            if ( get_theme_mod( 'ya_instagram_handle') ) {
                ?><a href="<?php echo get_theme_mod('ya_instagram_handle');?>" target="_blank"><svg><use xlink:href="#insta-icon"></use></svg></a><?php
            }
          ?>
        </div>
      </div>
      <div class="ya-footer__middle">
        <h3><?php esc_html_e( 'Utile', 'yabu' );?></h3>
        <?php
          wp_nav_menu( array(
              'theme_location' => 'main-footer',
              'link_before'    => '<span>',
              'link_after' => '</span>',
              'container'=> false,
          ) );
        ?>
      </div>
      <div class="ya-footer__right">
        <h3><?php esc_html_e( 'Companie', 'yabu' );?></h3>
        <p><?php the_field('company_name','option');?></p>
        <address><?php echo get_theme_mod('ya_address_handle');?></address>
        <p><?php esc_html_e( 'Tel: ', 'yabu' );?><a href="tel:<?php echo get_theme_mod('ya_phone_number');?>"><?php echo get_theme_mod('ya_phone_number');?></a></p>
        <p><?php esc_html_e( 'Email: ', 'yabu' );?><a href="mailto:<?php echo get_theme_mod('ya_email');?>"><?php echo get_theme_mod('ya_email');?></a></p>
      </div>
    </div>
    <div class="ya-footer__bottom">

    </div>
    <div class="ya-footer__copy">
      <?php echo date('Y') ?>
      <?php esc_html_e('&copy; Barishop. All Rights Reserved.','yabu');?>
    </div>
  </div>
</footer>

<!-- SVG -->
<?php get_template_part('svg');?>
<?php get_template_part('template-parts/content', 'search'); ?>
<?php wp_footer(); ?>
</body>
</html>