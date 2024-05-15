<?php
require_once ('../Modele/DAO/GenreDAO.php');
$GenreDAO = new \DAO\genreDAO();
$mesgenres = $GenreDAO->getAllGen();?>

<!DOCTYPE html>
<html>
<head>
    <title>test</title>
    <link rel="stylesheet" href="view/test.css">
</head>
<body>
<h1>test</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Nom</th>
    </tr>
    <?php foreach ($mesgenres as $genre): ?>
        <tr>
            <td><?php echo $genre['id_Gen']; ?></td>
            <td><?php echo $genre['lib_gen']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
