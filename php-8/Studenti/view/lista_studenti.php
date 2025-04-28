<!DOCTYPE html>
<html>
<head>
    <title>Lista Studenti</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css" >

</head>
<body>

<main class="container">   

<h1>Studenti</h1>

<table class="striped">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Cognome</th>
            <th>Azioni</th>
        </tr>
    </thead>

    <?php foreach ($studenti as $studente): ?>
    <tr>
        <td><?= htmlspecialchars($studente['nome']) ?></td>
        <td><?= htmlspecialchars($studente['cognome']) ?></td>
        <td><a href="index.php?action=dettaglio&id=<?= $studente['id'] ?>">Dettagli</a></td>
    </tr>
    <?php endforeach; ?>
    
</table>

</main>

</body>
</html>
