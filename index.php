<?php get_header(); ?>
<?php  global $company_options;?>
<main class="home-main panel-p">


    <?php
    if($company_options['home-services-panel-status']==0)
        require_once 'inc/template/home/services.php';
    ?>
    <?php require_once 'inc/template/home/portfolio.php'; ?>

    <?php
    if($company_options['home-about-panel-status']==0)
        require_once 'inc/template/home/about.php';
    ?>

    <div class="container-fluid panel-p weblog-content">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="panel-title col-md-12">
                        <header class="text-center">
                            <h5>نمونه کارها</h5>
                            <small>آخرین پروژه های انجام شده توسط ما</small>
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
                            <div class="item">
                                <div class="cont-img">
                                    <a href="#">
                                        <img src="<?php bloginfo('template_url'); ?> /images/temp/5-400x400.jpg" alt=""/>
                                    </a>
                                </div>
                                <div class="cont-ex">
                                    <a href="#"><strong>نمونه بسته بندی بستنی با دیزاین</strong></a>
                                    <a href="#"><small>بسته بندی</small></a>,
                                    <a href="#"><small>طراحی مدرن</small></a>
                                    <div class="cont-date">
                                        <strong>30</strong>
                                        <span>آبان</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container panel-p viewpoint">
        <div class="row">
            <div class="panel-title col-md-12">
                <header class="text-center">
                    <h5>دیدگاه ها</h5>
                    <small>دیدگاه های کاربران نیوکمپانی</small>
                    <hr/>
                </header>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-md-12">
                <div class="owl-view owl-carousel owl-theme">
                    <div class="item">
                        <div class="view-img">
                            <img src="<?php bloginfo('template_url'); ?> /images/temp/testimonial_2.jpg" alt=""/>
                        </div>
                        <div class="view-ex">
                            <strong>تارا راد</strong>
                            <P>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای
                                کاربردی می باشد .</P>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
<?php get_footer(); ?>