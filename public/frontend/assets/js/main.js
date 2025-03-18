(function ($) {
	"use strict";

/*=============================================
	=    		 Preloader			      =
=============================================*/
function preloader() {
	$('#preloader').delay(0).fadeOut();
};

$(window).on('load', function () {
	preloader();
	// wowAnimation();
});



/*=============================================
	=    		Mobile Menu			      =
=============================================*/
//SubMenu Dropdown Toggle
if ($('.menu-area li.menu-item-has-children ul').length) {
	$('.menu-area .navigation li.menu-item-has-children').append('<div class="dropdown-btn"><span class="fas fa-angle-down"></span></div>');

}

//Mobile Nav Hide Show
if ($('.mobile-menu').length) {

	var mobileMenuContent = $('.menu-area .main-menu').html();
	$('.mobile-menu .menu-box .menu-outer').append(mobileMenuContent);

	//Dropdown Button
	$('.mobile-menu li.menu-item-has-children .dropdown-btn').on('click', function () {
		$(this).toggleClass('open');
		$(this).prev('ul').slideToggle(300);
	});
	//Menu Toggle Btn
	$('.mobile-nav-toggler').on('click', function () {
		$('body').addClass('mobile-menu-visible');
	});

	//Menu Toggle Btn
	$('.menu-backdrop, .mobile-menu .close-btn').on('click', function () {
		$('body').removeClass('mobile-menu-visible');
	});
}



/*=============================================
	=     Menu sticky & Scroll to top      =
=============================================*/
$(window).on('scroll', function () {
	var scroll = $(window).scrollTop();
	if (scroll < 245) {
		$("#sticky-header").removeClass("sticky-menu");
        $('.scroll-to-target').removeClass('open');
		$("#header-fixed-height").removeClass("active-height");

	} else {
		$("#sticky-header").addClass("sticky-menu");
        $('.scroll-to-target').addClass('open');
		$("#header-fixed-height").addClass("active-height");
	}
});


/*=============================================
	=    		 Scroll Up  	         =
=============================================*/
if ($('.scroll-to-target').length) {
  $(".scroll-to-target").on('click', function () {
    var target = $(this).attr('data-target');
    // animate
    $('html, body').animate({
      scrollTop: $(target).offset().top
    }, 1000);

  });
}


/*=============================================
	=           Data Background             =
=============================================*/
$("[data-background]").each(function () {
	$(this).css("background-image", "url(" + $(this).attr("data-background") + ")")
})

/*===========================================
	=            OffCanvas Active     =
=============================================*/
$('.offcanvas-toggle a').on('click', function () {
	$('body').addClass('offCanvas-menu-visible');
	return false;
});

$('.offCanvas-overlay, .offCanvas-toggle').on('click', function () {
	$('body').removeClass('offCanvas-menu-visible');
});


/*=============================================
	=            Header Search            =
=============================================*/
$(".search-open-btn").on("click", function () {
    $(".search__popup").addClass("search-opened");
    $(".search-popup-overlay").addClass("search-popup-overlay-open");
});
$(".search-close-btn").on("click", function () {
    $(".search__popup").removeClass("search-opened");
    $(".search-popup-overlay").removeClass("search-popup-overlay-open");
});


/*=============================================
	=          Dark Light Toggler     =
=============================================*/
function tg_theme_toggler() {

    $('.modeSwitch').on("change", function () {
        toggleTheme();
    });

    // set toggle theme scheme
    function tg_set_scheme(tg_theme) {
        localStorage.setItem('tg_theme_scheme', tg_theme);
        document.documentElement.setAttribute("tg-theme", tg_theme);
    }

    // toggle theme scheme
    function toggleTheme() {
        if (localStorage.getItem('tg_theme_scheme') === 'dark') {
            tg_set_scheme('light');
        } else {
            tg_set_scheme('dark');
        }
    }

    // set the first theme scheme
    function tg_init_theme() {
        if (localStorage.getItem('tg_theme_scheme') === 'dark') {
            tg_set_scheme('dark');
            document.querySelector('.modeSwitch').checked = true;
        } else {
            tg_set_scheme('light');
            document.querySelector('.modeSwitch').checked = false;
        }
    }
    tg_init_theme();
}
if ($(".modeSwitch").length > 0) {
    tg_theme_toggler();
}


/*=============================================
	=    		Trending slider  	       =
=============================================*/
// const TrendingSlider = new Swiper(".ta-trending-slider", {
// slidesPerView: 1,
// loop: true,
// slideToClickedSlide: true,
// direction: "vertical",
// autoplay: {
//     delay: 4000,
// },
// speed: 800,
// });


/*=============================================
	=    		Magnific Popup		      =
=============================================*/
// $('.popup-image').magnificPopup({
// 	type: 'image',
// 	gallery: {
// 		enabled: true
// 	}
// });

// /* magnificPopup video view */
// $('.popup-video').magnificPopup({
// 	type: 'iframe'
// });


/*=============================================
	=    		 Wow Active  	         =
=============================================*/
// function wowAnimation() {
// 	var wow = new WOW({
// 		boxClass: 'wow',
// 		animateClass: 'animated',
// 		offset: 0,
// 		mobile: false,
// 		live: true
// 	});
// 	wow.init();
// }


})(jQuery);