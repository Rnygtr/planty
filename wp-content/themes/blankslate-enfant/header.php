<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="wrapper" class="hfeed">
<header id="header" role="banner">
<div class="bar-nav flex-between">
<div id="logo">
   <a href="http://localhost/planty/" ><img src="logo.png" alt="logo planty" width="190px" height="20px"> </a>
</div>

<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' ) ); ?>
<a class="commander" href="http://localhost/planty/commander/">Commander</a>
</div>
</nav>
</header>
<div id="container">
<main id="content" role="main">
<?php
echo "<body bgcolor='#ece2da'>";?>