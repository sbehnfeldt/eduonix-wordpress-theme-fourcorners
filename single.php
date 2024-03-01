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
				<article class="single-blog-post">
					<?php if ( has_post_thumbnail() ): ?>
						<div class="post-thumbnail">
							<?php the_post_thumbnail(); ?>
						</div>
					<?php endif; ?>
					<div class="meta">
						<ul>
							<li><i class="fa fa-user"></i>
								<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a>
							</li>
							<li><i class="fa fa-calender"></i><?php the_date( 'F j, Y g:i a' ); ?></li>
							<li><i class="fa fa-folder"></i>
								<?php
								$categories = get_the_category();
								if ( $categories ) {
									$categories = array_map( function ( $c ) {
										return sprintf( '<a href="%s">%s</a>', get_category_link( $c->term_id ), $c->cat_name );
									}, $categories );
									$categories = implode( ', ', $categories );
								}
								echo $categories;
								?>
							</li>
						</ul>
					</div>

					<h3><?php the_title(); ?></h3>
					<?php the_content(); ?>
					<br>
					<?php comments_template(); ?>
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
