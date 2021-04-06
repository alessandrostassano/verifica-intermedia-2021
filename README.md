# Verifica intermedia Linguaggio di programmazione PHP 2021

Consegna zip sulla piattaforma e commit finale su branch e upload su altervista.
Dare la priorità alla consegna su formaretedad formato zip

- dopo la consegna del 6 Aprile 2021 potete completare l'esercitazione su repository e altervista

## Importazione dati, creazione della classe User, trasformazione di un elenco di istanze della classe Users

- [x] importare i dati presenti nel file [./dataset/users-management-system.json]("./dataset/users-management-system.json")
- [x] trasformare ogni riga presente nel dataset in un instanza di una classe **User** con le seguenti proprietà:
    - userId
    - firstName
    - lastName
    - birthday
    - email 

- [] Implementare il metodo **getAge** che permette di ottenere l'età dell'utente
- [] Implementare il metodo **isAdult** che restituisce **true** se l'utente e maggiorenne **false** e se l'utente è minorenne.

## Creazione del layout

Partendo dal layout [index.html](./index.html)
Visualizzare l'elenco degli **Users**.

- [x] Sanificare **lastName** per la visualizzazione (ROSSI --> Rossi)
- [x] Visualizzare l'ètà dell'utente

## Implementare le funzionalità di ricercha 

- [x] Implementare le ricerche per presenti nell'intestazione della tabella.

    - [x] findByFirstName
    - [x] findByLastName
    - [x] findByAge (età)

---  

## Implementazioni aggiuntive

- [ ] Implementare le ricerche per presenti nell'intestazione della tabella.

    - [ ] findByUserId
    - [ ] findByEmail

- [ ] Realizzare separatamente il layout [raggruppa per cognome in ordine alfabetico](./group_by_last_name.html)