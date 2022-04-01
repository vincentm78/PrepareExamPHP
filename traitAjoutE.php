<?php
include "connectBdd.php";

$sql = "INSERT into entreprise (raisonSociale, ville) values (:raison,:ville)";
$resultat = $cnx -> prepare($sql);
$resultat -> execute(array(":raison"=>$_POST["raison"], ":ville"=>$_POST["ville"]));
$nbLigne = $resultat -> fetchAll(PDO::FETCH_ASSOC);

?>