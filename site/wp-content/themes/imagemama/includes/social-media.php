<?php

function facebottom_shortcode($atts){
	echo '<iframe id="f25e2d6c0c" name="f1e4ece1ec" scrolling="no" style="border: none; overflow: hidden; height: 20px; width: 138px;" title="'.get_the_title().'" class="fb_ltr" src="http://www.facebook.com/plugins/like.php?api_key=184198404972911&amp;locale=pt_BR&amp;sdk=joey&amp;channel_url=http%3A%2F%2Fstatic.ak.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D18%23cb%3Df8b3ff488%26origin%3Dhttp%253A%252F%252Fwww.wisnet.com%252Ff72ea2ebc%26domain%3Dwww.wisnet.com%26relation%3Dparent.parent&amp;href='.get_permalink().'&amp;node_type=link&amp;width=150&amp;layout=button_count&amp;colorscheme=light&amp;action=like&amp;show_faces=false&amp;send=false&amp;extended_social_context=false"></iframe>';
}
add_shortcode('facebottom', 'facebottom_shortcode');


function twitterbottom_shortcode($atts){
	echo '<iframe allowtransparency="true" frameborder="0" scrolling="no" src="http://platform.twitter.com/widgets/tweet_button.1355514129.html#_=1357148437833&amp;count=horizontal&amp;id=twitter-widget-0&amp;lang=pt&amp;original_referer='.get_permalink().'&amp;size=m&amp;text='.get_the_title().'&amp;url='.get_permalink().'" class="twitter-share-button twitter-count-horizontal" style="width: 121px; height: 20px;" title="Twitter Tweet Button" data-twttr-rendered="true"></iframe>';
}
add_shortcode('twitterbottom', 'twitterbottom_shortcode');


function plusbottom_shortcode($atts){
	echo '<div class="g-plusone" data-size="medium"></div>
	<script type="text/javascript">
	  	(function() {
	    var po = document.createElement("script"); po.type = "text/javascript"; po.async = true;
	    po.src = "https://apis.google.com/js/plusone.js";
	    var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(po, s);
	  	})();
	</script>';
}
add_shortcode('plusbottom', 'plusbottom_shortcode');

?>