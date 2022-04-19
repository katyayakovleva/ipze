<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package IPZE
 */

get_header();
?>

	<main id="primary" class="site-main">
        <div class="banner-wr" style="background: url(<?php echo get_template_directory_uri(); ?>/assets/img/main-back_650.jpg) repeat-x top">
            <div class="banner" style="background: url(<?php echo get_template_directory_uri(); ?>/assets/img/main_650.jpg) no-repeat center">
                <div class="container">
                    <h2>
                        Навчаємо програмувати

                    </h2>
                </div>
            </div>
        </div>
        <div class="buran-wr">

            <div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/assets/img/buran.jpg" data-speed="0.5">
                <div class="container banner-text">
                    <h2>Наші переваги</h2>

                    <div class="row">
                        <div class="col-2 col-sm-1 ico-col line_block">
                            <img class="history" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/history.png">
                        </div>
                        <div class="col-10 col-sm-11 text-col line_block">
                            <h3>
                                <a href="">
                                    Засновники кафедри — практики, а не просто теоретики                                                </a>
                            </h3>
                            <p>
                                <a href="">
                                    Корифеї кафедри програмували систему керування космічним кораблем «Буран» (аналог американського Шатлу).                                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2 col-sm-1 ico-col line_block">
                            <img class="space-shuttle" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/space-shuttle.png">
                        </div>
                        <div class="col-10 col-sm-11 text-col line_block">
                            <h3>
                                <a href="">
                                    Засновники кафедри — практики, а не просто теоретики                                                </a>
                            </h3>
                            <p>
                                <a href="">
                                    Корифеї кафедри програмували систему керування космічним кораблем «Буран» (аналог американського Шатлу).                                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2 col-sm-1 ico-col line_block">
                            <img class="code" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/code.svg">
                        </div>
                        <div class="col-10 col-sm-11 text-col line_block">
                            <h3>
                                <a href="https://www.linkedin.com/search/results/people/?facetCurrentCompany=%5B%2218014182%22%5D" target="_blank">
                                    На кафедрі багато молодих викладачів, що працюють в сучасних компаніях                                                </a>
                            </h3>
                            <p>
                                <a href="https://www.linkedin.com/search/results/people/?facetCurrentCompany=%5B%2218014182%22%5D" target="_blank">
                                    Серед наших співробітників програмісти Samsung, розробники банківських систем, Java-розробники, full-stack програмісти, веб-програмісти та веб-дизайнери, розробники комп'ютерних ігор та автори власних програмних продуктів.                                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2 col-sm-1 ico-col line_block">
                            <img class="monitor" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/monitor.png">
                        </div>
                        <div class="col-10 col-sm-11 text-col line_block">
                            <h3>
                                <a href="http://apeps.kpi.ua/entrants">
                                    Програмування з першого курсу                                                </a>

                            </h3>
                            <p>
                                <a href="http://apeps.kpi.ua/entrants">
                                    Наші студенти вчаться програмувати з першого курсу і протягом усього навчання. Використовуються різні мови програмування. Навчальна програма не перевантажена математикою та «залізом». Акцент робиться на прикладному програмуванні.                                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2 col-sm-1 ico-col line_block">
                            <img class="employee" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/employee.png">
                        </div>
                        <div class="col-10 col-sm-11 text-col line_block">
                            <h3>
                                <a href="https://www.linkedin.com/school/apeps-department-of-igor-sikorsky-kyiv-polytechnic-institute/people/" target="_blank">
                                    Реальне працевлаштування в IT                                                </a>
                            </h3>
                            <p>
                                <a href="https://www.linkedin.com/school/apeps-department-of-igor-sikorsky-kyiv-polytechnic-institute/people/" target="_blank">
                                    Починаючи з 3-4 курсу, більшість наших студентів суміщають навчання з роботою за спеціальністю.                                                </a>
                            </p>
                        </div>
                    </div>

                </div>
            </div>



        </div>

