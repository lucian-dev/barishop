<?php get_header(); ?>

<?php if(have_posts()) : while(have_posts()) : the_post() ;?>
  <section class="ya-page-gen">
    <div class="container">
      <div class="ya-content">
        <div class="ya-page-gen__title">
          <h1><?php the_title();?></h1>
        </div>
        <?php the_content();?>
			</div>
    </div>
  </section>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
