<?php
$title             = get_sub_field( 'title' );
$short_description = get_sub_field( 'desc' );
$background_image  = get_sub_field( 'hero_img' );
?>

<!--    hero section starts-->
<div class="hero">
    <div class="hero__wrapper">
        <div class="hero__content">
            <h2 class="hero__title"><?php echo esc_html($title); ?></h2>
            <p class="hero__desc"><?php echo esc_html($short_description); ?></p>
        </div>
        <div class="hero__img">
            <?php if ( ! empty( $background_image ) ): ?>
                <img src="<?php echo esc_url( $background_image['url'] ); ?>" alt="<?php echo esc_attr( $background_image['alt'] ); ?>" loading="lazy"/>
            <?php endif; ?>
        </div>
    </div>
</div>
<!--    hero section ends-->