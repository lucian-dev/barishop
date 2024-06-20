<?php get_header(); ?>

<section class="ya-article">
	<div class="container">
		<div class="ya-article__content ya-content">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="ya-article__head">
					<h1><?php the_title();?></h1>
				</div>
        <article id="yabu-post-<?php the_ID(); ?>">
					<?php the_content();?>
				</article>
        <div class="ya-article__share">
          <span><?php esc_html_e('Share:','yabu');?></span>
          <div class="share-button__list">
            <button class="share-button" data-sharer="facebook" data-hashtag="BARISHOP" data-url="<?php echo get_the_permalink()?>"><svg> <use xlink:href="#fb-icon"></use></svg></button>
            <button class="share-button" data-sharer="twitter" data-title="<?php echo get_the_title()?>" data-hashtags="BARISHOP" data-url="<?php echo get_the_permalink()?>"><svg>  <use xlink:href="#twitter-icon"></use> </svg></button>
          </div>
        </div>
      <?php endwhile; endif; ?>
    </div>
	</div>
</section>

<section class="related-articles">
  <div class="container">
    <div class="main-title">
      <h3><?php esc_html_e('Alte articole...','yabu');?></h3>
    </div>
    <?php 
      $args = array(
        'post_type'       => 'post',
        'posts_per_page'  => 1,
        'orderby'         => 'date',
        'order'           => 'DESC',
        'post__not_in'    => array(get_the_ID()),
      );
      $loop = new WP_Query($args);
      if ($loop->have_posts()) : ?>
      <div class="ya-blog__grid">
        <?php while ($loop->have_posts()) : $loop->the_post(); ?>
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
        <?php endwhile; ?>
      </div>
    <?php endif; wp_reset_postdata(); ?>
  </div>
</section>

<?php get_footer(); ?>
