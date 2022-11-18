$(function () {
    
    //앵커 태그 새로고침 차단
    $('a[href="#"]').click(function(e){
       e.preventDefault(); 
    });

    //    pc nav menu
    var $menu = $('#menu');
    var $menu_list = $menu.children('li');

    $menu_list.bind('mouseenter', function () {
        var $this = $(this);
        $this.addClass('slide on');
        $this.children('div').css('z-index', '9999').stop().slideDown(300, function () {
            $menu_list.not('.slide').children('div').hide();
            $this.removeClass('slide');
        });
    }).bind('mouseleave', function () {
        var $this = $(this);
        $this.removeClass('on').children('div').css('z-index', '1');
    });

    $menu.bind('mouseenter', function () {
        var $this = $(this);

    }).bind('mouseleave', function () {
        var $this = $(this);

        $menu_list.children('div').hide();
    });


    //mobile nav side-nav
    $("#nav_open").click(function () {
        $("#nav_mobile").removeClass("close");
        $("#nav_mobile").addClass("open");
        $('body').css('overflow', 'hidden');

        if ($("#nav_mobile").hasClass("open")) {
            $("#nav_mobile").animate({
                "right": "0"
            }, 300);
            $("#nav_layer").stop().fadeIn();
        }
    });

    $("#nav_close, #nav_layer").click(function () {
        $("#nav_mobile").removeClass("open");
        $("#nav_mobile").addClass("close");
        $('body').css('overflow', 'auto');

        if ($("#nav_mobile").hasClass("close")) {
            $("#nav_mobile").animate({
                "right": "-80%"
            }, 300);
            $("#nav_layer").stop().fadeOut();
        }
        $(".submenu").stop().slideUp();
    });

    
    //mobile nav submenu

    $("#menu_mobile>li>.submenu_open").click(function (e) {
        e.preventDefault();
        $(".submenu").stop().slideUp(300);
        $(this).parent().find(".submenu").stop().slideToggle(300);

    });

    //selector
    $(function () {
        $('.selectpicker').selectpicker();
    });


    //slide-swiper
    new Swiper('.slide_swiper', {
        autoplay: {
            delay: 2000,
            disableOnInteraction: false
        },
        effect: 'fade',
        speed: 500,
        slidesPerView: 1,
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        }
    });

    //shortcut-swiper
    var window_width = $(window).width();
    if (window_width > 959) {
        new Swiper('.shortcut_swiper', {
            slidesPerView: 4,
            spaceBetween: -50,
            loop: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            }
        });
    } else if (window_width > 767) {
        new Swiper('.shortcut_swiper', {
            slidesPerView: 3,
            spaceBetween: -45,
            loop: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            }
        });
    } else {
        new Swiper('.shortcut_swiper', {
            slidesPerView: 2,
            spaceBetween: -35,
            loop: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            }
        });
    }






    //book-swiper
    new Swiper('.book_general_swiper', {
        slidesPerView: 1,
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next.book-button-next',
            prevEl: '.swiper-button-prev.book-button-prev',
        }
    });


    var swiper = new Swiper('.book_kid_swiper', {
        slidesPerView: 1,
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next.book-button-next',
            prevEl: '.swiper-button-prev.book-button-prev',
        },
        observer: true,
        observeParents: true
    });


    new Swiper('.book_recommend_swiper', {
        slidesPerView: 1,
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next.book-button-next',
            prevEl: '.swiper-button-prev.book-button-prev',
        }
    });



    //book tab
    $(".tab li").click(function (e) {
        e.preventDefault();
        var tab_id = $(this).attr("data-tab");

        $(".tab li").removeClass("current");
        $(".tab_content").removeClass("current");

        $(this).addClass("current");
        $("#" + tab_id).addClass("current");
    })





    //banner-swiper
    new Swiper('.banner_swiper', {
        autoplay: {
            delay: 2000,
            disableOnInteraction: false
        },
        slidesPerView: 4,
        spaceBetween: 25,
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        }
    });







});
