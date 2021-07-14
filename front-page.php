<?php get_header(); ?>
<body>

<?php get_template_part('nav'); ?>

<main class="container">
  <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 fst-italic">Title of a longer featured blog post</h1>
      <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
      <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continue reading...</a></p>
    </div>
  </div>

  <div class="row mb-2 d-flex align-items-stretch">
    <div class="col-md-6">
      <?php 
        // WP_Query arguments
        $args = array(
          'order'                  => 'DESC',
          'orderby'                => 'date',
          'category_name'          => 'News',
          'posts_per_page'         => '1',
        );
        
        // The Query
        $news_query = new WP_Query( $args );
        
        // The Loop
        if ( $news_query->have_posts() ) {
          while ( $news_query->have_posts() ) {
            $news_query->the_post(); ?>
              <div class="row h-100 g-0 border rounded flex-md-row shadow-sm position-relative">
                <div class="col-8 p-4 d-flex flex-column">
                  <?php the_category(); ?>
                  <h3 class="mb-0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                  <div class="mb-1 text-muted">Nov 12</div>
                  <p class="card-text mb-auto"><?php the_excerpt(); ?></p>
                  <a class="" href="<?php the_permalink(); ?>">Continue reading</a>
                </div>
                <div class="col-4 d-none d-lg-block overflow-hidden">
                  <?php if ( has_post_thumbnail() ) : ?>
                    <?php the_post_thumbnail( 'medium', ['class' => 'h-100 w-auto'] ); ?>
                  <?php else: ?>
                    <svg class="bd-placeholder-img" width="200" height="100%" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                  <?php endif; ?>
                </div>
            <?php  }
            } else {
              // no posts found
            }
            
            // Restore original Post Data
            wp_reset_postdata();
          ?>
      </div>
    </div>
    <div class="col-md-6">
      <?php 
        // WP_Query arguments
        $args = array(
          'order'                  => 'DESC',
          'orderby'                => 'date',
          'category_name'          => 'Design',
          'posts_per_page'         => '1',
        );
        
        // The Query
        $news_query = new WP_Query( $args );
        
        // The Loop
        if ( $news_query->have_posts() ) {
          while ( $news_query->have_posts() ) {
            $news_query->the_post(); ?>
              <div class="row h-100 g-0 border rounded flex-md-row shadow-sm position-relative">
                <div class="col-8 p-4 d-flex flex-column">
                  <?php the_category(); ?>
                  <h3 class="mb-0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                  <div class="mb-1 text-muted">Nov 12</div>
                  <p class="card-text mb-auto"><?php the_excerpt(); ?></p>
                  <a class="" href="<?php the_permalink(); ?>">Continue reading</a>
                </div>
                <div class="col-4 d-none d-lg-block overflow-hidden">
                  <?php if ( has_post_thumbnail() ) : ?>
                    <?php the_post_thumbnail( 'post-thumbnail', ['class' => 'h-100 w-auto'] ); ?>
                  <?php else: ?>
                    <img class="h-100 w-auto" src="https://via.placeholder.com/300" alt="Placeholder image">
                  <?php endif; ?>
                </div>
            <?php  }
            } else {
              // no posts found
            }
            
            // Restore original Post Data
            wp_reset_postdata();
          ?>
      </div>
    </div>
  </div>
  
  <?php get_template_part('services'); ?>

</main>
<?php get_footer(); ?>
</body>
</html>
