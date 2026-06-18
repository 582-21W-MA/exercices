<?php

/**
 * Get the URL of the current page.
 */
function page_url(): string {
    return $_SERVER['REQUEST_URI'];
}
