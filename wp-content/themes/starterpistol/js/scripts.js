$(document).ready(function ($) {
	var j = jQuery.noConflict();
  
  //Contact Form 7 Hack
	j(".wpcf7-form").find("p").contents().unwrap();
  

});

