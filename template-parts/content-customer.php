<section class="ya-customer">
  <div class="container">
    <div class="ya-customer__content">
      <?php if( have_rows('customer_service', 'option') ): while ( have_rows('customer_service', 'option') ) : the_row(); ?>
        <div class="ya-customer__row">
          <div class="ya-customer__info">
            <?php the_sub_field('info');?>
          </div>
          <div class="ya-customer__img">
            <?php $image = get_sub_field('image'); if( $image ) { echo wp_get_attachment_image( $image, 'full','',array('class'=>'') ); }?>
          </div>
        </div>
      <?php endwhile; endif; ?>
    </div>
  </div>
</section>