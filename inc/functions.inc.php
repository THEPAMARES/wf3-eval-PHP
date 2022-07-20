<?php


/**
 * La fonction debug a pour objectif d'afficher un echo pre de la liste envoyé en argument
 * @var array
 * @return null
 */

 function debug(array $liste){
    echo "<pre>";
    print_r($liste);
    echo "</pre>";
 }

 //Verification sur le titre
 function verifTitle($title){

   // Verifie si le title existe pas
   if (!isset($title)){
       return false;
   }

   // Verifie si le title n'est pas vide
   if (empty($title)){
       return false;
   }

   return true;
}

//Verification sur la description
function verifDescription($description){

   // Verifie si le description existe pas
   if (!isset($description)){
       return false;
   }

   // Verifie si le description n'est pas vide
   if (empty($description)){
       return false;
   }


   // Verifier la longeur du description
   // Il ne doit pas exceder 500 caracteres
   if (strlen($description)>500){
       return false;
   }

   return true;

}

//Verification du code postal
function verifPostal_code($postal_code){

   // Verifie si le postal_code existe pas
   if (!isset($postal_code)){
       return false;
   }

   // Verifie si le postal_code n'est pas vide
   if (empty($postal_code)){
       return false;
   }


   return true;

}

//Verification de la ville
function verifCity($city){

   // Verifie si le city existe pas
   if (!isset($city)){
       return false;
   }

   // Verifie si le city n'est pas vide
   if (empty($city)){
       return false;
   }


   return true;

}

//Verification du type
function verifType($type){

   // Verifie si le type existe pas
   if (!isset($type)){
       return false;
   }

   // Verifie si le type n'est pas vide
   if (empty($type)){
       return false;
   }


   return true;

}

//Verification du prix
function verifPrice($price){

   // Verifie si le price existe pas
   if (!isset($price)){
       return false;
   }

   // Verifie si le price n'est pas vide
   if (empty($price)){
       return false;
   }


   return true;

}

//Verification sur le message de reservation
function verifReservation_message($reservation_message){

   // Verifier la longeur du reservation_message
   // Il ne doit pas exceder 1000 caracteres
   if (strlen($reservation_message)>1000){
       return false;
   }

   return true;

}
