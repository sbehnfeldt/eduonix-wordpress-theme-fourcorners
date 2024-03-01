<!doctype html>
<html <?php language_attributes(); ?>>
<?php get_template_part( 'partials/head' ); ?>

<body>
<?php get_template_part( 'partials/header' ); ?>
<section class="title-section">
	<p class="welcome-text">Welcome To</p>
	<h1>Blog</h1>
	<p class="sub-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur consectetur corporis
		enim esse expedita explicabo ipsa ipsam maxime minima, molestiae perferendis provident recusandae, reprehenderit
		rerum similique vel vero voluptate voluptatem.</p>
</section>

<main>
	<?php
	$cat = get_category_by_slug( 'featured' );

	$query = new WP_Query( [
		'cat' => - $cat->cat_ID
	] );
	while ( $query->have_posts() ): $query->the_post(); ?>

		<article class="blog-post">
			<div class="row">
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

				<h3><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3>
				<?php the_excerpt(); ?>
			</div>
		</article>
	<?php endwhile; ?>
</main>

<?php get_template_part( 'partials/footer' ); ?>
</body>
</html>
