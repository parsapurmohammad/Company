<?php global $company_options; ?>
<div class="row">
    <div class="header-slider owl-carousel owl-theme ">
        <?php foreach ($company_options['header-slider'] as $item):?>
            <div class="item">
                <a href="<?php $item['url']; ?>" target="_blank">
                    <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['description']; ?>" title="<?php echo $item['title'];?>"/>
                </a>
            </div>
        <?php endforeach;?>
    </div>
</div>