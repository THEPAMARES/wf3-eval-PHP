<?php

include_once("inc/init.inc.php");
include_once("inc/functions.inc.php");

// debug($_POST);


// On enregistre la variable
$id = $_GET["id"];
$resultatRequete = $bdd->prepare("SELECT * FROM advert WHERE id=?");
// On execute la requete, et on stock dans résultat true si tout s'est bien passé, false sinon
$resultat = $resultatRequete->execute([$id]);

$advert = $resultatRequete->fetch(PDO::FETCH_ASSOC);

    $reservation_message = $advert['reservation_message'];

    // Enregistrement en bdd

    if (isset($_POST["reservation_message"])
    && !empty($_POST["reservation_message"])){

        $requetePreparee = $bdd->prepare("UPDATE advert SET reservation_message=? WHERE id=?");
                   

        $resultatB = $requetePreparee->execute([
            $_POST["reservation_message"], $id
            
        ]);

        if ($resultatB){
            $msg .= "<div class=\"alert alert-success\" role=\"alert\">
            Le message a bien été enregistré ! 
      </div>";
        }else{
            $msg .= "<div class=\"alert alert-danger\" role=\"alert\">
            Quelque chose ne s'est pas passé correctement au niveau de l'enregistrement en base de donnée
      </div>";
        }

    }



include_once("inc/head.inc.php");
include_once("inc/header.inc.php");
?>
<main>
    <h1 class="text-center my-5">Détails annonce</h1>

    <div class="card mx-auto" style="width: 40rem;">
        <div class="card-body ">
            <h5 class="card-title"><?=$advert["title"]?></h5>
            <p class="card-text"><?=$advert["description"]?></p>
            <p class="card-text"><?=$advert["city"]?> <?=$advert["postal_code"]?></p>
            <h6 class="card-text"><?=$advert["type"]?></h6>
            <h4 class="card-text"><?=$advert["price"]?></h4>

            <div id="message" class="container">
                <?php if ($reservation_message != NULL){
                    
                } ?>
            </div>

            <form action="" method="post" enctype="multipart/form-data" class="container ">
                <div class="form-floating">
                    <textarea class="form-control my-3" placeholder="" id="reservation_message" name="reservation_message"></textarea>
                    <label for="reservation_message">Message de reservation</label>
                </div>
                <input type="submit" value="Je reserve" class="btn btn-primary">
            </form>
        </div>
    </div>
</main>