<div id="sidebar">
	<div id="sidebar_top"></div>
	<div id="sidebar_main">
		<script src="http://widgets.twimg.com/j/2/widget.js"></script>
		<script>
		new TWTR.Widget({
		  version: 2,
		  type: 'profile',
		  rpp: 8,
		  interval: 6000,
		  width: 204,
		  height: 480,
		  theme: {
		    shell: {
		      background: '#181818',
		      color: '#ffffff'
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
	<?php if ( ! dynamic_sidebar( 'Sidebar' )) : ?>

		<li id="sidebar-search" class="widget">
			<h3>Search</h3>
			<?php get_search_form(); ?> <!-- outputs the default Wordpress search form-->
		</li>
		
		<li id="sidebar-nav" class="widget menu">
			<h3>Navigation</h3>
			<ul>
				<?php wp_nav_menu( array('menu' => 'Sidebar Menu' )); ?> <!-- editable within the Wordpress backend -->
			</ul>
		</li>
		
		<li id="sidebar-archives" class="widget">
			<h3>Archives</h3>
			<ul>
				<?php wp_get_archives( 'type=monthly' ); ?>
			</ul>
		</li>

		<li id="sidebar-meta" class="widget">
			<h3>Meta</h3>
			<ul>
				<?php wp_register(); ?>
				<li><?php wp_loginout(); ?></li>
				<?php wp_meta(); ?>
			</ul>
		</li>

	<?php endif; ?>	
	</div> <!-- #sidebar_main -->
	<div id="sidebar_bot"></div>
</div><!--sidebar-->