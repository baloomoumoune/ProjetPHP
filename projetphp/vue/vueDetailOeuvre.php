<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/vueDetailOeuvre.css" rel="stylesheet" type="text/css">
    <title>Détails Oeuvres</title>
</head>
<body>
<?php include('../vue/basDePage.php'); ?>
<div class="cadre">
    <?php if(!empty($monoeuvre)) { ?>
    <?php echo "<td><img class='image' src='../img/" . $monoeuvre['img_Oeuvre'] . ".jpg' alt='" . $monoeuvre['img_Oeuvre'] . "'></td>"; ?>
    <div class="texte">
        <p><strong> Titre Original :     <?php echo $monoeuvre['tit_ori_Oeuvre'] ?></strong> </p>
            <p><strong> Titre Français :    <?php echo $monoeuvre['tit_fr_Oeuvre'] ?> </strong></p>
            <p><strong>Date de Sortie :    <?php echo $monoeuvre['anne_sort_Oeuvre'] ?> </strong></p>
            <p><strong>Nombre d'épisode :    <?php echo $monoeuvre['nb_ep_Oeuvre'] ?> </strong></p>
            <p><strong>Résumé :    <?php echo $monoeuvre['res_Oeuvre'] ?> </p>
            <!--<p><strong>Réalisateur :    <?php /*echo $mesRealNoms['pre_Real'] */?> <?php /* echo $mesRealNoms['nom_Real'] */?></p>-->
            <?php } else {
                echo "Aucune oeuvre trouvée pour cet identifiant.";
            }?>
    </div>
</div>
</body>
</html>
