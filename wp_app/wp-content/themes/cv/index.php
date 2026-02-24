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
    <h1><?php the_title();  // affichage du titre ?></h1>
    <article class="montheme_article">
        <article>
            <?php the_content(); //contenu du post ?>
        </article>
    <?php
            endwhile;
    endif;
    get_footer();
    ?>
</body>
</html>
