<?php

namespace App\Http\Helpers;

class HtmlHelper {
    public function firstP($html) {
        $start = strpos($html, '<p>');
        $end = strpos($html, '</p>', $start);
        return substr($html, $start, $end-$start+4);
    }
}