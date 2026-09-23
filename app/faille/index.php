<?php
    // Le site stocke le cookie suivant de cette manière
    //setcookie("information", "donnees perso contenues dans un cookie", time()+3600);

    // Mais pour s'amuser, on l'encode en base 64
    // https://www.base64decode.org/fr/
    eval(base64_decode("c2V0Y29va2llKCJpbmZvcm1hdGlvbiIsICJkb25uZWVzIHBlcnNvIGV0IHRyw6hzIHNlY3LDqHRlcy4gRkVORUxPTi0tLT4gb3VhaWNoIiwgdGltZSgpKzM2MDApOw=="));

    // On traite le formulaire de façon non sécurisée
    if( isset($_GET['prenom']) && !empty($_GET['prenom']) )
    {
        // On ne protège pas l'accès aux données
        $prenom = $_GET['prenom'];
    }
?>
    <h1>Veuillez saisir votre prénom:</h1>
    <form method="get">
        <input type="text" name="prenom">
        <button>Valider</button>
    </form>

<?php
    // On affiche la saisie du formulaire
    if(isset($prenom)){
        echo "Bonjour, " . $prenom;
    }