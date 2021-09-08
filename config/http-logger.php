<?php

return [

    /*
      * The log profile which determines whether a request should be logged.
      * It should implement `LogProfile`.
      */
    'log_profile' => \App\CustomLog\CustomLogRequests::class,
    // 'log_profile' => \Spatie\HttpLogger\LogNonGetRequests::class,

    /*
     * The log writer used to write the request to a log.
     * It should implement `LogWriter`.
     */
    'log_writer' => \App\CustomLog\CustomLogWriter::class,
    // 'log_writer' => \Spatie\HttpLogger\DefaultLogWriter::class,

    /*
     * Filter out body fields which will never be logged.
     */
    'except' => [
        'password',
        'password_confirmation',
    ],

];
