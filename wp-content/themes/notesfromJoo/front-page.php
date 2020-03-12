<?php get_header(); ?>
<section class="jumbotron jumbotron-fluid p-0 m-0">
    <div class="slider-wrapper">
        <div class="slide-show px-0">

            <?php $query_hero = new WP_Query(
                array(
                    'posts_per_page' => 4,
                    'orderby' => 'title'
                )
            ) ?>

            <?php if ($query_hero->have_posts()) : while ($query_hero->have_posts()) : $query_hero->the_post(); ?>
                    <?php $img =  get_field('hero')['image-vertical']; ?>

                    <a href="<?php echo get_permalink() ?>" class="hero p-0">
                        <img class="img-fluid" src="<?php echo $img ?>" alt="hero-image" />
                        <h2><?php the_title() ?></h2>

                    </a>



            <?php endwhile;
            endif; ?>


        </div>
    </div>

    <div class="slider-btn-left px-5">
        <i class="fas fa-angle-left"></i>
    </div>
    <div class="slider-btn-right px-5">
        <i class="fas fa-angle-right"></i>
    </div>

</section>





<div class="container">
    <!-- latest-post description -->




    <section id="latest-posts">
        <div class="desc m-5">
            <?php the_post(); ?>
            <h2 class="text-center p-3"><?php echo get_field('latest-posts')['title'] ?></h2>
            <p class="text-center"><?php echo get_field('latest-posts')['description'] ?></p>





        </div>
        <div class="row posts justify-content-center">
            <?php $query_latest_posts = new WP_Query(
                array(
                    'posts_per_page' => 3,
                    'orderby' => 'date',
                    'order' => "DESC",


                )
            ) ?>


            <?php if ($query_latest_posts->have_posts()) : while ($query_latest_posts->have_posts()) : $query_latest_posts->the_post(); ?>
                    <?php $field = get_field('hero');
                    $location = $field['location'];
                    $image = $field['image-vertical'];

                    ?>





                    <a href="<?php echo get_permalink() ?>" class="col-11 col-md-3 m-3 p-0 post">
                        <img class="img-fluid m-0" src='<?php echo $image ?>' alt="image" />
                        <div class="title">
                            <h1><?php the_title() ?></h1>
                            <h5><?php echo $location; ?>, <?php echo get_the_category()[0]->name ?></h5>
                        </div>


                    </a>





            <?php endwhile;
            endif; ?>

        </div>

    </section>




    <section id="featured-posts">
        <div class="desc m-5">

            <?php the_post(); ?>
            <h2 class="text-center p-3"><?php echo get_field('featured-posts')['title'] ?></h2>
            <p class="text-center"><?php echo get_field('featured-posts')['description'] ?></p>

        </div>
        <div class="row posts justify-content-center">
            <?php $query_latest_posts = new WP_Query(
                array(
                    'posts_per_page' => 4,
                    'orderby' => 'date',
                    'order' => "ASC",


                )
            ) ?>

            <?php if ($query_latest_posts->have_posts()) : while ($query_latest_posts->have_posts()) : $query_latest_posts->the_post(); ?>
                    <?php $field = get_field('hero');
                    $location = $field['location'];
                    $image = $field['image-vertical'];

                    ?>





                    <a href="<?php echo get_permalink() ?>" class="col-11 col-md-5 m-3 p-0 post">
                        <img class="img-fluid" src='<?php echo $image ?>' alt="image" />
                        <div class="title">
                            <h2><?php the_title() ?></h2>
                            <h3><?php echo get_the_date() ?></h3>

                        </div>


                    </a>





            <?php endwhile;
            endif; ?>
            <a class="btn btn-primary view-all col-4 p-3 col-md-2 m-5">
                View All
            </a>

        </div>







    </section>



</div>

<section class="instagram text-center p-5 m-auto">

    <h2 class="pb-4 w-50 title m-auto">INSTAGRAM</h2>

    <div class="ins-posts">
        <?php the_post(); ?>
        <h2 class="text-center p-3"><?php echo get_field('instagram') ?></h2>
    </div>
</section>

<?php get_footer(); ?>