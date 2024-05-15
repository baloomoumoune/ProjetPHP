<?php include('../vue/navBarre.php'); ?>
<?php include('../vue/basDePage.php'); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/vueDetailOeuvre.css" rel="stylesheet" type="text/css">
    <title>Détails Oeuvres</title>
</head>
<body>
<div class="cadre">
    <?php if(!empty($monoeuvre)) { ?>
    <?php echo "<td><img class='image' src='../img/" . $monoeuvre['img_Oeuvre'] . ".jpg' alt='" . $monoeuvre['img_Oeuvre'] . "'></td>"; ?>
    <div class="texte">
        <p> Titre Original :     <?php echo $monoeuvre['tit_ori_Oeuvre'] ?> </p>
            <p> Titre Français :    <?php echo $monoeuvre['tit_fr_Oeuvre'] ?> </p>
            <p> Résumé :    <?php echo $monoeuvre['res_Oeuvre'] ?> </p>
            <p> Date de Sortie :    <?php echo $monoeuvre['anne_sort_Oeuvre'] ?> </p>
            <p> Nombre d'épisode :    <?php echo $monoeuvre['nb_ep_Oeuvre'] ?> </p>
            <p> Classification :    <?php echo $macla['lib_Cla'] ?> </p>

            <?php } else {
                echo "Aucune oeuvre trouvée pour cet identifiant.";
            }?>
    </div>
</div>
</body>
</html>
