<?php

    $images = [ [

        'file' => 'hardware1',
        'p' => 'Nel corso delle mie esperienze ho lavorato su schede madri'

    ], 
    
    [

        'file' => 'hardware2',
        'p' => 'Ho lavorato su componenti hardware di vario genere'

    ],

    [

        'file' => 'software1',
        'p' => 'Ho lavorato su software utilizzando vari linguaggi'
    
    ]
    
    ];

    $i = random_int(0, count($images)-1);

    $selectedImage = "img/{$images[$i]['file']}.jpg";

    $para = $images[$i]['p'];
    
?>