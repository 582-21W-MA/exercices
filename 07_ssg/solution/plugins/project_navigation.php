<?php

/**
 * Build navigation items for the current project page.
 */
function project_navigation_items(): array {
    $items = [
        'Index' => '/',
    ];

    $project_paths = array_keys(list_projects());
    $current_path = rtrim(page_url(), '/');
    $current_index = array_search($current_path, $project_paths, true);

    if ($current_index === false) {
        return $items;
    }

    if (isset($project_paths[$current_index + 1])) {
        $items['Next'] = $project_paths[$current_index + 1];
    }

    if (isset($project_paths[$current_index - 1])) {
        $items['Previous'] = $project_paths[$current_index - 1];
    }

    $items['About'] = '/about/';

    return $items;
}
