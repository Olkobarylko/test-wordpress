<?php
$args = new WP_Query(array(
    'post_type' => 'team',
    'posts_per_page' => 3,
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'DESC'
));

?>


<section class="team section">
    <div class="container">
        <div class="section__header">
            <h3 class="section__suptitle"><?php echo get_sub_field('sub_title') ?></h3>
            <h2 class="section__title"><?php echo get_sub_field('title') ?></h2>
            <div class="section__text">
                <p>
                    <?php echo get_sub_field('text') ?>
                </p>
            </div>
        </div>

        <div class="team__wrapper">

            <?php while ($args->have_posts()) : $args->the_post(); ?>
                <div class="team__item col-12 col-md-4">
                    <div class="team__inner">
                        <div class="team__img">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" />
                        </div>
                        <div class="team__text">
                            <div class="social">
                                <a class="social__item" href="<?php echo get_field('facebook_link', get_the_ID()) ?>" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="social__item" href="<?php echo get_field('twitter_link', get_the_ID()) ?>" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a class="social__item" href="<?php echo get_field('pinterest', get_the_ID()) ?>" target="_blank">
                                    <i class="fab fa-pinterest-p"></i>
                                </a>
                                <a class="social__item" href="<?php echo get_field('instagram', get_the_ID()) ?>" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="team__info">
                        <div class="team__name"><?php the_title(); ?></div>
                        <div class="team__prof"><?php echo the_category()?></div>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>
</section>