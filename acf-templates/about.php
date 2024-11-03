<?php
$about_left = get_sub_field('about_left');
$about_right = get_sub_field('about_right');
$link = get_sub_field('readmore');
?>

<!-- About section starts -->
<div class="about">
    <div class="container">
        <div class="about__wrapper">
            <?php if ($about_left): ?>
                <div class="about__left">
                    <p><?php echo wp_kses_post($about_left); ?></p>
                </div>
            <?php endif; ?>

            <?php if ($about_right): ?>
                <div class="about__right">
                    <p><?php echo wp_kses_post($about_right); ?></p>
                    <?php if ($link):
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ?? '_self';
                        $rel = ($link_target === '_blank') ? 'rel="noopener noreferrer"' : '';
                        ?>
                        <a class="readmore" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"
                            <?php echo $rel; ?>>
                            <?php echo esc_html($link_title); ?>
                        </a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<!-- About section ends -->
