<?php

namespace App\Http\Helpers;

use Html;

class AssetHelper {
    public function scripts($r_paths) {
        $tags = [];
        foreach($r_paths as $r_path) {
            $tags[] = $this->script($r_path);
        }
        return implode("\n", $tags);
    }

    public function styles($r_paths) {
        $tags = [];
        foreach ($r_paths as $rpath) {
            $tags[] = $this->style($r_path);
        }
        return implode("\n", $tags);
    }

    public function script($path) {
        return Html::script(url($path));
    }

    public function style($path) {
        return Html::style(url($path));
    }
}