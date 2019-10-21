<?php return [
    'plugin' => [
        'name' => 'Jivosite',
        'description' => 'Add Jivosite code to your page.'
    ],
    'components' => [
        'jivosite' => [
            'name'                      => 'Jivosite',
            'description'               => 'Add Jivosite code to your page',
            'jivosite_id'               => 'Jivosite ID',
            'jivosite_id_desc'          => 'Jivosite ID'
        ]
    ],
    'settings' => [
        'jivosite_id' => [
            'label' => 'Jivosite ID',
            'commentAbove' => 'You can find it in your account',
            'description' => 'Jivosite ID'
        ]
    ]
];