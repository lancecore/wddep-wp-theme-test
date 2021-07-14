<?php get_header(); ?>
</head>
<body>

<?php get_template_part('nav'); ?>


<main class="container">

<div class="row g-5">
  <div class="col-md-8">

    <article class="blog-post">
      <?php 
      if ( have_posts() ) : 
          while ( have_posts() ) : the_post(); 
      ?>
        <h2><?php the_title(); ?></h2>
        <h3><strong>Rating: </strong><?php if ( get_field('rating') ) : the_field('rating'); endif; ?></h3>
        
      <?php
          endwhile; 
      endif; 
      ?>
    </article>

    <nav class="blog-pagination" aria-label="Pagination">
      <a class="btn btn-outline-primary" href="#">Older</a>
      <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
    </nav>

  </div>

  <div class="col-md-4">
    <div class="position-sticky" style="top: 2rem;">
       <?php get_sidebar(); ?>
    </div>
  </div>

</div>

</main>

<?php get_footer(); ?>
</body>
</html>
