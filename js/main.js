// create functions here
function sideBar() {
	var logoHeight = $('h1').height();
	var leftPushTop = ($(window).height() - $('#showLeftPush').height()) / 2;
	$('#showLeftPush').css('top', leftPushTop);
	var sideNavTop = (($(window).height() - $('#sideNav').height()) / 2) - logoHeight;
	$('#sideNav').css('margin-top', sideNavTop);
}

function homeLogo() {
	var winHeight = $(window).height();
	var contentHeight = 468 // $('#home img').height() + $('#home h4').height() + $('#home p').height(); * Not working on Safari
	var topMargin = (winHeight / 2) - (contentHeight / 2);
	$('#home img').css({'margin-top':topMargin});
}

function navSlide() {
	// nav clicking
	$('#sideNav li a').click(function () {
		var hash = $(this).attr('href').substring(1);
		if( /Android|webOS|iPhone|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
			var top = 0; // Mobile version has no top-margin`
		} else {
			var top = 380; // Account for 400px top-margin
			if (hash === 'home' || hash === 'about') { var top = 0; }
		}
		var scrollPos = $('#' + hash).offset().top + top;

		$('html,body').animate({ 'scrollTop': scrollPos + 'px' }, 400, 'easeInOutQuint', function () {
			window.location.hash = hash;
			$('body').removeClass('cbp-spmenu-push-toright');
			$('#cbp-spmenu-s1').removeClass('cbp-spmenu-open'); // close the left nav
		});

		return false;
	});
}

function toTop() {
	// back to top
	$('#toTop').click(function () {
		$('html,body').animate({ 'scrollTop': 0 }, 'easeInOutQuint');
		return false;
	});
}

function videoSizer() { // adjust the height
	var cxgVideo = videojs("cxg-video", { "controls": false, "autoplay": true, "preload": "auto" });
	var windowRatio = $(window).width() / $(window).height();
	var videoRatio = 16 /9;
	if (windowRatio > videoRatio) {
		cxgVideo.width($(window).width());
		var videoHeight = $(window).width() / videoRatio;
		cxgVideo.height(videoHeight);
		var topAdjust = (videoHeight - $(window).height()) / 2;
		$('#cxg-video').css('top', '-' + topAdjust + 'px');
		$('section#home').css('background-position', '0 -' + topAdjust + 'px');
	} else { // adjust width
		cxgVideo.height($(window).height());
		var videoWidth = $(window).height() * videoRatio;
		cxgVideo.width(videoWidth);
		var leftAdjust = (videoWidth - $(window).width()) / 2;
		$('#cxg-video').css('left', '-' + leftAdjust + 'px');
		$('section#home').css('background-position', '-' + leftAdjust + 'px 0');
	}
	$('#cxg-video').fadeIn(400, function() {
		$('#page-cover').fadeOut(200);
	});
	cxgVideo.on('ended', function() {
		$('#cxg-video').fadeOut(2000, 'easeOutQuint');
		$('html,body').animate({'scrollTop':0},0);
	});
}

function bioSwitch() {
	$('#bio-arrows-wrap li span').hide(0);
	$('#bio-arrows-wrap li.active span').show(0);

	// Hover Switch Affect
	$('#bio-photo-wrap li').mouseenter(function() {
		$(this).children('span').fadeIn(400, 'easeInOutQuint');
	}).mouseleave(function() {
		$(this).children('span').fadeOut(400, 'easeInOutQuint');
	});

	// Click Switch Affect
	$('#bio-photo-wrap li').click(function() {
		var bioId = $(this).attr('id');
		$('#bio-photo-wrap li').removeClass('active');
		$(this).addClass('active');
		var detailId = '#bio-'+ bioId.substring(6);

		$('#bio-detail-wrap > .active').fadeOut(400, 'easeInOutQuint').removeClass('active');
		$(detailId).fadeIn(400, 'easeInQuint').addClass('active');
	});

}

