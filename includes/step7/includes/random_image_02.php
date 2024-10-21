<?php //immagine randomica

    $images = [ [ //array multidimensionale

        'file' => 'kinkakuji',
        'caption' => 'Il padiglione dorato, Kyoto'

    ], 
    
    [

        'file' => 'maiko',
        'caption' => 'Una Maiko'

    ], 

    [

        'file' => 'maiko_phone',
        'caption' => 'Ogni Maiko ha un telefono'

    ],
    
    [

        'file' => 'monk',
        'caption' => 'Un Monaco'

    ],

    [

        'file' => 'fountains',
        'caption' => 'Fontane'

    ],

    [

        'file' => 'ryoanji',
        'caption' => 'Ryoanji'

    ],

    [

        'file' => 'menu',
        'caption' => 'Il menu di un ristorante'

    ],

    [

        'file' => 'basin',
        'caption' => 'Acqua nel tempio'
 
    ] ];

    $i = random_int(0, count($images)-1);

    $selectedImage = "images/{$images[$i]['file']}.jpg";

    $caption = $images[$i]['caption'];
    
?>