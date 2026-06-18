<?php partial('head') ?>

<header>
    <h1>Maxime Pigeon</h1>
    <ol>
        <?php foreach (list_projects() as $path => $name): ?>
            <li>
                <a href="<?= $path ?>"><?= $name ?></a>
            </li>
        <?php endforeach ?>
        <li>
            <a href="/about/">About</a>
        </li>
    </ol>
</header>

<?php partial('footer') ?>
