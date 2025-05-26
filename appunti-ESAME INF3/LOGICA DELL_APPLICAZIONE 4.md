## LOGICA DELL'APPLICAZIONE 'Studenti' - Parte 4


## Elimina studente

Dare la possibilità all'utente di eliminare la scheda di uno studente.

1   Si elimina lo studente cliccando un link 'Elimina' a fianco del pulsante 'Modifica'

2 - Index: deve intercettare l'azione della view e chiamare il controller.

2 - Controller: Il controller deve dirigere tutto: ci deve essere una funzione 'elimina' che invoca altra funzione nel model.

3 - Modello: c'è una funzione (cancella) che si collega al db e usa DELETE per cancellare un id particolare.

 


Controller:


```php

public function elimina($id) {

$this->studenteModel->cancellaId($id);
header("Location: index.php");

}

```



Model:

```php
public function cancellaId($id) {
        $sql = "DELETE FROM studenti WHERE id = ?";          
        $query = $this->pdo->prepare($sql);                     
        $query->execute([$id]);                                 
                                      
    }


```