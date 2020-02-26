<!DOCTYPE html>
<html lang="en">

<head>
    <?php wp_head(); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/07cd3ec3ab.js" crossorigin="anonymous"></script>

    <title>Notes From Joo</title>
</head>

<body <?php body_class(); ?>>

    <header class="text-center row m-auto justify-content-center">

        <a class="m-5 col-12 col-md-6 col-lg-4" href="/"><img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/logo.png" alt="logo" /></a>
        <?php wp_nav_menu(
            array(
                'container' => "nav",
                'container_class' => 'col-12',
                "menu_class" => "nav justify-content-center",
                'theme_location' => 'header-menu',



            )
        ) ?>


    </header>