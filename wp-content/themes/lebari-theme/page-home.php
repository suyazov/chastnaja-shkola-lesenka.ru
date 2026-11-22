<?php
/*
 * Template Name: Шаблон главной страницы
 */
get_header();
?>

<!-- Banner Slider Five -->
<section class="banner-section-five">
    <div class="icon-layer-one"
        style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/images2/main-slider/pattern-2.png)">
    </div>
    <div class="icon-layer-two"
        style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/images2/main-slider/pattern-3.png)">
    </div>
    <div class="icon-layer-three"
        style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/images2/main-slider/pattern-4.png)">
    </div>
    <div class="icon-layer-four"
        style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/images2/main-slider/pattern-5.png)">
    </div>
    <div class="icon-layer-five"
        style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/images2/main-slider/pattern-6.png)">
    </div>
    <div class="icon-layer-seven"
        style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/images2/main-slider/pattern-8.png)">
    </div>
    <div class="icon-layer-eight"
        style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/images2/main-slider/pattern-9.png)">
    </div>
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Content Column -->
            <div class="content-column col-lg-7 col-md-12 col-sm-12">
                <div class="inner-column" style="padding-top: 30px; padding-bottom: 30px;">
                    <div class="title" style="font-size: 20px; margin-bottom: 18px;"><?php the_field('hero_subtitle') ?>
                    </div>
                    <h1 style="font-size: 2.3rem; line-height: 1.2; font-weight: 700; margin-bottom: 22px;">
                        <?php the_field('hero_title') ?><br><span
                            style="font-size: 1.5rem; font-weight: 400;"><?php the_field('hero_descr') ?></span></h1>
                    <div class="banner-slide-five-gap" style="display: flex; gap: 18px;">
                        <a class="theme-btn btn-style-eight" href="#quiz-popup" data-fancybox><span
                                class="txt"><?php echo get_field('hero_btn')['title'] ?></span></a>
                        <a class="theme-btn btn-style-eight" href="#quiz-popup" data-fancybox><span
                                class="txt"><?php echo get_field('hero_btn2')['title'] ?></span></a>
                    </div>
                </div>
            </div>

            <?php
            $video_url = get_field('hero_video'); // ACF поле — файл видео
            $poster_url = get_field('hero_video_poster'); // ACF поле — превьюшка
            ?>

            <!-- Image Column -->
            <div class="image-column col-lg-5 col-md-12 col-sm-12" style="display: flex; align-items: center; justify-content: center; min-height: 420px;">
                <div class="inner-column">
                    <div class="icon-layer-six" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/images2/main-slider/pattern-7.png)"></div>

                    <?php if ($video_url && $poster_url): ?>
                        <div class="lazy-video" data-src="<?php echo esc_url($video_url); ?>" style="position: relative; cursor: pointer; border-radius: 18px; overflow: hidden; box-shadow: 0 4px 24px rgba(0,0,0,0.07); max-width: 100%;">
                            <img src="<?php echo esc_url($poster_url); ?>" alt="Видео превью" style="width: 100%; height: 650px; object-fit: cover; display: block;">
                            <div class="play-btn" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 64px; height: 64px; background: url('https://img.icons8.com/ios-filled/100/play-button-circled.png') no-repeat center center; background-size: contain;"></div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>


        </div>

    </div>
</section>
<!-- End Banner Slider Three -->

<!-- About Slider -->
<section class="about-section" id="about">
    <div class="color-layer"></div>
    <div class="pattern-layer-two"
        style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/images2/icons/pattern-15.png)">
    </div>
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Image Column -->
            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="kids-title">Kids</div>
                    <div class="pattern-layer"
                        style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/images2/background/pattern-15.png)">
                    </div>
                    <div class="image">
                        <img src="<?php echo get_field('about-img1')['url'] ?>" alt="" />
                    </div>
                    <div class="image-two">
                        <img src="<?php echo get_field('about-img2')['url'] ?>" alt="" />
                    </div>
                    <div class="image-three">
                        <img src="<?php echo get_field('about-img3')['url'] ?>" alt="" />
                    </div>
                </div>
            </div>

            <!-- Content Column -->
            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="sec-title-two">
                        <div class="title"><?php echo get_field('about-title1') ?></div>
                        <h2><?php echo get_field('about-title2') ?></h2>
                    </div>
                    <div class="dark-text"><?php echo get_field('about-descr1') ?></div>
                    <div class="text"><?php echo get_field('about-descr2') ?></div>
                    <div class="row clearfix">

                        <!-- Feature Column -->
                        <div class="feature-column col-lg-6 col-md-6 col-sm-12">
                            <div class="feature-inner">
                                <div class="icon"><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/img/images2/icons/feature-1.png"
                                        alt="" /></div>
                                <strong><?php echo get_field('about-item1') ?></strong>
                                <p><?php echo get_field('about-item-descr1') ?></p>
                            </div>
                        </div>

                        <!-- Feature Column -->
                        <div class="feature-column col-lg-6 col-md-6 col-sm-12">
                            <div class="feature-inner">
                                <div class="icon"><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/img/images2/icons/feature-2.png"
                                        alt="" /></div>
                                <strong><?php echo get_field('about-item2') ?></strong>
                                <p><?php echo get_field('about-item-descr2') ?></p>
                            </div>
                        </div>

                    </div>
                    <!-- Button Box -->
                    <div class="button-box">
                        <a class="theme-btn btn-style-nine" href="#quiz-popup" data-fancybox><span
                                class="txt"><?php echo get_field('about-btn')['title'] ?></span></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End About Slider -->

