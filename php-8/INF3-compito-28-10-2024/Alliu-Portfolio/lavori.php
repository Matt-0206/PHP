<?php include 'includes/title.php' ?>
<?php include 'includes/random_image.php' ?>

<!DOCTYPE html>
<html>

    <head>

        <meta charset = "utf-8">

        <title>Portfolio - <?= $title ?></title>
        <link href="styles/style.css" rel="stylesheet" type="text/css">

    </head>

    <body>
        
    <?php include 'includes/nav.php' ?>

    <div class="container">

    <main>

        <h1 class='title'>Lavori</h1>

        <h2 class='subtitle'>Le mie esperienze:</h2>

        <p>Col tempo ho accumulato molta esprienza tramite stage formativi, tirocini lavorativi ed Erasmus.</p>

        <p>Ho conseguito un periodo di tirocinio lavorativo, dalla durata di un mese, presso una piccola impresa di nome ZStyle situata a Corno di Rosazzo.
           Mi sono occupato di modifica di immagini, tramite utilizzo di software grafici come Photoshop, e dell'inserimento di prodotti all'interno di cataloghi online.</p>

        <p>La mia seconda esperienza nel mondo del lavoro è stato uno stage formativo presso Maddalena S.p.A, un'azienda situata a Grions Del Torre che si occupa di termoidraulica.
           Durante questo periodo ero situato all'interno dell'ufficio CED dell'azienda, mi sono occupato di hardware ma soprattuto di programmazione e installazioni di software.</p>

        <p>La mia esperienza lavorativa più recente è stato un erasmus scolastico e lavorativo, durato 3 settimane, a Valencia.
           Sono stato inserito in una piccola impresa di nome ReStore; quest'ultima si occupa di riparazioni hardware e di telefonia ma anche di manutenzione di monopattini elettrici.
           Durante questa esperienza ho avuto modo di arricchire la mia esperienza inerente l'hardware, ma ho anche avuto la possibilita di lavorare sui mezzi elettrici.</p>

        <img src="<?= $selectedImage ?>" alt="" width="250" height="250" class="img">
        <figcaption class = 'caption'><?= $para ?></figcaption>


        <div class='footer'>

            <?php include 'includes/footer.php' ?>

        </div>

    </div>

    </main>

    </body>

</html>