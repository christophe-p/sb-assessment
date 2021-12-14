<!-- Front Page Hero-->

<header class="hero">

 <section class="hero-container">
  <h1><?php single_post_title(); ?></h1>

  <p class="hero-lead"><?php the_field( 'hp_hero_lead' ); ?></p>

  <section class="hero-features-wrapper">

    <section class="hero-feature">

     <div class="hero-feature-icon">
      <i class="<?php the_field( 'hp_hero_feature_icon_1' ); ?>"></i>
     </div>

     <p class="hero-feature-heading"><?php the_field( 'hp_hero_feature_name_1' ); ?></p>

     <p class="hero-feature-text">
      <?php the_field( 'hp_hero_feature_description_1' ); ?>
     </p>

    </section>

    <section class="hero-feature">

     <div class="hero-feature-icon">
      <i class="<?php the_field( 'hp_hero_feature_icon_2' ); ?>"></i>
     </div>

     <p class="hero-feature-heading"><?php the_field( 'hp_hero_feature_name_2' ); ?></p>

     <p class="hero-feature-text">
      <?php the_field( 'hp_hero_feature_description_2' ); ?>
     </p>

    </section>

    <section class="hero-feature">

     <div class="hero-feature-icon">
      <i class="<?php the_field( 'hp_hero_feature_icon_3' ); ?>"></i>
     </div>

     <p class="hero-feature-heading"><?php the_field( 'hp_hero_feature_name_3' ); ?></p>

     <p class="hero-feature-text">
      <?php the_field( 'hp_hero_feature_description_3' ); ?>
     </p>

    </section>

    <section class="hero-feature">

     <div class="hero-feature-icon">
      <i class="<?php the_field( 'hp_hero_feature_icon_4' ); ?>"></i>
     </div>

     <p class="hero-feature-heading"><?php the_field( 'hp_hero_feature_name_4' ); ?></p>

     <p class="hero-feature-text">
      <?php the_field( 'hp_hero_feature_description_4' ); ?>
     </p>

    </section>

  </section>

  <!-- Hero Nav -->

  <nav class="hero-nav">
    <button type="button" class="button-learn" onclick="document.location='/#services'">
      <span class="button-text">Learn More</span>
    </button>
   <button type="button" class="button-touch" onclick="document.location='/contact'">
     <span class="button-text">Get in Touch</span>
   </button>
  </nav>

 </section>

 <svg viewBox="0 0 500 50" preserveAspectRatio="xMinYMin meet" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M-0.84,15.28 C170.14,52.78 297.11,53.78 500.27,13.31 L500.27,55.75 L-0.27,52.78 Z" fill="#EFF4FB"></path>
 </svg>

</header>
