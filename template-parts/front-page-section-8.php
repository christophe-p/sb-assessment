<!-- Section 8 -->

<section id="hp-section-8" class="hp-section-8">

  <section class="hp-section-8-wrapper">

      <section class="hp-section-8-text">

        <h2 class="hp-section-8-heading">
          <?php the_field( 'hp_section_8_heading' ); ?>
        </h2>

        <p class="hp-section-8-lead">
          In just a 5-minute call with our team, you’ll get:
        </p>

          <ul class="fa-ul hp-section-8-list">
            <li><span class="fa-li"><i class="fas fa-circle"></i></span><strong>A free tour</strong> of the app.</li>
            <li><span class="fa-li"><i class="fas fa-circle"></i></span><strong>Real-world examples</strong> of how it’s helping agencies.</li>
            <li><span class="fa-li"><i class="fas fa-circle"></i></span><strong>A roadmap</strong> for how it can be customized for your team.</li>
          </ul>

      </section>

    <section class="hp-section-8-form-wrapper">

      <h2 class="hp-section-8-form-heading">
        <?php the_field( 'hp_section_8_form_heading' ); ?>
      </h2>

      <form action="" method="">
        <input type="text" id="first-name" name="first-name" value="First Name*" required>
        <input type="text" id="email" name="email" value="Email*" required>
        <input type="text" id="phone-number" name="phone-number" value="Phone Number">
        <input type="text" id="comp-website" name="comp-website" value="Company Website*" required>
        <button type="submit">
          <?php the_field( 'hp_section_8_button_text' ); ?>
        </button>
      </form>

    </section>

  </section>

</section>
