<footer class="blog-footer">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<?php dynamic_sidebar( 'footer-one' ); ?>
			</div>
			<div class="col-md-4">
				<p><a href="#">Back to top</a></p>
			</div>
			<div class="col-md-4">
				<?php dynamic_sidebar( 'footer-two' ); ?>
			</div>
		</div>
	</div>
	<?php wp_footer(); ?>
</footer>