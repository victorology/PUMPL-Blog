<div id="sidebar">
	<div id="sidebar_top"></div>
	<div id="sidebar_main">
		<div id="new_posts_header">최근의 글</div>
		<div id="new_posts">
			<?php wp_get_recent_posts( $num ) ?>
			<ul>
			    <?php
				  $number_recents_posts = 4; //Can be how much you want
			      $recent_posts = wp_get_recent_posts( $number_recents_posts );
			      foreach($recent_posts as $post){
			        echo '<li><a href="' . get_permalink($post["ID"]) . '" title="Look '.$post["post_title"].'" >' . $post["post_title"].'</a></li>';
				} ?>
			</ul>
		</div>
		<div id="facebook_header">PUMPL Facebook</div>
		<div style="background-color:#fff; clear:both;">
			<script src="http://connect.facebook.net/ko_KR/all.js#xfbml=1"></script><fb:like-box href="http://www.facebook.com/mypumpl" width="204" connections="10" stream="false" header="false"></fb:like-box>
		</div>
		<div id="twitter_header">PUMPL Twitter</div>
		<div style="clear:both">
			<script src="http://widgets.twimg.com/j/2/widget.js"></script>
			<script>
			new TWTR.Widget({
			  version: 2,
			  type: 'profile',
			  rpp: 8,
			  interval: 6000,
			  width: 204,
			  height: 248,
			  theme: {
			    shell: {
			      background: '#aecfe4',
			      color: '#181818'
			    },
			    tweets: {
			      background: '#ffffff',
			      color: '#181818',
			      links: '#4f88ac'
			    }
			  },
			  features: {
			    scrollbar: false,
			    loop: false,
			    live: true,
			    hashtags: true,
			    timestamp: true,
			    avatars: false,
			    behavior: 'all'
			  }
			}).render().setUser('PUMPL').start();
			</script>
		</div>
	</div> <!-- #sidebar_main -->
	<div id="sidebar_bot"></div>
</div><!--sidebar-->