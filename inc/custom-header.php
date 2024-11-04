<?php
function renegrade_header()
{
    ?>
    <header id="masthead" class="site-header">
        <div class="container">
            <div class="header_wrap">
                <div class="site-branding">
                    <?php
                    the_custom_logo();
                    if (is_front_page() && is_home()) :
                        ?>
                        <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
                                                  rel="home"><?php bloginfo('name'); ?></a></h1>
                    <?php
                    else :
                        ?>
                        <p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
                                                 rel="home"><?php bloginfo('name'); ?></a></p>
                    <?php
                    endif;
                    $renegrade_description = get_bloginfo('description', 'display');
                    if ($renegrade_description || is_customize_preview()) :
                        ?>
                        <p class="site-description"><?php echo $renegrade_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                            ?></p>
                    <?php endif; ?>
                </div>
                <div class="nav__wrapper">
                    <nav id="site-navigation" class="main-navigation">
                        <!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'digthis'); ?></button> -->
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'primary',
                                'menu_id'        => 'primary-menu',
                                'fallback_cb'    => function() {
                                    echo '<p>No menu assigned to Primary Menu location.</p>';
                                },
                            )
                        );
                        ?>
                    </nav><!-- #site-navigation -->
                    <div class="book-btn">
                        <a href="#" class="btn btn-book">
                        <span class="btn-book__content">
                            <span class="btn-book-text"><?php echo esc_html(get_theme_mod('renegrade_button_text', 'Book a consultation')); ?></span>
                            <span class="phone"><?php echo esc_html(get_theme_mod('renegrade_button_phone', '+1 707-233-933')); ?></span>
                        </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <?php
}