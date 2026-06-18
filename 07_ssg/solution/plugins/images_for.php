<?php

/**
 * Find images in public/assets/images whose filenames contain the given
 * search string.
 */
function images_for(string $search): array {
    $files = glob(SRC_DIR . 'assets/images/*' . $search . '*');
    $images = [];
    foreach ($files as $file) {
        $images[] = str_replace(SRC_DIR, '/', $file);
    }
    sort($images);
    return $images;
}
