<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */


$qr_entry_page = get_field("qr_entry_page");
//Check if r=true and redirect
if (isset($_GET['re'])) {
    wp_redirect( $qr_entry_page );
    exit();
} 

get_header();

?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php

			// Start the Loop.
			while ( have_posts() ) :
				the_post();
                ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <header class="entry-header">
                            <?php if ( is_singular() ) : ?>
                                <?php the_title( '<h1 class="entry-title default-max-width">', '</h1>' ); ?>
                            <?php else : ?>
                                <?php the_title( sprintf( '<h2 class="entry-title default-max-width"><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
                            <?php endif; ?>

                            <?php twenty_twenty_one_post_thumbnail(); ?>
                        </header><!-- .entry-header -->

                        <div class="entry-content">
                            <img src="https://chart.googleapis.com/chart?cht=qr&chs=400x400&chl=<?php echo urlencode(esc_url( get_permalink() )."?re=1"); ?>"></img>
                        </div><!-- .entry-content -->

                        <footer class="entry-footer default-max-width">
                            <?php twenty_twenty_one_entry_meta_footer(); ?>
                        </footer><!-- .entry-footer -->
                    </article><!-- #post-<?php the_ID(); ?> -->
                <?php

			endwhile; // End the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

