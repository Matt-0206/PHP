<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css" >
    <title>Catalogo Libri</title>

</head>



<body>

    <h1>Libri</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Titolo</th>
                <th>Autore</th>
                <th>Anno</th>
                <th>Stato</th>
            </tr> 
        </thead>

        <?php foreach ($books as $book): ?>
            <tr>
                <td><?= htmlspecialchars($book['id']) ?></td>
                <td><?= htmlspecialchars($book['titolo']) ?></td>
                <td><?= htmlspecialchars($book['autore']) ?></td>
                <td><?= htmlspecialchars($book['anno']) ?></td>
                <td><?= htmlspecialchars($book['stato']) ?></td>
                <td><a href="index.php?action=dettaglio&id=<?= $book['id'] ?>">Dettagli</a> |
                    <a href="index.php?action=elimina&id=<?= $book['id'] ?>" onclick="return confirm('Sei sicuro di voler eliminare questo studente?')">Elimina</a></td>
            </tr>
        <?php endforeach; ?>

    </table>

    <p><a href="index.php?action=loadForm">Aggiungi un libro</a></p>

    <p><a href="index.php?action=letti">Libri letti</a></p>

</body>

</html>