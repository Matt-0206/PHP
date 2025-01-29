<?php 

    // apre il file
    $file = fopen('C:/privates  /weather.csv', 'r');

    $titles = fgetcsv($file);

    $cities = [];

    //legge il file 
    while (!feof($file)){

        $data = fgetcsv($file);

        $cities[] = array_combine($titles, $data);

    }

    fclose($file);

    //stampa il risutltato

    echo '<pre>';

    print_r($cities);

    echo '</pre>';

?>