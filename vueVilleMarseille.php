<?php
include "connectBdd.php";
include 'entete.html';

echo "<h2> Liste des contacts </h2> ";

$sql = "SELECT nom,mail,photo FROM contact C join entreprise E on C.idEntreprise = E.id WHERE ville = :ville ";

try{
$resultat = $cnx->prepare($sql);
$resultat->execute(array(":ville"=>"Marseille"));

$tabResultat = $resultat->fetchAll(PDO::FETCH_ASSOC);

$i=0;
foreach($tabResultat as $ligne)
{
echo "<p>".$ligne["nom"]."<br>";
echo $ligne["mail"]."</p>";
echo "<img src=".$ligne["photo"]." width=60>";
$i++;
}

echo "<p>"."Nombre de contact :".$i."</p>";
$resultat->closeCursor();



}
catch(PDOException $e)
{
    print("ERREUR PDO").$e->getMessage();

}

include 'pieddepage.html';

?>
