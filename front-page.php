<?php get_header(); ?>
<body>

<?php get_template_part('nav'); ?>

<main class="container">
  <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      <?php 
      // WP_Query arguments
      $args = array(
        'order'                  => 'DESC',
        'orderby'                => 'date',
        'posts_per_page'         => '1',
        'meta_key'               => 'featured',
        'meta_value'             => 1,
      );
      
      // The Query
      $news_query = new WP_Query( $args );
      
      // The Loop
      if ( $news_query->have_posts() ) {
        while ( $news_query->have_posts() ) {
          $news_query->the_post(); ?>
          <h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
          <p class="card-text mb-auto"><?php the_excerpt(); ?></p>
          <?php  }
          } else {
            // no posts found
          }
          
          // Restore original Post Data
          wp_reset_postdata();
        ?>
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
