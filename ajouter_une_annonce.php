<?php 


include_once("inc/init.inc.php");
include_once("inc/functions.inc.php");

// debug($_POST);
// debug($_SERVER);



if (!empty($_POST)){

    // Controles sur titre

    $title = $_POST["title"];
    if (!isset($title) || !verifTitle($title)){
        $msg .= "<div class=\"alert alert-danger\" role=\"alert\">
            Vous n'avez pas renseigner de titre.  
      </div>";
    }

    // Controle sur la description

    $description = $_POST["description"];
    if (!isset($description) || !verifDescription($description)){
        $msg .= "<div class=\"alert alert-danger\" role=\"alert\">
            Votre description est trop longue, elle ne peut contenir que 500 caracteres. 
      </div>";
    }

    // Controle sur le code postal

    $postal_code = $_POST["postal_code"];
    if (!isset($postal_code) || !verifPostal_code($postal_code)){
        $msg .= "<div class=\"alert alert-danger\" role=\"alert\">
            Merci de renseigner le code postal 
      </div>";
    }

    // Controle sur la ville

    $city = $_POST["city"];
    if (!isset($city) || !verifCity($city)){
        $msg .= "<div class=\"alert alert-danger\" role=\"alert\">
            Merci de renseigner la ville 
      </div>";
    }

    // Controle sur le type

    $type = $_POST["type"];
    if (!isset($type) || !verifType($type)){
        $msg .= "<div class=\"alert alert-danger\" role=\"alert\">
            Merci d'indiquer s'il s'agit d'une vente ou d'une location. 
      </div>";
    }

    // Controle sur le prix

    $price = $_POST["price"];
    if (!isset($price) || !verifPrice($price)){
        $msg .= "<div class=\"alert alert-danger\" role=\"alert\">
            Vous avez oublié de renseigner le prix. 
      </div>";
    }


    // Enregistrement en bdd

    if (empty($msg)){

        $requetePreparee = $bdd->prepare("INSERT INTO advert 
                    (title, description, postal_code, city, type, price) 
                    VALUES (?,?,?,?,?,?)");

        $resultat = $requetePreparee->execute([
            $title,
            $description,
            $postal_code,
            $city,
            $type,
            $price,
            
        ]);

        if ($resultat){
            $msg .= "<div class=\"alert alert-success\" role=\"alert\">
            L'annonce $title a bien été enregistrée ! 
      </div>";
        }else{
            $msg .= "<div class=\"alert alert-danger\" role=\"alert\">
            Quelque chose ne s'est pas passé correctement au niveau de l'enregistrement en base de donnée
      </div>";
        }

    }

}


include_once("inc/head.inc.php");
include_once("inc/header.inc.php");



?>


<main>



    <h1 class="text-center my-5">Ajouter une annonce</h1>
        <!-- enctype pour recuperer les fichiers telechargés -->
    <form action="" method="post" enctype="multipart/form-data" class="container w-75 mx-auto">

        <div class="mb-3">
            <label for="title" class="form-label">Titre de l'annonce</label>
            <input type="text" class="form-control" id="title" placeholder="" name="title" required value="<?= (isset($pseudo) ? $pseudo : "");?>">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description de l'annonce</label>
            <input type="text" class="form-control" id="description" placeholder="" name="description" value="<?= (isset($email) ? $email : "");?>">
        </div>
        <div class="mb-3">
            <label for="postal_code" class="form-label">Code Postal</label>
            <input type="text" class="form-control" id="postal_code" placeholder="" name="postal_code" value="<?= (isset($nom) ? $nom : "");?>">
        </div>
        <div class="mb-3">
            <label for="city" class="form-label">Ville</label>
            <input type="text" class="form-control" id="city" placeholder="" name="city" value="<?= (isset($prenom) ? $prenom : "");?>">
        </div>
        <div class="mb-3">
            <label for="text" class="form-label">Type d'annonce</label>
            <input type="type" class="form-control" id="type" placeholder="" name="type" value="<?= (isset($adresse) ? $adresse : "");?>">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prix</label>
            <input type="text" class="form-control" id="price" name="price" value="<?= (isset($date_naissance) ? $date_naissance : "");?>">
        </div>
        <input type="submit" value="Envoyer" class="btn btn-primary">
       

    </form>
</main>



<?php

include_once("inc/footer.inc.php");