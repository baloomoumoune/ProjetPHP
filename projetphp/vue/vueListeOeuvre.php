<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="../css/vueListeOeuvres.css" rel="stylesheet" type="text/css">
    <link href="../css/vueListeOeuvres.js" rel="stylesheet" type="text/js">
    <title>Cadre Noir Carré avec Image et Texte</title>
</head>
<body>
<div class="container">
    <h3>Nos films</h3>
    <div class="films-container">
        <?php foreach ($mesFilms as $oeuvre) { ?>
            <a href="Details.php?idOeuvre=<?php echo $oeuvre['id_Oeuvre'] ?>" class="film-link">
                <?php if (is_null($oeuvre['id_Oeuvre'])) { ?>
                    <div class="placeholder">Non trouvé</div>
                <?php } else { ?>
                    <?php echo "<td><img class='image' src='../img/" . $oeuvre['img_Oeuvre'] . ".jpg' alt='" . $oeuvre['img_Oeuvre'] . "' class='film-image'></td>"; ?>
                <?php } ?>
                <h4 class="film-title"><?php echo $oeuvre['tit_ori_Oeuvre'] ?></h4>
            </a>
        <?php } ?>
    </div>

            <!-- Flèche de défilement -->
            <div class="scroll-arrow" id="scrollLeft"><i class="fas fa-chevron-left"></i></div>
            <div class="scroll-arrow" id="scrollRight"><i class="fas fa-chevron-right"></i></div>


<?php include('../vue/basDePage.php'); ?>

<script>
    document.getElementById('scrollRight').addEventListener('click', function() {
        const container = document.querySelector('.container');
        const containerWidth = container.offsetWidth;
        const filmsContainerWidth = document.querySelector('.films-container').offsetWidth;
        const scrollAmount = containerWidth /4; // Déplace d'un quart de la largeur du conteneur

        if (container.scrollLeft + containerWidth < filmsContainerWidth) {
            container.scrollLeft += scrollAmount;
        }

    });
    document.getElementById('scrollLeft').addEventListener('click', function() {
        const container = document.querySelector('.container');
        const scrollAmount = container.offsetWidth /4; // Déplace d'un quart de la largeur du conteneur vers la gauche

        if (container.scrollLeft > 0) {
            container.scrollLeft -= scrollAmount;
        } else {
            container.scrollLeft = 0; // Pour éviter un défilement négatif
        }
    });

</script>
</body>
</html>
