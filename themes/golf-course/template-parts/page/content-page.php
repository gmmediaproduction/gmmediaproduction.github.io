<?php
/**
 * Template part for displaying page content in page.php
 *
 * @package Golf Course
 * @subpackage golf_course
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header>
	<div class="entry-content">
		<?php
			the_post_thumbnail();

			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'golf-course' ),
				'after'  => '</div>',
			) );
		?>
	</div>
</div>