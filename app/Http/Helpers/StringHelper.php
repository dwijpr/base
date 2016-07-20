<?php

namespace App\Http\Helpers;

class StringHelper {
    public function snakeToHuman($snake_name) {
        $snake_name = str_replace('_', ' ', $snake_name);
        return ucwords($snake_name);
    }
}