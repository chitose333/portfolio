<?php get_header(); ?>
<section id="contact" class="confirm">
    <div class="confirm__inner inner">
      <h2 class="section-title contact__title">Contact</h2>
      <div class="confirm__container">
        <div class="contact__step contact-step">
          <ul>
            <li class="contact-step__number">1</li>
            <li class="contact-step__number contact-step__number--active">2</li>
            <li class="contact-step__number">3</li>
          </ul>
        </div>
        <div class="contact__form contact-form">
          <!-- <div class="confirm__row">
            <p>氏名</p>
            <p class="confirm__text">
              名前が入るよ
            </p>
          </div>
          <div class="confirm__row">
            <p>氏名</p>
            <p class="confirm__text">
              名前が入るよ
            </p>
          </div> -->
          <!-- /.confirm-row -->
            <?php echo do_shortcode( '[contact-form-7 id="13" title="コンタクトフォーム２"]'); ?>
        </div>
        <!-- /.contact__form contact-form -->
      </div>
      <!-- /.contact__inner inner -->
    </div>
    <!-- /.inner -->
  </section>
  <!-- /.section contact -->
<?php get_footer(); ?>
