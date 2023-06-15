<section class="hero">
    <div id="hero__carousel-indicators" class="carousel slide hero__carousel" data-ride="carousel" data-touch="true">


        <ul class="carousel-indicators">
            <?php $indicator = 0 ?>
            <?php while (have_rows('slider')) : the_row(); ?>

                <?php if ($indicator === 0) { ?>

                    <li data-target="#hero__carousel-indicators" data-slide-to="<?php echo $indicator ?>" class="hero__carousel-indicators active col-3">
                        <div class="hero__carousel-indicators-line"></div>
                        <p class="hero__carousel-indicators-text"><b>0<?php echo ($indicator + 1) ?></b> <span><?php echo the_sub_field('slide_navigation_title'); ?></span></p>
                    </li>

                <?php } else { ?>
                    <li data-target="#hero__carousel-indicators" data-slide-to="<?php echo $indicator ?>" class="hero__carousel-indicators col-3">
                        <div class="hero__carousel-indicators-line"></div>
                        <p class="hero__carousel-indicators-text"><b>0<?php echo ($indicator + 1) ?></b> <span><?php echo the_sub_field('slide_navigation_title'); ?></span></p>
                    </li>
                <?php
                } ?>


                <?php $indicator++ ?>
            <?php endwhile; ?>
        </ul>

        <div class="carousel-inner hero__carousel-inner">
            <?php $count = 0 ?>
            <?php while (have_rows('slider')) : the_row(); ?>
                <?php
                if ($count == 0) {
                    $count = 1;
                ?>
                    <div class="carousel-item hero__carousel-item active" data-interval="3000">
                        <div class="hero__carousel-wrapper">
                            <div class="hero__carousel-info d-flex flex-column align-items-center">
                                <h3 class="hero__carousel-sub-title"><?php echo the_sub_field('sub_title'); ?></h3>
                                <h2 class="hero__carousel-title"><?php echo the_sub_field('title'); ?></h2>
                                <div class="hero__carousel-separate separate separate_white"></div>
                                <a class="hero__carousel-button" href="<?php echo get_sub_field('cta')['url']; ?>"><?php echo get_sub_field('cta')['title']; ?></a>
                            </div>
                            <div class="hero__carousel-gradient">
                                <img src="<?php echo the_sub_field('image'); ?>" alt="" />
                            </div>
                        </div>
                    </div>
                <?php
                } else { ?>
                    <div class="carousel-item hero__carousel-item" data-interval="3000">
                        <div class="hero__carousel-wrapper">
                            <div class="hero__carousel-info d-flex flex-column align-items-center">
                                <h3 class="hero__carousel-sub-title"><?php echo the_sub_field('sub_title'); ?></h3>
                                <h2 class="hero__carousel-title"><?php echo the_sub_field('title'); ?></h2>
                                <div class="hero__carousel-separate separate separate_white"></div>
                                <a class="hero__carousel-button" href="<?php echo get_sub_field('cta')['url']; ?>"><?php echo get_sub_field('cta')['title']; ?></a>
                            </div>
                            <div class="hero__carousel-gradient">
                                <img src="<?php echo the_sub_field('image'); ?>" alt="" />
                            </div>
                        </div>
                    </div>
                <?php  }
                $count++  ?>
            <?php endwhile; ?>

        </div>


    </div>
</section>