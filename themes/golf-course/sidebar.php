<?php
/**
 * The sidebar containing the main widget area
 * @package Golf Course
 * @subpackage golf_course
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Blog Sidebar', 'golf-course' ); ?>">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside>