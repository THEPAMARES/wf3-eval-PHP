<?php


include_once("inc/init.inc.php");
include_once("inc/functions.inc.php");

$resultatRequete = $bdd->query("SELECT * FROM advert");

$toutesLesAnnonces = $resultatRequete->fetchAll(PDO::FETCH_ASSOC);



include_once("inc/head.inc.php");
include_once("inc/header.inc.php");
?>
<main>
    <h1 class="text-center my-5">Toutes les annonces</h1>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">Titre</th>
                <th scope="col">Description</th>
                <th scope="col">Code Postal</th>
                <th scope="col">Ville</th>
                <th scope="col">Type</th>
                <th scope="col">Prix</th>
                <th scope="col">Reservation</th>

            </tr>
        </thead>
        <tbody>
            <?php

                foreach($toutesLesAnnonces as $advert){

                    ?>
                        <tr>
                            <th scope="row"><?=$advert["id"]?></th>
                            <td><?=$advert["title"]?></td>
                            <td><?=$advert["description"]?></td>
                            <td><?=$advert["postal_code"]?></td>
                            <td><?=$advert["city"]?></td>
                            <td><?=$advert["type"]?></td>
                            <td><?=$advert["price"]?></td>
                            <td><a href="consulter_une_annonce.php?id=<?=$advert["id"]; ?>" class="btn btn-primary">Consulter</a></td>

                        </tr>
                    <?php
                }
           ?>
        </tbody>
    </table>
</main>
<?php
include_once("inc/footer.inc.php");

?>