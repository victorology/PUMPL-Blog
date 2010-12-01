<?php get_header(); ?>

<div id="content">
	<div id="content_top"></div>
	<div id="content_main">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
			<article>
				<h1><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
				
				<ul class="postmetadata">
					<li>By: <?php the_author_posts_link() ?></li>
					<li><?php the_time('Y년m월d일'); ?></li>
				</ul>
				
				<?php echo '<div class="featured-thumbnail">'; the_post_thumbnail(); echo '</div>'; ?> <!-- loads the post's featured thumbnail, requires Wordpress 3.0+ -->

				<div id="post-content">
					<?php the_content(); ?>
					<div class="pagination">
						<?php wp_link_pages('before=<div class="pagination">&after=</div>'); ?>
					</div><!--.pagination-->
				</div><!--#post-content-->
			<article>
				
				<div class="share_buttons">
					<div class="share_twitter">
						<a href="http://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink() ?>" data-text="<?php the_title(); ?>" data-count="horizontal" data-via="PUMPL">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
					</div> <!-- .share_twitter -->
					<div class="share_facebook">
						<script src="http://connect.facebook.net/ko_KR/all.js#xfbml=1"></script><fb:like href="<?php the_permalink() ?>" layout="button_count" show_faces="false" width="225" font="arial"></fb:like>
					</div> <!-- .share_facebook -->
				</div> <!-- .share_buttons -->
			
			<!-- If a user fills out their bio info, it's included here -->
			<div id="post-author">
				<div id="author-gravatar">
					<!-- This avatar is the user's gravatar (http://gravatar.com) based on their administrative email address -->
					<?php echo get_avatar( get_the_author_meta('user_email'), $size = '88', $default = '<path_to_url>' ); ?>
				</div><!--#author-gravatar -->
				<h3><?php the_author_posts_link() ?></h3>
				<div id="authorDescription">
					<?php the_author_meta('description') ?> 
					<p><a href="http://twitter.com/victorology" target="_blank">트위터</a> | <a href="http://me2day.net/victory" target="_blank">미투데이</a></p>
					<!-- <div id="author-link">
						<p>View all posts by: <?php the_author_posts_link() ?></p>
					</div> -->
				</div><!--#author-description -->
			</div><!--#post-author-->

		</div><!-- #post-## -->

		<div class="newer-older">
			<div class="older">
				<p>
					<?php previous_post_link('%link', '&laquo; Previous post') ?> <!-- outputs a link to the previous post, if there is one -->
				</p>
			</div><!--.older-->
			<div class="newer">
				<p>
					<?php next_post_link('%link', 'Next Post &raquo;') ?> <!-- outputs a link to the next post, if there is one -->
				</p>
			</div><!--.older-->
		</div><!--.newer-older-->

		<?php comments_template( '', true ); ?>

	<?php endwhile; ?><!--end loop-->
	</div> <!-- #content_main -->
	<div id="content_bot"></div>
</div> <!-- #content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>