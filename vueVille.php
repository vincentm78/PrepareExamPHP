<?php
include "connectBdd.php";
include 'entete.php';

$sql = "SELECT * FROM contact C inner join entreprise E on C.idEntreprise = E.id WHERE ville = :ville ";
try {
    $resultat = $cnx -> prepare($sql);
    $resultat -> execute(array(":ville"=>$_POST["listeVille"]));
    $tabresultat = $resultat->fetchAll(PDO::FETCH_ASSOC);

    $cpt = 0;
    foreach ($tabresultat as $ligne) {
        echo "<p><img src =".$ligne["photo"]." width = 50><br>";
        echo $ligne["nom"]."<br>";
        echo $ligne["mail"]."<br></p>";
        $cpt ++;
    }

    echo $cpt." contacts dans ".$_POST["listeVille"];
} catch (PDOException $e) {
    echo "PDO ERREUR".$e;
}


include 'pieddepage.html';

?>