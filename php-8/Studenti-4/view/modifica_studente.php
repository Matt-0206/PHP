<!DOCTYPE html>
<html>
<head>
    <title>Modifica Studente</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css" >
</head>
<body>
    
<main class="container">



    <h1>Modifica Studente</h1>

   <form method="POST">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" value="<?= htmlspecialchars($studente['nome']) ?>" required>
        </div>
        
        <div class="form-group">
            <label for="cognome">Cognome:</label>
            <input type="text" name="cognome" id="cognome"  value="<?= htmlspecialchars($studente['cognome']) ?>"required>
        </div>
        
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" name="email" id="email" value="<?= htmlspecialchars($studente['email']) ?>" required>
        </div>
        
        <div class="form-group">
            <label for="telefono">Telefono:</label>
            <input type="text" name="telefono" id="telefono" value="<?= htmlspecialchars($studente['telefono']) ?>" required>
        </div>
        
        <div class="form-actions">
            
            <button type="submit" class="btn btn-primary">Salva</button>
        </div>
    </form>
    
    <p><a href="index.php">Torna alla lista</a></p>

</main>
</body>
</html>
