<ul>
    <?php foreach($article as $project): ?>
    <li>
        <a href="<?= $project->url() ?>" class="start-heading">
            <?= $project->heading() ?>
        </a>
    </li>
    <?php endforeach ?>
</ul>