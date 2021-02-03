    <?php get_header(); ?>


    <div class="container">
        <section class="card">
            <div class="card__background">
            </div>
            <h1 class='card__title'>
                <?php echo get_bloginfo( 'name' ); ?>
            </h1>
            <div class='card__descr'>
                <?php echo get_bloginfo('description'); ?>
            </div>
            <div class='card__wrapper'>
                <div class='card__button'>
                    Наша деятельность
                </div>
                <a class='card__history card__history_hidden'>
                    История <i class="bi bi-chevron-right"></i>
                </a>
            </div>

            <div class="card__media">
                <i class="bi bi-facebook"></i>
                <i class="bi bi-instagram"></i>
                <i class="bi bi-telegram"></i>
                <i class="bi bi-youtube"></i>
            </div>
            <div class='aboba'>
                <a class='card__history'>
                    История <i class="bi bi-chevron-right"></i>
                </a>
            </div>
        </section>
        <section class='news'>
            <div class='container'>
                <h2 class='news__title'>Новости</h2>
            </div>
            <div class='container d-flex flex-column align-items-center'>
                <div class="row equal">
                    <div class="news__card col-xs-12 col-sm-6 col-lg-4">
                        <div class='news__sticker'>
                            <div class="news__thumb" style="background-image: url(img/news/1.jpg);"></div>
                            <div class='news__help-container'>
                                <h3 class='news__subtitle'>Второе место на WorldSkills СНГ</h3>
                                <div class='news__descr'>19-23 мая 2015 года в Казани (Россия) прошел чемпионат по профессиональному мастерству «WorldSkills СНГ». Наши ребята заняли второе место!</div>
                                <div class='news__more'>
                                    <a href="single.php">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="news__card col-xs-12 col-sm-6 col-lg-4">
                        <div class='news__sticker'>
                            <div class="news__thumb" style="background-image: url(img/news/2.jpg);"></div>
                            <div class='news__help-container'>
                                <h3 class='news__subtitle'>Чемпионы WorldSkills 2014</h3>
                                <div class='news__descr'>19-23 мая 2015 года в Казани (Россия) прошел чемпионат по профессиональному мастерству «WorldSkills СНГ». Наши ребята заняли второе место!</div>
                                <div class='news__more'>
                                    <a href="#">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="news__card col-xs-12 col-sm-6 col-lg-4">
                        <div class='news__sticker'>
                            <div class="news__thumb" style="background-image: url(img/news/3.jpg);"></div>
                            <div class='news__help-container'>
                                <h3 class='news__subtitle'>Arduino Day 2014</h3>
                                <div class='news__descr'>19-23 мая 2015 года в Казани (Россия) прошел чемпионат по профессиональному мастерству «WorldSkills СНГ». Наши ребята заняли второе место!</div>
                                <div class='news__more'>
                                    <a href="#">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="news__card d-none d-sm-flex d-lg-none col-xs-12 col-sm-6 col-lg-4">
                        <div class='news__sticker'>
                            <div class="news__thumb" style="background-image: url(img/news/1.jpg);"></div>
                            <div class='news__help-container'>
                                <h3 class='news__subtitle'>Arduino Day 2014</h3>
                                <div class='news__descr'>19-23 мая 2015 года в Казани (Россия) прошел чемпионат по профессиональному мастерству «WorldSkills СНГ». Наши ребята заняли второе место!</div>
                                <div class='news__more'>
                                    <a href="#">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class='news__all-news'>
                    <a href="news">все новости</a>
                </div>
            </div>
        </section>

        <section class="projects">
            <div class="container d-flex flex-column">
                <h2 class ='projects__title'>Проекты</h2>
                <div class='projects__descr'>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                
                </div>
                
                <div class="projects__wrapper align-self-center">
                    <div class='projects__item' style="background-image:url(img/projects/IMG_3959.jpg)">
                        <div class="projects__dark"></div>
                    <div class='projects__name'>Проектирование робототехнических комплексов</div>
                    </div>
                    <div class='projects__item' style="background-image:url(img/projects/IMG_3967.jpg)">
                        <div class="projects__dark"></div>
                        <div class='projects__name'>Цифровое моделирование</div>
                    
                    </div>
                    <div class='projects__item' style="background-image:url(img/projects/IMG_3975.jpg)">
                        <div class="projects__dark"></div>
                        <div class='projects__name'>Промышленная маркировка товаров</div>
                    
                    </div>
                    <div class='projects__item' style="background-image:url(img/projects/IMG_3977.jpg)">
                        <div class="projects__dark"></div>
                        <div class='projects__name'>Разработка систем технического зрения</div>
                    
                    </div>
                    <div class='projects__item' style="background-image:url(img/projects/IMG_3979.jpg)">
                        <div class="projects__dark"></div>
                        <div class='projects__name'>Промышленная маркировка товаров</div>
                    
                    </div>
                    <div class='projects__item d-none d-lg-flex' style="background-image:url(img/projects/IMG_3988-Pano.jpg)">
                        <div class="projects__dark"></div>
                        <div class='projects__name'>Аддитивные технологии</div>
                    
                    </div>
                    <div class='projects__item d-none d-lg-flex' style="background-image:url(img/projects/IMG_4015.jpg)">
                        <div class="projects__dark"></div>
                        <div class='projects__name'>Обучение и переподготовка</div>
                    
                    </div>
                    <div onclick="location.href = 'projects.php';" class='projects__item' style="background-image:url(img/projects/IMG_4032.jpg)">
                        <div class="projects__dark"></div>
                        <div class='projects__name'>Все проекты</div>
                    
                    </div>
                </div>
               
                
            </div>
        </section>

        <section class='partners'>
            <div class='container'>
                <h2 class ='partners__title'>Наши партнеры</h2>
                <div class='partners__descr'>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
                
                </div>
                <a class='partners__link' href='#'>Как стать партнером</a>
                <div class='partners__wrapper'>
                <div class='row '>
                    <div class='justify-content-center d-flex flex-wrap col-sm-12 col-md-6 col-lg-4'>
                        <div class='partners__item'>
                           <div class='partners__logo'>
                                <img src="img/patners/logo-savushkin-produkt.png" alt="partners">
                           </div>
                           <div class='partners__company'>
                           ООО Системы промышленной автоматизации
                           </div>
                        </div>
                    </div>
                    <div class='justify-content-center d-flex flex-wrap col-sm-12 col-md-6 col-lg-4'>
                        <div class='partners__item'>
                           <div class='partners__logo'>
                                <img src="img/patners/logo-savushkin-produkt.png" alt="partners">
                           </div>
                           <div class='partners__company'>
                           ООО Системы промышленной автоматизации
                           </div>
                        </div>
                    </div>
                    <div class='justify-content-center d-flex flex-wrap col-sm-12 col-md-6 col-lg-4'>
                        <div class='partners__item'>
                           <div class='partners__logo'>
                                <img src="img/patners/logo-savushkin-produkt.png" alt="partners">
                           </div>
                           <div class='partners__company'>
                           ООО Системы промышленной автоматизации
                           </div>
                        </div>
                    </div>
                </div>
                <div class='partners__full-list'>
                    <a href="partners.php">полный список</a>
                </div>
                <hr class='partners__line'>
                </div>
            </div>
        </section>
        <section class='excursion'>
            <div class='container'>
                <h2 class='excursion__title'>Экскурсии</h2>
            </div>
            <div class='row justify-content-around'>
                <div class=' flex-wrap d-flex justify-content-center col-sm-12 col-md-4 col-lg-4'>
                    
                    <div class='excursion__item' style="background-image: url(img/excursion/1.jpg);"> <span>Онлайн-экскурсия </span>
                    <div class="excursion__dark"></div>
                    </div>
                </div>
                <div class=' flex-wrap d-flex justify-content-center col-sm-12 col-md-4 col-lg-4'>
                    
                    <div class='excursion__item' style="background-image: url(img/excursion/2.jpg);"> <span>Оффлайн-экскурсия </span>
                    <div class="excursion__dark"></div>
                    </div>
                </div>
                <div class=' flex-wrap d-flex justify-content-center col-sm-12 col-md-4 col-lg-4'>
                    
                    <div class='excursion__item' style="background-image: url(img/excursion/3.jpg);"> <span>Виртуальная-экскурсия </span>
                    <div class="excursion__dark"></div>
                    </div>
                </div>
            </div>
            <hr class='excursion__line'>
            
        </section>
        <section class='links mb-5'>
            <div class='container'>
                <h2 class="links__title">Полезные ссылки</h2>
                <div class="container">
                    <div class='row'>
                        <div class='col-sm-12 col-lg-4 col-xl-4 col-xxl-3'>
                            <div class='links__wrapper'>
                                <div data-href="sfs" data-title="RoboRace" class='links__item links__item_active'>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum animi commodi dolore sit iusto est reiciendis minus in ut, necessitatibus doloremque magnam aliquam quae! Corporis illum voluptas incidunt facilis porro.
                                </div>
                                <div data-href="sefs" data-title="TowerLight Urcap" class='links__item'>
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur quibusdam ea doloribus aperiam maxime vel officiis quidem, doloremque recusandae maiores. Cupiditate beatae doloremque voluptates sequi magnam? Facere reiciendis molestiae voluptate?
                                </div>
                                <div data-href="dgdg" data-title="WIKI" class='links__item'>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. In a vitae nemo nostrum beatae! Vero iste, iure et exercitationem asperiores ullam saepe cupiditate, ducimus repellat magni repudiandae. Quaerat, facilis suscipit.
                                </div>
                                <div data-href="hds" data-title="RAIPAP" class='links__item'>
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error, ipsam est nam, modi sunt id minus assumenda nobis aliquam iste cum nisi officia dolor minima quasi? Quos nostrum expedita a.
                                </div>
                                <div data-href="adafg" data-title="Публикации" class='links__item'>
                                    Перечень научных публикаций лаборатории, тем дипломных проектов, магистерских диссертаций, участие в конференциях и семинарах.
                                </div>
                            </div>

                        </div>
                        <div class='offset-lg-1 col-lg-7 offset-xl-0 col-xl-6 col-xxl-6 d-none d-lg-flex'>
                            <div class="links__info">
                                <div class='links__subtitle'>RoboRace</div>
                                <div class='links__desrc'>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</div>
                                <a href="#" class="links__href"> Подробнее </a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>
    </div>
   <?php get_footer(); ?>