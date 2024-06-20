<?php get_header(); ?>

<section class="ya-blog">
  <div class="container">
    <div class="main-title">
      <h2><?php esc_html_e('Blog','yabu');?></h2>
    </div>
    <div class="ya-blog__grid">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="ya-blog__card">
          <div class="ya-blog__img">
            <?php the_post_thumbnail( 'full', array('class' => 'img-abs'));?>
          </div>
          <div class="ya-blog__info">
            <h3><?php the_title();?></h3>
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink();?>" class="ya-btn"><?php esc_html_e('Citeste articol','yabu');?></a>
          </div>
        </div>
      <?php endwhile; endif ;?>
    </div>
  </div>
</section>

<?php get_footer(); ?>