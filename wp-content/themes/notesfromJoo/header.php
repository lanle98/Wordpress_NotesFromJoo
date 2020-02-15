<!DOCTYPE html>
<html lang="en">

<head>
    <?php wp_head(); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body <?php body_class(); ?>>

    <header>

        <?php wp_nav_menu(
            array(
                'container' => "nav",
                'container_class' => '',
                "menu_class" => "nav justify-content-center",
                'theme_location' => 'header-menu',



            )
        ) ?>

        <div class="jumbotron jumbotron-fluid"></div>
    </header>