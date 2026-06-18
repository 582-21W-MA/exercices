<?php partial('head', ['title' => 'Inner Demon Delectatio', 'bodyClass' => 'project']) ?>

<header>
    <div>
        <?php partial('nav') ?>
        <h1>Inner Demon Delectatio</h1>
    </div>
    <p>
        Exhibition catalogue for Anteism Books and The Hole. (2022)
    </p>
</header>

<main>
    <?php partial('images_list', [
        'paths' => images_for('inner-demon-delectatio'),
        'project_title' => 'Inner Demon Delectatio',
    ]) ?>
</main>

<?php partial('footer') ?>
