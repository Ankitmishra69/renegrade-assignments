<?php
$title = get_sub_field('title');
$desc = get_sub_field('desc');
$link = get_sub_field('link');
?>
<!--        seperator section starts-->
<div class="seperator">
    <div class="container">
        <div class="seperator__wrapper">
            <h2><?php echo wp_kses_post($title); ?></h2>

            <p><?php echo wp_kses_post($desc); ?>
                <?php if ($link):
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ?? '_self';
                    $rel = ($link_target === '_blank') ? 'rel="noopener noreferrer"' : '';
                    ?>
                    <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"
                        <?php echo $rel; ?>>
                        <?php echo esc_html($link_title); ?>
                    </a>
                <?php endif; ?>
            </p>
        </div>
    </div>
</div>
<!--        seperator section ends