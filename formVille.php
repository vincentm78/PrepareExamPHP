<?php include 'entete.php';?>
<form action="vueVille.php" method="post">
    <select name="listeVille"> 
    <?php
    include "connectBdd.php";

    $sql="SELECT distinct ville FROM entreprise";
    // on écrit la requête sous forme de chaine de caractères 
    try{ 
        $resultat = $cnx->query($sql); 
        // on exécute la requête qui renvoie un curseur 
        // lecture du curseur $résultat dans un tableau associatif 
        $tabloResultat=$resultat->fetchAll(PDO::FETCH_ASSOC); 
        foreach($tabloResultat as $ligne) { 
            echo "<option value='".$ligne["ville"]."'>".$ligne["ville"]."</option>";            }

    } catch(PDOException $e) { // gestion des erreurs
    echo"ERREUR PDO " . $e->getMessage();
    }
    ?>
    
    </select>
    <button type="submit">Valider</button>
    <button type="reset">Effacer</button>
</form> 

<?php
include 'pieddepage.html';
?>
