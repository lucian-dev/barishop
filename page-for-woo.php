<?php /*Template Name: Woo page*/ ?>
<?php get_header(); ?>

<section class="ya-woo-page">
  <div class="container">
    <?php if(have_posts()) : while(have_posts()) : the_post() ;?>
      <div class="woo-the_content">
        <?php the_content(); ?>
      </div>
    <?php endwhile; endif; ?>
  </div>
</section>

<?php get_footer(); ?> 