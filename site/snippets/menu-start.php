<ul class="menu">
    <?php foreach ($kirby->languages() as $language): ?>
    <li<?php e($kirby->language() == $language, ' class="active"')?>>
        <a href="<?=$page->url($language->code())?>" hreflang="<?php echo $language->code() ?>" class="language">
            <?=html($language->name())?>
        </a>
        </li>
        <?php endforeach?>

</ul>