<?php global $company_options; ?>
<div class="container panel-p why-him">
    <div class="row">
        <div class="col-md-6">
            <div class="why-company">
                <strong><?php echo $company_options['home-about-title'] ?></strong>
                <?php echo  wpautop($company_options['home-about-content']); ?>
                <div class="read-more">
                    <a href="#" class="bg<?php echo $company_options['home-about-btn-text-background']; ?>"><?php echo $company_options['home-about-btn-text']; ?></a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="why-img">
                <img src="<?php echo $company_options['home-about-img']['url'];?>" alt="<?php echo $company_options['home-about-title'] ?>" class="img-fluid"/>
            </div>
        </div>
    </div>
</div>