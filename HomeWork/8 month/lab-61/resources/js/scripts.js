/**
 * Created by M1rotvorez on 2/18/17.
 */

$('#add_my--company').magnificPopup({
	items: {
		src: '#company--modal',
		type: 'inline'
	},
	removalDelay: 300,
	fixedContentPos: true,
	mainClass: 'mfp-fade',
	callbacks: {
		beforeOpen: function () {
			jQuery('body').css('overflow', 'hidden');
		},
		beforeClose: function () {
			jQuery('body').css('overflow', 'initial');
		}
	}
});

$('#new--order').magnificPopup({
	items: {
		src: '#order--modal',
		type: 'inline'
	},
	removalDelay: 300,
	fixedContentPos: true,
	mainClass: 'mfp-fade',
	callbacks: {
		beforeOpen: function () {
			jQuery('body').css('overflow', 'hidden');
		},
		beforeClose: function () {
			jQuery('body').css('overflow', 'initial');
		}
	}
});

$('#login--button-menu-item').magnificPopup({
	items: {
		src: '#login--modal',
		type: 'inline'
	},
	removalDelay: 300,
	fixedContentPos: true,
	mainClass: 'mfp-fade',
	focus: "#username",
	callbacks: {
		beforeOpen: function () {
			jQuery('body').css('overflow', 'hidden');
            jQuery('main').css('display', 'none');
		},
		beforeClose: function () {
			jQuery('body').css('overflow', 'initial');
            jQuery('main').css('display', 'block');
		}
	}
});

$('.receipt--button').magnificPopup({
	items: {
		src: '#receipt--modal',
		type: 'inline'
	},
	removalDelay: 300,
	fixedContentPos: true,
	mainClass: 'mfp-fade',
	callbacks: {
		beforeOpen: function () {
			jQuery('body').css('overflow', 'hidden');
		},
		beforeClose: function () {
			jQuery('body').css('overflow', 'initial');
		}
	}
});

$('.edit--person').magnificPopup({
	items: {
		src: '#edit-person--modal',
		type: 'inline'
	},
	removalDelay: 300,
	fixedContentPos: true,
	mainClass: 'mfp-fade',
	callbacks: {
		beforeOpen: function () {
			jQuery('body').css('overflow', 'hidden');
		},
		beforeClose: function () {
			jQuery('body').css('overflow', 'initial');
		}
	}
});

$('.mobile--recall').magnificPopup({
	items: {
		src: '#mobile--recall',
		type: 'inline'
	},
	removalDelay: 300,
	fixedContentPos: true,
	mainClass: 'mfp-fade',
	callbacks: {
		beforeOpen: function () {
			jQuery('body').css('overflow', 'hidden');
		},
		beforeClose: function () {
			jQuery('body').css('overflow', 'initial');
		}
	}
});

$('#login--button').on('click', function (e) {

	if ($(window).width() > 1024) {
		$.magnificPopup.instance.open({
			items: {
				src: '#login--modal',
				type: 'inline'
			},
			removalDelay: 300,
			fixedContentPos: true,
			mainClass: 'mfp-fade',
            focus: '#username',
			callbacks: {
				beforeOpen: function () {
					jQuery('body').css('overflow', 'hidden');
				},
				beforeClose: function () {
					jQuery('body').css('overflow', 'initial');
				}
			}
		});
	} else {
		e.preventDefault();
		e.stopPropagation();
		$('#menu--profile-btn, #login--button').toggleClass('open');
		$('.menu-profile--list').slideToggle();
	}
});

$('.bay_item').on('click', function () {
	var cart = $('.login ');
	var imgtodrag = $(this).parent('.card--item-action').siblings('.card--item-info').find("img").eq(0);
	if (imgtodrag) {
		var imgclone = imgtodrag.clone()
			.offset({
				top: imgtodrag.offset().top,
				left: imgtodrag.offset().left
			})
			.css({
				'opacity': '0.5',
				'position': 'absolute',
				'z-index': '100'
			})
			.appendTo($('body'))
			.animate({
				'top': cart.offset().top + 10,
				'left': cart.offset().left + 35,
				'width': 75,
				'height': 60
			}, 300, 'linear');
		imgclone.animate({
			'width': 0,
			'height': 0
		}, function () {
			$(this).detach()
		});
	}
});

$('.pointer--description').click(function () {
	$(this).parent('.card--item-info').parent('.card--item').toggleClass('show');
});

