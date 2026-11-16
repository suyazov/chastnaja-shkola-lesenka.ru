<?php
/**
 * Plugin Name: Lesenka sitemap in robots.txt
 */

add_filter('robots_txt', static function (string $robots, bool $public): string {
    if (!$public || !empty($_SERVER['RESTORE_PREVIEW_URL'])) {
        return $robots;
    }

    $robots = preg_replace('/^Sitemap:[^\r\n]*(?:\r?\n|$)/mi', '', $robots);
    return rtrim($robots) . "\nSitemap: " . home_url('/sitemap_index.xml') . "\n";
}, PHP_INT_MAX, 2);
