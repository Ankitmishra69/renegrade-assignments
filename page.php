<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package renegrade
 */

get_header();
?>

    <main id="primary" class="site-main">
            <?php
            the_content();

            while ( have_posts() ) :the_post();
                // Check value exists.
                if ( have_rows( 'page_editor' ) ):
                    // Loop through rows.
                    while ( have_rows( 'page_editor' ) ) : the_row();
                        $row_layout = get_row_layout();


                        if ( $row_layout ) {
                            echo get_template_part( 'acf-templates/' . $row_layout );
                        }
                        // End loop.
//					echo $row_layout;
                    endwhile;
                endif;
                get_template_part('footer'); // This will include footer.php
            endwhile;
            ?>

    </main>

<?php
get_footer();
?>
</div>
