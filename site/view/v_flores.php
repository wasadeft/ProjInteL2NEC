<form action="index.php?controleur=gererDonnees&action=insertObservationFloreFormulaire" method="post">
    <table>
    <tr>
            <th>Nom</th>
            <th>Nom Latin</th>
            <th>Famille</th>
            <th>Origine Geographique</th>
            <th>Commestible</th>
            <th>Medecine</th>
            <th>Toxique</th>
            <th>INPN</th>
            <th>Autre Utilite</th>
            <th>Commentaire</th>
            <th>Histoire Myth</th>
            <th>Source</th>
            <th>Periode Floral</th>
            <th>ZNIEFF</th>
            <th>Zone Prefere Humidite</th>
            <th>Type de Plante</th>
            <th>Ajouter Observation</th>
        </tr>
    <?php
    

    foreach ($floreDatas as $data) {
        $id = $data['id'];
        $nom = $data["nom"];
        $nomLatin = $data["nomLatin"];
        $famille = $data["famille"];
        $origineGeographique = $data["origineGeographique"];
        $comestible = $data["comestible"];
        $medecine = $data["medecine"];
        $toxique = $data["toxique"];
        $inpn = $data["INPN"];
        $autreUtilite = $data["autreUtilite"];
        $commentaire = $data["commentaire"];
        $histoireMyth = $data["histoire_mythe"];
        $idSrc = $data["idSrc"];
        $periodeFloral = $data["periodeFloral"];
        $znieff = $data["ZNIEFF"];
        $zonePrefereHumidite = $data["zonePrefereHumidite"];
        $typePlante = $data["typePlante"];
        ?>
        <tr>            
            <td><?php echo $nom;?></td>
            <td><?php echo $nomLatin;?></td>
            <td><?php echo $famille;?></td>
            <td><?php echo $origineGeographique;?></td>
            <td><?php echo $comestible;?></td>
            <td><?php echo $medecine;?></td>
            <td><?php echo $toxique;?></td>
            <td><?php echo $inpn;?></td>
            <td><?php echo $autreUtilite;?></td>
            <td><?php echo $commentaire;?></td>
            <td><?php echo $histoireMyth;?></td>
            <td><?php echo $idSrc;?></td>
            <td><?php echo $periodeFloral;?></td>
            <td><?php echo $znieff;?></td>
            <td><?php echo $zonePrefereHumidite;?></td>
            <td><?php echo $typePlante;?></td>
            <td><a href="index.php?controleur=gererDonnees&action=insertObservationFloreFormulaire&nomEspece=<?php echo $id;?>">Appuyer pour ajouter une Observation</a></td>
        </tr>
    <?php
    }
    ?>
    </table>