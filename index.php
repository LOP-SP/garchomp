<?php get_header(); ?>

<div id="left-navi-blog">
<?php get_sidebar();?>
</div>

<?php $my_query = new WP_Query('category_name=torneio&posts_per_page=1'); ?>

<!-- POST DE TORNEIOS -->
<!-- START OF THE LOOP -->
<div class="content">

<?php if (have_posts()) : while ($my_query->have_posts()) : $my_query->the_post(); ?>
<?php $do_not_duplicate = $post->ID; ?>
	
	<div class="post">
		<h2>
			<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
			<br>
			<small>
				<?php the_time('j'); echo " de "; the_time('F, Y'); ?> por <?php the_author_posts_link(); ?>
			</small>
		</h2>

		<div class="post-content">
			<?php the_content('Leia o post completo &#187;'); ?>
			<?php the_tags( '<div class="main-meta"> Tags: ', ', ', '</div>'); ?>

			<div class="clear"></div>

				<div class="post-meta">
					<!--<?php trackback_rdf(); ?>-->
					<?php comments_popup_link('0 coment&aacute;rios', '1 coment&aacute;rio', '% coment&aacute;rios'); ?> <?php edit_post_link('edit','<strong>|</strong> ',''); ?> 
				</div> <!-- POST META -->
		</div> <!-- POST CONTENT -->
	</div <!-- post -->
	
<?php endwhile; ?>

<?php else : ?> Não encontrado!
<?php endif; ?>
<!-- END OF THE LOOP -->

<!-- POSTS NORMAIS -->
<!-- START OF THE LOOP -->

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php if( $post->ID == $do_not_duplicate ) continue; ?>

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

<?php else : ?> Não encontrado!
<?php include (TEMPLATEPATH . "/searchform.php"); ?> 
<?php endif; ?>
<!-- END OF THE LOOP -->

<?php include (TEMPLATEPATH . "/nav.php"); ?>

</div> <!-- CONTENT -->

<?php get_footer(); ?>