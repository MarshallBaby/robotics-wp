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
			the_post();
			if(have_posts()){
				?>
					
        <section class='container article'>
            <h2 class='article__title'>
            <?php the_title(); ?>
            </h2>
            <time class='article__time' datetime="2015-05-23">23.03.15</time>
            <p class='article__subtitle'><b>19-23 мая 2015 года в Казани (Россия) прошел чемпионат по профессиональному мастерству «WorldSkills СНГ». Наши ребята заняли второе место!</b><br><br>
            В состав команды Беларуси от Брестского государственного технического университета входили студенты факультета электронно-информационных систем Чепелев Кирилл (АС-35-IV) и Канашук Антон (AC-33-V), которые представляли нашу страну в высокотехнологичной компетенции «Мобильная робототехника». Их выступление на чемпионате оказалось весьма успешным - ребята завоевали второе место в своей компетенции, уступив команде России. <br>
            <img src='img/IMG_3901.jpg' alt='photo'> 
         </p> 
         <a class='article__back' href='index.php'>Назад</a>
         <hr class='article__line'>
        </section>

    
				<?php
			}//endif
		}//endwhile
	?>
	</div>

<div style="height: 15px;"></div>
    <div class='container'>
        <section class='container article'>
            <h2 class='article__title'>
            Второе место на WorldSkills СНГ
            </h2>
            <time class='article__time' datetime="2015-05-23">23.03.15</time>
            <p class='article__subtitle'><b>19-23 мая 2015 года в Казани (Россия) прошел чемпионат по профессиональному мастерству «WorldSkills СНГ». Наши ребята заняли второе место!</b><br><br>
            В состав команды Беларуси от Брестского государственного технического университета входили студенты факультета электронно-информационных систем Чепелев Кирилл (АС-35-IV) и Канашук Антон (AC-33-V), которые представляли нашу страну в высокотехнологичной компетенции «Мобильная робототехника». Их выступление на чемпионате оказалось весьма успешным - ребята завоевали второе место в своей компетенции, уступив команде России. <br>
            <img src='img/IMG_3901.jpg' alt='photo'> 
         </p> 
         <a class='article__back' href='index.php'>Назад</a>
         <hr class='article__line'>
        </section>

    </div>

<?php

get_footer();
