    <?php get_header(); ?>

    <section id="dream-house" class="dream-house">

        <div class="dream-house__container">

            <h1 class="dream-house__title"><?php the_field('dream-house__title'); ?></h1>

            <div class="dream-house__content">

                <div class="dream-house__text-block">

                    <p class="dream-house__text"><?php the_field('dream-house__text'); ?></p>

                    <button class="dream-house__btn" type="button">Free Consultation</button>

                </div>

                <img class="dream-house__img" src="<?php the_field('dream-house__img'); ?>" alt="image">

            </div>

        </div>

    </section>

    <section id="gallery" class="gallery">

        <div class="gallery__container">

            <h2 class="gallery__title">Build professional<br>valuable room for you</h2>

            <div class="gallery__photos">

                <a class="gallery__photos-wrapper test-popup-link" href="<?php bloginfo( 'template_url' ); ?>/assets/images/gallery/img1.png">
                    <img class="gallery__photos-image" src="<?php bloginfo( 'template_url' ); ?>/assets/images/gallery/img1.png" alt="image1">
                </a>

                <a class="gallery__photos-wrapper test-popup-link" href="<?php bloginfo( 'template_url' ); ?>/assets/images/gallery/img2.png">
                    <img class="gallery__photos-image" src="<?php bloginfo( 'template_url' ); ?>/assets/images/gallery/img2.png" alt="image2">
                </a>

                <a class="gallery__photos-wrapper test-popup-link" href="<?php bloginfo( 'template_url' ); ?>/assets/images/gallery/img3.png">
                    <img class="gallery__photos-image" src="<?php bloginfo( 'template_url' ); ?>/assets/images/gallery/img3.png" alt="image3">
                </a>

                <a class="gallery__photos-wrapper test-popup-link" href="<?php bloginfo( 'template_url' ); ?>/assets/images/gallery/img4.png">
                    <img class="gallery__photos-image" src="<?php bloginfo( 'template_url' ); ?>/assets/images/gallery/img4.png" alt="image4">
                </a>

                <a class="gallery__photos-wrapper test-popup-link" href="<?php bloginfo( 'template_url' ); ?>/assets/images/gallery/img5.png">
                    <img class="gallery__photos-image" src="<?php bloginfo( 'template_url' ); ?>/assets/images/gallery/img5.png" alt="image5">
                </a>

                <a class="gallery__photos-wrapper test-popup-link" href="<?php bloginfo( 'template_url' ); ?>/assets/images/gallery/img6.png">
                    <img class="gallery__photos-image" src="<?php bloginfo( 'template_url' ); ?>/assets/images/gallery/img6.png" alt="image6">
                </a>

            </div>

        </div>

    </section>

    <section id="guarantees" class="guarantees">

        <div class="guarantees__container">

            <h2 class="guarantees__title">Build your needs<br>with Archmove</h2>

            <div class="guarantees__content">

                <img class="guarantees__img" src="<?php echo IMG_DIR; ?>/guarantees/img-big.png" alt="image">

                <div class="guarantees__right-block">

                    <!-- Создание новых записей (постов) -->
                    <?php foreach(getFeatures() as $feature): ?>

                    <div class="guarantees__feature">
                        <img class="guarantees__thumbnail" src="<?php echo $feature['img'] ?>" alt="thumbnail">
                        <div class="guarantees__feature-content">
                            <h3 class="guarantees__feature-subtitle"><?php echo $feature['title'] ?></h3>
                            <p class="guarantees__feature-text"><?php echo $feature['text'] ?></p>

                        <!-- Добавление в запись (пост) ещё одного поля -->
                            <strong><i><?php echo $feature["add_desc"] ?></i></strong>
                        <!-- ------------------------------------------ -->
                        </div>
                    </div>

                    <?php endforeach; ?>

                    <button class="guarantees__btn" type="button"> CONSULTATION</button>

                </div>

            </div>

        </div>

    </section>

    <section class="planning">

        <section id="comments" class="comments">

            <div class="comments__container">

                <h2 class="comments__title">Sound Too Good<br>To Be True?</h2>

                <div class="comments__swiper">

                    <!-- Slider main container -->
                    <div class="swiper">

                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">

                            <!-- Slides -->
                            <div class="swiper-slide">

                                <blockquote class="swiper__text">We just wanted to thank you for this fantastic website!
                                    We are so grateful for being able to advertise our Petite cabin and receive feedback
                                    from
                                    people from all over the U.S. and even further.</blockquote>

                                <cite class="swiper__cite"><b>Adam Morph</b> — CEO A lfatech</cite>

                            </div>

                            <div class="swiper-slide">

                                <blockquote class="swiper__text">This is a cool site, cool company and cool guys!!! You
                                    are truly the best at what you do, keep up the good work! I recommend to everyone,
                                    strong and reliable professionals!!!</blockquote>

                                <cite class="swiper__cite"><b>Tim Nik</b> — CEO A lfatech</cite>

                            </div>

                            <div class="swiper-slide">

                                <blockquote class="swiper__text">If you need to make a cool home design - then only
                                    here!!! If you need to do it at a reasonable price - then only here!!! If you need
                                    to make your home design unique - then only here!!!</blockquote>

                                <cite class="swiper__cite"><b>Nick Smith</b> — CEO A lfatech</cite>

                            </div>

                        </div>

                        <!-- Navigation buttons -->
                        <div class="swiper__btn-prev"></div>
                        <div class="swiper__btn-next"></div>

                    </div>

                </div>

            </div>

        </section>

        <section id="designing" class="designing">

            <div class="designing__container">

                <img class="designing__img" src="<?php echo IMG_DIR; ?>/designing/house.png" alt="image">

                <div class="designing__right-block">

                    <h2 class="designing__title">Realize your dream<br>project with <span>Archmove</span></h2>

                    <button class="designing__btn" type="button">FREE CONSULTATION</button>

                </div>

            </div>

        </section>

    </section>

    <section class="partners">

        <div class="partners__container">

            <h2 class="partners__title">Our Partners</h2>

            <div class="partners__logos">

                <div class="partners__left-block">
                    <a class="partners__link" href="#"><img class="partners__img"
                            src="<?php echo IMG_DIR; ?>/partners/logo1.svg" alt="image"></a>
                    <a class="partners__link" href="#"><img class="partners__img"
                            src="<?php echo IMG_DIR; ?>/partners/logo2.svg" alt="image"></a>
                    <a class="partners__link" href="#"><img class="partners__img"
                            src="<?php echo IMG_DIR; ?>/partners/logo3.svg" alt="image"></a>
                </div>

                <div class="partners__right-block">
                    <a class="partners__link" href="#"><img class="partners__img"
                            src="<?php echo IMG_DIR; ?>/partners/logo4.svg" alt="image"></a>
                    <a class="partners__link" href="#"><img class="partners__img"
                            src="<?php echo IMG_DIR; ?>/partners/logo5.svg" alt="image"></a>
                </div>

            </div>

        </div>

    </section>

    <?php get_footer(); ?>

