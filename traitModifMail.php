<?php

include "connectBdd.php";


$sql = "UPDATE contact SET mail =:mail WHERE nom = :nom";
$resultat = $cnx->prepare($sql);
$resultat->execute(array(":mail"=>$_POST["mail"],":nom"=>$_POST["listeContact"]));
$nbLigne = $resultat -> fetchAll(PDO::FETCH_ASSOC);

?>