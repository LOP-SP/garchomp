<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="author" content="Carlos Agarie" />
<meta name="description" content="Site oficial da mais antiga Liga Pokemon de Sao Paulo. Desde 2003 organizando campeonatos na cidade!" />
<meta name="keywords" content="pokemon, pokémon, 3ds, black, white, bw2, sao paulo, SP, liga, eventos, lop-sp, lop, lop-br, anifriends, anime friends, animefriends" />

<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Arquivo do Blog <?php } ?> <?php wp_title(); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


<?php wp_head(); ?>

</head>

<?php flush(); ?>
<body>
<div id="container">
	<div id="header">

	<div id="banner">
		<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/banner-sem-titulo.jpg" alt="liga pokemon sp br ds black white" /></a>
	</div> <!-- BANNER -->

<div id="top-navi">
	<ul>
		<li><a href="<?php echo get_page_link(8); ?>">Hist&oacute;ria</a></li>
		<li><a href="<?php echo get_page_link(14); ?>">L&iacute;deres</a></li>
		<li><a href="<?php echo get_page_link(10); ?>">Regras</a></li>
		<li><a href="<?php echo get_page_link(12); ?>">Ranking</a></li>
		<li><a href="<?php echo get_page_link(2); ?>">Contato</a></li>
	</ul>
</div> <!-- TOP NAVI -->

</div> <!-- HEADER -->
