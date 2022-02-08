<?php get_header("top"); ?>
  <div class="circle-bg">
    <div class="main-view">
      <div class="main-view__inner inner">
        <h1 class="main-view__title">Webを<br class="u-mobile">とおして、<br>ひとと想いを<br>つなげます</h1>
      </div>
      <!-- /.main-view__inner -->
    </div>
    <!-- /.main-view -->
    <section id="about" class="about">
      <div class="about__inner inner">
        <h2 class="about__title section-title">ABOUT</h2>
        <p class="about__text">
          C-linksでは、<br>
          「デザインの確実な再現・<br>
          保守性を意識したコーディング」と、<br>
          クライアント様に寄り添い<br>
          「デザインから納品まで一貫したサイト制作」を<br>
          行っております。
        </p>
      </div>
      <!-- /.about__inner -->
    </section>
    <!-- /.about -->
  </div>
  <!-- /.circle__bg -->
  <section id="works" class="works section">
    <div class="works__inner inner">
      <h2 class="works__title section-title">WORKS</h2>
      <!-- Slider main container -->
      <div class="works__container">
        <div class="swiper">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri() ?>/images/common/works1.jpg" alt="実績１"></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri() ?>/images/common/works2.jpg" alt="実績２"></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri() ?>/images/common/works3.jpg" alt="実績３"></div>
          </div>
          <!-- 必要に応じてページネーション -->
          <div class="swiper-pagination"></div>
        </div>
        <!--/.swiper-->
      </div>
      <!-- /.works__container -->
      <div class="works-button__container">
        <a href="<?php echo home_url('/works'); ?>" class="works-button button">MORE</a>
      </div>
      <!-- /.works-button__container -->
    </div>
    <!-- /.works__inner -->
  </section>
  <!-- /.works -->
  <section id="profile" class="profile section">
    <div class="profile__inner inner">
      <h2 class="section-title profile__title">PROFILE</h2>
      <p class="profile__name u-mobile">chitose</p>
      <div class="profile__container">
        <div class="profile__img">
          <img src="<?php echo get_template_directory_uri() ?>/images/common/profile.png" alt="">
        </div>
        <div class="profile__right">
          <p class="profile__name u-desktop">chitose</p>
          <img class="profile__skills" src="<?php echo get_template_directory_uri() ?>/images/common/skills.png" alt="スキル内容">
          <p class="profile__text">
            こんにちは。千歳（ちとせ）と申します。<br>
            2020年11月からWeb制作の勉強を始め、<br>
            2021年3月に友人のWebサイトを<br>
            一から立ち上げました。<br>
            その後はコーディングに重きを置きつつ、<br>
            必要とされればディレクションやデザインから<br>
            一貫したサイト制作を行っております。
          </p>
          <p class="profile__text">
            私がとってもワクワクするのは、<br>
            クライアント様からお話を伺い、<br>
            事業の今後のビジョンや<br>
            ご自身の将来像をお聞きする時。<br>
            また形になっているデザインの、<br>
            意図を考えながらコーディングしている時です。
          </p>
          <p class="profile__text">
            C-linksの事業を通じて、<br>
            関わってくださった方の笑顔に<br>
            貢献したい。<br>
            その一心でお仕事をさせていただいております。
          </p>

        </div>
      </div>
      <!-- /.profile__container -->
    </div>
    <!-- /.profile__inner inner -->
  </section>
  <!-- /.profile section -->
  <section id="contact" class="contact">
    <div class="contact__inner inner">
      <h2 class="section-title contact__title">Contact</h2>
      <div class="contact__container">
        <!-- <div class="contact__step contact-step">
          <ul>
            <li class="contact-step__number contact-step__number--active">1</li>
            <li class="contact-step__number">2</li>
            <li class="contact-step__number">3</li>
          </ul>
        </div> -->
        <div class="contact__form contact-form">
          <!-- <form > -->
            <!-- <dl class="contact_list contact-form">
              <div class="contact-form_row">
                <dt class="contact-form_label">
                  <span class="contact-form_inline">必須</span>
                  お名前
                </dt>
                <dd class="contact-form_input">
                  <input type="text" placeholder="お名前をご記入ください" name="" required>
                </dd>
              </div>
              <div class="contact-form_row">
                <dt class="contact-form_label">
                  <span class="contact-form_inline">必須</span>
                  メールアドレス
                </dt>
                <dd class="contact-form_input">
                  <input type="text" placeholder="メールアドレスをご記入ください" name="" required>
                </dd>
              </div>
              <div class="contact-form_row">
                <dt class="contact-form_label textarea-label">
                  <span class="contact-form_inline">必須</span>
                  お問い合わせ内容
                </dt>
                <dd class="contact-form_textarea">
                  <textarea name="" placeholder="ご記入ください"></textarea>
                </dd>
              </div>
            </dl>
            <div class="contact-button__container">
              <a href="#" class="contact-button button" id="js-submit">SEND</a>
            </div> -->
            <?php echo do_shortcode( '[contact-form-7 id="5" title="コンタクトフォーム 1"]'); ?>
          <!-- </form> -->
        </div>
        <!-- /.contact__form contact-form -->
      </div>
      <!-- /.contact__inner inner -->
    </div>
    <!-- /.inner -->
  </section>
  <!-- /.section contact -->
<?php get_footer(); ?>