$('.pointer--title').click(function (e) {
	$(this).parent('.card--item-info').parent('.card--item').toggleClass('shows');
});

$(document).keydown(function (e) {
	if (e.keyCode == 27) {
		$('.modal--wrap, .modal--shadow').fadeOut();
	}
});

$(function () {
	$('#active-companies--tabs').tabs();
	$("#tabs").tabs();
	$('#login-tabs').tabs(
        {
            activate: function(event, ui){
                var selectedTabIndex = $(this).tabs('option', 'active');
                if (selectedTabIndex) {
                	$("#sda_user_registration_form_email").focus();
				} else {
                    $("#username").focus();
				}
            }
        }
	);
});

$('#payments-tabs').easyResponsiveTabs({
	type: 'default',
	width: 'auto',
	fit: true,
	closed: 'accordion',
	activate: function () {
	}
});

var historyItem = $('.history--information-item'),
	companyHistoryItem = $('.company-history--information-item'),
	hideHistoryItem = 'hide--information',
	checkout = '.checkout-wrap';

historyItem.click(function (e) {

	if($(e.target).hasClass('btn') || $(e.target).attr('role') === 'dialog') return;

    if ($(this).hasClass(hideHistoryItem)) {
        $(this).removeClass(hideHistoryItem);
		$(this).find(checkout).slideDown({
			start: function () {
				$(this).css({
					display: "flex"
				})
			}
		});


    } else {
        $(this).addClass(hideHistoryItem);
        $(this).find(checkout).slideUp();
    }
});

$(document).ready(function () {
	$('.history-companies--switchers ul').on('click', 'span', function (e) {
		var tab = $(this).parent(),
			tabIndex = tab.index(),
			tabPanel = $(this).closest('.history-companies--switchers'),
			tabPane = tabPanel.find('.tab-pane').eq(tabIndex);

		tabPanel.find('.ui-state-active').removeClass('ui-state-active');
		tab.addClass('ui-state-active');
		tabPane.addClass('ui-state-active');
	});
});

companyHistoryItem.click(function () {
	$(this).find('.checkout-wrap').slideToggle(
		{
			start: function () {
				$(this).css({
					display: "flex"
				})
			}
		}
	);
	$(this).toggleClass('hide--information');

});

var categoryElement = $('.categories li');
$('.search-select').select2({
	minimumResultsForSearch: Infinity
});

$(' #new-company--order').select2();

$('.history--select-person').select2({
	minimumResultsForSearch: Infinity
});
$('.member--role').select2({
	minimumResultsForSearch: Infinity
});

$('.history--select').select2();

$('.workers--item-status').select2({
	theme: "status",
	minimumResultsForSearch: Infinity
});

$('.select2-container--status').addClass('select2-container--default');

$('#mobile--title').click(function () {
	$('.sidebar-categories').slideToggle();
	$(this).toggleClass('open')
});

$('#category--card').click(function () {
	categoryElement.fadeIn('slow');
	$(this).hide()
});

$('#menu--profile-btn').click(function (e) {
	e.preventDefault();
	e.stopPropagation();
	$(this).toggleClass('open');
	$('.menu-profile--list').slideToggle();
});

$(window).bind('resize orientationchange', function () {
	catResize();
	hideMenuProfileList();
	adjustMenu();
	$('body').removeClass('overflow');

});

$(document).ready(function () {
	$(".mobile-menu").click(function (e) {
		e.preventDefault();
		$('body').toggleClass('overflow');
		$(this).toggleClass("active");
		$('.nav').toggle();
		$('.nav li').removeClass('hover');
		$('.nav').removeClass('overflow--menu');
	});
	$(".nav li a").each(function () {
		if ($(this).next().length > 0) {
			$(this).addClass("parent");
		}
	});
	adjustMenu();
});

