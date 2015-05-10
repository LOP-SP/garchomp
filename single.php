<?php get_header(); ?>

<div id="left-navi-blog">
<?php get_sidebar(); ?>    
</div>

<div class="content">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="post">
	<h2>
		<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
		<br>
		<small>
			<?php the_time('j'); echo " de "; the_time('F, Y'); ?> por <?php the_author_posts_link(); ?>
		</small>
	</h2>

<div class="post-content">	
<?php the_content(''); ?>

<div class="clear"></div>

<div class="single-meta">
<!--<?php trackback_rdf(); ?>-->
			
<?php the_time('j'); echo " de "; the_time('F, Y'); ?> por <?php the_author_posts_link(); ?> <br/>Categoria: <?php the_category(', '); ?><br/><?php the_tags( 'Tags: ', ', ', ''); ?><br/>

<?php wp_link_pages(array('before' => '<p><strong>Anterior:</strong> ',
													'after' => '</p>',
													'next_or_number' => 'number')); ?>

</div> <!-- .SINGLE-META -->

<div class="center"><?php previous_post_link(); ?> &bull; <?php next_post_link(); ?></div>

</div> <!-- .POST-CONTENT -->
</div> <!-- post -->

<?php comments_template(); ?>
<?php endwhile; else: ?>
No Comments
<?php endif; ?>

</div> <!-- CONTENT -->

<?php get_footer(); ?>