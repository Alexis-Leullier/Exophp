<?php

if (isset($_POST['validation'])) {
    // Récupération des éléments du formulaire
    $prenom = isset($_POST['nom']) ? $_post['nom'] : "";
    $nom = isset($_POST['prenom']) ? $_post['prenom'] : "";
    $email = isset($_POST['email']) ? $_post['email'] : "";
    $mdp = isset($_POST['mdp']) ? $_post['mdp'] : "";

    // Initialisation d'un tableau vide
    $erreur= array();
    
    //Vérification des champs (remplis ou non)
    if($nom == "") array_push($erreur, "Veuillez saisir un nom")
    if($prenom == "") array_push($erreur, "Veuillez saisir un prenom")
    if($email == "") array_push($erreur, "Veuillez saisir un email")
    if($mdp == "") array_push($erreur, "Veuillez saisir un mot de passe")


    // L'on s'assure que le tableau n'est point vide    
    if(count($erreur) > 0) {
        $msgErreur = "<ul>";

            for ($i = 0 ; $i < count($erreur) ; $i++) {
                $msgErreur .= "<li>" . $erreur[$i] . "</li>";
            }

            $msgErreur .= "</ul>";

            echo $msgErreur;

            require_once 'frmRegistration.php';
    }

    else {
        echo "insertion en BDD";
    }

}

else {
    require_once 'frmRegistration.php';
}