function adjustMenu() {
	var menuButton = $('.mobile-menu');
	var ww = document.body.clientWidth;
	var navItem = $(".nav li");
	var nav = $('.nav');
	if (ww < 1025) {
		nav.addClass('mobile--menu-nav');
		menuButton.show();
		if (!menuButton.hasClass("active")) {
			$('.mobile--menu-nav').css('display', 'none');
		} else {
			$('.mobile--menu-nav').css('display', 'block');
		}
		navItem.unbind('mouseenter mouseleave');
		$(".mobile--menu-nav li a.parent").unbind("click").bind("click", function (e) {
			e.preventDefault();
			$(this).parent("li").toggleClass('hover').parent('.mobile--menu-nav').toggleClass('overflow--menu');
		});
		$('main, #menu--profile-btn, #login--button').click(function () {
			$('body').removeClass('overflow');
			$('.mobile-menu').removeClass('active');
			$('.mobile--menu-nav').css('display', 'none').removeClass('overflow--menu');
			$('.mobile--menu-nav li').removeClass('hover');
		});
	} else {
		menuButton.hide();
		nav.removeClass('mobile--menu-nav');
		nav.css('display', 'flex');
		navItem.removeClass("hover");
		$(".nav li a").unbind("click");
		navItem.hover(function () {
			$(this).addClass('hover');
		}, function () {
			$(this).removeClass('hover');
		});
	}
}

$('.workers--item-name, .workers--item-more').click(function () {
	$(this).closest('.workers--item').find('.food-list--item-info--wrap').slideToggle();
	$(this).closest('.workers--item').find('.workers--item-wrap').toggleClass('open');
	$(this).closest('.workers--item').find('.workers--item-more img').toggle();
});

$('#another-phones--btn').click(function (event) {
	event.stopPropagation();
	event.preventDefault();
	$('#another-phones').slideToggle();
	$('#recall').slideUp('fast');
});

$('#recall--btn').click(function (event) {
	event.stopPropagation();
	event.preventDefault();
	$('#recall').slideToggle();
	$('#another-phones').slideUp('fast');
});

$('#what_is_it').click(function (event) {
	event.stopPropagation();
	event.preventDefault();
	$('#what_is_it--item').slideToggle();
});

$('#info--shop').click(function () {
	$('.content-what').slideToggle();
});

$('#another-phones, #recall, #what_is_it, #info--shop').click(function (e) {
	e.stopPropagation();
	e.preventDefault();
});

$('#age-attention').click(function (event) {
	event.stopPropagation();
	event.preventDefault();
	$(this).toggleClass('show');
});

$(window).click(function () {
	$('#another-phones, #recall, #what_is_it--item, .content-what, .menu-profile--list').slideUp();
	$('#age-attention').removeClass('show');
	$('#menu--profile-btn, #login--button').removeClass('open');
});

$('#company_logo').change(function () {
	var fileName = $(this).val();
	var photo_label = $(".filename");
	fileName = fileName.replace('C:\\fakepath\\', '');
	if (!fileName) {
		fileName = photo_label.data('message');
	}
	photo_label.html(fileName);
});

$('#best-food-slider').slick({
	slidesToShow: 1,
	centerMode: true,
	variableWidth: true,
	slidesToScroll: 1,
	lazyLoad: 'progressive',
	waitForAnimate: false,
	swipeToSlide: true,
	infinite: true,
	speed: 300,
	dots: true,
	responsive: [
		{
			breakpoint: 1280,
			settings: {
				slidesToShow: 3,
				variableWidth: false
			}
		},
		{
			breakpoint: 1024,
			settings: {
				slidesToShow: 2,
				variableWidth: false
			}
		},
		{
			breakpoint: 829,
			settings: {
				slidesToShow: 1,
				variableWidth: true
			}
		}
	]
});

$('#best-cafe-slider').slick({
	slidesToShow: 1,
	centerMode: true,
	speed: 300,
	lazyLoad: 'progressive',
	waitForAnimate: false,
	swipeToSlide: true,
	variableWidth: true,
	dots: true,
	responsive: [
		{
			breakpoint: 1280,
			settings: {
				slidesToShow: 4
			}
		},
		{
			breakpoint: 1024,
			settings: {
				slidesToShow: 3
			}
		},
		{
			breakpoint: 829,
			settings: {
				slidesToShow: 1,
				variableWidth: true
			}
		}
	]
});

$('#food-page-slider').slick({
	waitForAnimate: false,
	swipeToSlide: true,
	centerMode: true,
	centerPadding: '80px',
	slidesToShow: 1,
	infinite: true,
	dots: true,
	variableWidth: true,
	autoplay: true,
	autoplaySpeed: 6000,
	mobileFirst:true,
	prevArrow: '<div class="slick-prev"></div>',
	nextArrow: '<div class="slick-next"></div>',
	responsive: [
		{
			breakpoint: 600,
			settings: {}
		}
	]
});

