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
    <label class="menu_hamburger" for="toggle">☰</label>
    <input type="checkbox" name="toggle" id="toggle">
    <div class="main_pages">
        <a href="http://localhost:8090/">Accueil</a>
        <a href="http://localhost:8090/?page_id=28">A propos</a>
        <a href="http://localhost:8090/blog/">Blog</a>
        <a href="http://localhost:8090/me-contacter/">Me contacter</a>
    </div>
    
    <?php wp_nav_menu([
        'theme_location' => 'main'
    ]) ?>
    <h2><?php bloginfo('description'); ?></h2>

    <main>
        <!-- FIN HEADER -->
    <aside class="site_sidebar">
    <ul>
        <?php dynamic_sidebar('blog-sidebar'); ?>
    </ul>
    <ul>
        <?php dynamic_sidebar('blog-sidebar-2'); ?>
    </ul>
</aside>
<aside class="site_sidebar2">
    <ul>
        <?php dynamic_sidebar('blog-sidebar-3'); ?>
    </ul>
</aside>