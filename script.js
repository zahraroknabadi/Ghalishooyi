/*$(document).ready(function(){
    $("input").focus(function(){
        $(this).css("background-color", "#e8fbfb");
    });
    $("input").blur(function(){
        $(this).css("background-color", "#ffffff");
    });
	$("textarea").focus(function(){
        $(this).css("background-color", "#e8fbfb");
    });
    $("textarea").blur(function(){
        $(this).css("background-color", "#ffffff");
    });
	

	
	"use strict";
	$('#animation').on(click , function(e){
		e.preventDefault();
		
	$('#animation').animate({
		'left':900px,
		'top':80px
	});	
		
});*/

$(document).ready(function () {
    //rotation speed and timer
    var speed = 5000;
    
    var run = setInterval(rotate, speed);
    var slides = $('.slide');
    var container = $('#slides ul');
    var elm = container.find(':first-child').prop("tagName");
    var item_width = container.width();
    var previous = 'prev'; //id of previous button
    var next = 'next'; //id of next button
    slides.width(item_width); //set the slides to the correct pixel width
    container.parent().width(item_width);
    container.width(slides.length * item_width); //set the slides container to the correct total width
    container.find(elm + ':first').before(container.find(elm + ':last'));
    resetSlides();
    
    
    //if user clicked on prev button
    
    $('#buttons a').click(function (e) {
        //slide the item
        
        if (container.is(':animated')) {
            return false;
        }
        if (e.target.id == previous) {
            container.stop().animate({
                'left': 0
            }, 1500, function () {
                container.find(elm + ':first').before(container.find(elm + ':last'));
                resetSlides();
            });
        }
        
        if (e.target.id == next) {
            container.stop().animate({
                'left': item_width * -2
            }, 1500, function () {
                container.find(elm + ':last').after(container.find(elm + ':first'));
                resetSlides();
            });
        }
        
        //cancel the link behavior            
        return false;
        
    });
    
    //if mouse hover, pause the auto rotation, otherwise rotate it    
    container.parent().mouseenter(function () {
        clearInterval(run);
    }).mouseleave(function () {
        run = setInterval(rotate, speed);
    });
    
    
    function resetSlides() {
        //and adjust the container so current is in the frame
        container.css({
            'left': -1 * item_width
        });
    }
    
});
//a simple function to click next link
//a timer will call this function, and the rotation will begin

function rotate() {
    $('#next').click();
}
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		/*$animate
		.find('.btn')
		.hide('slow');
		*/
		
		/*$animate
			.on('mouseenter mouseleave' , function(){
				$(this).find('.btn').fadeToggle('slow');
			});
	*/
		
			
			/*$animate.animate({'margin-left':'*=20',
			'height':'+=60',
			'opacity':0.5,
			'font-size':'200%'
			},1000,'easeOutBounce');
		});
	*/
		/*"use strict";
        var $gall = $('#gallery');
		$gall
		.find('a')
		.colorbox({
		'rel' : 'gallery',
		'maxWidth' : '80%',
		'transition' : 'fade',
		'speed' : 150,
		'opacity' : 0.5,
		'slidshow' : true,
		'slidshowSpeed' : 3000,
		'current' : 'arrangement {current} of {total}'*/

	
	
 });