<!-- Program Slider -->
<section class="courses-section" id="education">
    <div class="pattern-layer-one"
        style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/images2/background/pattern-25.png)">
    </div>
    <div class="pattern-layer-two"
        style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/images2/background/pattern-26.png)">
    </div>
    <div class="pattern-layer-three"
        style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/images2/background/pattern-27.png)">
    </div>
    <div class="pattern-layer-four"
        style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/images2/background/pattern-28.png)">
    </div>
    <div class="pattern-layer-five"
        style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/images2/background/pattern-29.png)">
    </div>
    <div class="auto-container">

        <!-- Sec Title Two -->
        <div class="sec-title-three centered">
            <div class="title"><?php echo get_field('courses_subtitle') ?></div>
            <h2><?php echo get_field('courses_title') ?></h2>
        </div>
        <!-- End Sec Title Two -->

        <div class="row clearfix">

            <!-- Course Block Five -->
            <div class="course-block-five col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image">
                        <a href="#"><img src="<?php echo get_field('courses_form1_img')['url'] ?>" alt="" /></a>
                    </div>
                    <div class="lower-content">
                        <h3><?php echo get_field('courses_form1_title') ?></h3>
                        <div class="text"><?php echo get_field('courses_form1_subtitle') ?></div>
                        <div class="course-details-accordion">
                            <ul style="margin-bottom: 8px;">
                                <li><b>🕒 2
                                        тарифа:</b><br><?php echo get_field('courses_form1_tarif1') ?><br><?php echo get_field('courses_form1_tarif2') ?>
                                </li>
                                <li><b>✅ Входит:</b> <?php echo get_field('courses_form1_vhodit') ?></li>
                                <li><b>🧩 Дополнительно:</b> <?php echo get_field('courses_form1_dop') ?></li>
                                <li><b>💰 Стоимость:</b><br>• Тариф 1 — <span
                                        style="text-decoration:line-through;color:#888;"><?php echo get_field('courses_form1_zach_stoim1') ?></span>
                                    <b><?php echo get_field('courses_form1_stoim1') ?></b><br>• Тариф 2 — <span
                                        style="text-decoration:line-through;color:#888;"><?php echo get_field('courses_form1_zach_stoim2') ?></span>
                                    <b><?php echo get_field('courses_form1_stoim2') ?></b><br><span
                                        style="font-size:0.95em;color:#888;"><?php echo get_field('courses_form1_date') ?></span>
                                </li>
                            </ul>
                        </div>
                        <a href="#quiz-popup" data-fancybox class="apply-here">Подробнее</a>
                    </div>
                </div>
            </div>

            <!-- Course Block Five -->
            <div class="course-block-five col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="150ms" data-wow-duration="1500ms">
                    <div class="image">
                        <a href="#"><img src="<?php echo get_field('courses_form2_img')['url'] ?>" alt="" /></a>
                    </div>
                    <div class="lower-content">
                        <h3><?php echo get_field('courses_form2_title_') ?></h3>
                        <div class="text"><?php echo get_field('courses_form2_subtitle') ?></div>
                        <div class="course-details-accordion">
                            <ul style="margin-bottom: 8px;">
                                <li><b>🕒 Тариф:</b> <?php echo get_field('courses_form2_tarif') ?></li>
                                <li><b>✅ Входит:</b><?php echo get_field('courses_form2_vhodit') ?></li>
                                <li><b>🧠 Дополнительно:</b> <?php echo get_field('courses_form2_dop') ?></li>
                                <li><b>💰 Стоимость:</b> <span
                                        style="text-decoration:line-through;color:#888;"><?php echo get_field('courses_form2_zach_stoim') ?></span>
                                    <b><?php echo get_field('courses_form2_stoim') ?></b><br><span
                                        style="font-size:0.95em;color:#888;"><?php echo get_field('courses_form2_date') ?></span>
                                </li>
                            </ul>
                        </div>
                        <a href="#quiz-popup" data-fancybox class="apply-here">Подробнее</a>
                    </div>
                </div>
            </div>

            <!-- Course Block Five -->
            <div class="course-block-five col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="image">
                        <a href="#"><img src="<?php echo get_field('courses_form3_img')['url'] ?>" alt="" /></a>
                    </div>
                    <div class="lower-content">
                        <h3><?php echo get_field('courses_form3_title') ?></h3>
                        <div class="text"><?php echo get_field('courses_form3_subtitle') ?></div>
                        <div class="course-details-accordion">
                            <ul style="margin-bottom: 8px;">
                                <li><b>🕒 2
                                        тарифа:</b><br><?php echo get_field('courses_form3_tarif1') ?><br><?php echo get_field('courses_form3_tarif2') ?>
                                </li>
                                <li><b>✅ Входит:</b> <?php echo get_field('courses_form3_vhodit') ?></li>
                                <li><b>🧩 Дополнительно:</b> <?php echo get_field('courses_form3_dop') ?></li>
                                <li><b>💰 Стоимость:</b><br>• Тариф 1 — <span
                                        style="text-decoration:line-through;color:#888;"><?php echo get_field('courses_form3_zach_stoim1') ?></span>
                                    <b><?php echo get_field('courses_form3_stoim1') ?></b><br>• Тариф 2 — <span
                                        style="text-decoration:line-through;color:#888;"><?php echo get_field('courses_form3_zach_stoim2') ?></span>
                                    <b><?php echo get_field('courses_form3_stoim2') ?></b><br><span
                                        style="font-size:0.95em;color:#888;"><?php echo get_field('courses_form3_date') ?></span>
                                </li>
                            </ul>
                        </div>
                        <a href="#quiz-popup" data-fancybox class="apply-here">Подробнее</a>
                    </div>
                </div>
            </div>

            <!-- Course Block Five -->
            <div class="course-block-five col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image">
                        <a href="#"><img src="<?php echo get_field('courses_form4_img')['url'] ?>" alt="" /></a>
                    </div>
                    <div class="lower-content">
                        <h3><?php echo get_field('courses_form4_title') ?></h3>
                        <div class="text"><?php echo get_field('courses_form4_subtitle') ?></div>
                        <div class="course-details-accordion">
                            <ul style="margin-bottom: 8px;">
                                <li><b>🧠 Курсы:</b> <?php echo get_field('courses_form4_courses') ?></li>
                                <li><b>🗓 Занятия:</b>
                                    <?php echo get_field('courses_form4_zan1') ?><br><?php echo get_field('courses_form4_zan2') ?>
                                </li>
                                <li><b>✅ Входит:</b> <?php echo get_field('courses_form4_vhodit') ?></li>
                                <li><b>💰
                                        Стоимость:</b><br><?php echo get_field('courses_form4_stoim') ?><br><?php echo get_field('courses_form4_stoim_uch') ?><br><span
                                        style="font-size:0.95em;color:#888;">*Оплачивается отдельно</span></li>
                            </ul>
                        </div>
                        <a href="#quiz-popup" data-fancybox class="apply-here">Подробнее</a>
                    </div>
                </div>
            </div>

            <!-- Course Block Five -->
            <div class="course-block-five col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInRight" data-wow-delay="150ms" data-wow-duration="1500ms">
                    <div class="image">
                        <a href="#"><img src="<?php echo get_field('courses_form5_img')['url'] ?>" alt="" /></a>
                    </div>
                    <div class="lower-content">
                        <h3>Дополнительные занятия</h3>
                        <div class="text">Индивидуальный подход и обучение в комфортной атмосфере.</div>
                        <a href="#quiz-popup" data-fancybox class="apply-here">Подробнее</a>
                    </div>
                </div>
            </div>



        </div>

    </div>
