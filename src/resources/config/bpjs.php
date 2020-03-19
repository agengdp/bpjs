<?php 

return [
    'bpjs'          => [
        'cons_id'       => env('BPJS_CONS_ID'),
        'secret_key'    => env('BPJS_SECRET_KEY'),
        'base_url'      => 'https://dvlp.bpjs-kesehatan.go.id',
        'service_name'  => 'v-claim-rest'    
    ]
];