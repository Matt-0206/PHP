
## Aggiungi un nuovo studente

Dare la possibilità all'utente di modificare la scheda di uno studente.

1) Vista: ci vuole un nuovo form quindi una view che si chiama "modifica_studenti.php". La view deve avere già i campi pre-compilati. 
2) Index: si accede alla view cliccando un link a fianco del pulsante "dettagli". In qualche modo Index deve intercettare l'azione della view e chiamare il controller.
3) Controller, dirige tutto. Deve intanto caricare la view con i dettagli dello studente già inseriti.
4) Model: prende i dati inseriti nel controller via POST e li inserisce nel db con una funzione 'aggiorna'.