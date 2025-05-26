## LOGICA DELL'APPLICAZIONE 'Studenti' - Parte 3


## Modifica studente

Dare la possibilità all'utente di modificare la scheda di uno studente.

1 - Vista: ci vuole un nuovo form, quindi una view che chiamiamo modifica_studente.php. la view deve avere già i campi pre-compilati.

2 - Index: Si accede alla view cliccando un link a fianco del pulsante 'dettagli'; in qualche modo index deve intercettare l'azione della view e chiamare il controller.

2 - Controller: Il controller deve dirigere tutto: ci deve essere una funzione 'modifica' che allo stato iniziale semplicemente carica la view con i dettagli dello studente già inseriti nel form. Per far questo deve invocare la funzione trovaPerId() che si trova nel model. Così riempie la variabile $studente con un array associativo. In un secondo momento, la stessa funzione 'modifica' deve prendere i dati del form e passarli al modello per attivare la funzione 'aggiorna'.

3 - Modello: prende i dati che gli vengono inviati dal controller via post e li inserisce nel db tramite la funzione 'aggiorna'.

 

 ### Sviluppo
 
 Per la vista, un esempio di campo:

 ```html

<div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" value="<?= htmlspecialchars($studente['nome']) ?>" required>
</div>



```


Controller:

```php

public function modifica($id) {
    
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $dati = [
            'nome' => $_POST['nome'],
            'cognome' => $_POST['cognome'],
            'email' => $_POST['email'],
            'telefono' => $_POST['telefono']
        ];
        $this->studenteModel->aggiorna($id, $dati);
        header("Location: index.php");
        exit;
    } 


    else {

        $studente = $this->studenteModel->trovaPerId($id);
        require __DIR__ . '/../view/modifica_studente.php';
    }
}



```



Model: 

```php

    public function aggiorna($id, $dati) {
    $sql = "UPDATE studenti SET nome = ?, cognome = ?, email = ?, telefono = ? WHERE id = ?";
    $query = $this->pdo->prepare($sql);
    $query->execute([
        $dati['nome'],
        $dati['cognome'],
        $dati['email'],
        $dati['telefono'],
        $id
    ]);
}




```