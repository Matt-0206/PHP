<!DOCTYPE html>
<html>
<head>
    <title>Aggiungi Libro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css" >
</head>
<body>
    
<main class="container">



    <h1>Aggiungi Libro</h1>

   <form action="index.php?action=store" method="POST">
        <div class="form-group">
            <label for="nome">Titolo:</label>
            <input type="text" name="titolo" id="titolo" required>
        </div>
        
        <div class="form-group">
            <label for="cognome">Autore:</label>
            <input type="text" name="autore" id="autore" required>
        </div>
        
        <div class="form-group">
            <label for="email">Anno:</label>
            <input type="text" name="anno" id="anno" required>
        </div>
        
        <div class="form-group">
            <label for="telefono">Stato:</label>
            <select name="stato" id="stato" required>
                <option value="Letto">Letto</option>
                <option value="Non Letto">Non Letto</option>
            </select>
        </div>
        
        <div class="form-actions">
            
            <button type="submit" class="btn btn-primary">Salva</button>
        </div>
    </form>
    
    <p><a href="index.php">Torna al catalogo</a></p>

</main>
</body>
</html>
