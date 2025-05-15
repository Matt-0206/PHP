<!DOCTYPE html>
<html>
<head>
    <title>Aggiungi Studente</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css" >
</head>
<body>
    
<main class="container">



    <h1>Aggiungi Studente</h1>

   <form action="index.php?action=store" method="POST">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required>
        </div>
        
        <div class="form-group">
            <label for="cognome">Cognome:</label>
            <input type="text" name="cognome" id="cognome" required>
        </div>
        
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" name="email" id="email" required>
        </div>
        
        <div class="form-group">
            <label for="telefono">Telefono:</label>
            <input type="text" name="telefono" id="telefono" required>
        </div>
        
        <div class="form-actions">
            
            <button type="submit" class="btn btn-primary">Salva</button>
        </div>
    </form>
    
    <p><a href="index.php">Torna alla lista</a></p>

</main>
</body>
</html>
