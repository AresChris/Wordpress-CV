<?php

get_header();
?>
<div class="title">
    <h1><a href="http://localhost:8090/"><img decoding="async" src="https://png.pngtree.com/png-clipart/20240621/original/pngtree-a-house-emoji-png-image_15380267.png" width="40px" height="auto" title="Retour à l'accueil"></a>Blog</h1>
</div>

<?php
if (have_posts()): // si l'url appelé correspond à du contenu (article, page, auteur, catégorie...)
    while (have_posts()): // pour chaque élément trouvé...
        the_post(); // On charge les données du contenu
?>

        <article class="montheme_article">
            <article>
                <h1><?php the_title() ?></h1>
                <?php the_content(); //contenu du post 
                ?>
            </article>
        </article>
<?php
    endwhile;
endif;

get_footer();
?>