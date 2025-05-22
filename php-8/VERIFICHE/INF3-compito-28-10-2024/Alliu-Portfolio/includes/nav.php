<?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']); ?>

<nav class='nav'>
    <ul>
        <li><a href="index.php" <?php if($currentPage == 'index.php'){ echo 'id="here"'; }?>>Home</a></li>
        <li><a href="info.php" <?php if($currentPage == 'info.php'){ echo 'id="here"'; }?>>Info</a></li>
        <li><a href="lavori.php" <?php if($currentPage == 'lavori.php'){ echo 'id="here"'; }?>>Lavori</a></li>
        <li><a href="contatti.php" <?php if($currentPage == 'contatti.php'){ echo 'id="here"'; }?>>Contatti</a></li>
        
    </ul>
</nav>