<!--        Спеціальності -->
        <div class="specs-wr">
            <div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/assets/img/specs.jpg" data-speed="0.5">
                <div class="container">

                    <h2>
                        <a href="">
                            Навчальна спеціальність                                </a>
                    </h2>

                    <div class="row">

                        <!-- 121 -->
                        <div class="col-lg-6">
                            <h3>
                                <span class="num"><a href="">121</a></span>
                                <span>
                                    <a href="">
                                        Інженерія програмного забезпечення                                                            </a>
                                </span>
                            </h3>
                            <h4 class="dir program">
                                <span>
                                    <span class="cap">
                                        Освітня програма:                                                            </span>
                                    <span class="cap-name">
                                        Інженерія програмного забезпечення інтелектуальних кібер-фізичних систем і веб-технологій                                                            </span>

                                </span>
                            </h4>
                        </div>
                        <div class="col-lg-6 want">
                            <h4 class="dir row">
                                <div>
                                    <span class="cap blocks">
                                        Блоки вибіркових дисциплін:                                                            </span>
                                    <div class="row first_cap_block">
                                        <i class="far fa-circle circle col-1"></i>
                                        <div class="line col-11"> Програмне забезпечення розподілених систем та Web-технологій</div>

                                    </div>
                                    <div class="row">
                                        <i class="far fa-circle circle_2 col-1"></i>
                                        <div class="line col-11">Програмне забезпечення кібер-енергетичних систем</div>
                                    </div>
                                </div>
                                </span>
                            </h4>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Останні новини -->
        <div class="news-wr">
            <div class="container">
                <h2><a href="#">Останні новини</a></h2>
                <?php 
                    $posts = get_posts(
                        array(
                            'showposts' => 6,
                            'category' => 'news',
                            'orderby' => 'date',
                        )
                    );
                    get_template_part( 'template-parts/content', 'posts-list' );
                ?>

                
            </div>
        </div>
        <!-- Компанії -->
        <div class="container companies">
            <h2>Компанії, в яких працюють наші випускники</h2>
            <div class="brands">
                <i><img src="<?php echo get_template_directory_uri(); ?>/assets/img/companies/google.png" alt="Google"></i>
                <i><img src="<?php echo get_template_directory_uri(); ?>/assets/img/companies/samsung.png" alt="samsung"></i>
                <i><img src="<?php echo get_template_directory_uri(); ?>/assets/img/companies/microsoft.png" alt="microsoft"></i>
                <i><img src="<?php echo get_template_directory_uri(); ?>/assets/img/companies/epam.png" alt="Epam"></i>
                <i><img src="<?php echo get_template_directory_uri(); ?>/assets/img/companies/netcracker.png" alt="netcracker"></i>
                <i><img src="<?php echo get_template_directory_uri(); ?>/assets/img/companies/luxsoft.png" alt="luxsoft"></i>
                <i><img src="<?php echo get_template_directory_uri(); ?>/assets/img/companies/intersystems.png" alt="intersystems"></i>
                <i><img src="<?php echo get_template_directory_uri(); ?>/assets/img/companies/ciklum.png" alt="ciklum"></i>
                <i><img src="<?php echo get_template_directory_uri(); ?>/assets/img/companies/softserve.png" alt="softserve"></i>
                <i><img src="<?php echo get_template_directory_uri(); ?>/assets/img/companies/yahoo.png" alt="yahoo"></i>
            </div>
        </div>

        <!-- Наука -->
        <div class="science-wr">
            <div class="container">
                <h2><a href="">Наукові дослідження </a></h2>

                <div class="row">
                    <div class="col-md-6">
                        <h3><a href="">Навчально-наукові лабораторії</a></h3>
                        <p>
                            <i class="flaticon-technology"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/analytics.png"></i>
                            <span>
                    Лабораторія аналізу великих обсягів даних та управління проектами                                        </span>
                        </p>

                        <p>
                            <i class="flaticon-analytics"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/analytics.png"></i>
                            <span>
                    Науково-навчальна лабораторія комп’ютерного моделювання динамічних процесів та систем                                        </span>
                        </p>

                        <p>
                            <i class="flaticon-server"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/analytics.png"></i>
                            <span>
                    Навчально-наукова лабораторія кібер-фізичних енергетичних інфраструктур                                        </span>
                        </p>

                        <p>
                            <i class="flaticon-computer"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/analytics.png"></i>
                            <span>
                    Навчально-наукова лабораторія комп’ютерного моделювання та моніторингу довкілля                                        </span>
                        </p>
                    </div>
                    <div class="col-md-6">
                        <h3><a href="http://apeps.kpi.ua/scientific-schools">Наукові школи</a></h3>
                        <p>
                            <i class="flaticon-shapes"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/analytics.png"></i>
                            <span>
                    Автоматизація проектування розподілених динамічних об’єктів і систем                                        </span>
                        </p>
                        <p>
                            <i class="flaticon-dodecahedron"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/analytics.png"></i>
                            <span>
                    Геометричне моделювання, ізотропна геометрія та деформаційне моделювання складних об’єктів, процесів та систем                                        </span>
                        </p>

                    </div>
                </div>
            </div>
        </div>

       

	</main><!-- #main -->

<?php

get_footer();
