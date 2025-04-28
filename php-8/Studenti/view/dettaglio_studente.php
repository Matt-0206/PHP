<!DOCTYPE html>
<html>
<head>
    <title>Dettaglio Studente</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css" >
</head>
<body>
    
<main class="container">

<!-- ✅ Perché non ci sono parentesi graffe {}?

Perché stai usando una sintassi alternativa del costrutto if, chiamata sintassi con i due punti (:) e endif, che è perfettamente valida in PHP. -->

    <h1>Dettaglio Studente</h1>

    <?php if ($studente): ?>

        <p><strong>Nome:</strong> <?= htmlspecialchars($studente['nome']) ?></p>
        <p><strong>Cognome:</strong> <?= htmlspecialchars($studente['cognome']) ?></p>
        <p><strong>Email:</strong> <?= htmlspecialchars($studente['email']) ?></p>
        <p><strong>Telefono:</strong> <?= htmlspecialchars($studente['telefono']) ?></p>

    <?php else: ?>

        <p>Studente non trovato.</p>

    <?php endif; ?>
    
    <p><a href="index.php">Torna alla lista</a></p>

</main>
</body>
</html>
