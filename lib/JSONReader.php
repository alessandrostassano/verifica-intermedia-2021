<?php 
//crea funzione
//verifica che il file esista
//restituisce il file in una stringa e l'assegnamo alla variabile
//decodifichiamo la stringa
//prendiamo in input il codice e il messaggio di errore
//se si verifica eccezione --> lanciamo eccezione passandogli il cod e il msg.
//se tutto fila liscio --> restituiamo il file json decodificato

function JSONReader(string $filepath) {
    if (file_exists($filepath)) {
        $filexists = file_get_contents($filepath);
        $fileconvertito = json_decode($filexists, true);
        $code =json_last_error();
        $msg = json_last_error_msg();
        if($code != JSON_ERROR_NONE ) 
        {
            throw new Exception($msg, $code);
        } 
    
    } else {
        throw new Exception('not-exists', 404); 
    }

    return $fileconvertito;
}

?>