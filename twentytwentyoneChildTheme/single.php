<?php get_header() ?>

<div class="container">
    <div class="post-border-right" id="post-float-left">
        <h2 class="post-title"><?php  the_title() ?></h2>
        <!-- Affichage de l'image mise en avant sur un article, verifiez bien que vous en ayez mise une sur votre article ! -->
        <?php the_post_thumbnail()
        ?>
        <span class="post-author"><?php the_author_meta('display_name', 1); ?></span>
    </div>
    <div id="post-float-right">
        <!-- Affichage de la date de l'article, la différence entre une methode qui commence par get_ ou non se situe dans le fait que devant une methode démarrant par get_ il faut écrire echo, "echo" sert en php a écrire des choses -->
       <span class="post-date"> <?php echo get_the_date() ?></span>
        <?php the_content() ?>
    </div>
</div>



<?php get_footer() ?>

