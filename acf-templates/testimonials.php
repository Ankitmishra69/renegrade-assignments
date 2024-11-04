<!-- Testimonials section starts -->
<div class="testimonial">
    <div class="testimonial__wrapper owl-carousel">
        <?php
        if (have_rows('testimonials_slider')):
            while (have_rows('testimonials_slider')) : the_row();
                $title = get_sub_field('title');
                $desc = get_sub_field('desc');
                $author = get_sub_field('author');
                $image = get_sub_field('image');

                ?>
                <div class="testimonial-item">
                    <div class="testimonial__content">
                        <?php if ($title): ?>
                            <h3 class="testimonial-title"><?php echo wp_kses_post($title); ?></h3>
                        <?php endif; ?>
                        <?php if ($desc): ?>
                            <p><?php echo wp_kses_post($desc); ?></p>
                        <?php endif; ?>
                        <?php if ($author): ?>
                            <p class="testimonial-author"><?php echo wp_kses_post($author); ?></p>
                        <?php endif; ?>
                    </div>
                    <?php if (!empty($image)): ?>
                        <div class="testimonial__img">
                            <img src="<?php echo esc_url($image['url']); ?>"
                                 alt="<?php echo esc_attr($image['alt']); ?>" loading="lazy"/>
                        </div>
                    <?php endif; ?>
                </div>
            <?php
            endwhile;
        else: ?>
            <p>No testimonials available</p>
        <?php endif; ?>
    </div>
</div>
<!-- Testimonials section ends -->
