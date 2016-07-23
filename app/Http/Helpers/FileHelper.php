<?php

namespace App\Http\Helpers;

class FileHelper {
    public function stripExt($filepath) {
        return preg_replace("/\.[^.]+$/", "", $filepath);
    }
}