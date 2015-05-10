<div class="widget">
<div class="widget-header">Colunas</div>
<div class="widget-separator"></div>
<ul><?php wp_list_categories(array('exclude' => '1', 'title_li' => '')); ?></ul>
</div> <!-- CATEGORIAS WIDGET -->

<div class="widget">
<script src="<?php bloginfo('template_directory'); ?>/scripts/widget.js"></script>
<script>
new TWTR.Widget({
  version: 2,
  type: 'profile',

  rpp: 4,
  interval: 6000,
  width: 200,
  height: 300,
  footer: "Siga-nos!",
  theme: {
    shell: {
      background: '#FFF',
      color: '#000000'
    },
    tweets: {
      background: '#ffffff',
      color: '#000000',
      links: '#747a71'
    }
  },
  features: {
    scrollbar: false,
    loop: false,
    live: false,
    hashtags: true,
    timestamp: true,
    avatars: false,
    behavior: 'all'
  }
}).render().setUser('lop_sp').start();
</script>
</div> <!-- TWITTER WIDGET -->

<div class="widget">
<div class="widget-header">Arquivo</div>
<div class="widget-separator"></div>
<ul><?php wp_get_archives(array('limit' => 6)); ?></ul>
</div> <!-- ARQUIVO WIDGET -->

<div class="widget feeds center">
<a href="<?php bloginfo('rss2_url'); ?>" title="Veja nossos posts através de RSS!"><img src="<?php bloginfo('template_directory'); ?>/images/small-rss.jpg" /></a>
</div> <!-- RSS WIDGET -->

<div class="widget center">
	<div class="propaganda">
	<a href="http://www.copag.com.br/pokemon" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/copag.bmp" alt="COPAG tcg pokémon lop lopsp lop-sp sp lop-br lopbr pokemon São Paulo SP" width=200px /></a>
	</div>

	<div class="propaganda">
	<a href="http://kyohq.wordpress.com/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/KyoHQbaixa2.jpg" alt="KyoHQ loja quadrinhos HQ manga videogames card games tcg" /></a>
	</div>
</div> <!-- WIDGET -->