<footer class="main-footer">
	<div class="row">
		<div class="large-3 columns">
			<?php if ( is_active_sidebar( 'footer1' ) ): dynamic_sidebar( 'footer1' ); endif; ?>
		</div>
		<div class="large-3 columns">
			<?php if ( is_active_sidebar( 'footer2' ) ): dynamic_sidebar( 'footer2' ); endif; ?>
		</div>
		<div class="large-3 columns">
			<?php if ( is_active_sidebar( 'footer3' ) ): dynamic_sidebar( 'footer3' ); endif; ?>
		</div>
		<div class="large-3 columns">
			<?php if ( is_active_sidebar( 'footer4' ) ): dynamic_sidebar( 'footer4' ); endif; ?>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/app.js"></script>
