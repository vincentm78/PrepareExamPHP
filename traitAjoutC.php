<?php
include "connectBdd.php";

$sql = "INSERT INTO contact (nom, mail, photo, idEntreprise) values (:nom, :mail, :photo, :idEntre)";
$sql2 = "SELECT * FROM entreprise WHERE raisonSociale = :rs";

$resultat2 = $cnx->prepare($sql2);
$resultat2->execute(array(":rs"=>$_POST["rsEntreprise"]));

try {
    $tabresult = $resultat2 -> fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    $e -> getMessage();
}

$rs = $tabresult["id"];

$resultat = $cnx->prepare($sql);
$resultat->execute(array(":nom"=>$_POST["nom"],":mail"=>$_POST["mail"],":photo"=>"images/".$_POST["image"],":idEntre"=>$rs));

header("Location:index.php");
?>