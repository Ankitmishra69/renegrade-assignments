<?php
/**
 * The template for displaying the front-page
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package renegrade
 */

get_header();
$stylesheet_uri = get_stylesheet_directory_uri();
?>


<div id="page" class="site">
    <div id="primary" class="site-main">
        <!--    hero section starts-->
        <div class="hero">
            <div class="hero__wrapper">
                <div class="hero__content">
                    <h2 class="hero__title">Launch your own insurance franchise with a framework for success.</h2>
                    <p class="hero__desc">Step Into a Highly Profitable, Low Investment Opportunity.</p>
                </div>
                <div class="hero__img">
                    <img src="<?php echo get_stylesheet_directory_uri() . "/assets/img/hero-banner.jpg" ?>" alt="Hero Section Image">
                </div>
            </div>
        </div>
        <!--    hero section ends-->
        <!--    about section starts-->
        <div class="about">
            <div class="container">
                <div class="about__wrapper ">
                    <div class="about__left">
                        <p>Renegade Insurance has developed <strong>a brand that fills the rapidly increasing demand for
                                insurance services</strong> that work seamlessly in different demographic markets.</p>
                    </div>
                    <div class="about__right">
                        <p>
                            With a perfected business model that brings polished technology along with brokerage prowess
                            that includes 90+ leading carriers, we can provide you with an array of full-scale options
                            for your clients to choose what works best for them. Now, our growing market requires new
                            offices and insurance professionals to reach even more regions across the country.
                        </p>
                        <a class="readmore" href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <!--        about section ends-->
        <!--        cta section starts-->
        <div class="cta">
            <div class="container">
                <div class="cta__wrapper ">
                    <div class="cta__content">
                        <h2>Work for yourself, not for someone else.</h2>
                        <p>This is your opportunity to join a community of top performing agents. Break free. <a
                                href="#">Become a Renegade.</a></p>

                    </div>
                    <div class="cta-button">
                        <a href="#" class="btn btn-secondary">Be a Renegade</a>
                    </div>
                </div>
            </div>
        </div>
        <!--        cta section starts-->
        <!--        testimonials sectin starts-->
        <div class="testimonial">
            <div class="testimonial__wrapper owl-carousel">
                <div class="testimonial-item">
                    <div class="testimonial__content">
                        <h3 class="testimonial-title">Feel the love - Customer Success Stories</h3>
                        <p>“Great experience working with Cindy on my business policy! She knew exactly what type of coverages I needed. She was thorough and knowledgeable! Even my staff have gone to with their insurance (I own a small salon that my staff are independent contractors) and she’s assisted them all with their own policies. Truly appreciate her!”</p>
                        <p class="testimonial-author">-Lela Smith</p>
                    </div>
                    <div class="testimonial__img">
                        <img src="<?php echo get_stylesheet_directory_uri() . "/assets/img/testimonials.jpg" ?>" alt="Testimonial">
                    </div>
                </div>

                <div class="testimonial-item">
                    <div class="testimonial__content">
                        <h3 class="testimonial-title">Feel the love - Customer Success Stories</h3>
                        <p>“Great experience working with Cindy on my business policy! She knew exactly what type of coverages I needed. She was thorough and knowledgeable! Even my staff have gone to with their insurance (I own a small salon that my staff are independent contractors) and she’s assisted them all with their own policies. Truly appreciate her!”</p>
                        <p class="testimonial-author">-Lela Smith</p>
                    </div>
                    <div class="testimonial__img">
                        <img src="<?php echo get_stylesheet_directory_uri() . "/assets/img/testimonials.jpg" ?>" alt="Testimonial">
                    </div>
                </div>
            </div>
        </div>
        <!--        testimonials sectin starts-->
        <!--        franchise process section starts-->
        <div class="franchise-process">
            <h3 class="section-title">The Franchise Process</h3>
            <div class="franchise-process__wrapper owl-carousel">
                <div class="card">
                    <h2 class="card-number">1</h2>
                    <h5 class="card-title">Introduction</h5>
                    <p class="card-desc">Complete the form below and we will reach out to provide you with more
                        information.</p>
                    <a href="#" class="btn btn-primary">Contact Form</a>
                </div>
                <div class="card">
                    <h2 class="card-number">2</h2>
                    <h5 class="card-title">Kick Off</h5>
                    <p class="card-desc">Complete the form below and we will reach out to provide you with more
                        information.</p>
                    <a href="#" class="btn btn-primary">Contact Form</a>
                </div>
                <div class="card">
                    <h2 class="card-number">3</h2>
                    <h5 class="card-title">Discovery Day</h5>
                    <p class="card-desc">Complete the form below and we will reach out to provide you with more
                        information.</p>
                    <a href="#" class="btn btn-primary">Contact Form</a>
                </div>
                <div class="card">
                    <h2 class="card-number">4</h2>
                    <h5 class="card-title">Training</h5>
                    <p class="card-desc">Complete the form below and we will reach out to provide you with more
                        information.</p>
                    <a href="#" class="btn btn-primary">Contact Form</a>
                </div>
            </div>
        </div>
        <!--        franchise process section starts-->
        <!--        facts section starts-->
        <div class="facts">
            <h3 class="section-title">Franchise Facts</h3>
            <div class="facts__wrapper">
                <div class="facts__left">
                    <div class="facts-card">
                        <h3 class="facts-title">Forget High Franchise Fees:</h3>
                        <ul class="facts-item__wrapper facts-item--2-col">
                            <li class="facts-item">
                                <span class="facts-item__title">Initial Franchise Fee:</span>
                                <span class="facts-item-cost">$20,000 </span>
                            </li>
                            <li class="facts-item">
                                <span class="facts-item__title">Minimum Estimated Cost:</span>
                                <span class="facts-item-cost">$51,900 including franchise fee</span>
                            </li>
                        </ul>
                    </div>

                    <div class="facts-card">
                        <h3 class="facts-title">What We Look for In Our Franchisees: </h3>
                        <ul class="facts-item__wrapper">
                            <li class="facts-item">Entrepreneurial spirit.</li>
                            <li class="facts-item">Desire for success.</li>
                            <li class="facts-item">Love of helping customers.</li>
                            <li class="facts-item">Success in management, sales, and customer service.</li>
                            <li class="facts-item">The want to put those skills to use in a business of their own,
                                but not on their own.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="facts__right">
                    <div class="facts-card">
                        <h3 class="facts-title">How We Support Our Franchisees</h3>
                        <ul class="facts-item__wrapper">
                            <li class="facts-item"><span class="facts-item__title">Outstanding Training: </span>Our
                                2-Week Training.
                            </li>
                            <li class="facts-item"><span class="facts-item__title">Program Dives</span> Into The
                                Details Of Renegade Insurance That Made Us
                                Successful.
                            </li>
                            <li class="facts-item"><span class="facts-item__title">Refresher Courses</span> Are
                                offers As Needed.
                            </li>
                            <li class="facts-item"><span class="facts-item__title">Operational Support:</span> We
                                are available 24/7 for questions,
                                concerns and troubleshooting, from administrative to software support and everything
                                in between.
                            </li>
                            <li class="facts-item"><span class="facts-item__title">Marketing Support:</span> Benefit
                                from our corporate website, strong
                                social media presence, and other marketing materials.
                            </li>
                            <li class="facts-item"><span class="facts-item__title">Research and Development:</span>
                                Renegade Insurance management and
                                leadership staff will continue to research methods and techniques to enhance
                                unit-level profitability for each franchise.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--        facts section ends-->
        <!--        seperator section starts-->
        <div class="seperator">
            <div class="container">
                <div class="seperator__wrapper">
                    <h2>We Are Looking Forward To Getting To Know You!</h2>

                    <p>Start Revolutionizing The World Of Insurance Services By Filling Out Our Contact Form Below. <a
                            href="#">Get Started.</a></p>
                </div>
            </div>
        </div>
        <!--        seperator section ends-->
        <!--        contact section starts-->
        <div class="contact">
            <div class="contact__wrapper">
                <div class="contact__left">
                    <form action="/submit" class="contact__form">
                        <h3 class="section-title">Contact Form</h3>
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
                    <p class="contact__desc">This is not a franchise offering. A Franchise offering can be made by
                        us only in a state if we are first registered, excluded, exempt, or otherwise qualified to
                        offer franchises in that state, and only if we provide you with an appropriate franchise
                        disclosure document. </p>
                </div>
                <div class="contact__right">
                    <img src="src/img/contact.jpg" alt="Contact Image">
                </div>
            </div>
        </div>
        <!--        contact section ends-->
    </div>
</div>