</section>
<!-- End Program Slider -->

<?php
$aftercare_notice = get_field('aftercare_notice');
$aftercare_title = get_field('aftercare_title');
$aftercare_subtitle = get_field('aftercare_subtitle');
$aftercare_points_raw = get_field('aftercare_points');
$aftercare_food = get_field('aftercare_food');
$aftercare_price = get_field('aftercare_price');
$aftercare_points_normalized = preg_replace('/<br\s*\/?>/i', "\n", (string) $aftercare_points_raw);
$aftercare_points = array_filter(array_map('trim', preg_split('/\r\n|\r|\n/', wp_strip_all_tags($aftercare_points_normalized))));
?>

<?php if ($aftercare_title || !empty($aftercare_points)): ?>
<section class="mission-section aftercare-mission" id="aftercare">
    <div class="pattern-layer-one"
        style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/images2/icons/icon-20.png)">
    </div>
    <div class="pattern-layer-two"
        style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/images2/icons/icon-21.png)">
    </div>
    <div class="auto-container">
        <div class="row clearfix">
            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <?php if ($aftercare_notice): ?>
                        <div class="title"><?php echo esc_html($aftercare_notice); ?></div>
                    <?php endif; ?>

                    <?php if ($aftercare_title): ?>
                        <h2><?php echo esc_html($aftercare_title); ?></h2>
                    <?php endif; ?>

                    <?php if ($aftercare_subtitle): ?>
                        <div class="bold-text"><?php echo esc_html($aftercare_subtitle); ?></div>
                    <?php endif; ?>

                    <?php if ($aftercare_food): ?>
                        <div class="text"><?php echo nl2br(esc_html($aftercare_food)); ?></div>
                    <?php endif; ?>

                    <?php if ($aftercare_price): ?>
                        <div class="aftercare-price"><?php echo esc_html($aftercare_price); ?></div>
                    <?php endif; ?>

                    <div class="button-box">
                        <a class="theme-btn btn-style-ten" href="#quiz-popup" data-fancybox>
                            <span class="txt">Записаться на экскурсию<i class="icon"></i></span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="pattern-layer-three"
                        style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/images2/icons/icon-22.png)">
                    </div>
                    <div class="pattern-layer-four"
                        style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/images2/icons/icon-23.png)">
                    </div>

                    <div class="aftercare-card wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1200ms">
                        <h3>Что входит в продленку</h3>
                        <?php if (!empty($aftercare_points)): ?>
                            <ul class="aftercare-list">
                                <?php foreach ($aftercare_points as $point): ?>
                                    <li><?php echo esc_html($point); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- Mission Section -->
<section class="mission-section">
    <div class="pattern-layer-one"
        style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/images2/icons/icon-20.png)">
    </div>
    <div class="pattern-layer-two"
        style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/images2/icons/icon-21.png)">
    </div>
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Content Column -->
            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <h2><?php echo get_field('mission_title') ?></h2>
                    <div class="bold-text"><?php echo get_field('mission_descr1') ?></div>
                    <div class="text"><?php echo get_field('mission_descr2') ?> </div>
                    <!-- Button Box -->
                    <div class="button-box">
                        <a class="theme-btn btn-style-ten" href="#quiz-popup" data-fancybox><span
                                class="txt"><?php echo get_field('mission_btn')['title'] ?><i
                                    class="icon"></i></span></a>
                    </div>
                </div>
            </div>

            <!-- Image Column -->
            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="pattern-layer-three"
                        style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/images2/icons/icon-22.png)">
                    </div>
                    <div class="pattern-layer-four"
                        style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/images2/icons/icon-23.png)">
                    </div>
                    <div class="image">
                        <img src="<?php echo get_field('mission_img')['url'] ?>" alt="" />
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Mission Section -->

