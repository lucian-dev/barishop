<?php /*Template Name: About*/ ?>
<?php get_header(); ?>

<section class="ya-about">
  <div class="container">
    <div class="main-title">
      <h2><?php echo get_field('about_title')['title'];?></h2>
      <p><?php echo get_field('about_title')['sub_title'];?></p>
    </div>
    <div class="ya-about__content">
      <?php if( have_rows('about_content') ): while ( have_rows('about_content') ) : the_row(); ?> 
        <div class="ya-about__row">
          <div class="ya-about__img">
            <?php $image = get_sub_field('image'); if( $image ) { echo wp_get_attachment_image( $image, 'full','',array('class'=>'img-abs') ); }?>
          </div>
          <div class="ya-about__info">
            <?php the_sub_field('info');?>
          </div>
        </div>
      <?php endwhile; endif; ?>
    </div>
  </div>
</section>

<?php get_template_part('template-parts/content','why');?>

<?php get_template_part('template-parts/content','customer');?>

<?php get_footer(); ?> 