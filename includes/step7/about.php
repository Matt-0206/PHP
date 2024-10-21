<!-- STEP 1 - versione statica del sito -->

<?php include './includes/about.php' ?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">

    <?php include './includes/title.php' ?>
    <title>Japan Journey - <?php print $title; ?></title>
    
    <link href="styles/journey.css" rel="stylesheet" type="text/css">
</head>

<body>
<header>
    <h1>About</h1>
</header>
<div id="wrapper">

    <?php require './includes/menu.php' ?> 
    <!-- per includere del codice da un altro file è possibile usare include e require, require è usato se il file da cui prendiamo il docice è un file importante -->
    <!-- usando include la pagina rimane navigabile amche se il file esterno non è usabile -->
    <!-- con require se il file esterno non è usabile il sito non sarà più navigabile -->

    <main>

        <p><?= $selectedPara ?></p>

    </main>

    <?= include './includes/footer.php' ?>
    
</div>
</body>
</html>