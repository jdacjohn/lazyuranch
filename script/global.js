/////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Global Javascript functions used by www.lazyuranch.com
// Author:			John Arnold, www.jdacsolutions.com
// Created: 		12/19/2012
// Created For:	www.lazyuranch.com
// Description:	This file contains the following scripts which are used extensively throughout the site:
//
//			$('#slideshow_gallery').cycle() - Handles slideshow transitions on pages with slideshows.
//
////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Slideshow function call for http://cloud.github.com/downloads/malsup/cycle/jquery.cycle.all.latest.js 
$(function() {
	$('#slideshow_gallery').cycle({
		fx: 'fade',
		timeout: 1000, // milliseconds between slide transitions (0 to disable auto advance) 
		speed:         5000,  // speed of the transition (any valid fx speed value) 
		speedIn:       null,  // speed of the 'in' transition 
		speedOut:      null,  // speed of the 'out' transition
		easeIn:        null,  // easing for "in" transition 
		easeOut:       null,  // easing for "out" transition 
		easing:        null,  // easing method for both in and out transitions
		before: function() {
			$('#caption').html(this.alt);
		}
	});
});

$(document).ready(function(){
	
	// ShowHide function for Expanding/Collapsing DIVS
	$('.show_hide').showHide({
		speed: 500, // speed you want the toggle to happen
		easing: '', // the animation effect you want. Remove this line if you dont want an effect and if you haven't included jQuery UI
		changeText: 1, // if you dont want the button text to change, set this to 0
		//showImage: '../images/PlusSign.png',// the button text to show when a div is closed
		//hideImage: '../images/MinusSign.png', // the button text to show when a div is open
		showText: '...More',
		hideText: '...Close'
	}); // End .showHide()

	
});