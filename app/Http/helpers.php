<?php

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