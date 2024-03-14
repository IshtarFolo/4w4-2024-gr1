<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thème du groupe 1</title>

    <!-- Php pour refaire le lien avec stylesheets -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/normalize.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    <!-- HEADER -->
    <div id="entete" class="global">
        <div id="menu__entete" class="global">
        <?php echo get_custom_logo(); ?> 
        <!-- Btn-burger ici! -->
            <?php get_template_part("gabarits/btn-burger") ?> 
            <!-- Fin btn-burger -->
            <header class="menu__header">
                <?php wp_nav_menu(array("container" => "nav")); ?>
            </header>
        </div>