<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php twentyseventeen_edit_link( get_the_ID() ); ?>
	</header><!-- .entry-header -->
	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
					'after'  => '</div>',
				)
			);
			?>
			<div class="entry-image">
			<img class="entry-image-style" width="100" height="100" src="https://www.wishgoodmorning.org/wp-content/uploads/2016/04/Good-Morning-With-Breakfast-Image-wg0180745.gif">
			<img class="entry-image-style" width="100" height="100" src="https://www.wishgoodmorning.org/wp-content/uploads/2016/04/Good-Morning-With-Breakfast-Image-wg0180745.gif">
			<img class="entry-image-style" width="100" height="100" src="https://www.wishgoodmorning.org/wp-content/uploads/2016/04/Good-Morning-With-Breakfast-Image-wg0180745.gif">
			</div>
			
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
