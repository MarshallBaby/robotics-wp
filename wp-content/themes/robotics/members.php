<?php
/*
Template Name: members
*/
get_header();
?>

<section class='members '>
    <div class='container'>
        <h2 class='members__title'> <?php the_title(); ?></h2>
        <div class='members__wrapper'>
            <div class='row justify-content-start'>
                <div class='col-sm-12 col-md-6 col-lg-9'>
                    <?php
                    $posts = get_posts(array(
                        'category_name' => 'members',
                        'numberposts' => -1,
                        'orderby' => 'menu_order'
                    ));
                    foreach ($posts as $post) {
                    ?>
                        <div class='members__item d-flex flex-column flex-lg-row'>
                            <div class='members__thumb' style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>
                            <div class='members__info'>
                                <h3 class='members__name'><?php the_title(); ?></h3>
                                <div class='members__descr'> <?php the_excerpt(); ?>

                                    <span class='d-none d-md-flex members__descr_sub'> <?php the_content(); ?> </span>
                                </div>
                            </div>

                        </div>
                    <?php
                    }
                    ?>
            </div>
            <hr class='members__line'>
        </div>

</section>
<section class="mb-5">
    <div class='container'>
        <?php
                $args = array(
                    'post_type' => 'page', //it is a Page right?
                    'post_status' => 'publish',
                    'meta_query' => array(
                        array(
                            'key' => '_wp_page_template',
                            'value' => ['members.php'], // template name as stored in the dB
                    
                        )
                    )
                );
                $query = new WP_Query($args);
                while ($query->have_posts()) {
       
                    ?>  <div class='students__title'>Студенты</div> <?php
                    $query->the_post();
                    the_content();
                }
                ?>
        <a class='article__back align-self-start ml-3' onclick="window.history.go(-1); return false;">Назад</a>
    </div>

</section>

<?php get_footer(); ?>