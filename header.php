<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width">

            <?php wp_head() ?>
        </head>
    
        <body <?php body_class(); ?>>

        <header class="header-full">
            <div class="header-top">
                <div class="header-top__container container">
                    <div class="header-top__wrap">
                        <div class="header-top__left">

                            <div class="logo">
                                <div class="logo__img">

                                    <?php if (is_home()) { // Если мы на главной, просто выводим картинку | Для SEO | Чтобы не получить цикличную ссылку?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" />
                                    <?php } else { // Если не на главной, то выводим ссылку | Для SEO | Чтобы не получить цикличную ссылку ?>
                                        <a href="<?php echo get_site_url() ?>">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" />
                                        </a>
                                    <?php } ?>

                                </div>
                                <div class="logo__name"><?php echo get_bloginfo('description'); ?></div>
                            </div>

                        </div>

                        <div class="header-top__right">

                            <div class="header-top__contacts">
                                <a href="tel:37477533561" class="header-top__phone">+374 (77) 533 561</a>
                                <a href="mailto:ladatravelarmenia@yandex.ru" class="header-top__email"><?= get_option('admin_email'); ?></a>
                            </div>

                            <a href="#" data-fancybox data-src="#order-modal" class="btn header-top__btn">Заказать звонок</a>

                        </div>
                    </div>
                </div>
            </div>

            <div class="header-menu">
                <div class="container header-menu__container">
                <?php
                    wp_nav_menu( array(
                        'theme_location'  => 'main_menu',
                        'container' => 'nav',
                        'container_class' => 'main-navigation',
                        'menu_class' => 'main-navigation__list',
                        'menu_id' => 'main-navigation',
                        'depth' => '2',
                    ));
                ?>
                </div>
            </div>
        </header>