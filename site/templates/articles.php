<?php snippet('header') ?>
<?php snippet('menu') ?>

<main>



    <?php snippet('articles', [
        'article' => $page->children()->listed()->filterBy('featured', true)
    ]) ?>

    <?php snippet('footer') ?>