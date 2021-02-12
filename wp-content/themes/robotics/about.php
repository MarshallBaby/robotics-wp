<?php
/*
Template Name: about
*/
get_header();
?>

<section class='excursion'>
    <div class='container'>
        <h2 class='excursion__title'>О нас</h2>
        <div class='row justify-content-start'>
            <?php
            $posts = get_posts(array(
                'category_name' => 'about_us',
                'numberposts' => 3
            ));
            foreach ($posts as $post) {
            ?>
                <div class=' flex-wrap d-flex justify-content-center col-sm-12 col-md-4 col-lg-3'>
                    <div onclick="location.href = '<?php the_permalink(); ?>';" class='excursion__item' style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
                        <span><?php the_title(); ?></span>
                        <div class="excursion__dark"></div>
                    </div>
                </div>
            <?php
            }

            ?>
             <?php
                $args = array(
                    'post_type' => 'page', //it is a Page right?
                    'post_status' => 'publish',
                    'meta_query' => array(
                        array(
                            'key' => '_wp_page_template',
                            'value' => ['members.php'], 
                        )
                    )
                );
                $query = new WP_Query($args);
                while ($query->have_posts()) {
                    $query->the_post();
                ?>
                    <div class=' flex-wrap d-flex justify-content-center col-sm-12 col-md-4 col-lg-3'>
                    <div onclick="location.href = '<?php the_permalink(); ?>';" class='excursion__item' style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
                        <span><?php the_title(); ?></span>
                        <div class="excursion__dark"></div>
                    </div>
                </div>
                <?php

                }
                ?>
            <a class='article__back align-self-start' href='<?php echo home_url(); ?>'>Назад</a>
        </div>
    </div>


</section>

<?php get_footer(); ?>