<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hermonia</title>

    <!-- Main CSS -->
    <link rel="stylesheet" href="<?php echo BASE_ASSETS; ?>css/main.css">

    <?php if (isset($additional_styles)): ?>
        <link rel="stylesheet" href="<?php echo BASE_ASSETS ?>css/<?= $additional_styles ?>">
    <?php endif; ?>

</head>