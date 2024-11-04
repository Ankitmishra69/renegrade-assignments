<?php
/**
 * renegrade Theme Customizer
 *
 * @package renegrade
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function renegrade_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'renegrade_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'renegrade_customize_partial_blogdescription',
			)
		);
	}
    // Add a section for the button customization
    $wp_customize->add_section(
        'renegrade_button_section',
        array(
            'title'       => __( 'Header Button', 'renegrade' ),
            'priority'    => 30,
            'description' => __( 'Customize the header button text and phone number', 'renegrade' ),
        )
    );

    // Button text setting
    $wp_customize->add_setting(
        'renegrade_button_text',
        array(
            'default'           => __( 'Book a consultation', 'renegrade' ),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'postMessage', // Enables live preview with selective refresh
        )
    );

    // Button text control
    $wp_customize->add_control(
        'renegrade_button_text_control',
        array(
            'label'    => __( 'Button Text', 'renegrade' ),
            'section'  => 'renegrade_button_section',
            'settings' => 'renegrade_button_text',
            'type'     => 'text',
        )
    );

    // Phone number setting
    $wp_customize->add_setting(
        'renegrade_button_phone',
        array(
            'default'           => __( '+1 707-233-933', 'renegrade' ),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'postMessage', // Enables live preview with selective refresh
        )
    );

    // Phone number control
    $wp_customize->add_control(
        'renegrade_button_phone_control',
        array(
            'label'    => __( 'Phone Number', 'renegrade' ),
            'section'  => 'renegrade_button_section',
            'settings' => 'renegrade_button_phone',
            'type'     => 'text',
        )
    );

    // Enable selective refresh for button text and phone number
    if ( isset( $wp_customize->selective_refresh ) ) {
        $wp_customize->selective_refresh->add_partial(
            'renegrade_button_text',
            array(
                'selector'        => '.btn-book-text', // CSS class in header.php
                'render_callback' => function() {
                    return get_theme_mod( 'renegrade_button_text', 'Book a consultation' );
                },
            )
        );
        $wp_customize->selective_refresh->add_partial(
            'renegrade_button_phone',
            array(
                'selector'        => '.phone', // CSS class in header.php
                'render_callback' => function() {
                    return get_theme_mod( 'renegrade_button_phone', '+1 707-233-933' );
                },
            )
        );
    }
}
add_action( 'customize_register', 'renegrade_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function renegrade_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function renegrade_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function renegrade_customize_preview_js() {
	wp_enqueue_script( 'renegrade-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'renegrade_customize_preview_js' );
