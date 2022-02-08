  <footer class="footer">
    <div class="footer__logo">
      <img src="<?php echo get_template_directory_uri() ?>/images/common/logo-white2.png" alt="ロゴ">
    </div>
    <p class="footer__copyright">&copy; <?php echo date('Y'); ?> C-links</p>
  </footer>
  <!-- /.footer -->
  <?php wp_footer(); ?>
  <script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
    location = '/thanks';
}, false );
</script>
</body>
</html>
