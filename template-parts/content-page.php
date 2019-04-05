<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package localwp
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title page--title">', '</h1>' ); ?>
		<hr>
	</header><!-- .entry-header -->

	<?php localwp_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content();
		?>
		<?php 
		  bloginfo();
		?>
	</div><!-- .entry-content -->

</article>

<!-- #post-<?php the_ID(); ?> -->
