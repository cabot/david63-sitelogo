;(function($, document) {
	'use strict';

	$(document).ready(function () {
		var headBgColour	= '';
		var h1Colour		= '';
		var pColour			= '';
		var bgImage			= '';

		// Replicate the style colours and background image in the new site logo css
    	headBgColour	= $('.headerbar').css('background-color');
		h1Colour		= $('h1').css('color');
		pColour			= $('p').css('color');
		bgImage			= $('.headerbar').css('background-image');

		$('.sl-headerbar').css('background-color', headBgColour);
		$('#sl-new-desc h1').css('color', h1Colour);
		$('#sl-new-desc p').css('color', pColour);
		$('.sl-headerbar').css('background-image', bgImage);

		$('a .site_logo').css({'background-image': siteLogo, 'background-repeat': 'no-repeat', 'background-position': '0% 0%', 'background-size': '100%', 'height': logoHeight, 'width': logoWidth, '-webkit-border-radius': logoCorners, '-moz-border-radius': logoCorners, 'border-radius': logoCorners});

		// Remove site logo
		if (siteLogoRemove == true) {
			$('span').removeClass('site_logo');
		}

		// Remove the site name and description
		if (siteNameSupress == true) {
			$('h1').removeClass('site-description');
			$('p').removeClass('site-description');

    	}

		// Place the site logo (and text) in the centre
		if (siteLogoCentre == true) {
			$('#site-description').css({'padding-top': '10px', 'text-align': 'center', 'width': '100%'});
			$('#site-description .logo').css('float', 'none');
			$('.search-header').css('margin-top', '-40px');
			$('#sl-new-desc h1').css({'text-align': 'center', 'width': '100%'});
			$('#sl-new-desc p').css({'text-align': 'center', 'width': '100%'});
    	}

		// Place the site logo on the right
		if (siteLogoRight == true) {
			$('#site-description').css({'text-align': 'left', 'width': '100%', 'margin-left': '10px'});
			$('#site-description .logo').css({'float': 'right', 'margin-right': '10px'});
			$('#sl-new-desc h1').css({'clear': 'both', 'float': 'right', 'margin-right': '10px'});
			$('#sl-new-desc p').css({'clear': 'both', 'float': 'right', 'margin-right': '10px'});

			if (searchBelow != true) {
				$('.search-header').css({'float': 'left', 'margin-top': '-10px', 'margin-left': '10px'});
			}
    	}

		// Move the search box to the top nav bar
		if (searchBelow == true) {
			$('.search-header').css({'float': 'right', 'margin-top': '5px', 'box-shadow': 'none'});
    	}

		// Use the override text colour to replace the default in the header
		if (useOverrideColour == true) {
			$('#site-description h1').css('color', '#' + overrideColour);
			$('#site-description p').css('color', '#' + overrideColour);
			$('#sl-new-desc h1').css('color', '#' + overrideColour);
			$('#sl-new-desc p').css('color', '#' + overrideColour);
    	}

		// Use the Site Logo banner
		if (useBanner == true) {
			$('.headerbar').css({'background-image': 'url("' + siteLogoBanner + '")', 'height': bannerHeight + 'px', 'border-radius': borderRadius + 'px', 'display': 'block', 'margin': '0 auto', 'max-width': '100%'});
    	}
	})

})(jQuery, document);
