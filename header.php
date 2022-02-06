<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <!-- meta情報 -->
  <title><?php bloginfo('name'); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>" />
  <meta name="keywords" content="" />
  <!-- ogp -->
  <meta property="og:title" content="C-links" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://chitoseworks.com/" />
  <meta property="og:image" content="https://chitoseworks.com/wp-content/themes/portfolio/screenshot.png" />
  <meta property="og:description" content="Webをとおして、ひとと想いをつなげます。C-links" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:site" content="@chitose_333" />
  <meta name="twitter:title" content="Web制作 C-links" />
  <meta name="twitter:description" content="Webをとおして、ひとと想いをつなげます。" />
  <meta name="twitter:image" content="https://chitoseworks.com/wp-content/themes/portfolio/screenshot.png" />
  <!-- ファビコン -->
  <link rel="”icon”" href="" />
  <!--google fonts-->
  <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&family=Noto+Sans+JP:wght@300;400;500&display=swap" rel="stylesheet"> -->

  <!--Swiper-->
  <!-- <link
  rel="stylesheet"
  href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/> -->

  <!-- css -->
  <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/styles.css"> -->

  <!-- JavaScript -->
  <!-- <script src="https://code.jquery.com/jquery-3.6.0.js"></script> -->

  <!--Adobe Fonts-->
  <!-- <script>
    (function(d) {
      var config = {
        kitId: 'nyt0uih',
        scriptTimeout: 3000,
        async: true
      },
      h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
    })(document);
  </script> -->

  <!--Swiper-->
  <!-- <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script> -->
  <!--My script-->
  <!-- <script defer src="<?php echo get_template_directory_uri() ?>/js/script.js"></script> -->
  <?php wp_head(); ?>
</head>
  <header class="header">
    <div class="header__inner inner">
      <div class="header__left">
        <a class="header__logo" href="<?php echo esc_url(home_url()); ?>">
          <!-- <img src="<?php echo get_template_directory_uri() ?>/images/common/logo.png" alt="ロゴ"> -->
          <img src="<?php echo get_template_directory_uri() ?>/images/common/header__logo.png" alt="ロゴ">
        </a>
      </div>
      <!-- <a id="MenuButton" href="#" class="sp-header__drawer hamburger js-drawer-open">
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
      </nav> -->
    </div>
    <!-- /.header__inner -->
  </header>
  <!-- /.header -->
