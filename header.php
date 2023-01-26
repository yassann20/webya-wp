<!DOCTYPE html>
    <html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kaisei+Decol:wght@500&display=swap" rel="stylesheet">
        <title>ウェブ屋やす</title>
        <?php wp_head(); ?>
    </head>
    <body>
        <header>
            <a href="<?php echo home_url(); ?>">
                <img id="titleimg" src="<?php echo get_template_directory_uri(); ?>/photos/shop-logo 1.png">
            </a>
            <div id="menu-hum" class="SP">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <?php
		$args = array(
			'menu_class' => false,
			'container' => false,
		);
		wp_nav_menu($args);
		     ?>
        </header>