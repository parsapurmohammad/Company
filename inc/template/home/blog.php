<?php global $company_options ?>
<div class="container-fluid panel-p weblog-content">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="panel-title col-md-12">
                    <header class="text-center">
                        <h5><?php echo $company_options['home-blog-panel-title']; ?></h5>
                        <small><?php echo $company_options['home-blog-panel-subtitle']; ?></small>
                        <hr/>
                    </header>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-cont owl-carousel owl-theme">
                        <?php
                            $arg = [
                                    'post_type' => 'post',
                                    'post_per_page' => 7
                            ];
                            $blog_query = new WP_Query($arg);

                        if ($blog_query->have_posts()) :
                            while ($blog_query->have_posts()):
                                $blog_query->the_post();
                        ?>
                        <div class="item">
                            <div class="cont-img">
                                <a href="<?php the_permalink(); ?>">
                                    <img src="<?php echo  get_the_post_thumbnail_url(get_the_ID(),'img400-400'); ?>" alt = "<?php the_title(); ?>">
                                </a>
                            </div>
                            <div class="cont-ex">
                                <a href="<?php the_permalink(); ?>"><strong><?php the_title(); ?> </strong></a>
                                <?php
                                    $cats = get_the_category();
                                    foreach ($cats as $cat):
                                ?>
                                <a href="<?php echo get_category_link($cat->term_id); ?>"><small><?php echo $cat->name?></small></a>
                                <?php endforeach; ?>,
                                <div class="cont-date">
                                    <strong><?php echo get_the_date('d'); ?></strong>
                                    <span><?php echo get_the_date('M')?></span>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                        <?php endif; wp_reset_postdata(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
