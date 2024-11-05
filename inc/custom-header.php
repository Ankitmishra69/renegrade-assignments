<?php
function renegrade_header() {
    $phone = get_theme_mod('renegrade_button_phone', '+1 707-233-933');
    $button_text = get_theme_mod('renegrade_button_text', 'Book a consultation');
    $description = get_bloginfo('description', 'display');
    ?>

    <header id="masthead" class="site-header">
        <div class="container">
            <!-- Top Header Section (Branding & Button) -->
            <div class="header_wrap">

                <!-- Site Branding -->
                <div class="site-branding">
                    <?php
                    the_custom_logo();
                    if (is_front_page() && is_home()) :
                        ?>
                        <h1 class="site-title">
                            <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
                        </h1>
                    <?php else : ?>
                        <p class="site-title">
                            <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
                        </p>
                    <?php endif; ?>

                    <?php if ($description || is_customize_preview()) : ?>
                        <p class="site-description"><?php echo esc_html($description); ?></p>
                    <?php endif; ?>
                </div>

                <!-- Desktop Navigation and Button -->
                <div class="nav__wrapper">
                    <nav id="site-navigation" class="main-navigation desktop-navigation">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'primary',
                            'menu_id'        => 'primary-menu',
                            'fallback_cb'    => function() {
                                echo '<p>No menu assigned to Primary Menu location.</p>';
                            },
                        ));
                        ?>
                    </nav>

                    <!-- Book Button -->
                    <div class="book-btn">
                        <a href="#" class="btn btn-book">
                            <span class="btn-book__content">
                                <span class="btn-book-text"><?php echo esc_html($button_text); ?></span>
                                <span class="phone"><?php echo esc_html($phone); ?></span>
                            </span>
                        </a>
                    </div>
                </div>

                <!-- Mobile Navigation Toggle -->
                <button class="toggle-btn" aria-controls="primary-menu" aria-expanded="false">
                    <span class="hamburger"></span>
                    <span class="hamburger"></span>
                    <span class="hamburger"></span>
                </button>
            </div>

            <!-- Mobile Navigation Menu -->
            <div class="nav__wrapper mobile-nav" id="mobileNav">
                <button class="btn-close" aria-controls="primary-menu" aria-expanded="false">
                    <span class="hamburger"></span>
                    <span class="hamburger"></span>
                </button>
                <nav id="mobile-navigation" class="main-navigation">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_id'        => 'mobile-primary-menu',
                    ));
                    ?>
                </nav>

            </div>
        </div>
    </header>


    <?php
}
add_action('renegrade_header_before_content', 'renegrade_header', 10);
