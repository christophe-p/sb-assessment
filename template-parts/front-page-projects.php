<!-- Projects-->

<section class="page-section bg-light" id="portfolio">

 <div class="container">

    <div class="text-center">

     <h2 class="section-heading text-uppercase">
       <?php the_field( 'hp_projects_heading' ); ?>
     </h2>

     <p class="section-subheading text-muted">
       <?php the_field( 'hp_projects_lead' ); ?>
     </p>

    </div>

  <div class="row">

  <?php
    $args = array(
        'post_type' => 'project_item',
        'post_status' => 'publish',
        'posts_per_page' => 6,
        'orderby' => 'post_id',
        'order' => 'ASC',
    );

    $loop = new WP_Query( $args );

    while( $loop->have_posts() ) : $loop->the_post();
  ?>

   <div class="col-lg-4 col-sm-6 mb-4">

    <div class="portfolio-item">

      <a href="<?php the_permalink(); ?>" class="portfolio-link">

        <div class="portfolio-hover">

         <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>

        </div>

        <img class="img-fluid" src="<?php the_field( 'project_thumbnail' ); ?>" alt="" />

     </a>

     <div class="portfolio-caption">

       <a href="<?php the_permalink(); ?>" class="portfolio-link">

        <div class="portfolio-caption-heading">

          <?php the_title(); ?>

        </div>

      </a>

      <div class="portfolio-caption-subheading text-muted">

        <?php the_field( 'project_description' ); ?>

      </div>

     </div>

    </div>

   </div>

   <?php
    endwhile;
    wp_reset_postdata();
   ?>

  </div>

 </div>

</section>
