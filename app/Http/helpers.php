<?php

if (!function_exists('codeToHumanWords')) {
    function codeToHumanWords($code) {
        $words = implode(' ', explode('_', $code));
        $words = ucwords($words);
        return $words;
    }
}