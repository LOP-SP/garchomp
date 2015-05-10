<?php
/*
Template Name: textwithsidebar
*/
?>

<!-- Este template eh usado nas paginas: ranking, lideres, regras. -->

<?php get_header(); ?>

<div id="left-navi-blog">
<?php 
	if ( is_page("regras") || $post->post_parent == '10') {
		get_sidebar('regras');
	}
	else if ( is_page("lideres") || $post->post_parent == '14' ) {
		get_sidebar('lideres');
	}
	else if ( is_page ("ranking") || $post->post_parent == '12') {
		get_sidebar('ranking');
	}
?>
</div>

<div class="content">

<!-- START OF THE LOOP -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="post">
<div class="post-title">
<h2><?php the_title(); ?></h2>
</div> <!-- POST TITLE -->

<div class="post-content">	
<?php the_content(''); ?>
</div> <!-- POST CONTENT -->

<div class="post-meta">
<?php wp_link_pages(array('before' => '<p><strong>anterior:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
</div>
</div>
	      				
<?php endwhile; endif; ?>
<?php edit_post_link('EDITAR', '<p>', '</p>'); ?>	
</div>

<?php get_footer(); ?>