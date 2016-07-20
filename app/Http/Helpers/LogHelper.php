<?php

namespace App\Http\Helpers;

use App\Log;

class LogHelper {
    public function log($key, $object = []) {
        $stringObject = json_encode($object);
        Log::create([
            'user_id' => @auth()->user()->id,
            'key' => $key,
            'uri' => request()->getRequestUri(),
            'method' => request()->getMethod(),
            'user_agent' => request()->header('User-Agent'),
            'ip_address' => request()->ip(),
            'app' => config('app.name'),
            'data' => $stringObject,
        ]);
    }
}