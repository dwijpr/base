<?php

namespace App\Http\Helpers;

use Markdown;

class MDHelper {
    public function toHtml($text, $title = false) {
        if (!@$text) {
            return false;
        }
        $parsed = Markdown::convertToHtml($text);
        if ($title) {
            $parsed = strip_tags($parsed, '<a><em><strong>');
        }
        return $parsed;
    }
}