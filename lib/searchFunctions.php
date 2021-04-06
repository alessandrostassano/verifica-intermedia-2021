<?php 

function searchID($searchID){
    return function ($mocktaskList) use ($searchID) { //gli sto dicendo con use di usare anche per questa funzione la variabile contenuta nella funciton superiore $searchText
        $TextNoSpace = preg_replace("/[ ]+/m"," ",$searchID);
        $searchTextTrim = trim($TextNoSpace);
       
        If ($searchTextTrim !== ""){
        $risultato = stripos($mocktaskList["id"],$searchTextTrim) !== false; 
        } else {
        $risultato = true;
       }

    return $risultato;
};
}

function searchNome($searchNome){
    return function ($mocktaskList) use ($searchNome) { //gli sto dicendo con use di usare anche per questa funzione la variabile contenuta nella funciton superiore $searchText
        $TextNoSpace = preg_replace("/[ ]+/m"," ",$searchNome);
        $searchTextTrim = trim($TextNoSpace);
       
        If ($searchTextTrim !== ""){
        $risultato = stripos($mocktaskList["id"],$searchTextTrim) !== false; 
        } else {
        $risultato = true;
       }

    return $risultato;
};
}










?>