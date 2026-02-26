<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV</title>
</head>

<body>
    <?php
    get_header();
    if(have_posts()): // si l'url appelé correspond à du contenu (article, page, auteur, catégorie...)
            while(have_posts()): // pour chaque élément trouvé...
                the_post(); // On charge les données du contenu
    ?>
                <div class="widget">
    <?php
    the_widget(
        'WP_Widget_Calendar',
        array(
            'title' => 'Calendrier'
        ),
        array(
            'before_widget' => '<section class="calendar-sidebar">',
            'after_widget' => '</section>',
            'before_title' => '<h3 class="calendar-heading>',
            'after_title' => '</h3>'
        )
    );
    ?>
    </div>
    <div class="title">
        <h1><a href="http://localhost:8090/"><img decoding="async" src="https://png.pngtree.com/png-clipart/20240621/original/pngtree-a-house-emoji-png-image_15380267.png" width="40px" height="auto" title="Retour à l'accueil"></a><?php the_title();  // affichage du titre ?></h1>
    </div>
    
    <article class="montheme_article">
            <?php the_content(); //contenu du post ?>
        </article>
    <?php
            endwhile;
    endif;
    get_footer();
    ?>
</body>

</html>