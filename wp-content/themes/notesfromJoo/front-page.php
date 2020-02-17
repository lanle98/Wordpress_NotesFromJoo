<?php get_header(); ?>

<div class="jumbotron">



</div>


<div class="container">

    <div class="row latest-posts justify-content-center">
        <?php $query_posts = new WP_Query(
            array(
                'posts_per_page' => 3,
                'orderby' => 'date',
                'order' => "DESC",


            )
        ) ?>

        <?php if ($query_posts->have_posts()) : while ($query_posts->have_posts()) : $query_posts->the_post(); ?>
                <?php $field = get_field('hero');
                $location = $field['location'];
                $image = $field['image-vertical'];

                ?>
                <br>




                <a href="<?php echo get_permalink() ?>" class="col-12 col-md-3 p-0 m-3 latest-post">
                    <img class="img-fluid m-0" src='<?php echo $image ?>' alt="image" />
                    <div class="title">
                        <h1><?php the_title() ?></h1>
                        <h3><?php echo $location; ?>, <?php echo get_the_category()[0]->name ?></h3>
                    </div>
                </a>





        <?php endwhile;
        endif; ?>

    </div>




    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>


            <h2><?php the_title(); ?></h2>


    <?php endwhile;
    endif; ?>



    <div class="row justify-content-center">
        <div class="bg-primary col-3 m-2">b</div>
        <div class="bg-primary col-3 m-2">c</div>
        <div class="bg-primary col-3 m-2">a</div>
    </div>


</div>

<?php get_footer(); ?>