<!-- On fait appel a la function get_header(), qui est une function prédéfinie de wordpress pour injecter le header là ou elle est appelée
https://developer.wordpress.org/reference/functions/get_header/ -->
<?php get_header() ?>

<!-- Utilisation de la function the_title() elle permet de recuperer le titre d'un article si bien sur on est sur la page web d'un article-->
<h2><?php the_title() ?></h2>
Il n'y a pour le moment pas le contenu de l'article que l'on essaie de voir :(

<!-- Pareil que get_header() mais pour le footer -->
<?php get_footer() ?>