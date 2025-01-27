<!DOCTYPE html>
<html>

    <head>

        <meta charset = "utf-8">

        <title></title>

    </head>

    <body>
        
        <?php 
        
            $sonnet = file('C:/privates/sonnet.txt'); // readfile => legge il contenuto di un file e lo inserisce nell'output
                                                      // file_get_contents => ci permette di leggere il contenuto di un file in una singola stringa e inserirlo in una variabile
                                                      // file => ci permette di leggere il contenuto di un file e inserirlo in una variabile. Genera una stringa

            echo $sonnet[0];

        ?>

    </body>

</html>