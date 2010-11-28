<?php get_header(); ?>

<div id="content">
	<div id="content_top"></div>
	<div id="content_main">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
			<article>
				<h1><strong><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></strong></h1>
				
				<div class="blog_divider"></div>
				
				<?php edit_post_link('<small>Edit this entry</small>','',''); ?>
				<?php echo '<div class="featured-thumbnail">'; the_post_thumbnail(); echo '</div>'; ?> <!-- loades the post's featured thumbnail, requires Wordpress 3.0+ -->

				<div id="post-content">
					<?php the_content(); ?>
					<div class="pagination">
						<?php wp_link_pages('before=<div class="pagination">&after=</div>'); ?>
					</div><!--.pagination-->
				</div><!--#post-content-->
			<article>
				
			<p>
				<div style="float:left"><a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="PUMPL">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script></div>
				<script src="http://connect.facebook.net/ko_KR/all.js#xfbml=1"></script><fb:like layout="button_count" show_faces="false" width="225" font="arial"></fb:like>
			</p>
				
			<div class="blog_divider"></div>
				
			<div id="post-meta">
				<p>
					<?php the_time('Y년m월d일'); ?>, <?php the_time() ?>에 글을 올렸습니다.
				</p>
				<!-- <p>
					Categories: <?php the_category(', ') ?>
					<br />
					<?php the_tags('Tags: ', ', ', ' '); ?>
				</p> -->
			</div><!--#post-meta-->
			
			<div class="blog_divider"></div>
			
			<!-- If a user fills out their bio info, it's included here -->
			<div id="post-author">
				<h3>이 글을 <?php the_author_posts_link() ?>가 작성 했습니다.</h3>
				<div id="author-gravatar">
					<!-- This avatar is the user's gravatar (http://gravatar.com) based on their administrative email address -->
					<?php echo get_avatar( get_the_author_meta('user_email'), $size = '88', $default = '<path_to_url>' ); ?>
				</div><!--#author-gravatar -->
				<div id="authorDescription">
					<?php the_author_meta('description') ?> 
					<p><a href="http://twitter.com/victorology" target="_blank">빅터의 트위터</a> | <a href="http://me2day.net/victory" target="_blank">빅터의 미투데이</a></p>
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