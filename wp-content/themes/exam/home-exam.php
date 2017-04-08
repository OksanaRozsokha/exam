<?php

/*
Template Name: exam-home
*/
get_header(); ?>

<section class="why-us">
    <div class="container">
        <?php
        $the_slug = 'we-are-professional';
        $args = array(
            'name'           => $the_slug,
            'post_type'      => 'post',
            'post_status'    => 'publish',
            'posts_per_page' => 1
        );
        $query = new WP_Query( $args );
        if ($query->have_posts()):?>
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <?php the_post_thumbnail('full'); ?>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="text">
                            <h2><?php echo get_theme_mod('why_title'); ?></h2>
                            <h3><?php the_title(); ?></h3>
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>

            <?php endwhile; ?>
        <?php endif; wp_reset_postdata(); ?>
    </div>
</section>
<section class="welcome">
    <div class="container">
        <?php
        $the_slug = 'welcome-here';
        $args = array(
            'name'           => $the_slug,
            'post_type'      => 'post',
            'post_status'    => 'publish',
            'posts_per_page' => 1
        );
        $query = new WP_Query( $args );
        if ($query->have_posts()):?>
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <?php the_post_thumbnail('full'); ?>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="text">
                            <h3><?php the_title(); ?></h3>
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; wp_reset_postdata(); ?>
    </div>
</section>
<section class="our-services">
    <div class="container">
        <header class="content-header">
            <h2><?php echo get_theme_mod('services_title'); ?></h2>
            <p><?php echo get_theme_mod('services_text'); ?></p>
        </header>
            <?php
            $query = new WP_Query( array('post_type' => 'services-reviews', 'posts_per_page' => 100 ) );
            if ($query->have_posts()):?>
                <ul class="services-list row">
                    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                        <li class="col-sm-12 col-md-4">
                            <?php the_post_thumbnail('full'); ?>
                            <h3 class="title title-small"><?php the_title(); ?></h3>
                            <p class="text"><?php the_content(); ?></p>
<!--                            <a href="--><?php //the_permalink(); ?><!--">Find Out More</a>-->
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; wp_reset_postdata(); ?>
    </div>
</section>
    <section class="portfolio">
        <div class="container">
            <header class="content-header">
                <h2><?php echo get_theme_mod('portfolio_title'); ?></h2>
                <p><?php echo get_theme_mod('portfolio_text'); ?></p>
            </header>
            <?php
            $query = new WP_Query( array('post_type' => 'works', 'posts_per_page' => 100 ) );
            if ($query->have_posts()):?>
                <ul class="works-list row">
                    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                        <li class="slider-item col-sm-12 col-md-4">
                            <?php the_post_thumbnail('full'); ?>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; wp_reset_postdata(); ?>
        </div>
    </section>

<section>
    <div class="container">
        <header class="content-header">
            <h2><?php echo get_theme_mod('works_title'); ?></h2>
            <p><?php echo get_theme_mod('works_text'); ?></p>
        </header>

<!-- -----------  SINGLE - POST-------------->
        <?php
        $the_slug = 'about-us';
        $args = array(
            'name'           => $the_slug,
            'post_type'      => 'post',
            'post_status'    => 'publish',
            'posts_per_page' => 1
        );
        $query = new WP_Query( $args );
        if ($query->have_posts()):?>
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                <p class="text">
                    <?php the_content(); ?>
                </p>
                <a href="<?php the_permalink(); ?>" class="btn">read more</a>

            <?php endwhile; ?>
        <?php endif; wp_reset_postdata(); ?>
<!-----------------------------        ---------------------------->

<!-----------------------   SLIDER    --------------------------->

<!--  -------------------------------------------------------------------      -->



    </div>
</section>


<?php
//get_sidebar();
get_footer();