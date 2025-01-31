<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Convention Web de Montréal</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Source+Sans+Pro:900" rel="stylesheet">
    <!--    <link rel="stylesheet" href="js/slick/slick.css">-->
    <!--    <link rel="stylesheet" href="js/slick/slick-theme.css">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">

    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-3.2.1.min.js"></script>
    <!--    <script src="js/slick/slick.min.js"></script>-->
    <script src="<?php bloginfo('template_url'); ?>/js/script.js"></script>

    <?php wp_head(); ?>

</head>
<body>

<nav class="nav-mobile" id="nav-mobile">
    <div class="wrapper">
        <nav>
            <div>
                <a href="<?php echo get_option("siteurl"); ?>"><img src="<?php bloginfo('template_url'); ?>/img/logo/logo_white.svg" alt="Logo Convention Web de Montréal"
                                          class="logo"></a>
            </div>
            <div>
                <a href="<?php the_field('cw4_billets', 'option'); ?>" class="btn btn-white-border">Billeterie</a>
                <label for="show-menu-2" class="show-menu"><i class="fa fa-bars" aria-hidden="true"></i></label>
                <input type="checkbox" id="show-menu-2" class="toggle-menu">
            </div>
        </nav>
        <div class="menu-mobile">
            <?php wp_nav_menu( array(
                    'theme_location' => "menu_principal",)
            ); ?>
        </div>
    </div>
</nav>

<header>
    <div class="wrapper">
        <nav>
            <div>
                <a href="<?php echo get_option("siteurl"); ?>"><img src="<?php bloginfo('template_url'); ?>/img/logo/logo.svg" alt="Logo Convention Web de Montréal"
                                          class="logo"></a>
                <?php wp_nav_menu( array(
                        'theme_location' => "menu_principal",)
                ); ?>
            </div>
            <div>
                <a href="<?php the_field('cw4_billets', 'option'); ?>" class="btn btn-green">Billeterie</a>
                <label for="show-menu" class="show-menu"><i class="fa fa-bars" aria-hidden="true"></i></label>
                <input type="checkbox" id="show-menu" class="toggle-menu">
            </div>
        </nav>
    </div>
</header>