
## Aggiungi un nuovo studente

Dare la possibilità all'utente di aggiungere un nuovo studente alla lista degli studenti.

1) View: Ci vuole un nuovo "Form" quindi una "View" che chiamiamo "aggiungi_studente.php". Si accede alla "View" cliccando su un link nella pagina "lista_studenti.php", appena sotto il titolo 'Studenti'.
2) Controller: Il controller deve dirigere tutto. Creiamo un nuovo metodo che si chiama "loadForm()" che carica la "View". Il "Controller" deve anche recuperare le variabili che gli vengono inviate via "POST" dal "Form" e inviarle a "Model". Quindi chiama il metodo "nuovo()" che si trova nel "Model". Fa il suo lavoro di ponte tra le "View" e il "Model".
3) Model: Il modello prende i dati inviati dal controller e li inserisce e nel DataBase.
4) Index: Deve intercettare l'azione del "Form" e chiamare il "Controller".

Verificare se funziona 