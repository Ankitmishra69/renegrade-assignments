<?php
$cta_label = get_sub_field('cta_label');
$cta_desc = get_sub_field('cta_desc');
$cta_button = get_sub_field('cta_button');

$cta_button_url = $cta_button['url'];
$cta_button_title = $cta_button['title'];
$cta_button_target = $cta_button['target'] ?? '_self';
$rel = ($cta_button_target === '_blank') ? 'rel="noopener noreferrer"' : ''
?>


<!--        cta section starts-->
<div class="cta">
    <div class="container">
        <div class="cta__wrapper">
            <div class="cta__content">
                <?php if ($cta_label): ?>
                    <h2><?php echo wp_kses_post($cta_label); ?></h2>
                <?php endif; ?>

                <?php if ($cta_desc): ?>
                    <p><?php echo wp_kses_post($cta_desc); ?>
                        <?php if ($cta_button): ?>
                            <a href="<?php echo esc_url($cta_button_url); ?>" target="<?php echo esc_attr($cta_button_target); ?>"
                                <?php echo $rel; ?>>
                                <?php echo esc_html($cta_button_title); ?>
                            </a>
                        <?php endif; ?>
                    </p>
                <?php endif; ?>
            </div>

            <?php if ($cta_button): ?>
                <div class="cta-button">
                    <a class="btn btn-secondary" href="<?php echo esc_url($cta_button_url); ?>"
                       target="<?php echo esc_attr($cta_button_target); ?>" <?php echo $rel; ?>>
                        <?php echo esc_html($cta_button_title); ?>
                    </a>
                </div>
            <?php endif; ?>

        </div>
    </div>
</div>

<!--        cta section ends-->