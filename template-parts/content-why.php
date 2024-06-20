<section class="ya-why">
  <div class="container">
    <div class="main-title">
      <h2><?php the_field('why_title','option');?></h2>
    </div>
    <div class="ya-why__grid">
      <?php if( have_rows('why_steps','option') ): while ( have_rows('why_steps','option') ) : the_row(); ?> 
        <div class="ya-why__card">
          <div class="ya-why__index">
            <?php echo get_row_index(); ?>
          </div>
          <h4><?php the_sub_field('title');?></h4>
          <p><?php the_sub_field('info');?></p>
        </div>
      <?php endwhile; endif; ?>
    </div>
  </div>
</section>