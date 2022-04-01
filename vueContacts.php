<?php 
// Connexion à la BDD, instanciation de l’objet $cnx 
include "connectBdd.php"; 
include 'entete.html';

echo "<h2>Liste des contacts : </h2>"; 
$sql = "SELECT * FROM contact";
// on écrit la requête sous forme de chaine de caractères 
try{ 
    $resultat = $cnx->query($sql); 
    // on exécute la requête qui renvoie un curseur 
    $tabloResultat=$resultat->fetchAll(PDO::FETCH_ASSOC);
    // lecture de $résultat récupéré dans un tableau associatif 
    $cpt = 0;
    foreach($tabloResultat as $ligne) { 
        echo "<p><img src =".$ligne["photo"]." width = 50><br>";
        echo $ligne["nom"]."<br>";
        echo $ligne["mail"]."<br></p>";
        $cpt ++;
        
    } 
    echo $cpt." contacts";
    $resultat->closeCursor(); // on ferme le curseur des résultats 
}
catch(PDOException $e) { // gestion des erreurs 
    echo"ERREUR PDO " . $e->getMessage(); 
    } 

include 'pieddepage.html';

?>