<!-- Feature Section Three -->
<section class="feature-section-three">
    <div class="pattern-layer-one"
        style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/images2/icons/icon-20.png)">
    </div>
    <div class="pattern-layer-three"
        style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/images2/icons/icon-27.png)">
    </div>
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Title Column -->
            <div class="title-column col-lg-5 col-md-12 col-sm-12">
                <div class="inner-column">
                    <h2><?php echo get_field('feature_title') ?></h2>
                    <div class="text"><?php echo get_field('feature_descr') ?></div>
                    <!-- Button Box -->
                    <div class="button-box">
                        <a class="theme-btn btn-style-eleven" href="#quiz-popup" data-fancybox><span
                                class="txt"><?php echo get_field('mission_btn')['title'] ?><i
                                    class="icon"></i></span></a>
                    </div>
                </div>
            </div>

            <!-- Blocks Column -->
            <div class="blocks-column col-lg-7 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="pattern-layer-two"
                        style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/images2/icons/icon-26.png)">
                    </div>
                    <div class="blocks-pattern-layer"
                        style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/images2/background/pattern-19.png)">
                    </div>
                    <div class="pattern-layer-four"
                        style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/images2/icons/icon-28.png)">
                    </div>
                    <div class="row clearfix">

                        <!-- Feature Block Five -->
                        <div class="feature-block-five col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="icon flaticon-teaching"></div>
                                <h4><?php echo get_field('feature_card1') ?></h4>
                            </div>
                        </div>

                        <!-- Feature Block Five -->
                        <div class="feature-block-five col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="icon flaticon-graduation-cap"></div>
                                <h4><?php echo get_field('feature_card2') ?></h4>
                            </div>
                        </div>

                        <!-- Feature Block Five -->
                        <div class="feature-block-five col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="icon flaticon-bullhorn"></div>
                                <h4><?php echo get_field('feature_card3') ?></h4>
                            </div>
                        </div>

                        <!-- Feature Block Five -->
                        <div class="feature-block-five col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="icon flaticon-padlock-1"></div>
                                <h4><?php echo get_field('feature_card4') ?></h4>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Feature Section Three -->

