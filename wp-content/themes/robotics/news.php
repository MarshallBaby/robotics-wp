<?php
/*
Template Name: news
*/
get_header();
?>

<section class='news foot-fix'>
    <div class='container'>
        <h2 class='news__title'>Новости</h2>
    </div>
    <div class='container d-flex flex-column align-items-center'>
        <div class="row equal">
            <?php
            $posts = get_posts(array(
                'category_name' => 'newscat',
                'numberposts' => -1
            ));
            foreach ($posts as $post) {
            ?>
                <div class="news__card col-xs-12 col-sm-6 col-lg-4">
                    <div class='news__sticker'>
                        <div onclick="location.href = '<?php the_permalink(); ?>';" class="news__thumb" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"> </div>
                        <div class='news__help-container'>
                            <h3 class='news__subtitle'> <?php the_title(); ?> </h3>
                            <div class='news__descr'> <?php the_excerpt(); ?> </div>
                            <div class='news__more'>
                                <a href="<?php the_permalink(); ?>">Подробнее</a>
                            </div>
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
