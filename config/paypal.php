<?php
return [
    'client_id' => env('PAYPAL_CLIENT_ID'),
    'secret' => env('PAYPAL_SECRET'),

    'settings' => [
        'mode'=> env('PAYPAL_MODE','sandbox'),
        'http.ConnectionTimeOut' => 30,
        'log.logEnabled' => true,
        'log.FileName' => storage_path('/logs/paypal.log'),
        'logLevel'=> 'ERROR'
    ]

];

?>