<?php

namespace App\CustomLog;

use Illuminate\Http\Request;
use Spatie\HttpLogger\LogWriter;
use Log;
class CustomLogWriter implements LogWriter
{
    public function logRequest(Request $request): void
    {
        $method = strtoupper($request->getMethod());
        
        $uri = $request->getPathInfo();
        
        $bodyAsJson = json_encode($request->except(config('http-logger.except')));

        $message = "{$method} {$uri} - {$bodyAsJson}";

        Log::info($message);
    }
}