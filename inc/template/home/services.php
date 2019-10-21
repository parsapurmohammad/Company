<?php  global $company_options;?>

<div class="container panel-p mt-5">
    <div class="row">
        <div class="panel-title col-md-12">
            <header class="text-center">
                <h5><?php echo $company_options['home-services-panel-title']; ?></h5>
                <small><?php echo $company_options['home-services-panel-desc']; ?></small>
                <hr/>
            </header>
        </div>
    </div>
    <div class="row">
        <div class="service-p col-md-3">
            <div class="service-box">
                <p><i class="<?php echo $company_options['home-services-first-service-icon']; ?>"></i></p>
                <strong><?php echo  $company_options['home-services-first-service-title'] ?></strong>
                <div class="excerpt">
                    <?php echo $company_options['home-services-first-service-content'] ?>
                </div>
            </div>
        </div>
        <div class="service-p col-md-3">
            <div class="service-box">
                <p><i class="<?php echo $company_options['home-services-second-service-icon']; ?>"></i></p>
                <strong><?php echo  $company_options['home-services-second-service-title'] ?></strong>
                <div class="excerpt">
                    <?php echo $company_options['home-services-second-service-content'] ?>
                </div>
            </div>
        </div>
        <div class="service-p col-md-3">
            <div class="service-box">
                <p><i class="<?php echo $company_options['home-services-third-service-icon']; ?>"></i></p>
                <strong><?php echo  $company_options['home-services-third-service-title'] ?></strong>
                <div class="excerpt">
                    <?php echo $company_options['home-services-third-service-content'] ?>
                </div>
            </div>
        </div>
        <div class="service-p col-md-3">
            <div class="service-box">
                <p><i class="<?php echo $company_options['home-services-fourth-service-icon']; ?>"></i></p>
                <strong><?php echo  $company_options['home-services-fourth-service-title'] ?></strong>
                <div class="excerpt">
                    <?php echo $company_options['home-services-fourth-service-content'] ?>
                </div>
            </div>
        </div>
    </div>
</div>