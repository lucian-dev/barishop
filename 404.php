<?php get_header(); ?>

<section class="empty404">
  <div class="container">
    <h2><?php esc_html_e('Pagina nu a fost găsită','yabu');?></h2>
    <p><?php esc_html_e('Ne pare rău, dar pagina solicitată nu poate fi găsită','yabu');?></p>
    <a href="<?php echo site_url() ?>" class="ya-btn"><?php esc_html_e('Acasa','yabu');?></a>
  </div>
</section>

<?php get_footer(); ?>
