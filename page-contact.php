<?php /*Template Name: Contact*/ ?>
<?php get_header(); ?>

<section class="ya-contact">
  <div class="container">
    <div class="main-title">
      <h2><?php the_field('contact_title');?></h2>
      <p><?php the_field('contact_sub_title');?></p>
    </div>
    <div class="ya-contact__head">
      <div class="ya-contact__head-row">
        <h5><?php esc_html_e('Tel:','yabu');?></h5>
        <a href="tel:<?php echo get_theme_mod('ya_phone_number');?>"><?php echo get_theme_mod('ya_phone_number');?></a>
      </div>
      <div class="ya-contact__head-row">
        <h5><?php esc_html_e('Email:','yabu');?></h5>
        <a href="mailto:<?php echo get_theme_mod('ya_email');?>"><?php echo get_theme_mod('ya_email');?></a>
      </div>
    </div>
    <div class="ya-contact__form">
      <?php echo do_shortcode( get_field('contact_form') ); ?>
    </div>
  </div>
</section>

<?php get_footer(); ?> 