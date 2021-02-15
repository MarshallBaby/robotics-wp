<?php
/*
Template Name: partners
*/
get_header();
get_post();
?>

<section class='all-partners foot-fix'>
    <div class='container'>
        <h2 class='all-partners__title'> <?php the_title(); ?> </h2>
        <div class='partners__descr'> <?php echo get_theme_mod('parnters_descr'); ?> </div>
        <a class='partners__link' href='<?php echo get_theme_mod('parnters_howto_link') ?>'>Как стать партнером</a>
        <div class='partners__wrapper'>
            <div class='row '>
                <?php $posts = get_posts(array(
                    "category_name" => "partners",
                    "numberposts" => -1,
                ));

                foreach ($posts as $post) {
                ?>
                    <div onclick="location.href = '<?php echo get_the_excerpt(); ?>';" class='justify-content-center d-flex flex-wrap col-sm-12 col-md-6 col-lg-4'>
                        <div class='partners__item'>
                            <div class='partners__logo'>
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="partners">
                            </div>
                            <div class='partners__company'>
                                <?php the_title(); ?>
                            </div>
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