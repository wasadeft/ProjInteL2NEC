<form action="index.php?controleur=gererDonnees&action=insertObservationFloreFormulaire" method="post">
<?php
    $id = $thisNomEspece;
    $dates = $_REQUEST["dates"];
    $typeHabitation = $_REQUEST["typeHabitation"];
    $strate = $_REQUEST["strate"];
    $zone = $_REQUEST["zone"];
    $idGrp = $_REQUEST["idGrp"];
?>
    Entrez la date d'observation<input type="date" name="dates" value="2023-01-01" min="2023-01-01" max="2100-01-01"/>
    <br/>
    Entrez le type d'habitation <input type="text" name="typeHabitation"/>
    <br/>
    Entrez la strate <input type="text" name="strate"/>
    <br/>
    Entrez la zone <input type="text" name="zone"/>
    <br/>
    Selectionez le groupe
    <select name = "idGrp">
        <?php foreach ($allGrp as $grp) {
            ?><option value="<?php echo $grp["id"];?>" name="idGrp"><?php echo $grp["nom"];?></option>
            <?php
        }
        ?>
    </select>
    <br/>
    <input type="submit" value="Valider"/>
    <input type="reset" value="Annuler"/>
</form>