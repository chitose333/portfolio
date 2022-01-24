<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <!-- meta情報 -->
  <title>My Portfolio</title>
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <!-- ogp -->
  <meta property="og:title" content="" />
  <meta property="og:type" content="" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="" />
  <meta property="og:site_name" content="" />
  <meta property="og:description" content="" />
  <!-- ファビコン -->
  <link rel="”icon”" href="" />
  <!--google fonts-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&family=Noto+Sans+JP:wght@300;400;500&display=swap" rel="stylesheet">
  <!--Swiper-->
  <link
  rel="stylesheet"
  href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
  <!-- css -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/styles.css">
  <!-- JavaScript -->
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <!--Adobe Fonts-->
  <script>
    (function(d) {
      var config = {
        kitId: 'nyt0uih',
        scriptTimeout: 3000,
        async: true
      },
      h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
    })(document);
  </script>
  <!--Swiper-->
  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
  <!--My script-->
  <script defer src="<?php echo get_template_directory_uri() ?>/js/script.js"></script>
</head>
  <header class="header">
    <div class="header__inner inner">
      <div class="header__left">
        <a class="header__logo" href="#">
          <img src="<?php echo get_template_directory_uri() ?>/images/common/logo.png" alt="ロゴ">
        </a>
      </div>
      <a id="MenuButton" href="#" class="sp-header__drawer hamburger js-drawer-open">
        <span></span>
        <span></span>
        <span></span>
      </a>
      <nav class="header__drawer drawer-menu">
        <ul class="drawer-menu__items">
          <li class="drawer-menu__item"><a href="#about">ABOUT</a></li>
          <li class="drawer-menu__item"><a href="#works">WORKS</a></li>
          <li class="drawer-menu__item"><a href="#profile">PROFILE</a></li>
          <li class="drawer-menu__item"><a href="#contact">CONTACT</a></li>
        </ul>
      </nav>
      <nav class="header__nav pc-nav">
        <ul class="pc-nav__items">
          <li class="pc-nav__item"><a href="#about">ABOUT</a></li>
          <li class="pc-nav__item"><a href="#works">WORKS</a></li>
          <li class="pc-nav__item"><a href="#profile">PROFILE</a></li>
          <li class="pc-nav__item--contact"><a href="#contact">CONTACT</a></li>
        </ul>
      </nav>
    </div>
    <!-- /.header__inner -->
  </header>
  <!-- /.header -->
  <div class="circle-bg">
    <div class="main-view">
      <div class="main-view__inner inner">
        <h1 class="main-view__title">Webを<br class="u-mobile">とおして、<br>ひとと想いを<br>つなげます</h1>
      </div>
      <!-- /.main-view__inner -->
    </div>
    <!-- /.main-view -->
    <section class="about">
      <div class="about__inner inner">
        <h2 class="about__title section-title">ABOUT</h2>
        <p class="about__text">
          C-linksでは、<br>
          「デザインの確実な再現と<br>
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
  <section class="works section">
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
        <a href="#" class="works-button button">MORE</a>
      </div>
      <!-- /.works-button__container -->
    </div>
    <!-- /.works__inner -->
  </section>
  <!-- /.works -->
  <section class="profile section">
    <div class="profile__inner inner">
      <h2 class="section-title profile__title">PROFILE</h2>
      <p class="profile__name u-mobile">chitose</p>
      <div class="profile__container">
        <div class="profile__img">
          <img src="<?php echo get_template_directory_uri() ?>/images/common/works1.jpg" alt="">
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
  <section class="contact">
    <div class="contact__inner inner">
      <h2 class="section-title contact__title">Contact</h2>
      <div class="contact__container">
        <div class="contact__step contact-step">
          <ul>
            <li class="contact-step__number contact-step__number--active">1</li>
            <li class="contact-step__number">2</li>
            <li class="contact-step__number">3</li>
          </ul>
        </div>
        <div class="contact__form contact-form">
          <form  id="js-form" action="" method="POST">
            <dl class="contact_list contact-form">
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
              <!-- <button  class="submit-button">送信する</button> -->
              <a href="#" class="contact-button button" id="js-submit">SEND</a>
            </div>
          </form>
        </div>
        <!-- /.contact__form contact-form -->

      </div>
      <!-- /.contact__inner inner -->
    </div>
    <!-- /.inner -->
  </section>
  <!-- /.section contact -->
  <footer class="footer">
    <div class="footer__logo">
      <img src="<?php echo get_template_directory_uri() ?>/images/common/logo.png" alt="ロゴ">
    </div>
  </footer>
  <!-- /.footer -->
</body>
</html>
