<?php
$section_title = get_sub_field('section_title');
?>
<!--        franchise process section starts-->
<div class="franchise-process">
    <?php if ($section_title): ?>
        <h3 class="section-title"><?php echo wp_kses_post($section_title); ?></h3>
    <?php endif; ?>
    <div class="franchise-process__wrapper owl-carousel">

        <?php
        if (have_rows('franchise_repeater')):
            while (have_rows('franchise_repeater')) : the_row();
                $title = get_sub_field('title');
                $count = get_sub_field('count');
                $desc = get_sub_field('desc');
                $button = get_sub_field('button');

                ?>
                <div class="card">
                    <?php if ($count): ?>
                        <h2 class="card-number"><?php echo wp_kses_post($count); ?></h2>
                    <?php endif; ?>
                    <?php if ($title): ?>
                        <h5 class="card-title"><?php echo wp_kses_post($title); ?></h5>
                    <?php endif; ?>
                    <?php if ($desc): ?>
                        <p class="card-desc"><?php echo wp_kses_post($desc); ?></p>
                    <?php endif; ?>
                    <?php if ($button):
                        $link_url = $button['url'];
                        $link_title = $button['title'];
                        $link_target = $button['target'] ?? '_self';
                        $rel = ($link_target === '_blank') ? 'rel="noopener noreferrer"' : '';
                        ?>
                        <a class="btn btn-primary" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"
                            <?php echo $rel; ?>>
                            <?php echo esc_html($link_title); ?>
                        </a>
                    <?php endif; ?>
                </div>
            <?php
            endwhile;
        else: ?>
            <p>No repeater process cards available</p>
        <?php endif; ?>
    </div>
</div>
<!--        franchise process section starts-->