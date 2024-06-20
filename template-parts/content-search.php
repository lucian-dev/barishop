<div class="search-modal">
  <button class="search-modal__close"><svg><use xlink:href="#close-icon"></use></svg></button>
  <div class="search-modal__container container" itemscope itemtype="https://schema.org/WebSite">
    <meta itemprop="url" content="https://barishop.ro/"/>
     <form itemprop="potentialAction" itemscope itemtype="https://schema.org/SearchAction" role="search" method="get" class="woocommerce-product-search" action="<?php echo esc_url( home_url( "/"  ) ); ?>">
        <input itemprop="query-input" type="search" class="search-field" placeholder="Cauta produs" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Cauta produs:', 'label', 'woocommerce' ); ?>" />
        <button type="submit" value="Search">Cauta</button>
        <input type="hidden" name="post_type" value="product" />
    </form> 
  </div>
</div>