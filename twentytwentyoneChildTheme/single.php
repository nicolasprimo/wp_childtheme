<?php get_header() ?>


<h2><?php the_title() ?></h2>


<?php the_content() ?>

<!-- the_author_meta('display_name', 1) va nous permetre d'afficher des informations d'un utilisateur, il attend deux parametre le premier c'est quelle information ? pour le coup on veut le nom de l'utilisateur et le second c'est quel est l'id dans la DB de cet user pour savoir le quel séléctionné
the_author_meta( 'display_name', $userID )
Ceci n'est pas une super façon de faire, car si l'on va voir l'article d'un autre auteur on aura le mauvais qui s'affiche, nous verrons plus tard comment faire ca de manière plus optimisée.
-->
<?php the_author_meta('display_name', 1); ?>


<?php get_footer() ?>