$('#food--comments-slider').slick({
	slidesToShow: 2,
	vertical: true,
	verticalSwiping: true,
	lazyLoad: 'progressive',
	waitForAnimate: false,
	swipeToSlide: true,
	arrow: true,
	adaptiveHeight: true,
	responsive: [
		{
			breakpoint: 829,
			settings: {
				arrows: false,
				dots: true,
				slidesToShow: 1,
				vertical: false,
				verticalSwiping: false
			}
		}
	]
});

$('#filter-slider').slick({
	slidesToScroll: 2,
	variableWidth: true,
	infinite: false,
	waitForAnimate: false,
	swipeToSlide: true,
	responsive: [
		{
			breakpoint: 1279,
			settings: {
				slidesToShow: 4
			}

		},
		{
			breakpoint: 829,
			settings: {
				slidesToShow: 2
			}
		},
		{
			breakpoint: 400,
			settings: {
				slidesToScroll: 1,
				slidesToShow: 1,
				centerMode: true,
				infinite: true
			}
		}
	]
});

$('#menu--filter-slider').slick({
	waitForAnimate: false,
	swipeToSlide: true,
	variableWidth: true,
	infinite: true,
	slidesToShow: 10,
	responsive: [
		{
			breakpoint: 1279,
			settings: {
				slidesToShow: 4
			}

		},
		{
			breakpoint: 829,
			settings: {
				slidesToShow: 2
			}
		},
		{
			breakpoint: 400,
			settings: {
				slidesToScroll: 1,
				slidesToShow: 1,
				centerMode: true,
				infinite: true
			}
		}
	]
});

$('.count, .check-list--item-count').each(function () {
	var spinner = $(this),
		input = spinner.find('input[type="number"]'),
		btnUp = spinner.find('.count-up'),
		btnDown = spinner.find('.count-down'),
		min = input.attr('min'),
		max = input.attr('max');

	btnUp.click(function () {
		var oldValue = parseFloat(input.val());
		if (oldValue >= max) {
			var newVal = oldValue;
		} else {
			var newVal = oldValue + 1;
		}
		spinner.find("input").val(newVal);
		spinner.find("input").trigger("change");
	});

	btnDown.click(function () {
		var oldValue = parseFloat(input.val());
		if (oldValue <= min) {
			var newVal = oldValue;
		} else {
			var newVal = oldValue - 1;
		}
		spinner.find("input").val(newVal);
		spinner.find("input").trigger("change");
	});
});

$('#new-comment--form').on('change', function () {
	$('.choose-animation').fadeOut();
});

var catItem = $('.cat-item--prev');

$('.food-item--description i').click(function () {
	var hidenElement = $('.food-item--description i.hide');
	if (hidenElement.length) {
		toggleDesc(hidenElement);
	}
	toggleDesc($(this));
});

function toggleDesc(element) {
	if (element.hasClass('hide')) {
		element.closest('.food-item--information_wrap').css('transform', 'translateY(0px)');
		element.removeClass('hide');
	} else {
		var description = element.closest('.food-item--description'),
			height = description[0].getBoundingClientRect().height;
		element.closest('.food-item--information_wrap').css('transform', 'translateY(-' + height + 'px)');
		element.addClass('hide');
	}
}

function catResize() {
	var catItemWidth = catItem.width();
	catItem.css({'height': catItemWidth + 'px'});
	catItem.css({'height': 'auto'});
}

function hideMenuProfileList() {
	if ($('#login--button') != undefined && $(window).width() > 1024) {
		$('.menu-profile--list').slideUp();
	}
}
var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('.menu').outerHeight();

$(window).scroll(function(event){
	didScroll = true;
});

setInterval(function() {
	if (didScroll) {
		hasScrolled();
		didScroll = false;
	}
}, 250);

function hasScrolled() {
	var st = $(this).scrollTop();
	if(Math.abs(lastScrollTop - st) <= delta)
		return;
	if (st > lastScrollTop && st > navbarHeight){
		$('.menu').removeClass('nav-down').addClass('nav-up');
		$('.menu--filter, .filter').removeClass('filter--move');
		$('.sidebar-stick').removeClass('sidebar-move');
	} else {
		if(st + $(window).height() < $(document).height()) {
			$('.menu').removeClass('nav-up').addClass('nav-down');
			$('.menu--filter, .filter').addClass('filter--move');
			$('.sidebar-stick').addClass('sidebar-move');
		}
	}
	lastScrollTop = st;
}

setTimeout(function () {
	$('.slider, .slick-initialized').hide().css('visibility', 'visible').fadeIn('slow');
}, 200);