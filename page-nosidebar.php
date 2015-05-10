<?php
/*
Template Name: nosidebar
*/
?>

<!-- Este template eh usado nas paginas: contato, historia -->

<?php get_header(); ?>

<div class="content-nosidebar">

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