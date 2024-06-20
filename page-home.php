<?php /*Template Name: Home*/ ?>
<?php get_header(); ?>

<section class="hero-home">
  <div class="swiper hero-home__slider">
    <div class="swiper-wrapper">
      <?php if( have_rows('hero_slider') ): while ( have_rows('hero_slider') ) : the_row(); ?>
        <div class="swiper-slide">
          <?php $image = get_sub_field('image'); if( $image ) { echo wp_get_attachment_image( $image, 'full','',array('class'=>'img-abs') ); }?>
        </div>
      <?php endwhile; endif; ?>
    </div>
  </div>
</section>

<section class="ya-title">
  <div class="container">
    <h2><?php echo get_field('big_title_home')['title'];?></h2>
    <p><?php echo get_field('big_title_home')['sub_title'];?></p>
  </div>
</section>

<section class="ya-about-home">
  <div class="container">
    <div class="ya-about-home__content">
      <div class="ya-about-home__img">
        <?php $image = get_field('about_image'); if( $image ) { echo wp_get_attachment_image( $image, 'full','',array('class'=>'img-abs') ); }?>
      </div>
      <div class="ya-about-home__info">
        <?php the_field('about_info');?>
        <a href="<?php echo get_field('about_cta');?>" class="ya-btn"><?php esc_html_e('Despre noi','yabu');?></a>
      </div>
    </div>
  </div>
</section>

<section class="ya-last woocommerce">
  <div class="container">
    <div class="main-title">
      <h2><?php the_field('last_products_title','option');?></h2>
    </div>
    <ul class="products">
      <?php 
        $args = array(
          'post_type'   => 'product',
          'stock'       => 1,
          'posts_per_page'  => 3,
          'orderby'     => 'date',
          'order'       => 'DESC',
          'tax_query'   => array(
            array(
              'taxonomy'  => 'product_visibility',
              'field'       => 'name',
              'terms'      => 'featured',
              'operator'    => 'IN',
            ),
          ),
        );
        $featured_products = new WP_Query($args);
        if($featured_products->have_posts()) :
          while($featured_products->have_posts()) :
            $featured_products->the_post();
              wc_get_template_part('content', 'product');
          endwhile;
        endif;
        wp_reset_postdata();
      ?>
    </ul>
  </div>
</section>

<section class="ya-cat-cards">
  <div class="container">
    <div class="main-title">
      <h2><?php the_field('products_categories_title','option');?></h2>
    </div>
    <div class="ya-cat-cards__content">
      <?php 
        $prod_categories = get_terms('product_cat', 'hide_empty=1');
        if(!empty($prod_categories) && ! is_wp_error($prod_categories)) : ?>
        <?php
          foreach ($prod_categories as $category) : ?>
            <a href="<?php echo esc_url( get_term_link( $category ) ); ?>" class="ya-cat-cards__card">
              <?php
                $thumbnail_id = get_term_meta( $category->term_id, 'thumbnail_id', true );
                $image = wp_get_attachment_url( $thumbnail_id );
              ?>
              <?php if ( $image ) : ?>
                <div class="ya-cat-cards__img">
                  <img src="<?php echo esc_url( $image ); ?>" alt="" />
                </div>
              <?php endif; ?>
              <?php echo $category->name; ?>
            </a>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
  </div>
</section>

<?php get_template_part('template-parts/content','why');?>

<?php get_template_part('template-parts/content','customer');?>

<?php get_footer(); ?> 