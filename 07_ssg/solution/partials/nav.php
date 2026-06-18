<nav class="site-nav">
    <ul>
        <?php foreach (project_navigation_items() as $label => $path): ?>
            <li>
                <a
                    href="<?= $path ?>"
                    class="<?= rtrim(page_url(), '/') === rtrim($path, '/')
            ? 'current'
            : '' ?>"
                >
                    <?= $label ?>
                </a>
            </li>
        <?php endforeach ?>
    </ul>
</nav>
