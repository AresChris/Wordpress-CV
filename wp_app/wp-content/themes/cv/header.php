<!-- DEBUT HEADER -->
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="div-header-name">
        <h1>Mon Super CV</h1>
    </div>
    <label class="menu_hamburger" for="toggle">☰</label>
    <input type="checkbox" name="toggle" id="toggle">
        <div class="main_pages">
            <a href="http://localhost:8090/">Accueil</a>
            <a href="http://localhost:8090/?page_id=28">A propos</a>
            <a href="http://localhost:8090/?page_id=26">Blog</a>
            <a href="http://localhost:8090/?page_id=18">Me contacter</a>
            <a href="http://localhost:8090/?page_id=14">Réalisations</a>
        </div>

    <?php wp_nav_menu([
        'theme_location' => 'main'
    ]) ?>
    <h2><?php bloginfo('description'); ?></h2>

    <main>
        <!-- FIN HEADER -->