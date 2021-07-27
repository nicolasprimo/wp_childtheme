<?php get_header() ?>

<div class="container">
    <?php 
    if ( have_posts() ) : 
        while ( have_posts() ) : the_post(); 
        ?>
        <div class="post-border-right" id="post-float-left">
        <h2 class="post-title"><?php  the_title() ?>
    </h2>
        <?php the_post_thumbnail()
        ?>
        <!-- Grace au fait que l'on est dans la boucle while avec comme parametre the_post() on à accès a la functon the_author() qui permet de recuperer l'auteur du post -->
        <span class="post-author"><?php the_author(); ?></span>
    </div>
    <div id="post-float-right">
        <!-- echo get_the_date() peut etre remplacé par the_date() grace a notre boucle while avec le parmetre the_post() -->
    <span class="post-date"> <?php the_date() ?></span>
        <?php the_content() ?>
    </div>
    <?php
        endwhile; 
    endif; 
    ?>
</div>



<?php get_footer() ?>

