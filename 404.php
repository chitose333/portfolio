<?php get_header(); ?>
<section class="page404">
  <div class="page404__inner inner">
    <p class="page404__title">ページが見つかりません</p>
    <p class="page404__text">
      申し訳ございませんが、<br>
      下記リンクよりトップページへ<br>
      お戻りいただけます
    </p>
    <div class="page404__button">
      <a href="<?php echo esc_url(home_url()); ?>" class="button 404button">TOP</a>
      </div>
  </div>
  <!-- /.404__inner inner -->
</section>
<!-- /.404 -->
<?php get_footer(); ?>
