<?php snippet('header')?>
<?php snippet('menu-start')?>

<h1 class="logo-type">Wunderblock</h1>

<main class="wrapper">

    <!-- Articles -->

    <section class="headlines-wrapper">
        <?php snippet('articles', [
            'article' => page('articles')
                ->children()
                ->listed()
                ->filterBy('featured', true)
        ]) ?>
    </section>
</main>
<?php snippet('footer')?>