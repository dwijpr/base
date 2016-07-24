<?php

/*
 * HtmlHelper
 */

if (!function_exists('get_first_p')) {
    function get_first_p($html) {
        return app('html_helper')->firstP($html);
    }
}

/*
 * MDHelper
 */

if (!function_exists('md_to_html_title')) {
    function md_to_html_title($text) {
        return app('md_helper')->toHtml($text, true);
    }
}

if (!function_exists('md_to_html')) {
    function md_to_html($text) {
        return app('md_helper')->toHtml($text);
    }
}

/*
 * FileHelper
 */

if (!function_exists('strip_ext')) {
    function strip_ext($filepath) {
        return app('file_helper')->stripExt($filepath);
    }
}

/*
 * DateTimeHelper
 */

if (!function_exists('year_months')) {
    function year_months($end, $start) {
        return app('datetime_helper')->yearMonths($end, $start);
    }
}

/*
 * LogHelper
 */

if (!function_exists('l')) {
    function l($key, $object = []) {
        return app('log_helper')->log($key, $object);
    }
}

/*
 * AssetHelper
 */

if (!function_exists('scripts')) {
    function scripts($r_paths) {
        return app('asset_helper')->script($r_paths);
    }
}

if (!function_exists('styles')) {
    function styles($r_paths) {
        return app('asset_helper')->styles($r_paths);
    }
}

if (!function_exists('r_script')) {
    function r_script($path) {
        return app('asset_helper')->script($path);
    }
}

if (!function_exists('r_style')) {
    function r_style($path) {
        return app('asset_helper')->style($path);
    }
}

/*
 * StringHelper
 */

if (!function_exists('snake_to_human')) {
    function snake_to_human($snake_name) {
        return app('string_helper')->snakeToHuman($snake_name);
    }
}