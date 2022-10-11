<ul class="menu">
    <?php foreach ($kirby->languages() as $language): ?>
    <li<?php e($kirby->language() == $language, ' class="active"')?>>
        <a href="<?=$page->url($language->code())?>" hreflang="<?php echo $language->code() ?>" class="language f-sans">
            <?=html($language->name())?>
        </a>
        </li>
        <?php endforeach?>
        <li>
            <a href="/" class="back-link">
                <?= svg('assets/icons/cross.svg') ?>
            </a>
        </li>
</ul>