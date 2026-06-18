<?php partial('head', ['title' => 'Musée sans mur', 'bodyClass' => 'project']) ?>

<header>
    <div>
        <?php partial('nav') ?>
        <h1>Musée sans mur</h1>
    </div>
    <p>
        Self-initiated publication exploring the notion of "passage" as it relates to sculpture and type design. It uses the fold as an abstracting device to draw connections between images. (2021, 4.25 × 11 in)
    </p>
</header>

<main>
    <?php partial('images_list', [
        'paths' => images_for('musee-sans-mur'),
        'project_title' => 'Musée sans mur',
    ]) ?>
</main>

<?php partial('footer') ?>