<!-- Testimonial Section Four -->
<section class="testimonial-section-four" id="testimonials">
    <div class="top-pattern-layer"
        style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/images2/background/pattern-20.png)">
    </div>
    <div class="bottom-pattern-layer"
        style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/images2/background/pattern-20.png)">
    </div>
    <div class="icon-layer-one"
        style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/images2/icons/icon-22.png)">
    </div>
    <div class="icon-layer-two"
        style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/images2/icons/icon-22.png)">
    </div>
    <div class="auto-container">
        <div class="sec-title-two centered">
            <div class="title">Отзывы</div>
            <h2>Смотрите, что говорят наши клиенты</h2>
        </div>
        <div class="inner-container">
            <div class="circle-pattern-layer-one"
                style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/images2/background/pattern-22.png)">
            </div>
            <div class="circle-pattern-layer-two"
                style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/images2/background/pattern-22.png)">
            </div>
            <div class="hm4-testimonial-carousel owl-carousel owl-theme">

                <!-- Testimonial Block Four -->
                <div class="testimonial-block-four">
                    <div class="inner-box"
                        style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/images2/background/pattern-21.png)">
                        <div class="author-image">
                            <span class="quote-icon flaticon-quote-2"></span>
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/images2/resource/author-1.webp"
                                    alt="Фото Сергея Глущенко" />
                            </div>
                        </div>
                        <h4>Сергей Глущенко</h4>
                        <div class="designation">Отзыв от 10 января</div>
                        <div class="text">
                            Я считаю, что Лесенка — самая лучшая частная школа в Ставрополе. Мне есть с чем сравнить
                            🙂<br><br>
                            Хотим выразить огромную благодарность лучшему учителю начальных классов — Моисеевой
                            Анастасии Александровне. Спасибо огромное за профессионализм и Ваше терпение!<br><br>
                            Все преподаватели — профессионалы. Добрые и в меру строгие, прекрасно объясняют учебный
                            материал — ребёнку интересно и понятно.<br><br>
                            В этой школе замечательный директор — Дарья Сергеевна. Добрая, отзывчивая, у неё всегда всё
                            под контролем, и детки её обожают.<br><br>
                            Доброжелательная атмосфера, понятная учебная программа, небольшие классы, сильный
                            педагогический состав, интересный досуг, дополнительные занятия, чистота, уют — в этой школе
                            нам нравится всё!
                        </div>
                    </div>
                </div>

                <!-- Testimonial Block Four -->
                <div class="testimonial-block-four">
                    <div class="inner-box"
                        style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/images2/background/pattern-21.png)">
                        <div class="author-image">
                            <span class="quote-icon flaticon-quote-2"></span>
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/images2/resource/author-2.webp"
                                    alt="Фото Нины Авдеевой" />
                            </div>
                        </div>
                        <h4>Нина Авдеева</h4>
                        <div class="designation">Отзыв от 10 января</div>
                        <div class="text">
                            Наша любимая школа. Я считаю — лучшая в городе! Ходим уже во второй класс. Ребёнок просто
                            счастлив.<br><br>
                            Пока у других мам дергается глаз от уроков, мы играем дома, потому что все задания
                            выполняются в школе.<br><br>
                            Один минус — это каникулы 😂 ребёнок скучает по школе.<br><br>
                            Советую всем!!!
                        </div>
                    </div>
                </div>

                <!-- Testimonial Block Four -->
                <div class="testimonial-block-four">
                    <div class="inner-box"
                        style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/images2/background/pattern-21.png)">
                        <div class="author-image">
                            <span class="quote-icon flaticon-quote-2"></span>
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/images2/resource/author-3.webp"
                                    alt="" />
                            </div>
                        </div>
                        <h4>Александр С</h4>
                        <div class="designation">Отзыв от 6 августа</div>
                        <div class="text">Диагностическое занятие прошло очень хорошо. Быстро установили контакт с
                            Максимом, он с радостью выполнил все тесты и задания, радовался, когда получилось верно и
                            его хвалили. Мы обсудили объём работы и стратегию занятий. Мы с женой получили
                            диагностическую карту готовности сына к школе. Мы выбирали из 3х частных школ и выбрали
                            Лесенку.</div>
                    </div>
                </div>

                <!-- Testimonial Block Four -->
                <div class="testimonial-block-four">
                    <div class="inner-box"
                        style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/images2/background/pattern-21.png)">
                        <div class="author-image">
                            <span class="quote-icon flaticon-quote-2"></span>
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/images2/resource/author-4.webp"
                                    alt="Фото Анна Кондерева" />
                            </div>
                        </div>
                        <h4>Анна Кондерева</h4>
                        <div class="designation">Отзыв от 14 октября</div>
                        <div class="text">Школа отличная, моему ребёнку очень нравится и мне нравятся методы
                            преподавания!</div>
                    </div>
                </div>

                <!-- Testimonial Block Four -->
                <div class="testimonial-block-four">
                    <div class="inner-box"
                        style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/images2/background/pattern-21.png)">
                        <div class="author-image">
                            <span class="quote-icon flaticon-quote-2"></span>
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/images2/resource/author-5.webp"
                                    alt="Фото Васелина" />
                            </div>
                        </div>
                        <h4>Васелина</h4>
                        <div class="designation">Отзыв от 6 августа</div>
                        <div class="text">Лучшая школа в городе. Каждый педагог прекрасен, не надо переживать, к кому
                            попадет ваш ребёнок. Посетили личную консультацию, директор ответила на все вопросы. Моему
                            сыну провели диагностику, он познакомился с учителем. Прекрасный педагог Алина Сергеевна.
                            Очень рада, что выбрали именно эту школу, обязательно придем 18 августа на день открытых
                            дверей. ☺️♥️</div>
                    </div>
                </div>

                <!-- Testimonial Block Four -->
                <div class="testimonial-block-four">
                    <div class="inner-box"
                        style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/images2/background/pattern-21.png)">
                        <div class="author-image">
                            <span class="quote-icon flaticon-quote-2"></span>
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/images2/resource/author-6.webp"
                                    alt="Фото Евгений Хежов" />
                            </div>
                        </div>
                        <h4>Евгений Хежов</h4>
                        <div class="designation">Отзыв от 25 мая</div>
                        <div class="text">Школа предоставляет качественное образование, ребёнок получает прекрасные
                            знания по всем предметам. Но особенно радует домашняя, доброжелательная атмосфера в школе.
                            Учителя внимательны к каждому ученику, находят индивидуальный подход. Ребёнок с
                            удовольствием идёт в школу, ему там комфортно и интересно. Отдельно хочу отметить отличную
                            организацию внеурочной деятельности — игры, кружки, экскурсии. Очень благодарен
                            администрации и педагогическому коллективу школы за их труд и профессионализм!</div>
                    </div>
                </div>

                <!-- Testimonial Block Four -->
                <div class="testimonial-block-four">
                    <div class="inner-box"
                        style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/images2/background/pattern-21.png)">
                        <div class="author-image">
                            <span class="quote-icon flaticon-quote-2"></span>
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/images2/resource/author-7.webp"
                                    alt="Фото katya_trava" />
                            </div>
                        </div>
                        <h4>katya_trava</h4>
                        <div class="designation">Отзыв от 25 мая</div>
                        <div class="text">Отличная частная школа!!! Всем рекомендую!!!</div>
                    </div>
                </div>

                <!-- Testimonial Block Four -->
                <div class="testimonial-block-four">
                    <div class="inner-box"
                        style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/images2/background/pattern-21.png)">
                        <div class="author-image">
                            <span class="quote-icon flaticon-quote-2"></span>
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/images2/resource/author-8.webp"
                                    alt="Фото Алина И." />
                            </div>
                        </div>
                        <h4>Алина И.</h4>
                        <div class="designation">Отзыв от 29 марта</div>
                        <div class="text">Моему ребёнку очень понравилась эта школа. Каждый день возвращается с занятий
                            довольный. Педагоги очень доступно объясняют материал, все домашние задания делают в школе.
                            Группы небольшие. Благодаря этому внимание получает каждый. Также довольно много
                            разнообразных дополнительных занятий — мой ребёнок выбрал театральную студию. Не описать
                            словами, как он счастлив посещать занятия. Спасибо огромное Вам, педагоги, за старания для
                            наших деток! Всем рекомендую именно эту школу.</div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>
