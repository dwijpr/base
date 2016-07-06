<?php

/*
 * http://stackoverflow.com/questions/5249279/file-get-contents-php-fatal-error-allowed-memory-exhausted/5249971#5249971
 */

if (!function_exists('file_get_contents_chunked')) {
    function file_get_contents_chunked(
        $file, $chunk_size, $callback, $stopI = false
    ) {
        try {
            $handle = fopen($file, "r");
            $i = 0;
            while (!feof($handle) and $i !== $stopI) {
                call_user_func_array($callback, [
                    fread($handle, $chunk_size),
                    &$handle,
                    $i
                ]);
                $i++;
            }
            fclose($handle);
        } catch (Exception $e) {
            trigger_error(
                "file_get_contents_chunked::".$e->getMessage(), E_USER_NOTICE
            );
            return false;
        }
        return true;
    }
}

if (!function_exists('code_to_human_words')) {
    function code_to_human_words($code) {
        $words = implode(' ', explode('_', $code));
        $words = ucwords($words);
        return $words;
    }
}