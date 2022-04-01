<?php
include 'entete.html';
include "connectBdd.php";
echo "<h2>Liste des contacts : </h2>"; 
$sql = "SELECT * FROM contact WHERE idEntreprise is null";

try {
    $resultat = $cnx->query($sql);
    $tableauresultat = $resultat->fetchAll(PDO::FETCH_ASSOC);

    $cpt = 0;
    foreach ($tableauresultat as $ligne) {
        echo "<p><img src =".$ligne["photo"]." width = 50><br>";
        echo $ligne["nom"]."<br>";
        echo $ligne["mail"]."<br></p>";
        $cpt ++;
    }
    echo $cpt." contacts personnels";
    $resultat->closeCursor(); // on ferme le curseur des résultats 


} catch (PDOException $e) {
    echo "ERREUR PDO ".$e -> getMessage();
}
include 'pieddepage.html';

?>