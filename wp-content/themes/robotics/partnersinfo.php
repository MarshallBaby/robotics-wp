<?php
/*
Template Name: partnersinfo
*/
get_header();
?>


<div style="height: 15px;"></div>
    <div class='container foot-fix'>
	<?php 
		while(have_posts()){
			if(have_posts()){
				the_post();
				?>
					
        <section class='container article'>
            <h2 class='article__title'>
            <?php the_title(); ?>
            </h2>
            <!-- <time class='article__time' datetime="<?php echo get_the_date('Y-m-d') ?>"> <?php echo get_the_date('d.m.Y'); ?> </time> -->
				<?php the_content(); ?>
         <a class='article__back' onclick="window.history.go(-1); return false;">Назад</a>
         <hr class='article__line'>
        </section>

    
				<?php
			}//endif
		}//endwhile
	?>
	</div>

<?php get_footer(); ?>