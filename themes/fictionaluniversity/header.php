<!DOCTYPE html>
    <html <?php language_attributes(); ?> >
        <head>
                <meta charset="<?php echo bloginfo('charset'); ?>" />
                <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                <meta
                name="description"
                content="Fiction University is a world class learning center that produce brillant minds that make difference globally."
                />
                <meta
                property="og:title"
                content="Hire great talents | fictionuniversity.com"
                />
                <meta property="og:url" content="https://fictionuniversity.com/" />
                <meta
                property="og:description"
                content="Fiction University is a world class learning center that produce brillant minds that make difference globally."
                />
                <meta property="og:type" content="article" />

                <?php wp_head(); ?>
        </head>
        <body <?php body_class(); ?>>

                <header class="site-header">
                    <div class="container">
                        <h1 class="school-logo-text float-left">
                        <a href="<?php echo esc_url(site_url()) ?>"><strong>Fiction</strong> University</a>
                        </h1>
                        <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
                        <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
                        <div class="site-header__menu group">
                        <nav class="main-navigation">
                            <?php
                                wp_nav_menu([
                                    'theme_location' => 'headermenulocation',
                                    'container'      => null
                                ]) 
                            ?>
                        </nav>
                        <div class="site-header__util">
                            <a href="#" class="btn btn--small btn--orange float-left push-right">Login</a>
                            <a href="#" class="btn btn--small btn--dark-orange float-left">Sign Up</a>
                            <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
                        </div>
                        </div>
                    </div>
                </header>
        