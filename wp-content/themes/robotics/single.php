<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package robotics
 */

get_header();
?>
	<div style="height: 15px;"></div>
    <div class='container'>
	<?php 
		while(have_posts()){
			if(have_posts()){
				the_post();
				?>
					
        <section class='container article'>
            <h2 class='article__title'>
            <?php the_title(); ?>
            </h2>
            <time class='article__time' datetime="2015-05-23">23.03.15</time>
				<?php the_content(); ?>
         <a class='article__back' href='index.php'>Назад</a>
         <hr class='article__line'>
        </section>

    
				<?php
			}//endif
		}//endwhile
	?>
	</div>

<?php

get_footer();
