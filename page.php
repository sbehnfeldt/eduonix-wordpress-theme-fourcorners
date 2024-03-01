<!doctype html>
<html <?php language_attributes(); ?>>
<?php get_template_part( 'partials/head' ); ?>

<body>
<?php get_template_part( 'partials/header' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<section class="title-section">
		<p class="welcome-text">Welcome To</p>
		<h1><?php the_title(); ?></h1>
	</section>
	<main>

		<div class="row">
			<?php if ( is_active_sidebar( 'sidebar' ) ) {
				$width = "large-8";
			} else {
				$width = "large-12";
			}
			?>

			<div class="<?php echo $width; ?> columns">
				<article class="single-page">
					<?php the_content(); ?>
				</article>
			</div>

			<?php if ( is_active_sidebar( 'sidebar' ) ): ?>
				<div class="large-4 columns">
					<div class="well">
						<?php dynamic_sidebar( 'sidebar' ); ?>
					</div>
				</div>
			<?php endif; ?>

		</div>
	</main>
<?php endwhile; ?>


<?php get_template_part( 'partials/footer' ); ?>
</body>
</html>
