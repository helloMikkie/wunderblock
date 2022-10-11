<?php snippet('header')?>

<?php snippet('menu')?>
<h1 class="logo-type">Wunderblock</h1>
<main class="article-content">
    <h1 class="article-heading"><?= $page->heading() ?></h1>
    <?php foreach ($page->page_content()->toBlocks() as $block): ?>
    <div id=" <?= $block->id() ?>" class="block block-type-<?= $block->type() ?>">
        <?= $block ?>
    </div>
    <?php endforeach ?>
</main>
<?php snippet('footer-article')?>