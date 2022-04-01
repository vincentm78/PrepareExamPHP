<?php
include "connectBdd.php";
include "entete.php";

?>


<form action="traitModifMail.php" method="post">
    <select name="listeContact">
    <?php
    $sql = "SELECT nom FROM contact";
    $resultat = $cnx -> query($sql);
    $tabresultat = $resultat -> fetchAll(PDO::FETCH_ASSOC);

    foreach ($tabresultat as $ligne) {
        echo "<option value='".$ligne["nom"]."'>".$ligne["nom"]."</option>";
    }
    ?>
    </select>
    <br> Nouveau mail : 
    <input type="mail" name="mail"> 
    <br>
    <button type="submit">Valider</button>
    <button type="reset">Effacer</button>
</form>



<?php
include "pieddePage.html";
?>