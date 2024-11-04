<?php
$section_title = get_sub_field('section_title');

?>
<!--        facts section starts-->
<div class="facts">
    <h3 class="section-title"><?php echo wp_kses_post($section_title); ?></h3>
    <div class="facts__wrapper">
        <?php
        if (have_rows('facts_repeater')):
            while (have_rows('facts_repeater')) : the_row();
                $list_heading = get_sub_field('list_heading');
                ?>
                <div class="facts-card">
                    <h3 class="facts-title"><?php echo wp_kses_post($list_heading); ?></h3>
                    <ul class="facts-item__wrapper">


                        <?php
                        if (have_rows('list_repeater')):
                            while (have_rows('list_repeater')) : the_row();
                                $title = get_sub_field('title');
                                $list_content = get_sub_field('list_content');
                                ?>
                                <li class="facts-item">
                                    <span class="facts-item__title"><?php echo wp_kses_post($title); ?></span>
                                    <span class="facts-item-cost"><?php echo wp_kses_post($list_content); ?></span>
                                </li>
                            <?php
                            endwhile;
                        else: ?>
                            <p>No lists</p>
                        <?php endif; ?>

                    </ul>
                </div>
            <?php
            endwhile;
        else: ?>
            <p>No facts repeater</p>
        <?php endif; ?>
    </div>
</div>
<!--        facts section ends-->