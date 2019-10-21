<?php global $company_options ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head();?>
    <style>
        .weblog-content{
        background: url("<?php echo $company_options['header-slider'][1]['image']; ?>") !important;
        }
    </style>
</head>
<body class="rtl">

<?php require_once "inc/template/header/popupsearch.php";?>

<!--div class="res-menu">
    <div class="res-menu-p">

    </div>
</div -->

<header class="site-header container-fluid panel-p mb-0">
    <div class="row top-bar">
        <div class="container">
            <div class="row">
                <div class="col-9">
                    <?php require_once "inc/template/header/logo.php"; ?>
                    <?php require_once "inc/template/header/menu.php"; ?>

                </div>

                <div class="top-left-panel col-3">
                    <ul>
                        <li>
                            <span class="search-popup-btn"><i class="icon-search"></i> </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php require_once "inc/template/header/slider.php";?>
</header>
