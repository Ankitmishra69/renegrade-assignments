<?php
$footer_logo = get_sub_field('footer_logo');
$copyright = get_sub_field('copyright');
?>

<footer id="colophon" class="site-footer section-padding">
    <div class="container">
        <?php if ( ! empty( $footer_logo ) ): ?>
            <img src="<?php echo esc_url( $footer_logo['url'] ); ?>" alt="<?php echo esc_attr( $footer_logo['alt'] ); ?>" loading="lazy"/>
        <?php endif; ?>

        <div class="footer__wrapper">
            <?php if (have_rows('footer_repeater')): ?>
                <?php while (have_rows('footer_repeater')) : the_row(); ?>
                    <div class="footer__column">
                        <?php
                        // Retrieve Wysiwyg content from the repeater
                        $product_summary = get_sub_field('column');
                        if ($product_summary) {
                            echo wp_kses_post($product_summary); // Output safely
                        }
                        ?>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <p>No repeater process cards available</p>
            <?php endif; ?>
        </div>

        <?php if ($copyright): ?>
            <div class="copyright">
                <p><?php echo wp_kses_post($copyright); ?></p>
            </div>
        <?php endif; ?>

    </div>
</footer>
