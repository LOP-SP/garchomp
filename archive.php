<?php get_header(); ?>

<div id="left-navi-blog">
<?php get_sidebar(); ?>
</div>

<div class="content">

<?php if (have_posts()) : ?>

<div class="archive-title">
<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

<h1>
	<?php /* If this is a category archive */ if (is_category()) { ?>				
		<?php single_cat_title(); ?>
		
	<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<?php the_time('j. F Y'); ?>		
		
	<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<?php the_time('F Y'); ?>

	<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<?php the_time('Y'); ?>
				
	<?php /* If this is an author archive */ } elseif (is_author()) { ?>
		Posts feitos por <i><?php the_author_meta( 'user_nicename', $post->post_author ); ?></i>
		
	<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
	Arquivo do blog!

	<?php } ?>
</h1>

</div> <!-- title: category name -->

<?php if( category_description() ) { ?>
	<div class="post-content">
		<?php echo category_description(); ?>
	</div> <!-- content: category description -->
<?php }
else { ?>
	<div class="post-content">
		<?php echo ""; ?>
	</div> <!-- just to keep the space alright -->
<?php } ?>

<div class="clear"></div>

<div class="post-meta"></div>	

<?php while (have_posts()) : the_post(); ?>

<div class="post">
	<h2>
		<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
		<br>
		<small>
			<?php the_time('j'); echo " de "; the_time('F, Y'); ?> por <?php the_author_posts_link(); ?>
		</small>
	</h2>

<?php include (TEMPLATEPATH . "/post-content.php"); ?>

</div> <!-- post -->
	
		<?php endwhile; ?>
	
<?php else : ?>
	Não encontrado. :(
	<?php include (TEMPLATEPATH . '/searchform.php'); ?>
<?php endif; ?>
		
<?php include (TEMPLATEPATH . "/nav.php"); ?>
		
</div> <!-- content -->

<?php get_footer(); ?>