<section class="section">
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
        <div class="wedo">
            <div class="wedo__item col-12 col-md-6">
                <img class="wedo__img" src="<?php echo get_sub_field('image') ?>" alt="" />
            </div>
            <div class="wedo__item col-12 col-md-6">
                <div class="accordion" id="accordionExample">
                    <?php $accordion = 0; ?>
                    <?php while (have_rows('accordion')) : the_row();
                    ?>
                    <?php $accordion++; 
                    if($accordion == 1) { ?>
                        <div class="card">
                            <div class="card-header" id="heading<?php echo $accordion ?>">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse<?php echo $accordion ?>" aria-expanded="true" aria-controls="collapse<?php echo $accordion ?>">
                                    <img class="accordion__icon" src="<?php echo the_sub_field('image'); ?>" alt="" />
                                    <div class="accordion__title"><?php echo the_sub_field('title'); ?></div>
                                </button>
                            </div>
                            <div id="collapse<?php echo $accordion ?>" class="collapse show" aria-labelledby="heading<?php echo $accordion ?>" data-parent="#accordionExample">
                                <div class="card-body accordion__content">
                                    <p>
                                    <?php echo the_sub_field('text'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <?php } else{?>
                            <div class="card">
                            <div class="card-header" id="heading<?php echo $accordion ?>">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse<?php echo $accordion ?>" aria-expanded="true" aria-controls="collapse<?php echo $accordion ?>">
                                    <img class="accordion__icon" src="<?php echo the_sub_field('image'); ?>" alt="" />
                                    <div class="accordion__title"><?php echo the_sub_field('title'); ?></div>
                                </button>
                            </div>
                            <div id="collapse<?php echo $accordion ?>" class="collapse" aria-labelledby="heading<?php echo $accordion ?>" data-parent="#accordionExample">
                                <div class="card-body accordion__content">
                                    <p>
                                    <?php echo the_sub_field('text'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                            <?php } ?>
                        
                    <?php endwhile; ?>

                </div>
            </div>
        </div>
    </div>
</section>