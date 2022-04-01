<?php 
include "connectBdd.php";
include "entete.php";
?>

<form action="traitAjoutC.php" method="post">
    <input type="text" name="nom" placeholder="Entrer le nom"> NOM
    <input type="mail" name="mail" placeholder="Entrer le mail"> MAIL
    <br>
    <input type="text" name="image" placeholder="Entrer nom de l'image">
    <!-- On estime que la photo est déjà dans la BDD !!! -->
    <br>
    <select name="rsEntreprise">
    <?php
        $sql = "SELECT * FROM entreprise";
        $resultat = $cnx->query($sql);
        $tabresultat = $resultat->fetchAll(PDO::FETCH_ASSOC);

        foreach ($tabresultat as $ligne) {
            echo "<option value='".$ligne["raisonSociale"]."'>".$ligne["raisonSociale"];
        }
    ?>
    </select>
    <br>
    <button type="submit">Valider</button>
    <button type="reset">Effacer</button>
</form>

<?php include "pieddepage.html"; ?>