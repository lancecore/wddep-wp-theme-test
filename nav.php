<div class="container">
	  <header class="blog-header py-3">
		<div class="row flex-nowrap justify-content-between align-items-center">
		  <div class="col-12 text-center">
			<h1><a class="blog-header-logo text-dark" href="<?php echo bloginfo('url'); ?>"><?php echo bloginfo('name'); ?></a></h1>
		  </div>
		</div>
	  </header>
	
	  <div class="nav-scroller py-1 mb-2">
		<nav class="nav d-flex justify-content-between">
		  <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
		</nav>
	  </div>
	</div>
	