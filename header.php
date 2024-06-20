<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="content-type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, minimum-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <title><?php wp_get_document_title();?></title>
	<?php wp_head(); ?>

</head>
<body <?php body_class()?> >

<header class="ya-header">
    <div class="ya-header__top">
        <div class="ya-header__contact">
            <div class="ya-header__social">
                <?php
                    if ( get_theme_mod( 'ya_facebook_handle') ) {
                        ?><a href="<?php echo get_theme_mod('ya_facebook_handle');?>" target="_blank"><svg><use xlink:href="#fb-icon"></use></svg></a><?php
                    }
                    if ( get_theme_mod( 'ya_instagram_handle') ) {
                        ?><a href="<?php echo get_theme_mod('ya_instagram_handle');?>" target="_blank"><svg><use xlink:href="#insta-icon"></use></svg></a><?php
                    }
                ?>
            </div>
        </div>
        <div class="ya-header__top-right">
            <div class="ya-header__account">
                <a href="<?php echo get_permalink(get_option('woocommerce_myaccount_page_id'));?>">
                    <svg><use xlink:href="#account-icon"></use></svg>
                    <span><?php esc_html_e( 'Cont', 'yabu' ); ?></span>
                </a>
            </div>
            <div class="ya-header__cart">
                <button class="ya-header__cart-open">
                    <svg><use xlink:href="#cart-icon"></use></svg>
                    <span class="ya-header__cart-total"><?php echo WC()->cart->get_cart_total(); ?></span>
                </button>
            </div>
            <div class="ya-header__burger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <div class="ya-header__main">
        <div class="ya-header__logo">
            <?php
                if( has_custom_logo() ){
                    the_custom_logo();
                }else{
                    ?>
                    <a href="<?php echo site_url(); ?>"><?php bloginfo( 'name' ); ?></a>
                    <?php
                }
            ?>
        </div>
        <nav class="ya-header__nav">
            <?php
                wp_nav_menu( array(
                    'theme_location' => 'main-header',
                    'link_before'    => '<span>',
                    'link_after' => '</span>',
                    'container'=> false,
                ) );
            ?>
        </nav>
        <div class="ya-header__search">
            <button class="ya-header__search-btn">
                <svg><use xlink:href="#search-icon"></use></svg>
            </button>
        </div>
    </div>
</header>

<!-- Mobile Menu -->
<div class="ya-header__burger-menu">
    <div class="container">
        <?php
            wp_nav_menu( array(
                'theme_location' => 'main-burger',
                'link_before'    => '<span>',
                'link_after' => '</span>',
                'container'=> false,
            ) );
        ?>
    </div>
</div>

<!-- Side Cart -->
<div class="ya-side-cart">
    <div class="ya-side-cart__wrapper">
        <div class="ya-side-cart__cart">
            <div class="ya-side-cart__head">
                <h3><?php esc_html_e('Cosul tau','yabu');?></h3>
                <div class="ya-side-cart__close">
                    <svg><use xlink:href="#close-icon"></use></svg>
                </div>
            </div>
            <div class="woocommerce ya-side-cart__mini">
                <?php  woocommerce_mini_cart(); ?>
            </div>
        </div>
    </div>
</div>

<main id="wrapper">