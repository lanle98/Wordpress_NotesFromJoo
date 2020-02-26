<?php get_header(); ?>

<div class="container">

    <?php echo $latest_post_desc = get_field('latest_posts'); ?>
    <h2><?php echo $latest_post_desc['title'] ?></h2>


    <h1><?php the_title(); ?></h1>


    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <?php the_content(); ?>

    <?php endwhile;
    endif; ?>



</div>

<?php get_footer(); ?>