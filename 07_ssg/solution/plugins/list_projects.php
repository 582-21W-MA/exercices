<?php

/**
 * Lists projects in public/projects.
 */
function list_projects(): array {
    $projects_dir = SRC_DIR . 'projects/';
    $folders = glob($projects_dir . '*', GLOB_ONLYDIR);
    $projects = [];
    foreach ($folders as $folder) {
        $basename = basename($folder);
        $path = '/projects/' . $basename;
        $projects[$path] = $names[$basename] ?? ucwords(str_replace(
            '-',
            ' ',
            $basename,
        ));
    }
    return $projects;
}
