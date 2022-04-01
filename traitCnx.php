<?php
include "connectBdd.php";
session_start();
$sql = "SELECT * FROM admin WHERE mail=:pmail and mdp= :pmdp";

$mail= $_POST["email"];
$password= $_POST["pass"];

$resultat = $cnx->prepare($sql);
$resultat->execute(array(":pmail"=>$mail,":pmdp"=>$password));

try {
    $tabresultat = $resultat->fetch(PDO::FETCH_ASSOC);
    $_SESSION["nom"] = $tabresultat["nom"];

    if(empty($tabresultat))
    {
        header("Location:index.php"); //formInscription.php
    }
    else
    {     // on ferme le curseur des résultats
        header("Location:index.php");
    }


} catch (PDOException $e) {
    $e -> getMessage();
}


?>