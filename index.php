<?php get_header(); ?>

<div id="content">
	<div id="content_top"></div>
	<div id="content_main">
		<?php if ( ! dynamic_sidebar( 'Alert' ) ) : ?>
			<!--Wigitized 'Alert' for the home page-->
		<?php endif ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			
			<ul class="postmetadata">
				<li>By: <?php the_author_posts_link() ?></li>
				<li><?php the_time('Y년m월d일'); ?></li>
				<li><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></li>
			</ul>
			
			<?php echo '<div class="featured-thumbnail">'; the_post_thumbnail(); echo '</div>'; ?> <!-- loades the post's featured thumbnail, requires Wordpress 3.0+ -->
			<div class="post-content">
				<?php the_content(__('Read more'));?>
			</div>
			
			<div class="share_buttons">
				<div class="share_twitter">
					<a href="http://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink() ?>" data-text="<?php the_title(); ?>" data-count="horizontal" data-via="PUMPL">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
				</div> <!-- .share_twitter -->
				<div class="share_facebook">
					<script src="http://connect.facebook.net/ko_KR/all.js#xfbml=1"></script><fb:like href="<?php the_permalink() ?>" layout="button_count" show_faces="false" width="225" font="arial"></fb:like>
				</div> <!-- .share_facebook -->
			</div> <!-- .share_buttons -->
			
			<div class="post-meta">
				<p>
					<strong><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></strong>
					<!-- <br />
					Categories: <?php the_category(', ') ?>
					<br />
					<?php if (the_tags('Tags: ', ', ', ' ')); ?> -->
				</p>
			</div><!--.postMeta-->
			
		<?php endwhile; else: ?>
			<div class="no-results">
				<p><strong>There has been an error.</strong></p>
				<p>We apologize for any inconvenience, please <a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('description'); ?>">return to the home page</a> or use the search form below.</p>
				<?php get_search_form(); ?> <!-- outputs the default Wordpress search form-->
			</div><!--noResults-->
		<?php endif; ?>
			
		<nav class="oldernewer">
			<div class="older">
				<p>
					<?php next_posts_link('&laquo; Older Entries') ?>
				</p>
			</div><!--.older-->
			<div class="newer">
				<p>
					<?php previous_posts_link('Newer Entries &raquo;') ?>
				</p>
			</div><!--.older-->
		</nav><!--.oldernewer-->
		
	</div> <!-- #content_main -->
	<div id="content_bot"></div>
</div> <!-- #content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>