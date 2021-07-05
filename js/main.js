jQuery(document).ready(function($){
	var is_firefox = navigator.userAgent.indexOf('Firefox') > -1;

	//open team-member bio
	$('#cd-team').find('ul a').on('click', function(event){
		event.preventDefault();
		var selected_member = $(this).data('type');
		$('.cd-member-bio.'+selected_member+'').addClass('slide-in');
		$('.cd-member-bio-close').addClass('is-visible');

		// firefox transitions break when parent overflow is changed, so we need to wait for the end of the trasition to give the body an overflow hidden
		if( is_firefox ) {
			$('main').addClass('slide-out').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
				$('body').addClass('overflow-hidden');
			});
		} else {
			$('main').addClass('slide-out');
			$('body').addClass('overflow-hidden');
		}

	});

	//close team-member bio
	$(document).on('click', '.cd-overlay, .cd-member-bio-close', function(event){
		event.preventDefault();
		$('.cd-member-bio').removeClass('slide-in');
		$('.cd-member-bio-close').removeClass('is-visible');

		if( is_firefox ) {
			$('main').removeClass('slide-out').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
				$('body').removeClass('overflow-hidden');
			});
		} else {
			$('main').removeClass('slide-out');
			$('body').removeClass('overflow-hidden');
		}
	});
});

//site toggle system start
//web start
$(document).ready(function(){
				$("#web_flip,.web_flip1").click(function(){
					$("#web_panel").slideToggle("slow");
				  });
				});
//web end


//graph start
$(document).ready(function(){
				$("#graph_flip,.graph_flip1").click(function(){
					$("#graph_panel").slideToggle("slow");
				  });
				});
//graph end

//app start
$(document).ready(function(){
				$("#app_flip,.app_flip1").click(function(){
					$("#app_panel").slideToggle("slow");
				  });
				});
//app end

//app start
$(document).ready(function(){
				$("#video_flip,.video_flip1").click(function(){
					$("#video_panel").slideToggle("slow");
				  });
				});
//app end

//site toggle system start

