<?php
$section_title = get_sub_field('section_title');
$desc = get_sub_field('desc');
$img  = get_sub_field( 'img' );

?>
<!--        contact section starts-->
<div class="contact">
    <div class="contact__wrapper">
        <div class="contact__left">
            <form action="/submit" class="contact__form">
                <h3 class="section-title"><?php echo wp_kses_post($section_title); ?></h3>
                <div class="form-2col">
                    <div class="form-singleField">
                        <label for="firstname">First Name*</label>
                        <input type="text" name="firstname" id="firstname">
                    </div>
                    <div class="form-singleField">
                        <label for="lastname">Last Name*</label>
                        <input type="text" name="lastname" id="lastname">
                    </div>
                </div>
                <div class="form-singleField">
                    <label for="email">Email*</label>
                    <input type="email" name="email" id="email">
                </div>
                <div class="form-singleField">
                    <label for="phone">Phone Number*</label>
                    <input type="tel" name="phone" id="phone">
                </div>
                <div class="form-2col">
                    <div class="form-singleField">
                        <label for="address1">Address Line 1*</label>
                        <input type="text" name="address1" id="address1">
                    </div>
                    <div class="form-singleField">
                        <label for="address2">Address Line 2*</label>
                        <input type="text" name="address2" id="address2">
                    </div>
                </div>
                <div class="form-2col">
                    <div class="form-singleField">
                        <label for="state">State*</label>
                        <input type="text" name="state" id="state">
                    </div>
                    <div class="form-singleField">
                        <label for="zipcode">Zip Code*</label>
                        <input type="number" name="zipcode" id="zipcode">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <p class="contact__desc"><?php echo esc_html($desc); ?></p>
        </div>
        <div class="contact__right">
            <?php if ( ! empty( $img ) ): ?>
                <img src="<?php echo esc_url( $img['url'] ); ?>" alt="<?php echo esc_attr( $img['alt'] ); ?>" loading="lazy"/>
            <?php endif; ?>
        </div>
    </div>
</div>
<!--        contact section ends-->