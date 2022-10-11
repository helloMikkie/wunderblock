<?php snippet('header') ?>
<?php snippet('menu') ?>

<h1 class="logo-type">Wunderblock</h1>

<main class="article-content">


    <h1 class="article-heading"><?= $page->heading() ?></h1>

    <?php foreach ($page->page_content()->toBlocks() as $block): ?>
    <div id=" <?= $block->id() ?>" class="block block-type-<?= $block->type() ?>">
        <?= $block ?>
    </div>
    <?php endforeach ?>


    <ul class="download-list">
        <?php
        $files = $page->files()->filterBy('extension', 'pdf');
        foreach ($files as $pdf) : ?>
        <li class=" download">
            <a href="<?= $pdf->url() ?>" target="_blank">
                <?= $pdf->filename() ?>
                <span>[<?= $pdf->niceSize() ?>]</span>
            </a>
        </li>
        <?php endforeach ?>
    </ul>

</main>
<?php snippet('footer-article') ?>