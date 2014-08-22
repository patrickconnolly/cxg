function bioSwitch() {
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
	bioSwitch();
	clientsDisplay();
});