# PHP Simple Web Site

## Descrizione del Progetto

Questo progetto è un sito web sviluppato utilizzando **PHP**, **MySQL**, **HTML** e **CSS**. Il sito parte da un **mockup** già esistente, con l'obiettivo di integrarlo dinamicamente con PHP per gestire la logica di registrazione, login e gestione della dashboard utente. Inoltre, include una sezione per visualizzare giochi popolari e aggiungere nuovi giochi.

## Funzionalità Principali

- **Registrazione e Login**: Gli utenti possono registrarsi, accedere e visualizzare una dashboard personalizzata.
- **Gestione dei Giochi**: Gli utenti possono visualizzare giochi popolari e aggiungere nuovi giochi tramite la loro dashboard.
- **Database MySQL**: Il sito è connesso a un database per memorizzare informazioni sugli utenti e i giochi.
- **Uso di Cookies**: I login degli utenti sono gestiti tramite cookies per migliorare l'esperienza utente.

## Tecnologie Usate

- **PHP** (per la logica lato server)
- **MySQL** (per la gestione del database)
- **HTML/CSS** (per il design del sito)
- **PDO** (per la connessione sicura al database)
- **MD5 con Salt** (per l'hashing delle password)

## Passaggi Svolti nello Sviluppo

1. **Mockup HTML e CSS**: Ho iniziato utilizzando un mockup già realizzato (HTML/CSS).
2. **Conversione a PHP**: I file sono stati convertiti in formato `.php` per permettere l'integrazione della logica.
3. **Avvio su MAMP**: Il sito è stato avviato su un server locale utilizzando MAMP.
4. **Creazione di `.htaccess`**: Per configurare Apache e definire la codifica dei caratteri UTF-8.
5. **Separazione di Header e Footer**: I file `header.php` e `footer.php` sono stati creati per modularizzare il codice.
6. **Collegamento Dinamico di Header e Footer**: I file sono stati inclusi dinamicamente tramite PHP.
7. **Creazione del Database**: Creazione di un nuovo database in phpMyAdmin con una tabella `users` per gestire la registrazione e una tabella `trending` per i giochi.
8. **Form di Registrazione e Login**: Il form è stato modificato per gestire i dati via `POST` e sanificarli prima dell'uso.
9. **Hashing delle Password**: Le password sono state protette utilizzando una combinazione di salt e `md5()`.
10. **Connessione al Database con PDO**: Utilizzo di PDO per la connessione al database e la gestione delle query in modo sicuro.
11. **Verifica del Login**: Creazione di una logica di controllo per validare le credenziali dell'utente durante il login.
12. **Gestione dei Cookies**: Gli utenti autenticati sono riconosciuti tramite cookies, e il loro login è stampato nella dashboard.
13. **Visualizzazione Dinamica dei Giochi**: I giochi vengono visualizzati dinamicamente sulla pagina principale prendendo i dati dal database.
14. **Form di Aggiunta Nuovo Gioco**: Gli utenti possono aggiungere giochi alla loro dashboard.


