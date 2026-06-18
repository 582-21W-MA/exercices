<?php partial('head', ['title' => 'Interlope', 'bodyClass' => 'project']) ?>

<header>
    <div>
        <?php partial('nav') ?>
        <h1>Interlope</h1>
    </div>
    <p>
        Poster for Interlope #4 magazine. (2022)
    </p>
</header>

<main>
    <?php partial('images_list', [
        'paths' => images_for('interlope'),
        'project_title' => 'Interlope',
    ]) ?>
</main>

<?php partial('footer') ?>
