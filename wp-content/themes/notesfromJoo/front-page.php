<?php get_header(); ?>
<section class="jumbotron jumbotron-fluid">
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

                    <div class="hero p-0">
                        <img class="img-fluid" src="<?php echo $img ?>" alt="hero-image" />
                        <h2><?php the_title() ?></h2>

                    </div>



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
    <?php echo $latest_post_desc = get_field('latest_posts'); ?>
    <h2><?php echo $latest_post_desc['title'] ?></h2>



    <!-- latest posts -->
    <div class="row latest-posts justify-content-center">
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
                <br>




                <a href="<?php echo get_permalink() ?>" class="col-11 col-md-3 p-0 m-3 latest-post">
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


            <h2><?php the_content(); ?></h2>


    <?php endwhile;
    endif; ?>




</div>

<?php get_footer(); ?>