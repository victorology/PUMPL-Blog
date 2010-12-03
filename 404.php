<?php get_header(); ?>
<div id="content">
	<div id="content_top"></div>
	<div id="content_main">
		
		<?php if (smart404_loop()) : ?>
		<p>혹시 밑에 있는 포스트를 찾고 있으세요?:</p>
		<?php while (have_posts()) : the_post(); ?>
		<h4><a href="<?php the_permalink() ?>"
		  rel="bookmark"
		title="<?php the_title_attribute(); ?>">
		<?php the_title(); ?></a></h4>
		  <small><?php the_excerpt(); ?></small>
		<?php endwhile; ?>
		<?php endif; ?>
	
	</div> <!-- #content_main -->
	<div id="content_bot"></div>
</div> <!-- #content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>