<!-- End Testimonial Section Four -->

<!-- Faq Blocks Section -->
<section class="faq-blocks-section">
    <div class="auto-container">
        <div class="inner-container">
            <div class="row clearfix">

                <!-- Faq Block -->
                <div class="faq-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="icon-box">
                            <span class="icon flaticon-unity"></span>
                        </div>
                        <h5>Наша команда</h5>
                        <div class="text">Профессиональные педагоги с опытом работы, теплом в сердце и индивидуальным
                            подходом к каждому ученику.</div>

                    </div>
                </div>

                <!-- Faq Block -->
                <div class="faq-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="icon-box">
                            <span class="icon flaticon-calendar"></span>
                        </div>
                        <h5>Учебный процесс</h5>
                        <div class="text">Углублённое изучение предметов, выполнение домашки в школе, интересные уроки и
                            насыщенная продлёнка.</div>

                    </div>
                </div>

                <!-- Faq Block -->
                <div class="faq-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="icon-box">
                            <span class="icon flaticon-customer"></span>
                        </div>
                        <h5>Школа «Лесенка»</h5>
                        <div class="text">Безопасная среда, лицензия, малые классы и атмосфера, в которую дети
                            возвращаются с радостью.</div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- End Faq Blocks Section -->
<!-- Page Title Section -->
<section class="page-title-section">
    <div class="icon-layer-one" style="background-image: url(images2/icons/icon-5.png)"></div>
    <div class="icon-layer-two" style="background-image: url(images2/icons/icon-6.png)"></div>
    <div class="icon-layer-three" style="background-image: url(images2/icons/icon-4.png)"></div>
    <div class="icon-layer-four" style="background-image: url(images2/icons/icon-7.png)"></div>
    <div class="icon-layer-five" style="background-image: url(images2/icons/icon-7.png)"></div>
    <div class="icon-layer-six" style="background-image: url(images2/icons/icon-8.png)"></div>
    <div class="auto-container">

        <div class="content-box">
            <h2>Ответы на популярные вопросы</h2>
            <div class="text">Здесь вы найдёте ответы на самые распространённые вопросы о нашей школе и учебном
                процессе. Если вы не нашли нужную информацию — свяжитесь с нами, мы с радостью всё расскажем!</div>
        </div>
    </div>
