	</div><!--.container-->
	<div class="clear"></div>
	<footer>
		<div class="container">
			<?php if ( ! dynamic_sidebar( 'Footer' ) ) : ?>
				<!--Wigitized Footer-->
			<?php endif ?>
			<nav class="footer">
				<?php wp_nav_menu( array('menu' => 'Footer Menu' )); ?> <!-- editable within the Wordpress backend -->
			</nav>
			<p>
				&copy; <?php echo date("Y") ?> <a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('description'); ?>"><?php bloginfo('name'); ?></a>. All Rights Reserved.
			</p>
			<p>
				<a href="<?php bloginfo('rss2_url'); ?>" rel="nofollow">Entries (RSS)</a> | <a href="<?php bloginfo('comments_rss2_url'); ?>" rel="nofollow">Comments (RSS)</a>
			</p>
			<!--
				The Whiteboard Framework is free to use. You are only required to keep a link in the CSS. We do not require a link on the site, though we do greatly appreciate it.
			-->
			<p>
				Built on the <a href="http://whiteboardframework.com/">Whiteboard Framework for Wordpress</a>, a <a href="http://boldperspective.com/labs/">Bold Perspective Labs Experiment</a>. Powered by <a href="http://wordpress.org">Wordpress</a>.
			</p>
		</div><!--.container-->
	</footer>
</div><!--#main-->
<?php wp_footer(); ?> <!-- this is used by many Wordpress features and for plugins to work proporly -->
</body>
</html>