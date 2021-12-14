<!-- Clients-->

<div class="page-section py-5">

 <div class="container text-center">

   <p class="section-subheading text-muted">

     <?php the_field( 'hp_clients_lead' ); ?>

   </p>

   <div id="clientsCarousel" class="carousel slide">

     <div class="carousel-inner">

      <div class="carousel-item active">

        <img class="" src="<?php the_field( 'hp_client_logo_1' ); ?>" alt="">
        <img class="" src="<?php the_field( 'hp_client_logo_2' ); ?>" alt="">
        <img class="" src="<?php the_field( 'hp_client_logo_3' ); ?>" alt="">
        <img class="" src="<?php the_field( 'hp_client_logo_4' ); ?>" alt="">

      </div>

      <div class="carousel-item">

        <img class="" src="<?php the_field( 'hp_client_logo_3' ); ?>" alt="">
        <img class="" src="<?php the_field( 'hp_client_logo_4' ); ?>" alt="">
        <img class="" src="<?php the_field( 'hp_client_logo_1' ); ?>" alt="">
        <img class="" src="<?php the_field( 'hp_client_logo_2' ); ?>" alt="">

      </div>

      <div class="carousel-item">

        <img class="" src="<?php the_field( 'hp_client_logo_2' ); ?>" alt="">
        <img class="" src="<?php the_field( 'hp_client_logo_1' ); ?>" alt="">
        <img class="" src="<?php the_field( 'hp_client_logo_4' ); ?>" alt="">
        <img class="" src="<?php the_field( 'hp_client_logo_3' ); ?>" alt="">

      </div>

   </div>

        <ol class="carousel-indicators">
          <li data-target="#clientsCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#clientsCarousel" data-slide-to="1"></li>
          <li data-target="#clientsCarousel" data-slide-to="2"></li>
        </ol>

   </div>

 </div>

</div>
