<?php
    get_header();
    $category = get_queried_object();

    $posts = new WP_Query('cat=' . $category->term_id);
?>

<div class="category-page">
    <div class="category-page__container container">
        <h1 class="category-page__title"><?php echo $category->name ?></h1>

        <div class="category-page__desc">
            <?php echo $category->description ?>
        </div>

        <div class="category-page__posts">

        
            <?php while ( $posts->have_posts() ) { $posts->the_post(); ?>

                <div class="category-page__post">

                    <div class="category-page__post-img">
                        <?php if (get_the_post_thumbnail_url()) { ?>
                            <img src="<?php echo get_the_post_thumbnail_url($post, 'thumbnail') ?>" alt="<?php the_title(); ?>">
                        <?php } else { ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/noimg.png" alt="<?php the_title(); ?>">
                        <?php } ?>
                    </div>

                    <div class="category-page__post-right">

                        <h2 class="category-page__post-title">
                            <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>
                        
                        <div class="category-page__post-excerpt">
                            <?php the_excerpt(); ?>
                        </div>
                    </div>
                </div>
                    
            <?php } ?>
        </div>
    </div>
</div>

<?php get_footer() ?>