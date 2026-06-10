## Nome repo: laravel-portfolio

---

### Consegna n. 2
Ora inseriamo la nostra prima entità: il Progetto.  

**Svolgimento**
L'obiettivo di oggi è quello di iniziare a preparare il back-office per poter gestire i progetti nel nostro sito portfolio

- [x] Creiamo il modello Project, con relativa migrazione ed un seeder per inserire inizialmente alcuni progetti nel Database (nome, cliente, periodo, riassunto)
- [x] Prepariamo un Resource Controller (Admin/ProjectController) incaricato di gestire tutte le operazioni CRUD sui progetti. 
- [x] Soffermiamoci per oggi solo sulla logica delle azioni di index e show. Creiamo le rotte per i nostri progetti e prepariamo un layout per mostrare i nostri progetti in tabella nella rotta index. 
- [x] Inventiamo anche uno stile per la pagina di show, che dovrà mostrare un singolo progetto. 

---

### Consegna n. 3

Procediamo al completamento delle operazioni CRUD sul modello Project:

- [x] Prepariamo le rotte per le pagine di creazione e modifica dei progetti
- [x] All'interno delle pagine, prepariamo i rispettivi form
- [ ] Nella pagina di dettaglio del progetto, mostriamo la tipologia a cui il progetto appartiene (Web Design, Graphic Design, Back End...)
- [x] Nel controller, inseriamo la logica per il salvataggio di un nuovo progetto, per la sua modifica e per l'eliminazione
- [ ] Nella tabella della pagina index, dovremo inserire i pulsanti su ciascuna riga, per permettere l'eliminazione e la modifica del singolo progetto. Inoltre, potremmo avere un singolo tasto in cima che ci porti alla pagina di creazione del progetto.
- [x] Proviamo ad aggiungere un controllo: quando l'utente clicca sul pulsante "delete", chiediamo conferma della cancellazione, prima di eliminare l'elemento. Questa operazione possiamo farla a mano con JavaScript o aiutarci con i componenti Bootstrap.