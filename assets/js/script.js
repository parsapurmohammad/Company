jQuery(function ($) {

    $('.res-menu-toggle').click(function () {
        $('.res-menu').fadeIn();
    });

    $('.header-slider').owlCarousel({
        loop: true,
        items:1,
        nav: false,
        rtl:true,
        dots: false
    });
    $('.portfolio-car').owlCarousel({
        loop: true,
        nav: true,
        rtl:true,
        dots: false,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:3,
                nav:false
            },
            1000:{
                items:4
            }
        }
    });
    $('.owl-cont').owlCarousel({
        loop: true,
        items:4,
        nav: true,
        rtl:true,
        dots: false
    });
    $('.owl-view').owlCarousel({
        loop: true,
        items:1,
        nav: true,
        rtl:true,
        dots: false
    });
    $('.main-menu ul li.menu-item-has-children').hover(function () {
        $(this).addClass('active');
        $(this).find('ul.sub-menu').stop(false,false).slideDown(300);
    },function () {
        $(this).find('ul.sub-menu').stop(false,false).slideUp(300);
        $(this).removeClass('active');
    });

    $('.search-popup-btn').click(function () {
        $('.search-popup').fadeIn().css("display","flex");
    });
    $('a[class^=bg]').each(function () {
        var x= $(this).attr('class');
        var background_value = x.replace('bg','');
        $(this).removeClass(x);
        $(this).addClass('bg');
        // var style = $(this);
        // style.sheet.insertRule('.bg {background:'+background_value+"}");
        var sheet = new CSSStyleSheet();
        sheet.replaceSync('.bg {background:'+background_value+" !important"+"}");
// Apply the stylesheet to a document:
        document.adoptedStyleSheets = [sheet];
    });
    $(document).mouseup(function (e)
    {
        var container = $(".frm-search");

        if (!container.is(e.target) && container.has(e.target).length === 0) // ... nor a descendant of the container
        {
            $('.search-popup').fadeOut();
        }
    });
}).jQuery();