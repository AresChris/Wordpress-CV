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
    <?php wp_nav_menu([
        'theme_location' => 'main'
    ]) ?>
    <h2><?php bloginfo('description'); ?></h2>
    
<main>
<!-- FIN HEADER -->