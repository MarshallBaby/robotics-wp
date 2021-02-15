<?php
/*
Template Name: projects
*/
get_header();
?>
<section class='projects foot-fix'>
    <div class='container'>
        <h2 class='projects__title'>Проекты</h2>
        <div class='row'>
            <?php
            $args = array(
                'numberposts' => -1,
                'category_name' => 'projects',

            );
            $posts = get_posts($args);
            foreach ($posts as $post) {
            ?>
                <div onclick="location.href = '<?php the_permalink(); ?>';" class='col-sm-12 col-md-6 col-lg-4'>
                    <div class='projects__item projects__item_ext' style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
                        <span> <?php the_title(); ?> </span>
                        <div class="projects__dark"></div>
                    </div>
                </div>
            <?php
            }
            ?>


        </div>
    <a class='article__back align-self-start' onclick="window.history.go(-1); return false;">Назад</a>

    </div>
</section>
<?php
get_footer();
?>