function mobileBioSwitch() {
	$('#bio-arrows-wrap li span').hide(0);
	$('#bio-arrows-wrap li.active span').show(0);
	$('#bio-photo-wrap li.active span').show(0);

	// Click Switch Affect
	$('#bio-photo-wrap li').click(function() {
		var bioId = $(this).attr('id');
		var arrowId = '#arrow-' + bioId.substring(6);
		var detailId = '#bio-'+ bioId.substring(6);

		$('#bio-photo-wrap li.active').removeClass('active').children('span').fadeOut(400, 'easeInOutQuint');
		$(this).addClass('active').children('span').fadeIn(400, 'easeInOutQuint');

		$('#bio-detail-wrap > .active').fadeOut(400, 'easeInOutQuint').removeClass('active');
		$(detailId).fadeIn(400, 'easeInQuint').addClass('active');

		$('#bio-arrows-wrap > li.active span').fadeOut(400, 'easeInOutQuint', function() {
			$(this).parent('li').removeClass('active');
		});
		$(arrowId + ' span').fadeIn(400, 'easeInQuint', function() {
			$(this).parent('li').addClass('active');
		});
	});

}
function callUsList() {
	$(window).on('scroll.callUsList', function () {
		var windowHeight = $(window).height();
		var windowTop = $(window).scrollTop();
		var slideInDelay = 0;

		if (!$('#call-us-when').length) return;

		if(windowTop >= $('#call-us-when').offset().top) { // if the user scrolls to "Call Us When"
			if(!$('#magnify-list').hasClass('active')) { // if the slide out animation hasn't played yet,
				$('#magnify-list li').each(function () {
					$(this).css('padding-left', '40px').delay(slideInDelay).animate({ 'padding-left': '100px', 'opacity': 1, 'background-position-x': '60px' }, 100);
					slideInDelay += 100;
				});
				$('#magnify-list').addClass('active'); // mark the list so that it doesn't play again
			}
		}
	});
}


function clientMap() {
	$('#client-display').on('mouseenter', 'map#client-map area', function() {
		var clientId = $(this).attr('id').substring(5);
		var activeLogo = '#' + clientId + '-active';
		$(activeLogo).stop().fadeIn(400);
	}).on('mouseleave', 'map#client-map area', function() {
		var clientId = $(this).attr('id').substring(5);
		var activeLogo = '#' + clientId + '-active';
		$(activeLogo).stop().fadeOut(400);
	});
}

/*
function approachBanner() {
	$(window).on('scroll.approachBanner', function () {
		var screenheight = parseInt($(document).height());
		var scrolledpx = parseInt($(this).scrollTop());
		var sum = screenheight+scrolledpx;
		console.log($(this).scrollTop());
		console.log("screen: " + screenheight);
		console.log("sum=" + sum);
		$('.approach-key-words').animate({'background-position-x':'+='+sum+'px'}, 5, 'easeOutQuint');
	});
}
*/

function clientsDisplay() {
	var clients = {
		size : null,
		windowHeight : null,

		devices: {
			init: function() {
				windowHeight = $(window).width();
				if (windowHeight < 480) {
					size = 'iphone-portrait';
				} else if (windowHeight < 768 && windowHeight > 479) {
					size = 'iphone-landscape';
				} else if (windowHeight < 960 && windowHeight > 767) {
					size = 'ipad-portrait';
				} else {
					size = 'desktop';
				}
			}
		},

		loadClients: {
			init: function() {

				$('.client-wrap').remove();
				$.ajax({
					url: 'includes/clients-' + size + '.php',
					success: function(data) {
						$('#client-display').html(data);
					}
				});
			}
		}
	}
	clients.devices.init();
	clients.loadClients.init();
}

$(document).ready(function() {
	// call functions here to execute

	if( /iPad|Android|webOS|iPhone|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {

		mobileBioSwitch();

	} else {
		videoSizer();
		sideBar();
		navSlide();
		toTop();
		bioSwitch();
		callUsList();
		clientMap();
		// approachBanner();
		homeLogo();

		// Run Functions on Window Resize
		$(window).resize(function() {
			homeLogo();
			sideBar();
			clientsDisplay();
		});

		// PARALLAX STELLAR.JS
		// Left to Right diagonal parallax
		$.stellar.positionProperty.diagonalRight = {
			setTop: function($el, newTop, originalTop) {
		    	$el.css({
		        	'top': newTop,
		        	'right': $el.hasClass('diagonalRight') ? originalTop - newTop : 0
		    	});
		    },
		    setRight: function($el, newRight, originalRight) {
		    	$el.css('right', newRight);
		    }
		};

		$(window).stellar({
			horizontalScrolling: false,
			hideElement: function($elem) { $elem.fadeOut(500); },
			showElement: function($elem) { $elem.fadeIn(500); },
			positionProperty: 'diagonalRight'
		});

	}
	sideBar();
	clientsDisplay();
	navSlide();

});
