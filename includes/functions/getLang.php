<?php
function getLang() : string
{
    //recuperation de la langue du navigateur
    $local = locale_accept_from_http($_SERVER['HTTP_ACCEPT_LANGUAGE']);
    //Si la langue n'est pas défini on définit lefrancais pas défaut
    if ($locale =="")
        $locale ='fr-FR';
    // Rcupration des deux premiers caracteres de la chaine
    $locale =substr($locale, 0, 2);
    // Renvoie de la fonction
    return $local;
    
}