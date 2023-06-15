<?php
$args = new WP_Query(array(
    'post_type' => 'post',
    'posts_per_page' => 3,
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'DESC'
));

?>

<section class="section">
    <div class="container">
        <div class="section__header">
            <h3 class="section__suptitle"><?php echo get_sub_field('sub_title') ?></h3>
            <h2 class="section__title"><?php echo get_sub_field('title') ?></h2>
        </div>
        <div class="blog">

            <?php while ($args->have_posts()) : $args->the_post(); ?>
                <div class="blog__item col-12 col-md-4">
                    <div class="blog__header">
                        <a href="#">
                            <img class="blog__photo" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" />
                        </a>
                        <time class="blog__date">
                            <div class="blog__date-day"><?php echo date_i18n( 'j' ) ?></div>
                            <?php echo get_the_date( 'M' ) ?>
                        </time>
                    </div>
                    <div class="blog__content">
                        <div class="blog__title">
                            <a href="#"><?php the_title(); ?></a>
                        </div>
                        <div class="blog__text">
                        <?php the_excerpt(); ?>
                        </div>
                    </div>
                    <div class="blog__footer">
                        <div class="blog-stat">
                            <span class="blog-stat__item">
                                <i class="far fa-eye"></i> 542
                            </span>
                            <span class="blog-stat__item">
                                <i class="far fa-comment-dots"></i> 17
                            </span>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>

        </div>
    </div>
</section>