</section>
<!-- End Page Title Section -->
<!-- Faq Section -->
<section class="faq-section">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Column -->
            <div class="column col-lg-6 col-md-12 col-sm-12">
                <div class="title-box">
                    <h4>Часто задаваемые вопросы</h4>
                </div>

                <ul class="accordion-box">

                    <!-- Block -->
                    <li class="accordion block">
                        <div class="acc-btn">Какие классы открыты в частной школе «Лесенка»? <div
                                class="icon fa fa-angle-down"></div>
                        </div>
                        <div class="acc-content">
                            <div class="content">
                                <div class="text">
                                    <p>В частной школе «Лесенка» открыты классы с 1 по 9. Обучение организовано по двум
                                        уровням: начальная школа (1–4 классы) и средняя школа (5–9 классы). Каждый
                                        уровень построен с учётом возрастных особенностей детей, их индивидуальных
                                        потребностей и образовательных целей.</p>
                                    <p>В начальной школе упор делается на формирование базовых знаний, развитие навыков
                                        чтения, письма, счёта и критического мышления. Ученики работают в малых группах,
                                        получают внимание педагогов и участвуют в проектной деятельности, что помогает
                                        им легко адаптироваться к школьной жизни.</p>
                                    <p>В средней школе акцент смещается на углублённое изучение школьных предметов,
                                        развитие самостоятельности и подготовку к итоговой аттестации. Кроме основных
                                        уроков, ученики посещают дополнительные занятия, кружки и участвуют в
                                        олимпиадах, конкурсах и экскурсиях, расширяя кругозор и личные интересы.</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!--Block-->
                    <li class="accordion block active">
                        <div class="acc-btn active">Как проходит процесс поступления в школу? <div
                                class="icon fa fa-angle-down"></div>
                        </div>
                        <div class="acc-content current">
                            <div class="content">
                                <div class="text">
                                    <p>Поступление в частную школу «Лесенка» начинается с консультации для родителей,
                                        где рассказывают об образовательной программе, условиях обучения, графике и
                                        подходах к воспитанию. Родители могут получить ответы на все интересующие
                                        вопросы и познакомиться с атмосферой школы.</p>
                                    <p>Затем назначается диагностическое занятие для ребёнка. В рамках встречи педагог
                                        оценивает уровень готовности к обучению, особенности восприятия информации и
                                        коммуникативные навыки. Это позволяет подобрать подходящую программу и
                                        сформировать наиболее комфортные условия для старта обучения.</p>
                                    <p>После диагностики и положительного решения обеих сторон заключается договор,
                                        формируется индивидуальный учебный маршрут и назначается дата начала занятий.
                                        Школа сопровождает родителей на всех этапах, помогая адаптироваться к новым
                                        условиям и создавая доверительные отношения с семьёй ученика.</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!--Block-->
                    <li class="accordion block">
                        <div class="acc-btn">Сколько стоит обучение и есть ли скидки? <div
                                class="icon fa fa-angle-down"></div>
                        </div>
                        <div class="acc-content">
                            <div class="content">
                                <div class="text">
                                    <p>Стоимость обучения в частной школе «Лесенка» зависит от выбранной программы:
                                        подготовка к школе, начальные классы или средняя школа. В стоимость включены
                                        учебные занятия, питание, дополнительные кружки и мероприятия. Актуальные тарифы
                                        уточняются при обращении в школу, так как они могут варьироваться по
                                        направлениям и загруженности.</p>
                                    <p>Для родителей доступна гибкая система оплаты: ежемесячная, поквартальная или
                                        годовая. При заключении договора до 15 августа предоставляются скидки на
                                        обучение — это позволяет значительно сэкономить при раннем бронировании места.
                                        Также предусмотрены специальные условия для семей с двумя и более детьми.</p>
                                    <p>Дополнительные платные занятия, такие как углублённая подготовка или творческие
                                        секции, оплачиваются отдельно. Однако основной образовательный пакет охватывает
                                        всё необходимое для гармоничного и качественного развития ребёнка.</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!--Block-->
                    <li class="accordion block">
                        <div class="acc-btn">Есть ли продлёнка или школа полного дня? <div
                                class="icon fa fa-angle-down"></div>
                        </div>
                        <div class="acc-content">
                            <div class="content">
                                <div class="text">
                                    <p>Да, в частной школе «Лесенка» предусмотрен формат школы полного дня. Учебный день
                                        длится с 8:30 до 18:00, что особенно удобно для работающих родителей. В течение
                                        дня дети не только проходят основные учебные занятия, но и посещают
                                        дополнительные кружки, получают питание и отдых.</p>
                                    <p>Продлёнка включает выполнение домашних заданий с учителем, прогулки на свежем
                                        воздухе, творческие мастерские и игры. Это позволяет ребёнку не только закрепить
                                        школьный материал, но и развивать навыки общения, творчества и
                                        самостоятельности.</p>
                                    <p>Школа обеспечивает безопасную и комфортную среду, где ребёнок проводит день под
                                        присмотром педагогов. Такой формат помогает избежать переутомления, уменьшить
                                        стресс и сохранить баланс между обучением и досугом.</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- Block -->
                    <li class="accordion block">
                        <div class="acc-btn">Какие дополнительные кружки и секции предлагает школа? <div
                                class="icon fa fa-angle-down"></div>
                        </div>
                        <div class="acc-content">
                            <div class="content">
                                <div class="text">
                                    <p>В частной школе «Лесенка» детям доступен широкий выбор дополнительных кружков и
                                        секций, которые помогают раскрыть их таланты и развить разносторонние навыки.
                                    </p>
                                    <p>Среди популярных направлений: театральная студия, студия изобразительного
                                        искусства, шахматы, вокал, хореография, спортивные секции и робототехника.
                                        Занятия проводят квалифицированные педагоги и приглашённые специалисты.</p>
                                    <p>Каждый ученик может выбрать кружки по интересам и составить индивидуальное
                                        расписание. Дополнительные занятия проходят во второй половине дня и органично
                                        дополняют основную образовательную программу.</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- Block -->
                    <li class="accordion block">
                        <div class="acc-btn">Какой педагогический состав работает в школе? <div
                                class="icon fa fa-angle-down"></div>
                        </div>
                        <div class="acc-content">
                            <div class="content">
                                <div class="text">
                                    <p>В частной школе «Лесенка» работает профессиональный, сплочённый и заботливый
                                        педагогический коллектив. Учителя имеют профильное образование и богатый опыт
                                        работы с детьми разных возрастов.</p>
                                    <p>Каждый педагог проходит строгий отбор и регулярно повышает квалификацию. Особое
                                        внимание уделяется не только знаниям, но и личностным качествам: внимательности,
                                        доброжелательности, умению найти подход к каждому ребёнку.</p>
                                    <p>Благодаря высокому уровню профессионализма и любви к своему делу, педагоги
                                        «Лесенки» создают комфортную атмосферу, способствуют развитию ребёнка и
                                        поддерживают его на каждом этапе обучения.</p>
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>

            </div>

            <!-- Column -->
            <div class="column col-lg-6 col-md-12 col-sm-12">
                <div class="title-box">
                    <h4>Дополнительные вопросы</h4>
                </div>

                <ul class="accordion-box">

                    <!-- Block -->
                    <li class="accordion block">
                        <div class="acc-btn">Где находится частная школа «Лесенка» в Ставрополе? <div
                                class="icon fa fa-angle-down"></div>
                        </div>
                        <div class="acc-content">
                            <div class="content">
                                <div class="text">
                                    <p>Частная школа «Лесенка» расположена в городе Ставрополе и имеет два филиала, что
                                        делает обучение удобным для семей, проживающих в разных районах города.</p>
                                    <p>Основное здание школы находится по адресу: ул. Пирогова, д. 8 — здесь проходят
                                        занятия для учеников начальных классов и организована школьная жизнь полного
                                        дня.</p>
                                    <p>Дополнительный филиал — детский развивающий центр «Лесенка знаний» — расположен
                                        по адресу: ул. Тухачевского, д. 25. Здесь реализуются программы подготовки к
                                        школе и другие развивающие направления.</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!--Block-->
                    <li class="accordion block active">
                        <div class="acc-btn active">Какой режим работы у школы и расписание занятий? <div
                                class="icon fa fa-angle-down"></div>
                        </div>
                        <div class="acc-content current">
                            <div class="content">
                                <div class="text">
                                    <p>Частная школа «Лесенка» работает в формате школы полного дня. Занятия проходят с
                                        понедельника по пятницу, с 9:00 до 17:00. Такой режим позволяет детям не только
                                        учиться, но и выполнять домашние задания, участвовать в кружках и отдыхать в
                                        комфортной среде.</p>
                                    <p>Учебный день начинается с основных школьных предметов, после чего предусмотрено
                                        время для обеда и отдыха. Во второй половине дня проводятся дополнительные
                                        занятия, творческие кружки, спортивные секции и продлёнка.</p>
                                    <p>Благодаря продуманному расписанию дети находятся под присмотром педагогов весь
                                        день, а родители могут быть уверены, что ребёнок проводит время с пользой и в
                                        безопасности.</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!--Block-->
                    <li class="accordion block">
                        <div class="acc-btn">Что входит в стоимость обучения? <div class="icon fa fa-angle-down"></div>
                        </div>
                        <div class="acc-content">
                            <div class="content">
                                <div class="text">
                                    <p>В стоимость обучения в частной школе «Лесенка» входит полный образовательный цикл
                                        по программе начального общего образования, соответствующей федеральным
                                        государственным образовательным стандартам (ФГОС).</p>
                                    <p>Также в стоимость включены все учебные материалы, питание, участие в школьных
                                        мероприятиях, диагностика и индивидуальное сопровождение ребёнка, а также
                                        занятия с логопедом и психологом при необходимости.</p>
                                    <p>Дополнительно входят кружки и секции по интересам, продлёнка, прогулки и
                                        внеклассные мероприятия. Всё организовано в рамках формата школы полного дня,
                                        чтобы ребёнок мог развиваться всесторонне в безопасной и поддерживающей среде.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!--Block-->
                    <li class="accordion block">
                        <div class="acc-btn">Есть ли питание и как оно организовано? <div class="icon fa fa-angle-down">
                            </div>
                        </div>
                        <div class="acc-content">
                            <div class="content">
                                <div class="text">
                                    <p>Да, в частной школе «Лесенка» организовано полноценное горячее питание для всех
                                        учеников. В стоимость обучения включены завтрак и обед, которые дети получают в
                                        школьной столовой.</p>
                                    <p>Питание сбалансированное и соответствует возрастным нормам. Меню составляется с
                                        учётом санитарных требований и пожеланий родителей. В рацион входят супы,
                                        горячие блюда, гарниры, напитки и фрукты.</p>
                                    <p>При необходимости возможно индивидуальное меню (например, при аллергии или особой
                                        диете), которое согласуется с родителями и медицинским работником школы.</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- Block -->
                    <li class="accordion block">
                        <div class="acc-btn">Как записаться на экскурсию в школу? <div class="icon fa fa-angle-down">
                            </div>
                        </div>
                        <div class="acc-content">
                            <div class="content">
                                <div class="text">
                                    <p>Чтобы записаться на экскурсию в частную школу «Лесенка», достаточно связаться с
                                        нами любым удобным способом. Мы проводим индивидуальные экскурсии по территории
                                        школы, показываем классы, рассказываем о программе и отвечаем на все вопросы
                                        родителей.</p>
                                    <p>Вы можете оставить заявку на экскурсию по телефону <a href="tel:+79682662112">+7
                                            968 266-21-12</a>, написать нам на e-mail <a
                                            href="mailto:lesenka_school@mail.ru">lesenka_school@mail.ru</a>, в
                                        мессенджере <a
                                            href="https://wa.me/79682662112?text=Здравствуйте!%20">WhatsApp</a> или в <a
                                            href="https://t.me/lesenka_school_2022">Telegram</a>.</p>
                                    <p>После получения заявки мы согласуем удобную дату и время. Экскурсию обычно
                                        проводит администрация школы или классный руководитель будущего класса.</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- Block -->
                    <li class="accordion block">
                        <div class="acc-btn">Как связаться с администрацией для уточнения деталей? <div
                                class="icon fa fa-angle-down"></div>
                        </div>
                        <div class="acc-content">
                            <div class="content">
                                <div class="text">
                                    <p>Связаться с администрацией частной школы «Лесенка» можно по телефону, электронной
                                        почте или через мессенджеры. Мы всегда готовы ответить на ваши вопросы и помочь
                                        с выбором образовательной программы для вашего ребёнка.</p>
                                    <p>Основной номер для связи: <a href="tel:+79682662112">+7 968 266-21-12</a>. Также
                                        вы можете написать нам на почту <a
                                            href="mailto:lesenka_school@mail.ru">lesenka_school@mail.ru</a>.</p>
                                    <p>Для оперативного общения доступны <a
                                            href="https://wa.me/79682662112?text=Здравствуйте!%20">WhatsApp</a> и <a
                                            href="https://t.me/lesenka_school_2022">Telegram</a>. Мы постараемся
                                        ответить как можно быстрее и предоставить всю необходимую информацию.</p>
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</section>
<!-- End Faq Section -->

<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.lazy-video').forEach(container => {
            container.addEventListener('click', function() {
                const videoSrc = this.getAttribute('data-src');

                const video = document.createElement('video');
                video.src = videoSrc;
                video.controls = true;
                video.autoplay = true;
                video.playsInline = true;
                video.loop = true;
                video.style.width = '100%';
                video.style.height = '650px';
                video.style.objectFit = 'cover';
                video.style.borderRadius = '18px';

                this.innerHTML = '';
                this.appendChild(video);
            });
        });
    });
</script>


<?php get_footer(); ?>