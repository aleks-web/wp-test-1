<?php
    $categories_2 = [];

    $categories = get_categories( [
        'taxonomy'     => 'category',
        'type'         => 'post',
    ] );

    foreach ($categories as $key => $cat) {
        $is_show = get_field('rubriks', $cat);

        if ($is_show) {
            $categories_2[$key] = $cat;
        }
    }
?>

<section class="services">
    <div class="services__container container">

        <div class="services__title block-title">
            <h2 class="block-title__title">Наши <span>услуги</span></h2>
        </div>

        <?if (count($categories_2) <= 4) { ?>
            <div class="services__items">
                <?foreach ($categories_2 as $cat) :
                    if (get_field('rubriks', $cat) == true) :
                ?>
                        <div class="services__item">
                            <div class="card <?php if ($cat->description) { echo 'card-has-child'; } ?>">

                                    <?php if($img = get_field('rubriks_img', $cat)) : ?>
                                        <div class="card__img" style="background-image: url('<?= $img['url'] ?>')"></div>
                                    <?endif?>

                                    <div class="card__title">

                                        <a href="<?= get_category_link($cat->term_id); ?>"><?= $cat->name ?></a>

                                        <span class="card__title-elements">
                                            <?php if ($cat->description) : ?>
                                                <span class="card__line"></span>
                                                <svg class="card__arrow"><use xlink:href="#svg-arrow"></use></svg>
                                            <?endif?>
                                        </span>
                                    </div>

                                    <?if ($cat->description) : ?>
                                        <div class="card__content">
                                            <?= $cat->description ?>
                                        </div>
                                    <?endif?>
                            </div>
                        </div>
                    <?endif ?>
                <?endforeach ?>
        </div>
        <?php } else {?>
            <div class="swiper">
                <div class="swiper-wrapper">
                    <?foreach ($categories_2 as $cat) :
                        if (get_field('rubriks', $cat) == true) :
                    ?> 
                            <div class="swiper-slide">
                                <div class="card <?php if ($cat->description) { echo 'card-has-child'; } ?>">

                                        <?php if($img = get_field('rubriks_img', $cat)) : ?>
                                            <div class="card__img" style="background-image: url('<?= $img['url'] ?>')"></div>
                                        <?endif?>

                                        <div class="card__title">

                                            <a href="<?= get_category_link($cat->term_id); ?>"><?= $cat->name ?></a>

                                            <span class="card__title-elements">
                                                <?php if ($cat->description) : ?>
                                                    <span class="card__line"></span>
                                                    <svg class="card__arrow"><use xlink:href="#svg-arrow"></use></svg>
                                                <?endif?>
                                            </span>
                                        </div>

                                        <?if ($cat->description) : ?>
                                            <div class="card__content">
                                                <?= $cat->description ?>
                                            </div>
                                        <?endif?>
                                </div>
                            </div>
                        <?endif ?>
                    <?endforeach ?>
                </div>
            </div>
        <?php } ?>

    </div>
</section>

<?if (count($categories_2) > 4) : ?>
<script>
    new Swiper(".swiper", {
        slidesPerView: 4,
        spaceBetween: 30,

        breakpoints: {
            0: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            480: {
                slidesPerView: 2,
                spaceBetween: 20
            },
            640: {
                slidesPerView: 3,
                spaceBetween: 30
            },
            1200: {
                slidesPerView: 4,
                spaceBetween: 40
            }
        }
    });
</script>
<?endif?>