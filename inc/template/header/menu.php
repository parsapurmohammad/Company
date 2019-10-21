<nav class="top-p main-menu">
    <button class="res-menu-toggle d-lg-none"><i class="icon-menu-3"></i> </button>
    <?php
    $arg = array(
        'menu' => 'main-menu',
        'menu_class' => '',
        'container' => '',
    );
    wp_nav_menu($arg);
    ?>
    <!--    <ul>-->
<!--        <li><a href="#">خانه</a></li>-->
<!--        <li class="menu-item-has-children">-->
<!--            <a href="#"> درباره ما</a>-->
<!--            <ul class="sub-menu">-->
<!--                <li><a href="#">زیر منوی اول</a></li>-->
<!--                <li><a href="#">زیر منوی اول</a></li>-->
<!--                <li><a href="#">زیر منوی اول</a></li>-->
<!--                <li><a href="#">زیر منوی اول</a></li>-->
<!--                <li><a href="#">زیر منوی اول</a></li>-->
<!--                <li><a href="#">زیر منوی اول</a></li>-->
<!--            </ul>-->
<!--        </li>-->
<!--        <li><a href="#">تماس با ما</a></li>-->
<!--        <li class="menu-item-has-children">-->
<!--            <a href="#"> وبلاگ</a>-->
<!--            <ul class="sub-menu">-->
<!--                <li><a href="#">زیر منوی اول</a></li>-->
<!--                <li><a href="#">زیر منوی اول</a></li>-->
<!--                <li><a href="#">زیر منوی اول</a></li>-->
<!--                <li><a href="#">زیر منوی اول</a></li>-->
<!--                <li><a href="#">زیر منوی اول</a></li>-->
<!--                <li><a href="#">زیر منوی اول</a></li>-->
<!--            </ul>-->
<!--        </li>-->
<!--        <li><a href="#">پروژه ها</a></li>-->
<!--    </ul>-->
</nav>