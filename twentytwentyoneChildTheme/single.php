<?php get_header() ?>

<div class="container">
    <div class="post-border-right" id="post-float-left">
        <h2 class="post-title"><?php  the_title() ?></h2>
        <span class="post-author"><?php the_author_meta('display_name', 1); ?></span>
    </div>
    <div id="post-float-right">
        <?php the_content() ?>
    </div>
</div>



<?php get_footer() ?>

