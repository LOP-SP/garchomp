<div class="widget feeds center">
<a href="<?php bloginfo('rss2_url'); ?>" title="Veja nossos posts através de RSS!"><img src="<?php bloginfo('template_directory'); ?>/images/small-rss.jpg" /></a>
</div> <!-- RSS WIDGET -->

<div class="widget">
<ul>
<?php wp_list_pages( 'title_li=&child_of=14' ); ?>
</ul>
</div>