<?php /* Template Name: Full-Width Template */ ?>
<?php get_header(); ?>
</head>
<body>

<?php get_template_part('nav'); ?>


<main class="container">

<div class="row g-5">
  <div class="col-md-12">

    <article class="blog-post">
      <?php 
      if ( have_posts() ) : 
          while ( have_posts() ) : the_post(); 
      ?>
        <?php the_content(); ?>
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


</div>

</main>

<?php get_footer(); ?>
</body>
</html>
