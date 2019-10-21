<?php return [
    'plugin' => [
        'name' => 'Jivosite',
        'description' => 'Добавьте Jivosite на страницу.'
    ],
    'components' => [
        'jivosite' => [
            'name'                      => 'Jivosite',
            'description'               => 'Добавьте Jivosite на страницу',
            'jivosite_id'               => 'Jivosite ID',
            'jivosite_id_desc'          => 'Jivosite ID'
        ]
    ],
    'settings' => [
        'jivosite_id' => [
            'label' => 'Jivosite ID',
            'commentAbove' => 'Вы можете найти его в своем личном кабинете',
            'description' => 'Jivosite ID'
        ]
    ]
];