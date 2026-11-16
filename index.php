<?php
    require('./components.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LaserClinica</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=ac_unit,cancel,chat,clinical_notes,electric_bolt,health_and_safety,hourglass_top,info,light_mode,menu,sanitizer,savings,spa,task_alt,trending_down,tungsten,tune,verified" />

        <link rel="stylesheet" href="./assets/css/app.css">
    </head>
    <body>
        <?php require('./containers/header.php'); ?>
        <?php require('./containers/banner.php'); ?>
        <?php require('./containers/differentials.php'); ?>
        <?php require('./containers/treatment.php'); ?>
        <?php require('./containers/regions.php'); ?>
        <?php require('./containers/evolution.php'); ?>
        <?php require('./containers/safety.php'); ?>

        <script src="./assets/js/app.js"></script>
    </body>
</html>
