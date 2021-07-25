<?php

// 1.Je créer une function que j'appelle comme je veux, je devrais juste faire référénce a son nom ligne 8
function theme_enqueue_styles()
{
    // 2. J'utilise une function "wp_enqueue_style" qui est une function de Wordpress est qui permet de rajouter des link en html vers les fichiers css qu'on choisira
    // De plus j'utilise get_stylesheet_directory_uri() qui permet de retrouver le chemin vers le dossier de mon theme enfant que je concatène a style.css pour avoir le bon chemin dans mon link
    wp_enqueue_style('style_child', get_stylesheet_directory_uri() . '/style.css');
}

// 3. add_action est une function qui permet d'utiliser ce qu'on appelle des Hooks "crochets" cela permet de lui dire quand a quel moment du chargement de tout nos fichiers charger la function theme_enqueue_styles créer plus haut
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');


// Il existe de nombreux hooks et ils sont tous charger a des moments différent, cela permet d'attendre qu'une certaine function ou fichier soit charger avant de passer a une autre function/fichier etc... c'est comme si vous vouliez eviter de dabord charger le css avant le html, car si on charger le html apres le css, le css ne sait pas sur quoi s'appliquer car le html n'existait pas encore au moment de son chargement.
// Je vous propose d'aller inspecter votre page web et de chercher apres le link css qui porte le nom de style_child si vous avez garder le meme nom que moi, juste pour voir qu'il a bien été ajouté.