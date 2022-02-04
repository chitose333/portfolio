<?php
/**
* CSSとJavaScriptの読み込み
*/
function my_scripts(){
  wp_enqueue_style('GoogleFonts', 'https://fonts.googleapis.com/css?family=Julius+Sans+One&family|Noto+Sans+JP:wght@300;400;500&display=swap');

  wp_enqueue_style('Swiper', 'https://unpkg.com/swiper@7/swiper-bundle.min.css');

  wp_enqueue_style('my-css', get_theme_file_uri('/css/styles.css'), array(), '1.0.0', 'all');

  wp_enqueue_script('Swiper-script', 'https://unpkg.com/swiper@7/swiper-bundle.min.js' , array( 'jquery' ));

  //ほんとはここにAdobe-Fonts読み込みたかった

  wp_enqueue_script('my-script', get_theme_file_uri('/js/script.js'));
}
add_action('wp_enqueue_scripts', 'my_scripts');

//Adobe-Fontsの読み込み
//参考：https://note.com/ayubanana/n/n3b8e355c93a4
add_action(
	'wp_head',
	function() { ?>
		<script>
  (function(d) {
    var config = {
      kitId: 'nyt0uih',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document)
</script>
	<?php }
);
