<html>
<head>
  <meta charset="UTF8">
  <title><?php bloginfo('name'); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>"/>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ermile.css">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, height=device-height, minimum-scale=1.0 maximum-scale=1.0, user-scalable=no, minimal-ui"/>
  <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico"/>

  <meta name="site:root" content="<?php bloginfo('url'); ?>"/>
  <meta name="twitter:card" content="summary"/>
  <meta name="twitter:title" content="Rabbit Air"/>
  <meta name="twitter:description" content="<?php bloginfo('description'); ?>"/>
  <meta name="twitter:image" content="<?php bloginfo('template_url'); ?>/images/logo.png"/>
  <meta property="og:image" content="<?php bloginfo('template_url'); ?>/images/logo.png"/>
  <meta property="og:url" content="<?php bloginfo('url'); ?>"/>
  <meta property='og:locale' content='fa_IR'/>
</head>
<body class="rtl">

<header>
  <div class="container">
    <a href="<?php bloginfo('url');?>"><img class="logo" src="<?php bloginfo('template_url'); ?>\images\logo.png"></a>
    <h1><a href="<?php bloginfo('url');?>"><?php bloginfo('name'); ?></a></h1>
    <h2><a href="<?php bloginfo('url');?>"><?php bloginfo('description'); ?></a></h2>
    <nav>
      <?php wp_nav_menu(['theme_location' => 'menu_header']); ?>
    </nav>
  </div>
</header>