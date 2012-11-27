<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml"
      xmlns:fb="https://www.facebook.com/2008/fbml">
<head prefix="og: http://ogp.me/ns# iqe-site: 
                  http://ogp.me/ns/apps/iqe-site#">
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" >
    <title><?php wp_title ( '|', true,'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
    <link rel="stylesheet" href="<?php bloginfo('url'); ?>/wp-content/themes/PrivateLawyer/jquery.fancybox.css?v=2.1.3" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php bloginfo('url'); ?>/wp-content/themes/PrivateLawyer/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />

    <?php
    wp_enqueue_script('jquery');
    wp_enqueue_script('cycle', get_template_directory_uri() . '/js/jquery.cycle.all.min.js', 'jquery', false);
    wp_enqueue_script('cookie', get_template_directory_uri() . '/js/jquery.cookie.js', 'jquery', false);
    if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
    wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', 'jquery', false);
    wp_head();?>
    <script type="text/javascript" src="<?php bloginfo('url'); ?>/wp-content/themes/PrivateLawyer/js/jquery.fancybox.pack.js?v=2.1.3"></script>
    <script type="text/javascript" src="<?php bloginfo('url'); ?>/wp-content/themes/PrivateLawyer/js/jquery.fancybox-buttons.js?v=1.0.5"></script>
    <meta property="og:description" content="IQExpress is a fun site :)" />
    <meta property="og:image" content="http://iq-express.com/wp-content/uploads/2012/10/iq-logo.png" />
</head>
<body <?php body_class(); ?>>
<?php include_once(TT_TPL_ROOT_PATH.'header_tpl.php'); //header content area ?> 
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/fonts/cufon-yui.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/fonts/Humanst521_BT_400.font.js"></script>
